/**
 * It renders the style class for pseudo classes
 *
 * @since 3.0
 */

import getStyleObjectByAttributes from './get-style-object-by-attributes';
import { objectToCssString } from '../../../../../utils/object-to-css-string';

const validPseudoClasses = [ ':hover', ':active' ];

/**
 * Gets the style tag content for pseudo classes
 *
 * @param {object} style Style object
 * @param {string} scope CSS scope string
 * @param {array} cssElements A list CSS rules
 * @returns {string}
 */
export default function( style, scope, cssElements ) {
	return validPseudoClasses.map( pseudoClass => {
		if ( ! style || ! style[ pseudoClass ] ) {
			return '';
		}
		const css = objectToCssString( getStyleObjectByAttributes(
			style[ pseudoClass ],
			cssElements
		), true );
		if ( pseudoClass === ':hover' ) {
			return `
				${ scope }:focus {${ css }}
				${ scope }${ pseudoClass } {${ css }}
			`;
		}
		return `${ scope }${ pseudoClass } {${ css }}`;
	} ).join( '\n' );
}
