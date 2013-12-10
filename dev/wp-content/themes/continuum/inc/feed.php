<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_feed_latest = $con_feed['feed_latest'];
$con_feed_latest_cats = $con_feed['feed_latest_cats'];
$con_feed_latest_num = $con_feed['feed_latest_num'];
$con_feed_social = $con_feed['feed_social'];
$con_feed_layout = $con_feed['feed_layout'];
$con_feed_header = $con_feed['feed_header'];
$con_feed_num = $con_feed['feed_num'];
$con_feed_ad_num = $con_ads['feed_ad_num'];
$con_feed_ads_increment = $con_ads['feed_ads_increment'];
$con_feed_ads_offset = $con_ads['feed_ads_offset'];
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
$con_feed_unique_sidebar = $con_feed['feed_unique_sidebar'];
$con_home_latest_show = $con_front['home_latest_show'];
$con_home_latest_position = $con_front['home_latest_position'];
$con_spotlight_show = $con_front['spotlight_show'];
$con_review_movies_bottomline_text = $con_reviews['review_movies_bottomline_text'];
$con_review_books_bottomline_text = $con_reviews['review_books_bottomline_text'];
$con_review_games_bottomline_text = $con_reviews['review_games_bottomline_text'];
$con_review_music_bottomline_text = $con_reviews['review_music_bottomline_text'];
$con_review_products_bottomline_text = $con_reviews['review_products_bottomline_text'];
//single page layout values
$con_feed_single_header = $con_feed['feed_single_header'];
$con_feed_single_num = $con_feed['feed_single_num'];
$con_feed_single_social = $con_feed['feed_single_social'];
$con_feed_single_ad_num = $con_ads['feed_single_ad_num'];
$con_feed_single_ads_increment = $con_ads['feed_single_ads_increment'];
$con_feed_single_ads_offset = $con_ads['feed_single_ads_offset'];
$con_inject_reviews = $con_reviews['inject_reviews'];
?>

<?php // user specified a unique feed sidebar
if ($con_feed_unique_sidebar) {
	$con_feed_unique_sidebar="Sidebar Feed";
} else {
	$con_feed_unique_sidebar="Sidebar Default";
}
?>

<?php
$con_feed_single=false;
if(is_single()) {
	$con_feed_header = $con_feed_single_header;
	$con_feed_num = $con_feed_single_num;
	$con_feed_ad_num = $con_feed_single_ad_num;
	$con_feed_ads_increment = $con_feed_single_ads_increment;
	$con_feed_ads_offset = $con_feed_single_ads_offset;
	$con_feed_single = true;
	$con_feed_social = $con_feed_single_social;
}
?>

<?php if(!is_front_page()) { // see if user specified override values in post meta
	$override = get_post_meta($post->ID, "Feed Layout", $single = true);
	if($override!="") $con_feed_layout=$override;
	$override = get_post_meta($post->ID, "Feed Header", $single = true);
	if($override!="") $con_feed_header=$override;
	$override = get_post_meta($post->ID, "Feed Posts Per Page", $single = true);
	if($override!="") $con_feed_post_num=$override;
	$override = get_post_meta($post->ID, "Feed Number Of Ads", $single = true);
	if($override!="") $con_feed_ad_num=$override; //how many ads to display on the home page?
	$override = get_post_meta($post->ID, "Feed Ad Increment", $single = true);
	if($override!="") $con_feed_ads_increment=$override; //how often to display ads?
	$override = get_post_meta($post->ID, "Feed Ad Offset", $single = true);
	if($override!="") $con_feed_ads_offset=$override; //how soon until you want to display the first ad?
	$override = get_post_meta($post->ID, "Feed Layout D Header", $single = true);
	if($override!="") $con_feed_latest=$override; //what should the "latest by category" header text say?
} ?>

<?php //for single pages, only layout A is used
if($con_feed_single) {
	$con_feed_layout = "A";	
}
?>

<?php // get sorting requests
if(isset($_REQUEST['feedsort'])) {
	$feedsort=$_REQUEST['feedsort'];
} else {
	$feedsort="";
}
if($con_feed_single && $feedsort=="") {
	$feedsort = "related";
}
?>

