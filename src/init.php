<?php

// Load the settings page if we're in the admin section
if ( is_admin() ){
    // include the settings page
    require_once( 'admin/manager-page.php' );

	$settings = new OptionsManagerSettingsPage( __FILE__ );
}
