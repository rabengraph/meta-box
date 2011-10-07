<?php

if ( !class_exists( 'RWMB_Color_Field' ) ) {

	class RWMB_Color_Field {

		/**
		 * Enqueue scripts and styles
		 */
		static function admin_print_styles( ) {
			wp_enqueue_style( 'rwmb-color', RWMB_CSS . 'color.css', array( 'farbtastic' ), RWMB_VER );

			wp_enqueue_script( 'rwmb-color', RWMB_JS . 'color.js', array( 'farbtastic' ), RWMB_VER, true );
		}

		/**
		 * Get field HTML
		 * @param $field
		 * @param $meta
		 * @return string
		 */
		static function html( $field, $meta ) {
			if ( empty( $meta ) )
				$meta = '#';
			$html = <<<HTML
<input class="rwmb-color" type="text" name="{$field['id']}" id="{$field['id']}" value="{$meta}" size="8" />
<a href="#" class="rwmb-color-select" rel="{$field['id']}">%s</a>
<div class="rwmb-color-picker" rel="{$field['id']}"></div>
HTML;
			$html = sprintf( $html, __( 'Select a color', RWMB_TEXTDOMAIN ) );
			return $html;
		}
	}
}