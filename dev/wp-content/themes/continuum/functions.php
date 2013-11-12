<?php 
//this is the folder that houses the function files to include
define('functions', TEMPLATEPATH . '/functions');

load_theme_textdomain('continuum');
load_textdomain('continuum', TEMPLATEPATH.'/lang/continuum.mo' );

//Get the theme options
require_once(functions . '/theme-options.php');

//Get the widgets
require_once(functions . '/widgets.php');

//Get the functions to load all the various templates
require_once(functions . '/load-templates.php');

//Get the custom functions
require_once(functions . '/custom.php');

//Get the shortcodes
require_once(functions . '/shortcodes.php');

//Get the post type functions
require_once(functions . '/post-types.php');

//Get the post & page meta boxes
require_once(functions . '/meta-boxes.php');

//notifies users of updates
require('update-notifier.php');

?>