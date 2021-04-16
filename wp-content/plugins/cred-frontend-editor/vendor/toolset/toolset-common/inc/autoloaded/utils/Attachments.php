<?php

namespace OTGS\Toolset\Common\Utils;

/**
 * Attachment-related utilities.
 *
 * @since Types 3.3
 */
class Attachments {

	/** @var TypesGuidIdGateway */
	private $types_guid_id_gateway;

	/** @var string */
	private $base_upload_directory;

	/**
	 * Attachments constructor.
	 *
	 * @param TypesGuidIdGateway $types_guid_id_proxy
	 */
	public function __construct( TypesGuidIdGateway $types_guid_id_proxy ) {
		$this->types_guid_id_gateway = $types_guid_id_proxy;
	}

	/**
	 * Return an ID of an attachment by searching the database with the file URL.
	 * Using the Types Post GUID ID table, if that does not deliver data, it's fetching the image
	 * by using it's post name. Supporting post names with number: e.g. my-image-3
	 * Once the image is fetched it's applied to the Types table for having a faster fetch next call.
	 *
	 * @param string $url URL of the file.
	 *
	 * @return int|null Attachment ID if it exists.
	 * @since 2.2.9
	 * @since Types 3.3 extracted to a separate class.
	 * @since Types 3.3.6 Improved query to use post_name instead of GUID. The GUID will still be checked on the fetched
	 *        result.
	 */
	public function get_attachment_id_by_url( $url ) {
		// Split the $url into two parts with the upload directory as the separator.
		$parsed_url = explode( wp_parse_url( $this->get_base_upload_directory(), PHP_URL_PATH ), $url );

		// Get the host of the current site and the host of the $url, ignoring www.
		$this_host = str_ireplace( 'www.', '', wp_parse_url( home_url(), PHP_URL_HOST ) );
		$file_host = str_ireplace( 'www.', '', wp_parse_url( $url, PHP_URL_HOST ) );

		// Return nothing if there aren't any $url parts or if the current host and $url host do not match.
		$attachment_path = toolset_getarr( $parsed_url, 1 );
		if ( ! isset( $attachment_path ) || empty( $attachment_path ) || ( $this_host !== $file_host ) ) {
			return;
		}

		$upload_dir = wp_get_upload_dir();

		if ( ! is_array( $upload_dir ) || ! array_key_exists( 'basedir', $upload_dir ) ) {
			// The site has no upload dir at all.
			return;
		}

		$attachment_file = $upload_dir['basedir'] . $attachment_path;

		if ( ! file_exists( $attachment_file ) ) {
			// File does not exist on system. Abort fetching ID of non-existing file.
			return;
		}

		// Try to fetch id by using our toolset_post_guid_id table.
		$post_id = $this->types_guid_id_gateway->get_id_by_guid( $url, true );
		if ( $post_id || null === $post_id ) {
			return $post_id ? (int) $post_id : null;
		}

		global $wpdb;

		// Attachment vars
		$attachment_path_info = pathinfo( $attachment_file );
		// Post name: image
		$attachment_post_name = sanitize_title( $attachment_path_info['filename'] );
		// Post name with extension: my-image-jpg
		$attachment_post_name_with_ext = sanitize_title( $attachment_path_info['basename'] );

		$post_name_numeric_extension = 1;
		$attachment_id = false;

		/**
		 * When an image is queried by post name, the script will increase the numeric extension on every iteration.
		 * my-slug, my-slug-2, my-slug-3. Now if my-slug has no result at all, the $abort_if_no_result will be set
		 * to true. If than my-slug-2 also delivers no result at all, the loop will be aborted.
		 * Worst case: my-slug, my-slug-2, my-slug-3 are DELETED and the requested image has my-slug-4. In that case
		 * the id will not being catched. Will never happen.
		 *
		 * @var int
		 */
		$fetches_without_result_count = 0;
		$maximum_fetches_without_result = 3;

		do {
			$numeric_extension = $post_name_numeric_extension > 1 ? '-' . $post_name_numeric_extension : '';

			$query = $wpdb->prepare(
				"SELECT ID, guid FROM $wpdb->posts WHERE post_name = %s OR post_name = %s LIMIT 1",
				$attachment_post_name . $numeric_extension,
				$attachment_post_name_with_ext . $numeric_extension
			);

			$img = $wpdb->get_row( $query ); // phpcs:ignore

			if ( ! empty( $img ) ) {
				// Check if guid matches with the attachment.
				if ( substr_compare( $img->guid, $attachment_path, -strlen( $attachment_path ) ) === 0 ) {
					// ID found.
					$attachment_id = (int) $img->ID;
					break;
				}

				// Not the image but row found. Reset allowe fetches without result.
				$fetches_without_result_count = 0;
			} else {
				// No entry found with the given post_name.
				if ( $fetches_without_result_count >= $maximum_fetches_without_result ) {
					// Maximum tries without result reached. Abort.
					$attachment_id = null;
					break;
				}

				// No result.
				$fetches_without_result_count++;
			}

			// Increase numeric extension to check my-post-name-x++ next iteration.
			$post_name_numeric_extension++;
		} while ( false === $attachment_id );

		// Update table. Also doing this if $attachment_id is NULL to prevent future failing queries.
		$this->types_guid_id_gateway->insert( $url, $attachment_id );

		// Return attachment id.
		return $attachment_id;
	}


	private function get_base_upload_directory() {
		if( null === $this->base_upload_directory ) {
			$upload_dir_info = wp_get_upload_dir();
			$this->base_upload_directory = toolset_getarr( $upload_dir_info, 'baseurl', WP_CONTENT_URL );
		}

		return $this->base_upload_directory;
	}
}
