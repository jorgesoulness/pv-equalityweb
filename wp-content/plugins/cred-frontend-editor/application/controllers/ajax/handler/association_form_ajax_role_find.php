<?php

class CRED_Ajax_Handler_Association_Form_Ajax_Role_Find extends Toolset_Ajax_Handler_Abstract{

	private $api = null;

	public function __construct( CRED_Ajax $cred_ajax, CRED_Shortcode_Association_Helper $api = null ) {
		parent::__construct( $cred_ajax );

		if( null !== $api ){
			$this->api = $api;
		} else {
			$this->api = $this->get_api();
		}
	}

	function process_call( $arguments ){
		$this->ajax_begin( array( 'nonce' => CRED_Association_Form_Front_End::AJAX_ROLE_NONCE_NAME, 'nonce_parameter' => CRED_Association_Form_Front_End::AJAX_ROLE_NONCE_NAME, 'is_public' => true ) );

		if( ! isset( $_POST['form_id'] ) || ! isset( $_POST['other_value'] ) || ! isset( $_POST['other_current_role'] ) || ! isset( $_POST['current_role'] ) ){
			$this->ajax_finish( array( 'id' => 0, 'text' => __('Something went wrong with the search performed!!', 'wp-cred' ) ), false );
		}

		$this->mock_query_string_parameters( );
		$this->api->set_form_id( $_POST['form_id'] );

		$potential_query_args = array( 
			'other_current_role' => toolset_getpost( 'other_current_role' ), 
			'current_role' => toolset_getpost( 'current_role' ) 
		);
		
		if ( toolset_getpost( 's' ) ) {
			$potential_query_args['search_string'] = toolset_getpost( 's' );
		}
		
		$wp_query_override = array();
		
		if ( in_array( toolset_getpost('orderBy'), array( 'date', 'title', 'ID' ) ) ) {
			$wp_query_override['orderby'] = toolset_getpost('orderBy');
		}
		
		if ( in_array( toolset_getpost('order'), array( 'ASC', 'DESC' ) ) ) {
			$wp_query_override['order'] = toolset_getpost('order');
		}
		
		if ( '' != toolset_getpost('author') ) {
			$wp_query_override['author'] = (int) toolset_getpost('author');
			if ( 0 === $wp_query_override['author'] ) {
				$wp_query_override['post__in'] = array( '0' );
			}
		}
		
		if ( count( $wp_query_override ) > 0 ) {
			$potential_query_args['wp_query_override'] = $wp_query_override;
		}
		
		$results = $this->api->get_potential_associations( toolset_getpost('other_value'), $potential_query_args );

		$data = array();

		if( null !== $results ){
			foreach( $results as $result ){
				$data[] = (object) array( 'id' => $result->get_id(), 'text' => $result->get_title() );
			}
		}

		$this->clean_up_request_super_global();
		$this->ajax_finish( $data );
	}

	public function get_api(){
		if( null === $this->api ){
			$frontend_form_flow = $this->get_front_end_form_flow();
			$relationship_service = $this->get_relationship_service();

			$attr_item_chain = new Toolset_Shortcode_Attr_Item_From_Views(
				new Toolset_Shortcode_Attr_Item_M2M(
					new Toolset_Shortcode_Attr_Item_Legacy(
						new Toolset_Shortcode_Attr_Item_Id(),
						$relationship_service
					),

					$relationship_service
				),
				$relationship_service
			);
			$this->api = new CRED_Shortcode_Association_Helper( $frontend_form_flow, $relationship_service, $attr_item_chain );
		}

		return $this->api;
	}

	public function get_front_end_form_flow(){
		return new CRED_Frontend_Form_Flow();
	}

	public function get_relationship_service(){
		return new Toolset_Relationship_Service();
	}

	private function mock_query_string_parameters( ){

		if( !isset( $_POST['s'] ) ) return;

		$role = $_POST['other_current_role'];
		$id = $_POST['s'];

		if( $role === CRED_Shortcode_Association_Helper::ROLE_PARENT ){
			$_GET[CRED_Shortcode_Association_Helper::PARENT_URL_PARAMETER] = $id;
		} elseif ( $role === CRED_Shortcode_Association_Helper::ROLE_CHILD ){
			$_GET[CRED_Shortcode_Association_Helper::CHILD_URL_PARAMETER] = $id;
		}
	}

	private function clean_up_request_super_global(){

		if( isset( $_GET[CRED_Shortcode_Association_Helper::PARENT_URL_PARAMETER] ) ){
			unset( $_GET[CRED_Shortcode_Association_Helper::PARENT_URL_PARAMETER] );
		}

		if( isset( $_GET[CRED_Shortcode_Association_Helper::CHILD_URL_PARAMETER] ) ){
			unset( $_GET[CRED_Shortcode_Association_Helper::CHILD_URL_PARAMETER] );
		}
	}
}