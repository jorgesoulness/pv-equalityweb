// WordPress dependencies
import apiFetch from '@wordpress/api-fetch';

// Internal dependencies
import ScriptData from '../script-data';

// apply nonce to api fetch
apiFetch.use( apiFetch.createNonceMiddleware( ScriptData.getData( 'wp_rest_nonce' ) ) );

export default function( original, width, height, crop = true ) {
	const route = 'Route/ImageResize';

	return new Promise( ( resolve, reject ) => {
		apiFetch( {
			path: ScriptData.getData( route ),
			method: 'POST',
			data: {	original, width, height, crop },
		} ).then(
			( result ) => {
				if ( result.error ) {
					reject( result.error );
				}
				resolve( result );
			}
		).catch(
			( e ) => {
				reject( e );
			}
		);
	} );
}
