// External dependencies
import { get } from 'lodash';

// WordPress dependencies
import { Component } from '@wordpress/element';
import { __ } from '@wordpress/i18n';

// Internal dependencies
import { Number } from '../../../index';

export default class extends Component {
	render() {
		const { data, setAttributes } = this.props;

		return (
			<Number
				label={ __( 'Min-Height', 'wpv-views' ) }
				value={ get( data, 'minHeight', null ) }
				unit={ get( data, 'minHeightUnit', 'px' ) }
				units={ [ 'px', 'vh', 'vw' ] }
				onChange={
					( val, unit ) => setAttributes(
						{
							minHeight: val ? parseInt( val, 10 ) : null,
							minHeightUnit: unit,
						}
					) }
			/>
		);
	}
}
