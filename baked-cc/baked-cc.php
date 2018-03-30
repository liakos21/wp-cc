<?php
/*
Plugin Name: Baked Cookie Consent
*/

function baked_cc_plugin_path() {
	return untrailingslashit( plugin_dir_path( __FILE__ ) );
}

require baked_cc_plugin_path() . '/includes/switchers.php';

require baked_cc_plugin_path() . '/includes/styles.php';

require baked_cc_plugin_path() . '/includes/settings.php';

require baked_cc_plugin_path() . '/includes/frontend.php';