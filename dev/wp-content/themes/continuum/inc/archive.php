<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_archive_layout = $con_layout['archive_layout'];
$con_archive_header = $con_layout['archive_header'];
$con_archive_num = $con_layout['archive_num'];
$con_archive_ad_num = $con_ads['archive_ad_num'];
$con_archive_ads_increment = $con_ads['archive_ads_increment'];
$con_archive_ads_offset = $con_ads['archive_ads_offset'];
$con_archive_ad_1 = $con_ads['archive_ad_1'];
$con_archive_ad_2 = $con_ads['archive_ad_2'];
$con_archive_ad_3 = $con_ads['archive_ad_3'];
$con_archive_ad_4 = $con_ads['archive_ad_4'];
$con_archive_ad_5 = $con_ads['archive_ad_5'];
$con_archive_ad_6 = $con_ads['archive_ad_6'];
$con_archive_ad_7 = $con_ads['archive_ad_7'];
$con_archive_ad_8 = $con_ads['archive_ad_8'];
$con_archive_ad_9 = $con_ads['archive_ad_9'];
$con_archive_ad_10 = $con_ads['archive_ad_10'];
$con_archive_unique_sidebar = $con_layout['archive_unique_sidebar'];
$con_feed_social = $con_feed['feed_social'];
$con_archive_reviews = $con_reviews['archive_reviews'];
$con_archive_reviews = false;
$con_review_movies_bottomline_text = $con_reviews['review_movies_bottomline_text'];
$con_review_books_bottomline_text = $con_reviews['review_books_bottomline_text'];
$con_review_games_bottomline_text = $con_reviews['review_games_bottomline_text'];
$con_review_music_bottomline_text = $con_reviews['review_music_bottomline_text'];
$con_review_products_bottomline_text = $con_reviews['review_products_bottomline_text'];
?>

<?php // user specified a unique archive sidebar
if ($con_archive_unique_sidebar) {
	$con_archive_unique_sidebar="Sidebar Archive";
} else {
	$con_archive_unique_sidebar="Sidebar Default";
}
?>

<?php // get sorting requests
if(isset($_REQUEST['feedsort'])) {
	$feedsort=$_REQUEST['feedsort'];
} else {
	$feedsort="";
}
if($con_archive_single && $feedsort=="") {
	$feedsort = "related";
}
?>

<?php // setup header text
if($con_archive_header=="") {
	$post = $posts[0]; // Hack. Set $post so that the_date() works.
	if (is_category()) {
		$con_archive_header = single_cat_title('', false);
	} elseif( is_tag() ) {
		$con_archive_header = __("Posts Tagged &#8216;".single_tag_title('', false)."&#8217;", "continuum");
	} elseif (is_day()) {
		$con_archive_header = __("Archive for ".get_the_date('F jS, Y'), "continuum");
	} elseif (is_month()) {
		$con_archive_header = __("Archive for ".get_the_date('F, Y'), "continuum");
	} elseif (is_year()) {
		$con_archive_header = __("Archive for ".get_the_date('Y'), "continuum");
	} elseif (is_author()) {
		$con_archive_header = __("Author Archive", "continuum");
	} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
		$con_archive_header = __("Blog Archives", "continuum");
	} 
} ?>

<?php // setup the query
global $query_string;
$archiveargs = $query_string . '&posts_per_page='.$con_archive_num.'&paged='.$paged.'&order=DESC&orderby='.$feedsort; 	
?>

<?php $archive_loop = new WP_Query($archiveargs); ?>

