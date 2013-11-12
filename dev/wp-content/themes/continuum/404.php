<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_archive_latest_show = $con_layout['archive_latest_show'];
$con_archive_ad_post_show = $con_layout['archive_ad_post_show'];
$con_archive_ad_post = $con_layout['archive_ad_post']; 
$con_archive_unique_sidebar = $con_layout['archive_unique_sidebar'];
?>

<?php // user specified a unique archive sidebar
if ($con_archive_unique_sidebar) {
	$con_archive_unique_sidebar="Sidebar Archive";
} else {
	$con_archive_unique_sidebar="Sidebar Default";
}
?>

<?php get_header(); // show header ?>

<div id="page-content" class="search">

    <div class="left-panel"> <!-- begin left panel -->
    
        <h2 class="gentesque page-title"><?php _e( '404 Error', 'continuum' ); ?></h2> 
        
            <div class="feed-vertical">
            
                <div class="inner"> 
        
                    <?php _e( 'We could not find the page you were trying to access. It may have been moved or deleted. Please try searching our site or use the menu above to navigate our site.', 'continuum' ); ?>
            
                </div>
                
            </div> 
            
        <br class="clearer" />
            
    </div> <!-- end left panel -->
    
    <div class="right-panel sidebar alt"> <!-- begin right sidebar -->
    
        <div class="inner">
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_archive_unique_sidebar) ) : else : ?>
            
                <div class="widget">
                
                    <div class="header-left">&nbsp;</div>
                    
                    <div class="header-middle">
                
                        <h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2>
                        
                    </div>
                    
                    <div class="header-right">&nbsp;</div>
                    
                    <br class="clearer" />
                    
                    <div class="content-wrapper">
                    
                        <div class="content">                    
                    		
                            <p>
                            	<?php _e( "This is a custom sidebar. Continuum gives you lots of custom sidebar possibilities. You can use the Continuum Theme Options page to specify which pages have a unique sidebar. Or, you can use the same sidebar for all of your pages using the Sidebar Default widget panel. If you do specify that you want a unique sidebar for an area of your site, such as the Search page, you can use the corresponding built-in Sidebar Search widget panel.", 'continuum' ); ?>
                            </p>
                            
                            <p>
                            	<?php _e( "In fact, Continuum comes standard with 19 unique sidebars. Wow, we're starting to sound like a car commercial, so we'll add that you don't have to use all of them if you don't want. Continuum harnesses the power of absolute customization while at the same time having a quality of meekness: you can forget about all the settings and get yourself up and running in no time flat.", 'continuum' ); ?>								
                            </p>
                            
                        </div>
                        
                    </div>
                
                </div>
            
            <?php endif; ?>
            
        </div>
    
    </div>
    
    <br class="clearer" />
    
</div>	

<?php if($con_archive_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_archive_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_archive_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>