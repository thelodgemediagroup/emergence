<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_feed_review_num = $con_reviews['feed_review_num'];
$con_feed_review_header = $con_reviews['feed_review_header'];
$con_feed_review_ad_num = $con_ads['feed_review_ad_num'];
$con_feed_review_ads_increment = $con_ads['feed_review_ads_increment'];
$con_feed_review_ads_offset = $con_ads['feed_review_ads_offset'];
$con_feed_ad_1 = $con_ads['feed_ad_1'];
$con_feed_ad_2 = $con_ads['feed_ad_2'];
$con_feed_ad_3 = $con_ads['feed_ad_3'];
$con_feed_ad_4 = $con_ads['feed_ad_4'];
$con_feed_ad_5 = $con_ads['feed_ad_5'];
$con_feed_ad_6 = $con_ads['feed_ad_6'];
$con_feed_ad_7 = $con_ads['feed_ad_7'];
$con_feed_ad_8 = $con_ads['feed_ad_8'];
$con_feed_ad_9 = $con_ads['feed_ad_9'];
$con_feed_ad_10 = $con_ads['feed_ad_10'];
$con_feed_review_social = $con_reviews['feed_review_social'];
$con_review_games_bottomline_text = $con_reviews['review_games_bottomline_text'];
?>

<?php // see if user specified override values in post meta
$override = get_post_meta($post->ID, "Feed Header", $single = true);
if($override!="") $con_feed_review_header=$override;
$override = get_post_meta($post->ID, "Feed Posts Per Page", $single = true);
if($override!="") $con_feed_review_num=$override;
$override = get_post_meta($post->ID, "Feed Number Of Ads", $single = true);
if($override!="") $con_feed_review_ad_num=$override; //how many ads to display on the home page?
$override = get_post_meta($post->ID, "Feed Ad Increment", $single = true);
if($override!="") $con_feed_review_ads_increment=$override; //how often to display ads?
$override = get_post_meta($post->ID, "Feed Ad Offset", $single = true);
if($override!="") $con_feed_review_ads_offset=$override; //how soon until you want to display the first ad?
?>

<?php // get sorting requests
if(isset($_REQUEST['feedsort'])) {
	$feedsort=$_REQUEST['feedsort'];
} else {
	$feedsort="";
}
if($feedsort=="") {
	$feedsort = "genre";
}
//get the genre for current post
$terms = wp_get_object_terms($post->ID,'game_genre');	
$genre_name = $terms[0]->name;	
$genre_slug = $terms[0]->slug;	
//get platform for current post
$terms = wp_get_object_terms($post->ID,'game_platform');
$platform_name = $terms[0]->name;
$platform_slug = $terms[0]->slug;
//get developer for current post
$terms = wp_get_object_terms($post->ID,'game_developer');
$developer_name = $terms[0]->name;
$developer_slug = $terms[0]->slug;
?>

<?php // setup the query
$hidegenre=false; //used for hiding genre link if no other posts in this genre
$genreargs=array( // get articles with this same genre
	'post_type' => 'con_game_reviews',
	'paged' => $paged,
	'post__not_in' => array($post->ID),
	'posts_per_page' => $con_feed_review_num,
	'tax_query' => array( 
						 array( 
							   'taxonomy' => 'game_genre',
							   'field' => 'slug',
							   'terms' => $genre_slug
							   )
						 )		
);
$test_loop = new WP_Query($genreargs);
if(!$test_loop->have_posts()) {	
	$hidegenre=true; //there are no related posts
	if($feedsort=="genre") $feedsort="platform"; //use a different filter
}	

wp_reset_query();

$hideplatform=false; //used for hiding platform link if no other posts in this platform
$platformargs=array( // get articles with this same platform
	'post_type' => 'con_game_reviews',
	'paged' => $paged,
	'post__not_in' => array($post->ID),
	'posts_per_page' => $con_feed_review_num,
	'tax_query' => array( 
						 array( 
							   'taxonomy' => 'game_platform',
							   'field' => 'slug',
							   'terms' => $platform_slug
							   )
						 )		
);
$test_loop = new WP_Query($platformargs);
if(!$test_loop->have_posts()) {
	$hideplatform=true; //there are no related posts
	if($feedsort=="platform" && !$hidegenre) { //use a different filter
		$feedsort="genre"; 
	} elseif($feedsort=="platform") {
		$feedsort="developer";
	}
}	