<div id="feed-wrapper" class="category">

    <div id="feed-leftend">&nbsp;</div>

    <div id="feed">

        <div class="header gentesque">
        
            <?php echo $con_archive_header; ?>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Newest posts in all categories', 'continuum' ); ?>" class="<?php if($feedsort=='' || $feedsort=='date') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('date') ?>"><?php _e( 'Recent', 'continuum' ); ?></a>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Newest posts sorted by most commented', 'continuum' ); ?>" class="<?php if($feedsort=='comment_count') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('comment_count') ?>"><?php _e( 'Most Commented', 'continuum' ); ?></a>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Randomize all posts', 'continuum' ); ?>" class="<?php if($feedsort=='rand') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('rand') ?>"><?php _e( 'Random', 'continuum' ); ?></a>
        
        </div>
        
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
                         1 => $con_archive_ad_1,
                         2 => $con_archive_ad_2,
                         3 => $con_archive_ad_3,
                         4 => $con_archive_ad_4,
                         5 => $con_archive_ad_5,
                         6 => $con_archive_ad_6,
                         7 => $con_archive_ad_7,
                         8 => $con_archive_ad_8,
                         9 => $con_archive_ad_9,
                         10 => $con_archive_ad_10
                         );	 ?>
                         
        <?php if($con_archive_layout=="A") { ?>
        
            <?php $postcount=0; ?>
            
            <?php $adcount=0; ?>
            
            <?php if ($archive_loop->have_posts()) : while ($archive_loop->have_posts()) : $archive_loop->the_post(); $postcount++; ?>	
            
            	<?php
				$posttype=get_post_type();
				$isreview=false;
				if($posttype!='post') $isreview=true;
				?>
            
                <?php if($con_archive_ad_num!=0) { // display ads in the feed ?>			
                
                    <?php if($postcount==$con_archive_ads_offset+1) { // the first ad to display ?>
                    
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
                        
                    <?php } elseif ((($postcount-$con_archive_ads_offset-1) % ($con_archive_ads_increment)==0) && ($postcount>$con_archive_ads_offset) && ($con_archive_ad_num>$adcount)) { // incremented ads ?>
                    
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
									$cat_list = get_the_term_list( $post->ID, 'movie_genre', ' ', ', ', '' );
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
									$cat_list = get_the_term_list( $post->ID, 'music_genre', ' ', ', ', '' );
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
                
                <?php if ($postcount % 3 == 0) { // new line every 3 panels ?>
                        
                    <br class="clearer" />
                
                <?php } ?>
                
            <?php endwhile; 
            endif; ?> 
            
            <br class="clearer" />
                            
            <?php // pagination
			pagination($archive_loop->max_num_pages);
			?>  
            
            <br class="clearer" /><br />
        
        <?php } elseif ($con_archive_layout=="B") { ?>
        
            <div class="left-panel"> <!-- begin left panel -->
        
                <?php if ($archive_loop->have_posts()) : while ($archive_loop->have_posts()) : $archive_loop->the_post(); $postcount++; ?>
                
                	<?php
					$posttype=get_post_type();
					$isreview=false;
					if($posttype!='post') $isreview=true;
					?>
                
                    <?php if($con_archive_ad_num!=0) { // display ads in the feed ?>	
        
                        <?php if($postcount==$con_archive_ads_offset+1) { // the first ad to display ?>
                        
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
                            
                        <?php } elseif ((($postcount-$con_archive_ads_offset) % ($con_archive_ads_increment+1)==0) && ($postcount>$con_archive_ads_offset) && ($con_archive_ad_num>$adcount)) { // incremented ads ?>
                        
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
										$cat_list = get_the_term_list( $post->ID, 'movie_genre', ' ', ', ', '' );
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
										$cat_list = get_the_term_list( $post->ID, 'music_genre', ' ', ', ', '' );
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
                pagination($archive_loop->max_num_pages);
                ?>   
                
                <br class="clearer" />                 
            
            </div> <!-- end left panel -->
            
            <div class="right-panel sidebar"> <!-- begin right sidebar -->
            
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
                            
                                <div class="content"><p>
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
            
        <?php } elseif ($con_archive_layout=="C") { ?>
        
            <div class="feed-vertical-wrapper">
        
                <div class="left-panel"> <!-- begin left panel -->
        
                    <?php if ($archive_loop->have_posts()) : while ($archive_loop->have_posts()) : $archive_loop->the_post(); $postcount++; ?>     
                    
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
                                    
                                        <?php _e( 'Posted '. get_the_date() .' by '. get_the_author_link(), 'continuum' ); ?>
                                    
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
						pagination($archive_loop->max_num_pages);
						?>  
                        
                        <br class="clearer" />
                    
                    </div>
            
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
                                
                                    <div class="content"><p>
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

<?php wp_reset_query(); ?>