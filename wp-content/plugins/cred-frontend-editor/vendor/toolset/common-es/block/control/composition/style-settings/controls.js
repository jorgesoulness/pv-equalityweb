// WordPress dependencies
import { Fragment, Component } from '@wordpress/element';
import { ColorIndicator, PanelBody, TabPanel } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import { InspectorControls } from '@wordpress/editor';
import { merge } from 'lodash';

// Internal dependencies
import { defaults } from './settings';
import CommonControls from './utils/common-controls';
import { getDifferenceOfObjects, colorAsString } from '../../../../utils';

class Control extends Component {
	constructor() {
		super( ...arguments );

		this.setAttributes = this.setAttributes.bind( this );

		this.state = {
			pseudoclass: '',
		};
	}

	getDifferenceFromDefaults( data ) {
		if ( data === undefined ) {
			return {};
		}

		const defaultsBlock = this.props.defaults || {};
		const defaultsMerged = { ...defaults, ...defaultsBlock };
		data = { ...defaultsMerged, ...data };

		const diffFromDefaults = getDifferenceOfObjects( defaultsMerged, data );

		Object.keys( data ).forEach( key => {
			if ( ! defaults.hasOwnProperty( key ) ) {
				diffFromDefaults[ key ] = data[ key ];
			}
		} );

		return diffFromDefaults;
	}

	setAttributes( newData ) {
		const { setAttributes, data, storageKey } = this.props;
		const { pseudoclass } = this.state;

		const tabData = data && pseudoclass ? data[ pseudoclass ] : data;
		const newDataMergedWithPrevious = { ...tabData, ...newData };
		const style = this.getDifferenceFromDefaults( newDataMergedWithPrevious );
		const key = storageKey || 'style';

		if ( pseudoclass ) {
			const newStyle = Object.assign( {}, data );
			newStyle[ pseudoclass ] = style;
			setAttributes( { [ key ]: newStyle } );
		} else {
			setAttributes( { [ key ]: style } );
		}
	}

	render() {
		const { data, description, initialOpen, controls, labels, renderControlsOnly, renderPanelWithControlsOnly, passThrough, controlsMapping, preset, tabs } = this.props;
		const style = merge( {}, defaults, this.props.defaults || {}, data );

		const presetTypography = preset === 'typography';
		const renderControls = ( ! Array.isArray( controls ) || controls.length === 0 ) && presetTypography ?
			[ 'fontFamily', 'fontSize', 'fontIconToolbar', 'lineHeight', 'letterSpacing', 'textColor', 'textTransform', 'textShadow' ] :
			controls;

		const titleWithColorIndicators = (
			<Fragment>
				{ presetTypography ? __( 'Typography', 'wpv-views' ) : __( 'Style Settings', 'wpv-views' ) }
				<span>
					{ style.textColor && renderControls.includes( 'textColor' ) &&
					<ColorIndicator
						key={ `title-text-color-${ this.state.pseudoclass }` }
						colorValue={ colorAsString( style.textColor ) }
					/>
					}
					{ style.backgroundColor && renderControls.includes( 'backgroundColor' ) &&
					<ColorIndicator
						key={ `title-background-color-${ this.state.pseudoclass }` }
						colorValue={ colorAsString( style.backgroundColor ) }
					/>
					}
				</span>
			</Fragment>
		);

		const tabData = this.state.pseudoclass ? style[ this.state.pseudoclass ] : style;
		const mainControl = tab => <CommonControls
			data={ tabData || defaults }
			controls={ renderControls }
			controlsMapping={ controlsMapping }
			setAttributes={ this.setAttributes }
			labels={ labels }
			passThrough={ passThrough }
			key={ `control-${ tab }` }
		/>;

		const panelWithMainControl = <PanelBody title={ titleWithColorIndicators } initialOpen={ initialOpen || false }>
			{ description &&
			<p>{ description }</p>
			}
			{ !! tabs &&
				<TabPanel className="tces-tabs"
					onSelect={ ( tabName ) => {
						const tab = tabs.find( item => item.name === tabName );
						if ( tab ) {
							this.setState( { pseudoclass: tab.pseudoclass } );
						}
					} }
					tabs={ tabs }
				>
					{ ( tab ) =>
						<Fragment key={ `tab-${ tab.name }` }>
							{ !! tab.description && <p className="tces-tabs__description">{ tab.description }</p> }
							<Fragment key={ `tab-content-${ tab.name }` }>
								{ mainControl( tab.name ) }
							</Fragment>
						</Fragment>
					}
				</TabPanel>
			}
			{ ! tabs &&
				mainControl( '' )
			}
		</PanelBody>;

		if ( renderControlsOnly ) {
			return mainControl();
		}

		if ( renderPanelWithControlsOnly ) {
			return panelWithMainControl;
		}

		return (
			<InspectorControls>
				{
					panelWithMainControl
				}
			</InspectorControls>
		);
	}
}

Control.defaultProps = {
	controls: [],
	passThrough: {},
	labels: {},
	renderControlsOnly: false,
	renderPanelWithControlsOnly: false,
	disableColorIdentificator: [],
	controlsMapping: {},
};

export default Control;
