/* WordPress dependencies */
import { Component } from '@wordpress/element';
import { PanelRow, ColorIndicator } from '@wordpress/components';

/* Internal dependencies */
import { colors, colorAsString } from '../../../utils';
import ColorPalette from './color-palette';

/**
 * Combines a ColorIndicator and ColorPalette, creating a nice color control, somewhat similar to core ColorPanel,
 * but without forcing a separate panel just for this. Uses default theme color palette.
 */
export default class extends Component {
	render() {
		const {
			id,
			label,
			color,
			onChange,
			themeColors,
		} = this.props;

		const hexToRgb = hex => {
			if ( typeof hex !== 'string' || ! hex.startsWith( '#' ) ) {
				// No HEX color.
				return hex;
			}

			const rgb = hex.replace( /^#?([a-f\d])([a-f\d])([a-f\d])$/i, ( m, r, g, b ) => '#' + r + r + g + g + b + b )
				.substring( 1 ).match( /.{2}/g )
				.map( x => parseInt( x, 16 ) );

			return { r: rgb[ 0 ], g: rgb[ 1 ], b: rgb[ 2 ], a: 1 };
		};

		const currentThemeColors = () => {
			const rgbaColors = themeColors ? themeColors : colors();

			return rgbaColors.map( themeColor => {
				return { name: themeColor.name, slug: themeColor.slug, color: hexToRgb( themeColor.color ) };
			} );
		};

		return [
			<PanelRow key="indicator">
				<label htmlFor={ id }>{ label }</label>
				<ColorIndicator
					id={ id }
					colorValue={ colorAsString( color ) }
				/>
			</PanelRow>,
			<PanelRow key="palette">
				<ColorPalette
					colors={ currentThemeColors() }
					value={ color || {} }
					onChange={ onChange }
				/>
			</PanelRow>,
		];
	}
}
