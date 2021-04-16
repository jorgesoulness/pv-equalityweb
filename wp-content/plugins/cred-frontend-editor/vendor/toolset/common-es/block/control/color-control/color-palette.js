// External dependencies
import classnames from 'classnames';
import { map } from 'lodash';

// WordPress dependencies
import { __, sprintf } from '@wordpress/i18n';
import { Dashicon, ColorPicker, Tooltip, Dropdown, Button } from '@wordpress/components';

// Internal dependencies
import { colorAsString } from '../../../utils';
export default function ColorPalette( { colors, disableCustomColors = false, value, onChange, className } ) {
	function applyOrUnset( color ) {
		return () => onChange( value === color ? undefined : color );
	}
	const customColorPickerLabel = __( 'Custom color picker', 'wpv-views' );
	const classes = classnames( 'components-color-palette', className );
	return (
		<div className={ classes }>
			{ map( colors, ( { color, name } ) => {
				const style = { color: colorAsString( color ) };
				const itemClasses = classnames( 'components-color-palette__item', { 'is-active': value === color } );

				return (
					<div key={ color } className="components-color-palette__item-wrapper">
						<Tooltip
							text={ name ||
                            // translators: %s: color hex code e.g: "#f00".
                            sprintf( __( 'Color code: %s', 'wpv-views' ), color )
							}>
							<button
								type="button"
								className={ itemClasses }
								style={ style }
								onClick={ applyOrUnset( color ) }
								aria-label={ name ?
									sprintf( __( 'Color: %s', 'wpv-views' ), name ) :
									sprintf( __( 'Color code: %s', 'wpv-views' ), color ) }
								aria-pressed={ value === color }
							/>
						</Tooltip>
						{ value === color && <Dashicon icon="saved" /> }
					</div>
				);
			} ) }

			<div className="components-color-palette__custom-clear-wrapper">
				{ ! disableCustomColors &&
				<Dropdown
					className="components-color-palette__custom-color"
					contentClassName="components-color-palette__picker"
					renderToggle={ ( { isOpen, onToggle } ) => (
						<Button
							aria-expanded={ isOpen }
							onClick={ onToggle }
							aria-label={ customColorPickerLabel }
							isLink
						>
							{ __( 'Custom Color', 'wpv-views' ) }
						</Button>
					) }
					renderContent={ () => (
						<ColorPicker
							color={ value }
							onChangeComplete={ ( color ) => onChange( color.rgb ) }
						/>
					) }
				/>
				}

				<Button
					className="components-color-palette__clear"
					type="button"
					onClick={ () => onChange( undefined ) }
					isSmall
					isDefault
				>
					{ __( 'Clear', 'wpv-views' ) }
				</Button>
			</div>
		</div>
	);
}