wp_reset_query();

$hidedeveloper=false; //used for hiding developer link if no other posts in this developer
$developerargs=array( // get articles with this same developer
	'post_type' => 'con_game_reviews',
	'paged' => $paged,
	'post__not_in' => array($post->ID),
	'posts_per_page' => $con_feed_review_num,
	'tax_query' => array( 
						 array( 
							   'taxonomy' => 'game_developer',
							   'field' => 'slug',
							   'terms' => $developer_slug
							   )
						 )		
);
$test_loop = new WP_Query($developerargs);
if(!$test_loop->have_posts()) {
	$hidedeveloper=true; //there are no related posts
	if($feedsort=="developer" && !$hidegenre) { //use a different filter
		$feedsort="genre"; 
	} elseif($feedsort=="developer" && !$hideplatform) {
		$feedsort="platform";
	}
}	

wp_reset_query();

if($hidegenre && $hideplatform && $hidedeveloper) $feedsort="allreviews";
if($feedsort=="genre" && !$hidegenre) {
	$args=$genreargs;
} elseif($feedsort=="platform" && !$hideplatform) {
	$args=$platformargs;	
} elseif($feedsort=="developer" && !$hidedeveloper) {
	$args=$developerargs;	
} else {	
	$args=array(
		'post__not_in' => array($post->ID),
		'posts_per_page' => $con_feed_review_num,
		'post_type' => 'con_game_reviews',
		'paged' => $paged,
		'order' => 'DESC',
		'orderby' => ''
	);
}

$feed_loop = new WP_Query($args);	
?>