<?php // setup the query
if(is_page_template('template-home.php') && is_front_page()) {
	$paged = (get_query_var('page')) ? get_query_var('page') : 1; //use the page var instead of paged (paged does not work on home page templates - WP error)
}
$hiderelated=false; //used if there are not related posts
if($con_feed_single && $feedsort=="related") { 
	$tags = wp_get_post_tags($post->ID);	
	$tag_ids = array();
	foreach($tags as $individual_tag) { // get related tags but don't include "template" tags (i.e. spotlight & breaking)
		$tag=$individual_tag->term_id;
		$tagname=$individual_tag->name;
		if($tagname!="spotlight" && $tagname!="breaking") {
			$tag_ids[] = $tag;
			//echo "tag=" . $tagname;
		}
	};	
	$feedargs=array( // get articles with these same tags
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page' => $con_feed_num,
		'paged' => $paged,
		'ignore_sticky_posts'=>1
	);
	$test_loop = new WP_Query($feedargs);
	if(!$test_loop->have_posts()) {
		$feedsort="more";
		$hiderelated=true; //there are no related posts
	}	
}
wp_reset_query();

if($con_feed_single && $feedsort=="more") {
	$category = get_the_category();
	$cat_tree = get_category_parents($category[0]->term_id, FALSE, ':', TRUE);
	$top_cat = split(':',$cat_tree);	
	$idObj = get_category_by_slug($top_cat[0]); 
  	$id = $idObj->term_id;
	$name = $idObj->name;
	$feedargs=array( // get articles with this same category
		'cat' => $id,
		'post__not_in' => array($post->ID),
		'posts_per_page' => $con_feed_num,
		'paged' => $paged,
		'ignore_sticky_posts'=>1
	);	
} elseif(!$con_feed_single && $feedsort!="related") {	
	if($con_inject_reviews) {
		$feedargs = array( 'post_type' => array( 'post', 'con_movie_reviews', 'con_music_reviews', 'con_game_reviews', 'con_book_reviews', 'con_product_reviews' ), 'posts_per_page' => $con_feed_num, 'paged' => $paged, 'order' => 'DESC', 'orderby' => $feedsort);	
	} else {
		$feedargs = array( 'posts_per_page' => $con_feed_num, 'paged' => $paged, 'order' => 'DESC', 'orderby' => $feedsort);
	}
}

$feed_loop = new WP_Query($feedargs);	
?>

