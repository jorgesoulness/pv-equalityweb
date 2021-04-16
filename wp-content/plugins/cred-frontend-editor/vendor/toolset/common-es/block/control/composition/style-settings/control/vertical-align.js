
// External dependencies
import { get } from 'lodash';

// WordPress dependencies
import { Component } from '@wordpress/element';
import { Toolbar } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

// Internal dependencies
const BLOCK_ALIGNMENTS_CONTROLS = {
	top: {
		icon: <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8 11h3v10h2V11h3l-4-4-4 4zM4 3v2h16V3H4z" /><path d="M0 0h24v24H0z" fill="none" /></svg>,
		title: __( 'Vertically Align Top', 'wpv-views' ),
	},
	middle: {
		icon: <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8 19h3v4h2v-4h3l-4-4-4 4zm8-14h-3V1h-2v4H8l4 4 4-4zM4 11v2h16v-2H4z" /><path d="M0 0h24v24H0z" fill="none" /></svg>,
		title: __( 'Vertically Align Middle', 'wpv-views' ),
	},
	bottom: {
		icon: <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z" /><path d="M0 0h24v24H0z" fill="none" /></svg>,
		title: __( 'Vertically Align Bottom', 'wpv-views' ),
	},
};

const DEFAULT_CONTROLS = [ 'top', 'middle', 'bottom' ];

/*
 * Toolbar providing vertical alignments: top, middle, bottom.
 */
export default class extends Component {
	render() {
		const { data, setAttributes } = this.props;

		const value = get( data, 'verticalAlign', 'top' );

		return (
			<Toolbar
				isCollapsed={ false }
				label={ __( 'Change vertical alignment', 'wpv-views' ) }
				controls={
					DEFAULT_CONTROLS.map( ( control ) => {
						return {
							...BLOCK_ALIGNMENTS_CONTROLS[ control ],
							isActive: value === control,
							onClick: () => setAttributes( { verticalAlign: control } ),
						};
					} )
				}
			/>
		);
	}
}