<div id="feed-wrapper">

    <div id="feed-leftend">&nbsp;</div>

    <div id="feed"<?php if(!$con_feed_review_social) { ?> class="hide-social"<?php } ?>>

        <div class="header gentesque">
        
            <?php echo $con_feed_review_header; ?>
        
        </div>
        
        <?php if(!$hidegenre) { ?>
        
            <div class="sort">
            
                <a title="<?php _e( 'Show '.$genre_name.' game reviews', 'continuum' ); ?>" class="<?php if($feedsort=='genre') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('genre') ?>"><?php _e( $genre_name.' Game Reviews', 'continuum' ); ?></a>
            
            </div>
            
        <?php } ?>
        
        <?php if(!$hideplatform) { ?>
        
            <div class="sort">
            
                <a title="<?php _e( 'Show reviews for '.$platform_name.' games', 'continuum' ); ?>" class="<?php if($feedsort=='platform') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('platform') ?>"><?php _e( $platform_name.' Game Reviews', 'continuum' ); ?></a>
            
            </div>
            
        <?php } ?>
        
        <?php if(!$hidedeveloper) { ?>
        
            <div class="sort">
            
                <a title="<?php _e( 'Show reviews for '.$developer_name.' games', 'continuum' ); ?>" class="<?php if($feedsort=='developer') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('developer') ?>"><?php _e( $developer_name.' Game Reviews', 'continuum' ); ?></a>
            
            </div>
            
        <?php } ?>
        
        <div class="sort">
        
            <a title="<?php _e( 'Show all game reviews', 'continuum' ); ?>" class="<?php if($feedsort=='allreviews') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('allreviews') ?>"><?php _e( 'All Video Game Reviews', 'continuum' ); ?></a>
        
        </div>
        
    </div>
    
    <?php if($con_feed_review_social) { ?>
    
        <?php con_get_social(); ?>
        
    <?php } else { ?>
    
        <div class="social-placeholder">&nbsp;</div>
    
    <?php } ?>
    
    <div id="feed-rightend">&nbsp;</div>
    
    <br class="clearer" />
    
    <div id="feed-panel-wrapper">
        
        <?php $ads = array( //grab all 10 ads regardless of how many should be displayed on home page
                         1 => $con_feed_ad_1,
						 2 => $con_feed_ad_2,
						 3 => $con_feed_ad_3,
						 4 => $con_feed_ad_4,
						 5 => $con_feed_ad_5,
						 6 => $con_feed_ad_6,
						 7 => $con_feed_ad_7,
						 8 => $con_feed_ad_8,
						 9 => $con_feed_ad_9,
						 10 => $con_feed_ad_10
                         );	 ?>
        
		<?php $postcount=0; ?>
        
        <?php $adcount=0; ?>
        
        <?php if ($feed_loop->have_posts()) : while ($feed_loop->have_posts()) : $feed_loop->the_post(); $postcount++; ?>	
        
            <?php if($con_feed_review_ad_num!=0) { // display ads in the feed ?>		
            
                <?php if($postcount==$con_feed_review_ads_offset+1) { // the first ad to display ?>
                
                    <div class="feed-panel<?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">                
                        
                        <?php $adcount++; ?>
                    
                        <div class="ad">
                        
                            <?php echo $ads[$adcount]; ?>
                            
                        </div>
                        
                    </div>
                    
                    <?php if ($postcount % 3 == 0) { // new line every 3 panels ?>
                
                        <br class="clearer" />
                
                    <?php } ?>
                        
                    <?php $postcount++; ?>
                    
                <?php } elseif ((($postcount-$con_feed_review_ads_offset-1) % ($con_feed_review_ads_increment)==0) && ($postcount>$con_feed_review_ads_offset) && ($con_feed_review_ad_num>$adcount)) { // incremented ads ?>
                
                    <div class="feed-panel<?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">
                        
                        <?php $adcount+=1; ?>
                    
                        <div class="ad">
                        
                            <?php echo $ads[$adcount]; ?>
                            
                        </div>
                    
                    </div>
                    
                    <?php if ($postcount % 3 == 0) { // new line every 3 panels ?>
                    
                        <br class="clearer" />
                
                    <?php } ?>
                    
                    <?php $postcount++; ?>
                    
                <?php } ?>
                
            <?php } // end if display ads in the feed ?>
            
            <?php // get review info
			$rating = get_post_meta($post->ID, "Rating", $single = true); 
			$ratings = con_setup_rating($rating); //setup the ratings array	
			$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?	
			?>
			
			<div class="feed-panel reviews<?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">
			
				<div class="top">&nbsp;</div>
				
				<div class="inner">
				
					<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
					
					<?php if($award) { ?>
				
						<div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
					
					<?php } ?>
					
					<div class="category">                        
						
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
					
					</div>
					
					<div class="article-image">
					
						<?php if (has_post_thumbnail()) { ?>
						
							<a class="darken" href="<?php the_permalink(); ?>">
					
								<?php the_post_thumbnail('feed', array( 'title'	=> '' )); ?>
								
							</a>
							
						<?php } else { ?>
						
							<div class="article-image-placeholder">&nbsp;</div>
						
						<?php } ?>
						
					</div>
					
					<div class="content">
					
						<h2 class="adelle"><a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="excerpt">
						
							<?php $platform_list = get_the_term_list( $post->ID, 'game_platform', __('Platform: ','continuum'), ', ', '' ); ?>
                            
							<?php echo $platform_list; ?><br />
                            
                            <?php $developer_list = get_the_term_list( $post->ID, 'game_developer', __('Developer: ','continuum'), ', ', '' ); ?>
                    
                            <?php echo $developer_list; ?><br />
                            
                            <?php $genre_list = get_the_term_list( $post->ID, 'game_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                        
							<?php echo $genre_list; ?><br /><br />
                            
                            <?php echo $con_review_games_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                            <?php if($award) { ?>
                                <span class="gentesque award-text"><?php echo $award; ?></span>
                            <?php } ?>
							
						</div>
					
					</div>
					
				</div>
				
				<div class="meta">
				
					<div class="author">
					
						<?php _e( 'by', 'continuum' ); ?> <?php the_author(); ?>
					
					</div>
					
					<div class="comments">
					
						<?php if(comments_open()) { ?>
							
									<?php comments_popup_link('0', '1', '%', 'tooltip', '-'); ?>
                                    
                                <?php } else { ?>
                                
                                	&nbsp;
                                
                                <?php } ?>
					
					</div>
					
					<div class="fullstory">
					
						<a href="<?php the_permalink(); ?>"><?php _e( 'Full Review', 'continuum'); ?> &raquo;</a>
					
					</div>
					
					<br class="clearer" />
				
				</div>
				
				<div class="bottom">&nbsp;</div>
                    
                </div>
                
                <?php if ($postcount % 3 == 0) { // new line every 3 panels ?>
                        
                    <br class="clearer" />
                
                <?php } ?>
            
        <?php endwhile; 
        endif; ?> 
        
        <br class="clearer" /><br />
    
    </div>
    
</div>

<?php wp_reset_query(); ?>