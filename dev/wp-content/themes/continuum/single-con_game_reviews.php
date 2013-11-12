<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_review_post_latest_show = $con_reviews['review_post_latest_show'];
$con_review_post_feed_show = $con_reviews['review_post_feed_show'];
$con_review_authorbox_show = $con_reviews['review_authorbox_show'];
$con_review_unique_sidebar = $con_reviews['review_unique_sidebar'];
$con_single_ad_post_show = $con_ads['single_ad_post_show'];
$con_single_ad_feed_show = $con_ads['single_ad_feed_show'];
$con_single_ad_comments_show = $con_ads['single_ad_comments_show'];
$con_single_ad_post = $con_ads['single_ad_post'];
$con_single_ad_feed = $con_ads['single_ad_feed'];
$con_single_ad_comments = $con_ads['single_ad_comments'];
$con_review_games_positive_text = $con_reviews['review_games_positive_text'];
$con_review_games_negative_text = $con_reviews['review_games_negative_text'];
$con_review_games_bottomline_text = $con_reviews['review_games_bottomline_text'];
?>

<?php // use variables from page custom fields instead of continuum options page (if they exist)
$override = get_post_meta($post->ID, "Show Latest Panel", $single = true);
if($override!="") {
	$con_review_post_latest_show=$override;
	if($con_review_post_latest_show=="false") {
		$con_review_post_latest_show=false;	
	} else {
		$con_review_post_latest_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Feed", $single = true);
if($override!="") {
	$con_review_post_feed_show=$override;
	if($con_review_post_feed_show=="false") {
		$con_review_post_feed_show=false;	
	} else {
		$con_review_post_feed_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Authorbox", $single = true);
if($override!="") {
	$con_review_authorbox_show=$override;
	if($con_review_authorbox_show=="false") {
		$con_review_authorbox_show=false;	
	} else {
		$con_review_authorbox_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Ad Below Post", $single = true);
if($override!="") {
	$con_single_ad_post_show=$override;
	if($con_single_ad_post_show=="false") {
		$con_single_ad_post_show=false;	
	} else {
		$con_single_ad_post_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Ad Below Feed", $single = true);
if($override!="") {
	$con_single_ad_feed_show=$override;
	if($con_single_ad_feed_show=="false") {
		$con_single_ad_feed_show=false;	
	} else {
		$con_single_ad_feed_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Ad Below Comments", $single = true);
if($override!="") {
	$con_single_ad_comments_show=$override;
	if($con_single_ad_comments_show=="false") {
		$con_single_ad_comments_show=false;	
	} else {
		$con_single_ad_comments_show=true;
	}
}
?>

<?php // user specified a unique review sidebar
if ($con_review_unique_sidebar) {
	$con_review_unique_sidebar="Sidebar All Reviews";
} else {
	$con_review_unique_sidebar="Sidebar Default";
}
?>

<?php get_header(); // show header ?>

<div id="page-content" class="review">

    <div class="left-panel">
    
        <div class="content">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            	<?php
                // Featured Image for FB Like
                $featured_image = get_the_post_thumbnail($post->ID);
                
                // Get image source
                if($featured_image) {
					$doc = new DOMDocument();
					$doc->loadHTML($featured_image);
					$imageTags = $doc->getElementsByTagName('img');
					
					foreach($imageTags as $tag) {
						$image_url = $tag->getAttribute('src');
					}
				}
                ?>
                <link rel="image_src" href="<?php echo $image_url; ?>" />
                
                <?php // get review info
				$rating = get_post_meta($post->ID, "Rating", $single = true); 
				$ratings = con_setup_rating($rating); //setup the ratings array	
				$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?					
				?>
                
                <div class="cat-bar"> <!-- begin in the category header -->
            
                    <div class="ribbon left"> 
                
                        <div class="ribbon-inner">
                        
                            <div class="left-wrapper">
                            
                            	<div class="icon game">&nbsp;</div>
                            
                            	<?php if($award) { ?>
                    
                                    <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                
                                <?php } ?>
                                
                                <div class="cat-name">
                                                        
                                    <h2 class="gentesque"><b>
                                    
									<?php //get the top-level taxonomy
                                    $terms = wp_get_object_terms($post->ID,'game_genre');
									
									$cat_name = $terms[0]->name;
									$cat_slug = $terms[0]->slug;
                                    $cat_link = get_term_link($cat_slug, 'game_genre');
                                    if($cat_name=="") {
                                        $cat_list = get_the_term_list( $post->ID, 'game_genre', ' ', ', ', '' );
                                        echo $cat_list;
                                    } else { ?>
                                        <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
                                    <?php }?>
                                    
                                    </b></h2>
                                    
                                </div>
                                
                                <div class="cat-date">
                                
                                    <?php echo get_the_date(); ?>
                                
                                </div>
                                
                            </div>
                                
                        </div>
                        
                        <div class="right-wrapper">
                        
                            <div class="inner">
                        
                                <?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                
                            </div>
                        
                        </div>
                        
                    </div> 
                    
                </div> <!-- end in the categoryheader -->
            
                <h1 class="title adelle"><?php the_title(); ?></h1>
                
                <div class="article-image">
            
                    <?php 
					 if ( has_post_thumbnail()) {
					   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					   echo '<a class="darken tooltip" href="' . $large_image_url[0] . '" title="Click to expand this image" >';
					   the_post_thumbnail('review');
					   echo '</a>';
					 }
					 ?>
                    
                </div>
                
                <div class="reviewbox-wrapper">
                    
                    <div class="reviewbox">
                    	
                        <h2 class="gentesque"><?php _e( 'Game Overview', 'continuum' ); ?></h2>
                        
                        <?php $platform_list = get_the_term_list( $post->ID, 'game_platform', __('Platform: ','continuum'), ', ', '' ); ?>
                            
						<?php echo $platform_list; ?><br />
                        
                        <?php $developer_list = get_the_term_list( $post->ID, 'game_developer', __('Developer: ','continuum'), ', ', '' ); ?>
                
                        <?php echo $developer_list; ?><br />
                        
                        <?php $cat_list = get_the_term_list( $post->ID, 'game_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                
                        <?php echo $cat_list; ?><br />
                        
                        <div class="separator">&nbsp;</div>
                        
                        <?php $positives = get_post_meta($post->ID, "Positives", $single = true); ?>
                        
                        <?php if($positives) { ?>
                        
                        	<div><div class="pros"><?php echo $con_review_games_positive_text; ?>:</div>&nbsp;<?php echo $positives; ?></div>
                        
                        	<br class="clearer" />
                        
                        <?php } ?>
                        
                        <?php $negatives = get_post_meta($post->ID, "Negatives", $single = true); ?>
                        
                        <?php if($negatives) { ?>
                        
                            <div><div class="cons"><?php echo $con_review_games_negative_text; ?>:</div>&nbsp;<?php echo $negatives; ?></div>
                            
                            <br class="clearer" />
                            
                        <?php } ?>
                        
                        <div><div class="bottom-line"><?php echo $con_review_games_bottomline_text; ?>:</div>&nbsp;<?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?></div>
                        
                        <?php if($award) { ?>
                        	<br class="clearer" />
                            <div><div class="award-text gentesque"><?php echo $award; ?></div></div>
                            <br class="clearer" />
                        <?php } ?>
                        
                        <div class="separator">&nbsp;</div>
                        
                        <div class="reviewer"><?php _e( 'Reviewed by:', 'continuum' ); ?> <?php the_author_link(); ?></div>
                    
                    </div>
                
                </div>
                
                <br class="clearer" />
                
                <?php con_get_sharebox(); ?>  
                
                <div class="post-content">
                
                	<h2><?php _e('Review','continuum'); ?></h2>
                    
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                    	<?php the_content(); ?>
                        
                    </div>
                    
                    <?php $pagination_args = array(
						'before'           => '<div class="pagination-wrapper single-page"><div class="left-cap">&nbsp;</div><div class="pagination"><span class="page">' . __('Pages:') . '</span>',
						'after'			   => '</div><div class="right-cap">&nbsp;</div></div>',
						'link_before'	   => '<span class="current">',
						'link_after'       => '</span>',
						'next_or_number'   => 'number',
						'nextpagelink'     => __('Next >'),
						'previouspagelink' => __('< Previous'),
						'pagelink'         => '%',
						'echo'             => 1 ); ?>
                            
					<?php wp_link_pages($pagination_args); ?> 
                    
                    <br class="clearer" /><br />
                    
                    <?php if($con_review_authorbox_show) { // begin authorbox ?>
                    
                        <div class="authorbox-wrapper">
                        
                            <div class="authorbox">
                            
                                <h2 class="gentesque"><?php _e( 'About the Author', 'continuum' ); ?></h2>
                                
                                <div class="author-image">
                                
                                    <?php echo get_avatar(get_the_author_meta('user_email'), 80); ?>
                                    
                                </div>
                                
                                <div class="author-title adelle"><?php echo the_author_meta('display_name'); ?></div>
                                
                                <?php echo the_author_meta('description'); ?>
                                
                                <br class="clearer" /> 
                        
								<?php if(get_the_author_meta('twitter') || get_the_author_meta('facebook') || get_the_author_meta('linkedin') || get_the_author_meta('digg') || get_the_author_meta('flickr') || get_the_author_meta('user_url')): ?>
                                <ul class="connect">
                                    <?php if(get_the_author_meta('user_url')): ?>
                                    <li class="website"><a class="tooltip" title="<?php _e( 'Website', 'continuum' ); ?>" href='<?php the_author_meta('user_url'); ?>'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('twitter')): ?>
                                    <li class="twitter"><a class="tooltip" title="<?php _e( 'Twitter', 'continuum' ); ?>" href='http://twitter.com/<?php the_author_meta('twitter'); ?>'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('facebook')): ?>
                                    <li class="facebook"><a class="tooltip" title="<?php _e( 'Facebook', 'continuum' ); ?>" href='http://www.facebook.com/<?php the_author_meta('facebook'); ?>'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('linkedin')): ?>
                                    <li class="linkedin"><a class="tooltip" title="<?php _e( 'LinkedIn', 'continuum' ); ?>" href='http://www.linkedin.com/in/<?php the_author_meta('linkedin'); ?>'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('digg')): ?>
                                    <li class="digg"><a class="tooltip" title="<?php _e( 'Digg', 'continuum' ); ?>" href='http://digg.com/users/<?php the_author_meta('digg'); ?>'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('flickr')): ?>
                                    <li class="flickr"><a class="tooltip" title="<?php _e( 'Flickr', 'continuum' ); ?>" href='http://www.flickr.com/photos/<?php the_author_meta('flickr'); ?>/'>&nbsp;</a></li>
                                    <?php endif; ?>
                                    <?php if(get_the_author_meta('youtube', $author->post_author)): ?>
                                    <li class="youtube"><a class="tooltip" title="<?php _e( 'YouTube', 'continuum' ); ?>" href='http://www.youtube.com/user/<?php the_author_meta('youtube', $author->post_author); ?>/'>&nbsp;</a></li>
                                    <?php endif; ?>
                                </ul>
                                <?php endif; ?>
                                
                                <div class="more-articles">
                            
                                    <?php _e( 'More articles by', 'continuum'); ?> <?php the_author_posts_link(); ?> &raquo;
                                    
                                </div>	
                                
                                <br class="clearer" />	
                                
                            </div>
                        
                        </div>  
                    
                    <?php } // end authorbox ?>            
            
				<?php endwhile;
                endif; ?>
                
                <br class="clearer" />  
                
                <?php if(comments_open()) { ?>
    
                    <div class="comments-button tooltip" title="<?php _e( 'View Comments', 'continuum' ); ?>">
                
                        <?php comments_popup_link(__('0 comments', 'continuum').' &raquo;', __('1 comment', 'continuum').' &raquo;', __('% comments', 'continuum').' &raquo;'); ?>
                        
                    </div>
                    
                    <br class="clearer" />
                    
                <?php } ?>
            
            </div>
        
        </div>
        
    </div>
    
    <div class="right-panel sidebar">
    
        <div class="inner">
        
        	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Game Reviews') ) : else : ?>
            
            <?php endif; ?>
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_review_unique_sidebar) ) : else : ?>
            
            <?php endif; ?>
            
        </div>
    
    </div> 
    
    <br class="clearer" />

</div>

<?php if($con_single_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_single_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_review_post_feed_show) { // show Feed ?>	
	<?php con_get_feed_game_review(); ?>    
<?php } ?>

<?php if($con_single_ad_feed_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_single_ad_feed; // ad ?>        
    </div>
<?php } ?>

<?php if(comments_open()) { ?>

	<?php con_get_comments(); // show comments ?>
    
    <?php if($con_single_ad_comments_show) { ?>
        <div class="full-width-ad">    
            <?php echo $con_single_ad_comments; // ad ?>        
        </div>
    <?php } ?>
    
<?php } ?>

<?php if($con_review_post_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>