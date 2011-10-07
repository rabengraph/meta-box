<?php

if ( !class_exists( 'RWMB_Date_Field' ) ) {

	class RWMB_Date_Field {

		/**
		 * Enqueue scripts and styles
		 */
		static function admin_print_styles( ) {
			wp_register_style( 'jquery-ui-core', RWMB_CSS . 'libs/jquery.ui.core.css', array( ), '1.8.16' );
			wp_register_style( 'jquery-ui-theme', RWMB_CSS . 'libs/jquery.ui.theme.css', array( ), '1.8.16' );
			wp_enqueue_style( 'jquery-ui-datepicker', RWMB_CSS . 'libs/jquery.ui.datepicker.css', array( 'jquery-ui-core', 'jquery-ui-theme' ), '1.8.16' );

			wp_register_script( 'jquery-ui-datepicker', RWMB_JS . 'libs/jquery.ui.datepicker.min.js', array( 'jquery-ui-core' ), '1.8.16', true );
			wp_enqueue_script( 'rwmb-date', RWMB_JS . 'date.js', array( 'jquery-ui-datepicker' ), RWMB_VER, true );
		}

		/**
		 * Get field HTML
		 * @param $field
		 * @param $meta
		 * @return string
		 */
		static function html( $field, $meta ) {
			return "<input type='text' class='rwmb-date' name='{$field['id']}' id='{$field['id']}' rel='{$field['format']}' value='$meta' size='30' />";
		}
	}
}