<?php if($con_feed_layout=="A" || $con_feed_layout=="B" || $con_feed_layout=="C") { //feed bar ?>

	<div id="feed-wrapper"<?php if(!$con_spotlight_show && (!$con_home_latest_show || $con_home_latest_position=="below")) { ?> class="category"<?php } ?> >
	
		<div id="feed-leftend">&nbsp;</div>
	
		<div id="feed"<?php if(!$con_feed_social) { ?> class="hide-social"<?php } ?>>
	
			<div class="header gentesque">
			
				<?php echo $con_feed_header; ?>
			
			</div>
            
            <?php if($con_feed_single) { ?>
            
            	<?php if(!$hiderelated) { ?>
                    <div class="sort">
                    
                        <a title="<?php _e( 'Show posts with similar tags', 'continuum' ); ?>" class="<?php if($feedsort=='related') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('related') ?>"><?php _e( 'Related', 'continuum' ); ?></a>                    
                    </div>
                <?php } ?>
                
                <div class="sort">
                
                	<?php // get parent category
					if(get_post_type() == 'post') {
						$category = get_the_category();
						$cat_tree = get_category_parents($category[0]->term_id, FALSE, ':', TRUE);
						$top_cat = split(':',$cat_tree);
						$parentObj = get_category_by_slug($top_cat[0]);
						$parent = $parentObj->name;
					} else {
						$parent = "";
					}
					?>
                
                    <a title="<?php _e( 'Show posts in this category', 'continuum' ); ?>" class="<?php if($feedsort=='more') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('more') ?>"><?php _e( 'More from ', 'continuum' ); echo $parent; ?></a>
                
                </div>
                
            <?php } else { ?>
			
                <div class="sort">
                
                    <a title="<?php _e( 'Newest posts in all categories', 'continuum' ); ?>" class="<?php if($feedsort=='' || $feedsort=='date') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('date') ?>"><?php _e( 'Recent', 'continuum' ); ?></a>
                
                </div>
                
                <div class="sort">
                
                    <a title="<?php _e( 'Newest posts sorted by most commented', 'continuum' ); ?>" class="<?php if($feedsort=='comment_count') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('comment_count') ?>"><?php _e( 'Most Commented', 'continuum' ); ?></a>
                
                </div>
                
                <div class="sort">
                
                    <a title="<?php _e( 'Randomize all posts', 'continuum' ); ?>" class="<?php if($feedsort=='rand') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('rand') ?>"><?php _e( 'Random', 'continuum' ); ?></a>
                
                </div>
                
            <?php } ?>
			
		</div>
        
        <?php if($con_feed_social) { ?>
		
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
                             
            <?php if($con_feed_layout=="A") { ?>
            
				<?php $postcount=0; ?>
                
                <?php $adcount=0; ?>
                
				<?php if ($feed_loop->have_posts()) : while ($feed_loop->have_posts()) : $feed_loop->the_post(); $postcount++; ?>	
                
                	<?php
					$posttype=get_post_type();
					$isreview=false;
					if($posttype!='post') $isreview=true;
					?>
                
                	<?php if($con_feed_ad_num!=0) { // display ads in the feed ?>			
					
						<?php if($postcount==$con_feed_ads_offset+1) { // the first ad to display ?>
                        
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
                            
                        <?php } elseif ((($postcount-$con_feed_ads_offset-1) % ($con_feed_ads_increment)==0) && ($postcount>$con_feed_ads_offset) && ($con_feed_ad_num>$adcount)) { // incremented ads ?>
                        
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
                            
                        <?php } ?>
                        
                    <?php } // end if display ads in the feed ?>
                    
                    <?php // get review info
					if($isreview) {
						$rating = get_post_meta($post->ID, "Rating", $single = true); 
						$ratings = con_setup_rating($rating); //setup the ratings array	
						$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?	
					}
					?>
					
					<div class="feed-panel<?php if($isreview) { ?> reviews<?php } ?><?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">
					
						<div class="top">&nbsp;</div>
						
						<div class="inner">	
                            
                            <?php if($isreview) { ?>
                            
								<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                        
								<?php if($award) { ?>
                            
                                    <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                
                                <?php } ?>
                                
                            <?php } ?>
							
							<div class="category">
                            
                            	<?php // determine the category to display 
								$posttype = get_post_type( $post );
								if($posttype == "con_product_reviews") {
									$terms = wp_get_object_terms($post->ID,'product_category');							
									$catname = $terms[0]->name;
									$catslug = $terms[0]->slug;
									$catlink = get_term_link($catslug, 'product_category');	
									if($catname=="") {
										$cat_list = get_the_term_list( $post->ID, 'product_category', ' ', ', ', '' );
										echo $cat_list;
									} else { ?>
										<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
									<?php }
								} elseif($posttype == "con_game_reviews") {
									$terms = wp_get_object_terms($post->ID,'game_genre');							
									$catname = $terms[0]->name;
									$catslug = $terms[0]->slug;
									$catlink = get_term_link($catslug, 'game_genre');
									if($catname=="") {
										$cat_list = get_the_term_list( $post->ID, 'game_genre', ' ', ', ', '' );
										echo $cat_list;
									} else { ?>
										<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
									<?php }	
								} elseif($posttype == "con_book_reviews") {
									$terms = wp_get_object_terms($post->ID,'book_author');							
									$catname = $terms[0]->name;
									$catslug = $terms[0]->slug;
									$catlink = get_term_link($catslug, 'book_author');	
									if($catname=="") {
										$cat_list = get_the_term_list( $post->ID, 'book_author', ' ', ', ', '' );
										echo $cat_list;
									} else { ?>
										<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
									<?php }
								} elseif($posttype == "con_movie_reviews") {
									$terms = wp_get_object_terms($post->ID,'movie_genre');							
									$catname = $terms[0]->name;
									$catslug = $terms[0]->slug;
									$catlink = get_term_link($catslug, 'movie_genre');
									if($catname=="") {
										$catlist = get_the_term_list( $post->ID, 'movie_genre', ' ', ', ', '' );
										echo $cat_list;
									} else { ?>
										<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
									<?php }	
								} elseif($posttype == "con_music_reviews") {
									$terms = wp_get_object_terms($post->ID,'music_genre');							
									$catname = $terms[0]->name;
									$catslug = $terms[0]->slug;
									$catlink = get_term_link($catslug, 'music_genre');	
									if($catname=="") {
										$catlist = get_the_term_list( $post->ID, 'music_genre', ' ', ', ', '' );
										echo $cat_list;
									} else { ?>
										<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
									<?php }
								} else {                    
									$category = get_the_category();
									$catname = $category[0]->cat_name;
									$catlink = get_category_link( $category[0]->cat_ID ); ?>                                    
                                    <a class="tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>                                                               
								<?php } ?>
							
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
                                
                                	<?php if($posttype == "con_movie_reviews") { ?>
                                
										<?php $director_list = get_the_term_list( $post->ID, 'movie_director', __('Director: ','continuum'), ', ', '' ); ?>
                            
                                        <?php echo $director_list; ?><br />
                                        
                                        <?php $actor_list = get_the_term_list( $post->ID, 'movie_actor', __('Actors: ','continuum'), ', ', '' ); ?>
                                
                                        <?php echo $actor_list; ?><br />
                                        
                                        <?php $genre_list = get_the_term_list( $post->ID, 'movie_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                        
										<?php echo $genre_list; ?><br /><br />
                                        
                                        <?php echo $con_review_movies_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                        <?php if($award) { ?>
                                            <span class="gentesque award-text"><?php echo $award; ?></span>
                                        <?php } ?>
                                        
                                    <?php } elseif($posttype == "con_music_reviews") { ?>
                                    
                                    	<?php $artist_list = get_the_term_list( $post->ID, 'music_artist', __('Artist: ','continuum'), ', ', '' ); ?>
                        
										<?php echo $artist_list; ?><br />
                                        
                                        <?php $type_list = get_the_term_list( $post->ID, 'music_type', __('Review Type: ','continuum'), ', ', '' ); ?>
                                
                                        <?php echo $type_list; ?><br />
                                        
                                        <?php $genre_list = get_the_term_list( $post->ID, 'music_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                        
										<?php echo $genre_list; ?><br /><br />
                                        
                                        <?php echo $con_review_music_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                        <?php if($award) { ?>
                                            <span class="gentesque award-text"><?php echo $award; ?></span>
                                        <?php } ?>
                                    
                                    <?php } elseif($posttype == "con_game_reviews") { ?>
                                    
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
                                    
                                    <?php } elseif($posttype == "con_book_reviews") { ?>
                                    
                                    	<?php $genre_list = get_the_term_list( $post->ID, 'book_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                            
										<?php echo $genre_list; ?><br />
                                        
                                        <?php $publisher_list = get_the_term_list( $post->ID, 'book_publisher', __('Publisher: ','continuum'), ', ', '' ); ?>
                                
                                        <?php echo $publisher_list; ?><br />
                                        
                                        <?php $author_list = get_the_term_list( $post->ID, 'book_author', __('Author: ','continuum'), ', ', '' ); ?>
                                        
										<?php echo $author_list; ?><br /><br />
                                        
                                        <?php echo $con_review_books_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                        <?php if($award) { ?>
                                            <span class="gentesque award-text"><?php echo $award; ?></span>
                                        <?php } ?>
                                    
                                    <?php } elseif($posttype == "con_product_reviews") { ?>
                                    
                                    	<?php $price_list = get_the_term_list( $post->ID, 'product_price', __('Price: ','continuum'), ', ', '' ); ?>
					
										<?php echo $price_list; ?><br />
                                        
                                        <?php $brand_list = get_the_term_list( $post->ID, 'product_brand', __('Brand: ','continuum'), ', ', '' ); ?>
                                
                                        <?php echo $brand_list; ?><br />
                                        
                                        <?php $cat_list = get_the_term_list( $post->ID, 'product_category', __('Category: ','continuum'), ', ', '' ); ?>
                                        
										<?php echo $cat_list; ?><br /><br />
                                        
                                        <?php echo $con_review_products_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                        <?php if($award) { ?>
                                            <span class="gentesque award-text"><?php echo $award; ?></span>
                                        <?php } ?>
                                        
                                    <?php } else { ?>
							
										<?php con_feed_excerpt(); ?>
                                        
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
							
									<?php if(comments_open()) { ?>
							
									<?php comments_popup_link('0', '1', '%', 'tooltip', '-'); ?>
                                    
                                <?php } else { ?>
                                
                                	&nbsp;
                                
                                <?php } ?>
                                    
                                <?php } else { ?>
                                
                                	&nbsp;
                                
                                <?php } ?>
							
							</div>
							
							<div class="fullstory">
                            
                            	<?php if($isreview) { ?>
                                
                                	<a href="<?php the_permalink(); ?>"><?php _e( 'Full Review', 'continuum'); ?> &raquo;</a>
                                
                                <?php } else { ?>
							
									<a href="<?php the_permalink(); ?>"><?php _e( 'Full Story', 'continuum'); ?> &raquo;</a>
                                
                                <?php } ?>
							
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
                
                <br class="clearer" />
         	
				<?php // pagination
				if(!$con_feed_single) {
                	pagination($feed_loop->max_num_pages);
				}
                ?>  
                
                <br class="clearer" /><br />
			
			<?php } elseif ($con_feed_layout=="B") { ?>
            
            	<div class="left-panel"> <!-- begin left panel -->
            
            		<?php if ($feed_loop->have_posts()) : while ($feed_loop->have_posts()) : $feed_loop->the_post(); $postcount++; ?>
                    
                    	<?php
						$posttype=get_post_type();
						$isreview=false;
						if($posttype!='post') $isreview=true;
						?>
                    
                    	<?php if($con_feed_ad_num!=0) { // display ads in the feed ?>	
			
							<?php if($postcount==$con_feed_ads_offset+1) { // the first ad to display ?>
                            
                                <div class="feed-panel<?php if($isreview) { ?> reviews<?php } ?><?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                            
                                    <?php $adcount++; ?>
                            
                                <div class="ad">
                                    
                                        <?php echo $ads[$adcount]; ?>
                                        
                                    </div>
                                
                                </div>
                                
                                <?php if ($postcount % 2 == 0) { // new line every 2 panels ?>
                                
                                    <br class="clearer" />
                            
                                <?php } ?>
                                
                                <?php $postcount++; ?>
                                
                            <?php } elseif ((($postcount-$con_feed_ads_offset) % ($con_feed_ads_increment+1)==0) && ($postcount>$con_feed_ads_offset) && ($con_feed_ad_num>$adcount)) { // incremented ads ?>
                            
                                <div class="feed-panel<?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                            
                                    <?php $adcount++; ?>
                            
                                <div class="ad">
                                    
                                        <?php echo $ads[$adcount]; ?>
                                        
                                    </div>
                                
                                </div>
                                
                                <?php if ($postcount % 2 == 0) { // new line every 2 panels ?>
                                
                                    <br class="clearer" />
                            
                                <?php } ?>
                                
                                <?php $postcount++; ?>
                                
                            <?php } ?>
                            
                        <?php } // end if display ads in the feed ?>
                        
                        <?php // get review info
						if($isreview) {
							$rating = get_post_meta($post->ID, "Rating", $single = true); 
							$ratings = con_setup_rating($rating); //setup the ratings array	
							$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?	
						}
						?>
                        
                        <div class="feed-panel<?php if($isreview) { ?> reviews<?php } ?><?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                        
                            <div class="top">&nbsp;</div>
                            
                            <div class="inner">
                            
                            	<?php if($isreview) { ?>
                            
									<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                            
                                    <?php if($award) { ?>
                                
                                        <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                    
                                    <?php } ?>
                                
                            	<?php } ?>
                                
                                <div class="category">
                                
                                    <?php // determine the category to display 
									$posttype = get_post_type( $post );
									if($posttype == "con_product_reviews") {
										$terms = wp_get_object_terms($post->ID,'product_category');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'product_category');	
										if($catname=="") {
											$cat_list = get_the_term_list( $post->ID, 'product_category', ' ', ', ', '' );
											echo $cat_list;
										} else { ?>
											<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
										<?php }
									} elseif($posttype == "con_game_reviews") {
										$terms = wp_get_object_terms($post->ID,'game_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'game_genre');
										if($catname=="") {
											$cat_list = get_the_term_list( $post->ID, 'game_genre', ' ', ', ', '' );
											echo $cat_list;
										} else { ?>
											<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
										<?php }	
									} elseif($posttype == "con_book_reviews") {
										$terms = wp_get_object_terms($post->ID,'book_author');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'book_author');	
										if($catname=="") {
											$cat_list = get_the_term_list( $post->ID, 'book_author', ' ', ', ', '' );
											echo $cat_list;
										} else { ?>
											<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
										<?php }
									} elseif($posttype == "con_movie_reviews") {
										$terms = wp_get_object_terms($post->ID,'movie_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'movie_genre');
										if($catname=="") {
											$catlist = get_the_term_list( $post->ID, 'movie_genre', ' ', ', ', '' );
											echo $cat_list;
										} else { ?>
											<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
										<?php }	
									} elseif($posttype == "con_music_reviews") {
										$terms = wp_get_object_terms($post->ID,'music_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'music_genre');	
										if($catname=="") {
											$catlist = get_the_term_list( $post->ID, 'music_genre', ' ', ', ', '' );
											echo $cat_list;
										} else { ?>
											<a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
										<?php }
									} else {                    
										$category = get_the_category();
										$catname = $category[0]->cat_name;
										$catlink = get_category_link( $category[0]->cat_ID ); ?>                                    
										<a class="tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>                                                               
									<?php } ?>
                                
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
                                
                                        <?php if($posttype == "con_movie_reviews") { ?>
                                
											<?php $director_list = get_the_term_list( $post->ID, 'movie_director', __('Director: ','continuum'), ', ', '' ); ?>
                                
                                            <?php echo $director_list; ?><br />
                                            
                                            <?php $actor_list = get_the_term_list( $post->ID, 'movie_actor', __('Actors: ','continuum'), ', ', '' ); ?>
                                    
                                            <?php echo $actor_list; ?><br />
                                            
                                            <?php $genre_list = get_the_term_list( $post->ID, 'movie_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                            
                                            <?php echo $genre_list; ?><br /><br />
                                            
                                            <?php echo $con_review_movies_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                            <?php if($award) { ?>
                                                <span class="gentesque award-text"><?php echo $award; ?></span>
                                            <?php } ?>
                                            
                                        <?php } elseif($posttype == "con_music_reviews") { ?>
                                        
                                            <?php $artist_list = get_the_term_list( $post->ID, 'music_artist', __('Artist: ','continuum'), ', ', '' ); ?>
                            
                                            <?php echo $artist_list; ?><br />
                                            
                                            <?php $type_list = get_the_term_list( $post->ID, 'music_type', __('Review Type: ','continuum'), ', ', '' ); ?>
                                    
                                            <?php echo $type_list; ?><br />
                                            
                                            <?php $genre_list = get_the_term_list( $post->ID, 'music_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                            
                                            <?php echo $genre_list; ?><br /><br />
                                            
                                            <?php echo $con_review_music_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                            <?php if($award) { ?>
                                                <span class="gentesque award-text"><?php echo $award; ?></span>
                                            <?php } ?>
                                        
                                        <?php } elseif($posttype == "con_game_reviews") { ?>
                                        
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
                                        
                                        <?php } elseif($posttype == "con_book_reviews") { ?>
                                        
                                            <?php $genre_list = get_the_term_list( $post->ID, 'book_genre', __('Genre: ','continuum'), ', ', '' ); ?>
                                
                                            <?php echo $genre_list; ?><br />
                                            
                                            <?php $publisher_list = get_the_term_list( $post->ID, 'book_publisher', __('Publisher: ','continuum'), ', ', '' ); ?>
                                    
                                            <?php echo $publisher_list; ?><br />
                                            
                                            <?php $author_list = get_the_term_list( $post->ID, 'book_author', __('Author: ','continuum'), ', ', '' ); ?>
                                            
                                            <?php echo $author_list; ?><br /><br />
                                            
                                            <?php echo $con_review_books_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                            <?php if($award) { ?>
                                                <span class="gentesque award-text"><?php echo $award; ?></span>
                                            <?php } ?>
                                        
                                        <?php } elseif($posttype == "con_product_reviews") { ?>
                                        
                                            <?php $price_list = get_the_term_list( $post->ID, 'product_price', __('Price: ','continuum'), ', ', '' ); ?>
                        
                                            <?php echo $price_list; ?><br />
                                            
                                            <?php $brand_list = get_the_term_list( $post->ID, 'product_brand', __('Brand: ','continuum'), ', ', '' ); ?>
                                    
                                            <?php echo $brand_list; ?><br />
                                            
                                            <?php $cat_list = get_the_term_list( $post->ID, 'product_category', __('Category: ','continuum'), ', ', '' ); ?>
                                            
                                            <?php echo $cat_list; ?><br /><br />
                                            
                                            <?php echo $con_review_products_bottomline_text; ?> <?php echo $ratings[0]; ?> / 5 - <?php echo $ratings[2]; ?><br />
                                            <?php if($award) { ?>
                                                <span class="gentesque award-text"><?php echo $award; ?></span>
                                            <?php } ?>
                                            
                                        <?php } else { ?>
                                
                                            <?php con_feed_excerpt(); ?>
                                            
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
                                
                                    <?php if($isreview) { ?>
                                
                                        <a href="<?php the_permalink(); ?>"><?php _e( 'Full Review', 'continuum'); ?> &raquo;</a>
                                    
                                    <?php } else { ?>
                                
                                        <a href="<?php the_permalink(); ?>"><?php _e( 'Full Story', 'continuum'); ?> &raquo;</a>
                                    
                                    <?php } ?>
                                
                                </div>
                                
                                <br class="clearer" />
                            
                            </div>
                            
                            <div class="bottom">&nbsp;</div>
                                                        
                        </div>
                        
                        <?php if ($postcount % 2 == 0) { // new line every 2 panels ?>
                                
                            <br class="clearer" />
                    
                        <?php } ?>
                    
					<?php endwhile; 
                    endif; ?> 
                    
                    <br class="clearer" />
                    
                    <?php // pagination
					if(!$con_feed_single) {
						pagination($feed_loop->max_num_pages);
					}
					?>   
                    
                    <br class="clearer" />                 
                
                </div> <!-- end left panel -->
                
                <div class="right-panel sidebar"> <!-- begin right sidebar -->
                
                	<div class="inner">
                
                    	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_feed_unique_sidebar) ) : else : ?>
                        
                        	<div class="widget">
                            
                            	<div class="header-left">&nbsp;</div>
                                
                                <div class="header-middle">
                            
                                	<h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2>
                                    
                                </div>
                                
                                <div class="header-right">&nbsp;</div>
                                
                                <br class="clearer" />
                                
                                <div class="content-wrapper">
                                
                                	<div class="content">     <p>
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
                
                <br class="clearer" /><br />
                
            <?php } elseif ($con_feed_layout=="C") { ?>
            
            	<div class="feed-vertical-wrapper">
            
            		<div class="left-panel"> <!-- begin left panel -->
            
						<?php if ($feed_loop->have_posts()) : while ($feed_loop->have_posts()) : $feed_loop->the_post(); $postcount++; ?>
                        
                        	<?php
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
                                                    
                            <div class="feed-vertical">
                            
                                <div class="inner">
                            
                                    <?php // determine the category to display 
									$posttype = get_post_type( $post );
									if($posttype == "con_product_reviews") {
										$terms = wp_get_object_terms($post->ID,'product_category');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'product_category');	
									} elseif($posttype == "con_game_reviews") {
										$terms = wp_get_object_terms($post->ID,'game_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'game_genre');	
									} elseif($posttype == "con_book_reviews") {
										$terms = wp_get_object_terms($post->ID,'book_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'book_genre');	
									} elseif($posttype == "con_movie_reviews") {
										$terms = wp_get_object_terms($post->ID,'movie_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'movie_genre');	
									} elseif($posttype == "con_music_reviews") {
										$terms = wp_get_object_terms($post->ID,'music_genre');							
										$catname = $terms[0]->name;
										$catslug = $terms[0]->slug;
										$catlink = get_term_link($catslug, 'music_genre');	
									} else {                    
										$category = get_the_category();
										$catname = $category[0]->cat_name;
										$catlink = get_category_link( $category[0]->cat_ID );                            
									} ?>
                                    
                                    <?php if(has_post_thumbnail()) { ?>
                                    
                                        <div class="article-image">
                                        
                                        	<?php if($isreview) {
												con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
											} ?>
                                        
                                            <a class="darken" href="<?php the_permalink(); ?>">
                                    
                                                <?php the_post_thumbnail('feed-vertical', array( 'title' => '' )); ?>
                                                
                                            </a>
                                            
                                        </div>
                                        
                                    <?php } else { ?>
                                    
                                        <div class="article-image-placeholder">&nbsp;</div>
                                    
                                    <?php } ?>
                                    
                                    <div class="article">
                                    
                                    	<?php if(comments_open()) { ?>
                                
                                            <div class="comments">
                                            
                                                <div class="number">
                                    
                                                    <?php comments_popup_link('0', '1', '%', '', '-'); ?>
                                                    
                                                </div>
                                                
                                                <div class="label">
                                                
                                                    <?php _e( 'comments', 'continuum' ); ?>
                                                
                                                </div>
                                            
                                            </div>
                                            
                                        <?php } ?>
                                        
                                        <?php if($isreview && $award) { ?>
                                
                                            <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                        
                                        <?php } ?>
                                    
                                        <a class="category gentesque tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>
                                    
                                        <h1 class="adelle"><a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                        
                                        <div class="desc">
                                        
                                            <?php _e( 'Posted ', 'continuum' ); ?>&nbsp;<?php echo get_the_date(); ?>&nbsp;<?php _e( ' by ', 'continuum' ); ?>&nbsp;<?php echo get_the_author_link(); ?>
                                        
                                        </div>
                                        
                                        <div class="excerpt-wrapper">
                                        
                                            <div class="excerpt">
                                            
                                                <?php the_excerpt(); ?>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        <?php if($isreview) { ?>
                                        
                                        	<a class="read-more" href="<?php the_permalink(); ?>"><b><?php _e( 'Full Review', 'continuum' ); ?> &raquo;</b></a>
                                        
                                       	<?php } else { ?>
                                        
                                        	<a class="read-more" href="<?php the_permalink(); ?>"><b><?php _e( 'Full Story', 'continuum' ); ?> &raquo;</b></a>
                                            
                                        <?php } ?>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <br class="clearer" />
                        
                        <?php endwhile; 
                        endif; ?> 
                        
                        <div class="feed-vertical">
                        
							<?php // pagination
							if(!$con_feed_single) {
								pagination($feed_loop->max_num_pages);
							}
							?>
                            
                            <br class="clearer" />
                        
                        </div>
                
                    </div> <!-- end left panel -->
                    
                    <div class="right-panel sidebar alt"> <!-- begin right sidebar -->
                    
                        <div class="inner">
                    
                            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_feed_unique_sidebar) ) : else : ?>
                            
                                <div class="widget">
                                
                                    <div class="header-left">&nbsp;</div>
                                    
                                    <div class="header-middle">
                                
                                        <h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2>
                                        
                                    </div>
                                    
                                    <div class="header-right">&nbsp;</div>
                                    
                                    <br class="clearer" />
                                    
                                    <div class="content-wrapper">
                                    
                                        <div class="content">     <p>
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
		
			<?php } ?>
		
		</div>
		
	</div>
	
<?php } elseif ($con_feed_layout=="D") { // separate style for layout D ?>

    <div id="feed-panel-wrapper">

        <div class="latest-wrapper">
                    
            <div class="left-panel"> <!-- begin left panel -->
            
            	<div class="ribbon left"> 
                    
                    <div class="ribbon-inner">
                    
                        <div class="gentesque"><?php echo $con_feed_latest; ?></div>

                    </div>
                    
                </div> 
                
                <br class="clearer" />
                
                <?php 
				$catcount=0;
				$cats=explode(",",$con_feed_latest_cats); //setup array of latest categories
				$cat_ids = array(13,14,15,16);
				foreach ($cats as $cat) { //loop through each latest category
					$catcount++;
					$catname=trim($cat);
					if($catname!="") {
						$catid= $cat_ids[$catcount -1];
						$catlink=get_category_link($catid);
						?>
						
						<div class="catpanel-wrapper"> <!-- begin category panel -->
						
							<div class="inner">
								
								<a class="category gentesque tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>
								
								<a class="more" href="<?php echo $catlink; ?>"><?php _e( 'More', 'continuum' ); ?> &raquo;</a>
								
								<br class="clearer" />
				
								<?php 								
								$feedargs = array('cat' => $catid, 'showposts' => $con_feed_latest_num);	
								$postcount=0;
								query_posts ( $feedargs );
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
							
									<div class="catpanel<?php if($postcount==$con_feed_latest_num) { ?> last<?php } elseif($postcount==1) { ?> first<?php } ?>"> 
									
										<?php if($postcount==1) { ?>
										
											<div class="article-image">
                                            
                                            	<?php if($isreview) {
													con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
												} ?>
										
												<a class="thumbnail darken" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('feed-latest', array( 'title' => '' )); ?></a>  
											
											</div>
										
											<a class="title first adelle" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											
										<?php } else { ?>
								
											<a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            
                                            <?php if($isreview) { ?>
                                                <div class="stars-wrapper">
                                                    <?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts  ?>
                                                </div>
                                                <br class="clearer" />
                                            <?php } ?> 
										
										<?php } ?>
										
									</div>
									
								<?php endwhile; endif; ?>
								
							</div>
						
						</div> <!-- end category panel -->   
                        
                    <?php } ?> 
                    
                    <?php if ($catcount % 2 == 0) { ?> <br class="clearer" /> <?php } ?> 
                    
				<?php } ?>
                
                <br class="clearer" />
        
            </div> <!-- end left panel -->
            
            <div class="right-panel sidebar alt"> <!-- begin right sidebar -->
            
            	<div class="ribbon right">
                        
                    <div class="ribbon-inner">
                    
                        <?php con_get_social(); ?>
                    
                    </div>
                    
                </div>
                
                <br class="clearer" />
            
                <div class="inner">
            
                    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_feed_unique_sidebar) ) : else : ?>
                    
                        <div class="widget">
                        
                            <div class="header-left">&nbsp;</div>
                            
                            <div class="header-middle">
                        
                                <h2 class="gentesque"><?php _e(' About Continuum ', 'continuum' ); ?></h2>
                                
                            </div>
                            
                            <div class="header-right">&nbsp;</div>
                            
                            <br class="clearer" />
                            
                            <div class="content-wrapper">
                            
                                <div class="content">     <p>
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
    
    </div>

<?php } ?>

<?php wp_reset_query(); ?>