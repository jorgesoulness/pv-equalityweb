// External dependencies
import { get } from 'lodash';

/**
 * This function should be used if a color is rendered by not using the style composition.
 *
 * @param {object|string} color
 * @return {string|null}
 */
export default function( color ) {
	const r = get( color, 'r', false );
	const g = get( color, 'g', false );
	const b = get( color, 'b', false );
	const a = get( color, 'a', false );

	if ( r !== false && g !== false && b !== false && a !== false ) {
		return `rgba( ${ r }, ${ g }, ${ b }, ${ a } )`;
	}

	// Backward compatibility. First beta release was just HEX values.
	if ( typeof color === 'string' && color.startsWith( '#' ) ) {
		return color;
	}

	return null;
}
