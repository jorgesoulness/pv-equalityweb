// WordPress Dependencies
import { Component } from '@wordpress/element';
import { __ } from '@wordpress/i18n';

// Internal Dependencies
import { ColorControl } from '../../../../../index';

export class Solid extends Component {
	render() {
		const { background, setBackground } = this.props;

		let color = background.solid.color.rgb || null;

		// Backwards compatibility. In the first beta release we had hex colors instead of rgb.
		if ( color === null ) {
			color = background.solid.color.hex || null;
		}

		return (
			<ColorControl
				label={ __( 'Background Color', 'wpv-views' ) }
				color={ color }
				onChange={ rgb => setBackground( { solid: { color: { rgb } } } ) }
			/>
		);
	}
}
