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
$con_sharebox_show = $con_layout['sharebox_show'];
$con_share_twitter_show = $con_layout['share_twitter_show'];
$con_share_facebook_show = $con_layout['share_facebook_show'];
$con_share_digg_show = $con_layout['share_digg_show'];
$con_share_stumbleupon_show = $con_layout['share_stumbleupon_show'];
$con_share_plusone_show = $con_layout['share_plusone_show'];
$con_share_email_show = $con_layout['share_email_show'];
?>

<?php // use variables from page custom fields instead of continuum options page (if they exist)
$override = get_post_meta($post->ID, "Show Sharebox", $single = true);
if($override!="") {
	$con_sharebox_show=$override;
	if($con_sharebox_show=="false") {
		$con_sharebox_show=false;	
	} else {
		$con_sharebox_show=true;
	}
}
?>

<?php if($con_sharebox_show) { // begin sharebox ?>
                
    <div class="sharebox-outer">

        <div class="sharebox-wrapper">
        
            <div class="sharebox<?php if (!is_active_sidebar('Share Panel')) { ?> social<?php } ?>">
        
                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Share Panel') ) : else : ?>
        
                    <h2 class="gentesque"><?php _e( 'Share', 'continuum' ); ?></h2>
                    
                    <?php if($con_share_twitter_show) { ?>
                        
                        <!-- Twitter -->
                        <div class="panel tooltip" title="Tweet this article">
                            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                            <a href="http://twitter.com/share" class="twitter-share-button"
                              data-url="<?php echo rawurlencode(the_permalink()) ?>"
                              data-via="<?php echo $con_twitter_name; ?>"
                              data-text="<?php the_title(); ?>"
                              data-count="vertical">Tweet</a>
                        </div>
                        
                    <?php } ?>

                    <?php if($con_share_facebook_show) { ?>
                    
                        <!-- Facebook -->
                        <div class="panel tooltip" title="Like on Facebook">
                            <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=box_count&amp;show_faces=true&amp;width=48&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:65px;" allowTransparency="true"></iframe>
                        </div>
                    
                    <?php } ?>
                    
                    <?php if($con_share_plusone_show) { ?>
                    
                        <!-- Google +1 -->
                        <div class="panel tooltip" title="Google +1">
                            <g:plusone size="tall"></g:plusone>
                        </div>
                        
                    <?php } ?>
                    
                    <?php if($con_share_digg_show) { ?>
                
                        <!-- Digg -->
                        <div class="panel tooltip" title="Digg this article">
                            <a class="DiggThisButton DiggMedium" href="http://digg.com/submit?url=<?php echo rawurlencode(the_permalink()) ?>&title=<?php the_title(); ?>&bodytext=<?php the_excerpt(); ?>"></a>
                            <script src="http://widgets.digg.com/buttons.js" type="text/javascript"></script>
                        </div>
                        
                    <?php } ?>
                    
                    <?php if($con_share_stumbleupon_show) { ?>
                
                        <!-- StumbleUpon -->
                        <div class="panel tooltip" title="Submit to StumbleUpon">
                            <script src="http://www.stumbleupon.com/hostedbadge.php?s=5"></script>
                        </div>
                        
                    <?php } ?>
                    
                    <?php if($con_share_email_show) { ?>
                    
                        <!-- Email -->
                        <div class="panel tooltip" title="Email to a friend">
                            <a href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php echo rawurlencode(the_permalink()) ?>" target="_blank" class="share-email">&nbsp;</a>
                        </div>
                        
                    <?php } ?>
                
                <?php endif; ?>
                
                <br class="clearer" />
                
            </div>
        
        </div>
        
    </div>
    
<?php } // end sharebox ?>