<?php
add_action('admin_menu', 'add_baked_cc_menu_item');

function add_baked_cc_menu_item() {
	add_menu_page('Baked CC', 'Baked CC', 'manage_options', 'baked-cc-panel', 'baked_cc_settings_page', 'dashicons-shield-alt', 99);
}

function baked_cc_settings_page() {
	?>
	    <div class="wrap">
	    <h1>Baked Cookie Consent Settings</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields('section_baked_cc');
	            do_settings_sections('baked-cc-options');
	            echo '<hr>';
	            submit_button();
	        ?>          
	    </form>
		</div>
	<?php
}

function display_cc_panel_fields() {
	add_settings_section('section_baked_cc', 'CC settings', null, 'baked-cc-options');
	add_settings_field('baked_cc_switcher', 'Enable CC :', 'display_baked_cc_switcher', 'baked-cc-options', 'section_baked_cc');
    register_setting('section_baked_cc', 'baked_cc_switcher');
}

add_action('admin_init', 'display_cc_panel_fields');