<?php
add_action( 'wp_enqueue_scripts', 'baked_cc_assets' );

function baked_cc_assets() {
	if (get_option('baked_cc_switcher')) {
		wp_enqueue_style( 'baked-cc-css', plugin_dir_url( __FILE__ ) . '../css/cookieconsent.min.css', array() );
		wp_enqueue_script( 'baked-cc-js', plugin_dir_url( __FILE__ ) . '../js/cookieconsent.min.js', array(), false );
	}
}