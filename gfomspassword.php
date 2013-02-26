<?php
/*
Plugin Name: Enable Gravity Forms Password Field
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com
License: GPL2
*/

add_action("gform_enable_password_field", "enable_password_field");
function enable_password_field($is_enabled){
    return true;
}
