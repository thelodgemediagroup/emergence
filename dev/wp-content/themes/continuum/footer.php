<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_twitter_name = $con_misc['twitter_name'];
$con_flickr_name = $con_misc['flickr_name'];
$con_google_analytics = $con_misc['google_analytics'];
$con_footer_credits = $con_misc['footer_credits'];
$con_colorbox = $con_misc['colorbox'];
?>

		<div id="footer-wrapper">
        
        	<div class="top">&nbsp;</div>
        
        	<div id="footer">
            
            	<div class="inner">
            
                	<div class="left">
                    
                    	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Left') ) : else : ?>
                        
                        	<div class="widget">
                            
                        	<h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2><div class="line">&nbsp;</div>                            <p>
                            	<?php _e( "This is a custom sidebar. Continuum gives you lots of custom sidebar possibilities. You can use the Continuum Theme Options page to specify which pages have a unique sidebar. Or, you can use the same sidebar for all of your pages using the Sidebar Default widget panel. If you do specify that you want a unique sidebar for an area of your site, such as the Search page, you can use the corresponding built-in Sidebar Search widget panel.", 'continuum' ); ?>
                            </p>
                            
                            <p>
                            	<?php _e( "In fact, Continuum comes standard with 19 unique sidebars. Wow, we're starting to sound like a car commercial, so we'll add that you don't have to use all of them if you don't want. Continuum harnesses the power of absolute customization while at the same time having a quality of meekness: you can forget about all the settings and get yourself up and running in no time flat.", 'continuum' ); ?>								
                            </p>
                            
                            </div>
                        
                        <?php endif; ?>
                    
                    </div>
                    
                    <div class="middle">
                    
                    	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Middle') ) : else : ?>
                        
                        	<div class="widget">
                            
                        	<h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2><div class="line">&nbsp;</div>                            <p>
                            	<?php _e( "This is a custom sidebar. Continuum gives you lots of custom sidebar possibilities. You can use the Continuum Theme Options page to specify which pages have a unique sidebar. Or, you can use the same sidebar for all of your pages using the Sidebar Default widget panel. If you do specify that you want a unique sidebar for an area of your site, such as the Search page, you can use the corresponding built-in Sidebar Search widget panel.", 'continuum' ); ?>
                            </p>
                            
                            <p>
                            	<?php _e( "In fact, Continuum comes standard with 19 unique sidebars. Wow, we're starting to sound like a car commercial, so we'll add that you don't have to use all of them if you don't want. Continuum harnesses the power of absolute customization while at the same time having a quality of meekness: you can forget about all the settings and get yourself up and running in no time flat.", 'continuum' ); ?>								
                            </p>
                            
                            </div>
                        
                        <?php endif; ?>
                    
                    </div>
                    
                    <div class="right">
                    
                    	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Right') ) : else : ?>
                        
                        	<div class="widget">
                            
                        		<h2 class="gentesque flickr"><?php _e( 'Flickr Photos', 'continuum' ); ?></h2><div class="line">&nbsp;</div>
								
                                
								<script type="text/javascript">
									<!--
                                    jQuery(document).ready(function() {                
                                        jQuery('#flickr').jflickrfeed({
                                            limit: 6,
                                            qstrings: {
                                                id: '<?php echo $con_flickr_name; ?>'
                                            },
                                            itemTemplate: '<li>'+
                                                            '<a rel="colorbox" href="{{image}}" title="{{title}}">' +
                                                                '<img src="{{image_s}}" alt="{{title}}" />' +
                                                            '</a>' +
                                                          '</li>'
                                        }, function(data) {
											<?php if($con_colorbox) { ?>
                                            jQuery('#flickr a').colorbox();		
											<?php } ?>	
                                        });
                                    });
									// -->
                                </script>
                                
                                <div class="flickr"> 
                                    
                                    <ul id="flickr" class="flickr-thumbs"><li class="first"></li></ul>
                                    
                                    <br class="clearer" />
                                    
                                    <a href="http://www.flickr.com/photos/<?php echo $con_flickr_name; ?>" target="_blank"><?php _e( 'View more photos', 'continuum' ); ?> &raquo;</a>
                                    
                                </div>
                            
                            </div>
                        
                        <?php endif; ?>
                        
                        <br class="clearer" />
                        
                        <a class="topofpage tooltip" href="#page-menu-wrapper" title="Top of page">&nbsp;</a>
                    
                    </div>
                    
                    <br class="clearer" />
                    
                </div>
                
                <div class="copyright">
                
                	<div class="floatleft">
                
                		<?php _e( 'Copyright', 'continuum' ); ?> &copy; <?php echo date("Y").' '.get_bloginfo('name'); ?>&nbsp;<?php _e( 'All Rights Reserved.', 'continuum' ); ?>
                        
                    </div>
                    
                    <div class="floatright">
                    
                    	<?php if($con_footer_credits) { ?>
                    
                    		<?php _e( 'Continuum Theme by ', 'continuum' ); ?><a href="http://www.industrialthemes.com"><?php _e( 'Industrial Themes', 'continuum' ); ?></a> | <?php _e( 'Fonts used: ', 'continuum' ); ?><a href="http://paulo-silva.kernest.com/fonts/gentesque"><?php _e( 'Gentesque', 'continuum' ); ?></a> &amp; <a href="http://www.fontsquirrel.com/fonts/Adelle-Basic"><?php _e( 'Adelle', 'continuum' ); ?></a> | <?php _e( 'Icons by ', 'continuum' ); ?><a href="http://medialoot.com/item/medialoot-prime-60-detailed-vector-icons/"><?php _e( 'MediaLoot', 'continuum' ); ?></a> &amp; <a href="http://wefunction.com/2008/07/function-free-icon-set/"><?php _e( 'Function', 'continuum' ); ?></a> | <a href="http://demos.brianmcculloh.com/continuum/credits/"><?php _e( 'Image Credits', 'continuum' ); ?></a>
                            
                        <?php } else { ?>
                        
                        	&nbsp;
                        
                        <?php } ?>
                    
                    </div>
                    
                    <br class="clearer" />
                
                </div>
                
            </div>
            
            <div class="bottom">&nbsp;</div>
        
        </div>

	</div>

	<?php wp_footer(); ?>
	
	<?php echo $con_google_analytics; // google analytics code ?>
	
</body>

</html>
