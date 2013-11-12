<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_breaking_tag = $con_misc['breaking_tag'];
$con_breaking_text = $con_misc['breaking_text'];
$con_breaking_num = $con_misc['breaking_num'];
?>

<?php 
$breakingargs = array('tag' => $con_breaking_tag, 'posts_per_page' => $con_breaking_num);
?>

<div id="breaking-wrapper">
                
    <div id="breaking"> <!-- BEGIN Breaking Slider -->
    
        <div class="wrapper">
    
            <ul>                        
                
                <li> <!-- everything inside this tag will get rotated as one block -->
                
                    <ul>                        
                        <?php // get the breaking posts
						$postcount=0;
                        query_posts( $breakingargs );
                        if (have_posts()) : while (have_posts()) : the_post(); $postcount++;	
							$posttype=get_post_type();
							$isreview=false;
							if($posttype!='post') $isreview=true;
                            ?>
                            
                            <?php // get review info
							if($isreview) {
								$rating = get_post_meta($post->ID, "Rating", $single = true); 
								$ratings = con_setup_rating($rating); //setup the ratings array	
								$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?	
							}
							?>
                        
                            <li>  
                                <div class="thumbnail"> 
                                    <a class="darken small" href="<?php the_permalink(); ?>">                             	
                                        <?php the_post_thumbnail('breaking', array( 'title'	=> '' )); ?>
                                    </a>
                                </div>
                                
                                <?php if($isreview) {
									con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
								} ?>	
					
								<?php if($isreview && $award) { ?>                            
                                    <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>                                
                                <?php } ?>                                
                                <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </li>
                            
                            <?php 	
                            // only want to show 4 at a time and then rotate
                            if (($postcount % 4 == 0) && ($postcount != $con_breaking_num)) { ?>
                                </ul></li>
                                <li><ul>
                            <?php }                                
                        endwhile; 
                        endif; ?>
                    </ul>
                    
                </li>
                
            </ul>
        
        </div>
        
    </div> <!-- END Breaking Slider -->
    
    <div id="breaking-bottom">&nbsp;</div> <!-- the rounded edge at the bottom of the breaking panel -->

</div>

<div id="breaking-tab"> <!-- the tab that toggles the breaking panel -->
    
    <div onclick="showbreaking()" id="breaking-button">
        <a class="gentesque tooltip" title="<?php _e( 'Toggle this panel', 'continuum' ); ?>"><b><?php echo $con_breaking_text; ?></b></a>
    </div>					
    
</div>

<?php wp_reset_query(); ?>