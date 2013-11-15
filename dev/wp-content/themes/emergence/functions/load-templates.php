<?php //load template actions

//get sharebox
if (!function_exists('con_get_sharebox'))
{
	function con_get_sharebox() {
	do_action( 'con_get_sharebox' );
	if ( file_exists( STYLESHEETPATH . '/inc/sharebox.php') )
		load_template( STYLESHEETPATH . '/inc/sharebox.php');
	}	
}

?>