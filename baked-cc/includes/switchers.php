<?php
function display_baked_cc_switcher() {
	?>
    	<input type="checkbox" name="baked_cc_switcher" id="baked_cc_switcher" value="1" <?php checked(1, get_option('baked_cc_switcher'), true); ?> />
    <?php
}