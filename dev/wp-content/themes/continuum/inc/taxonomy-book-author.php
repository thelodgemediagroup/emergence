<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_review_layout = $con_reviews['review_layout'];
$con_review_num = $con_reviews['review_num'];
$con_review_ad_num = $con_ads['review_ad_num'];
$con_review_ads_increment = $con_ads['review_ads_increment'];
$con_review_ads_offset = $con_ads['review_ads_offset'];
$con_review_ad_1 = $con_ads['review_ad_1'];
$con_review_ad_2 = $con_ads['review_ad_2'];
$con_review_ad_3 = $con_ads['review_ad_3'];
$con_review_ad_4 = $con_ads['review_ad_4'];
$con_review_ad_5 = $con_ads['review_ad_5'];
$con_review_ad_6 = $con_ads['review_ad_6'];
$con_review_ad_7 = $con_ads['review_ad_7'];
$con_review_ad_8 = $con_ads['review_ad_8'];
$con_review_ad_9 = $con_ads['review_ad_9'];
$con_review_ad_10 = $con_ads['review_ad_10'];
$con_review_unique_sidebar = $con_reviews['review_unique_sidebar'];
$con_feed_social = $con_feed['feed_social'];
$con_review_books_bottomline_text = $con_reviews['review_books_bottomline_text'];
?>

<?php // user specified a unique review sidebar
if ($con_review_unique_sidebar) {
	$con_review_unique_sidebar="Sidebar All Reviews";
} else {
	$con_review_unique_sidebar="Sidebar Default";
}
?>

<?php // get sorting requests
if(isset($_REQUEST['feedsort'])) {
	$feedsort=$_REQUEST['feedsort'];
} else {
	$feedsort="";
}
?>

<?php // setup header text
$current_term = get_term_by( 'slug', $wp_query->query_vars['book_author'], 'book_author' );
$headertext=$current_term->name.__(' Book Reviews:','continuum');
?>

<?php // setup the query
global $query_string;
$args=$query_string . '&paged='.$paged.'&order=DESC&orderby='.$feedsort.'&meta_key=Rating&posts_per_page='.$con_review_num;
?>

<?php $review_loop = new WP_Query($args); ?>

<div id="feed-wrapper" class="category">

    <div id="feed-leftend">&nbsp;</div>

    <div id="feed">
    
    	<div class="icon book">&nbsp;</div>

        <div class="header gentesque">
        
            <?php _e( $headertext, 'continuum' ); ?>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Newest book reviews for all authors', 'continuum' ); ?>" class="<?php if($feedsort=='' || $feedsort=='date') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('date') ?>"><?php _e( 'Recent', 'continuum' ); ?></a>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Highest rated books for all authors', 'continuum' ); ?>" class="<?php if($feedsort=='meta_value') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('meta_value') ?>"><?php _e( 'Highest Rated', 'continuum' ); ?></a>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Newest reviews sorted by most commented', 'continuum' ); ?>" class="<?php if($feedsort=='comment_count') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('comment_count') ?>"><?php _e( 'Most Commented', 'continuum' ); ?></a>
        
        </div>
        
        <div class="sort">
        
            <a title="<?php _e( 'Randomize all book reviews', 'continuum' ); ?>" class="<?php if($feedsort=='rand') { ?>current <?php } ?>tooltip" href="<?php con_get_feed_link('rand') ?>"><?php _e( 'Random', 'continuum' ); ?></a>
        
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
                         1 => $con_review_ad_1,
                         2 => $con_review_ad_2,
                         3 => $con_review_ad_3,
                         4 => $con_review_ad_4,
                         5 => $con_review_ad_5,
                         6 => $con_review_ad_6,
                         7 => $con_review_ad_7,
                         8 => $con_review_ad_8,
                         9 => $con_review_ad_9,
                         10 => $con_review_ad_10
                         );	 ?>
                         
        <?php if($con_review_layout=="A") { ?>
        
            <?php $postcount=0; ?>
            
            <?php $adcount=0; ?>
            
            <?php if ($review_loop->have_posts()) : while ($review_loop->have_posts()) : $review_loop->the_post(); $postcount++; ?>	
            
            	<?php // if we're sorting by rating and this item does not have a rating, hide it
				$rating = get_post_meta($post->ID, "Rating", $single = true); 
				if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) { ?>
            
					<?php if($con_review_ad_num!=0) { // display ads in the feed ?>			
                    
                        <?php if($postcount==$con_review_ads_offset+1) { // the first ad to display ?>
                        
                            <div class="feed-panel reviews<?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">
                        
                                <?php $adcount++; ?>
                        
                            <div class="ad">
                                
                                    <?php echo $ads[$adcount]; ?>
                                    
                                </div>
                                
                            </div>
                            
                       		<?php if ($postcount % 3 == 0) { // new line every 3 panels ?>
                            
                                <br class="clearer" />
                        
                            <?php } ?>
                            
                            <?php $postcount++; ?>
                            
                        <?php } elseif ((($postcount-$con_review_ads_offset-1) % ($con_review_ads_increment)==0) && ($postcount>$con_review_ads_offset) && ($con_review_ad_num>$adcount)) { // incremented ads ?>
                        
                            <div class="feed-panel reviews<?php if ($postcount % 3 == 0) { ?> right-most<?php } ?>">
                        
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
                                $terms = wp_get_object_terms($post->ID,'book_author');
                                
                                $cat_name = $terms[0]->name;
								$cat_slug = $terms[0]->slug;
                                $cat_link = get_term_link($cat_slug, 'book_author');
                                if($cat_name=="") {
                                    $cat_list = get_the_term_list( $post->ID, 'book_author', ' ', ', ', '' );
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
                    
                <?php } ?>
                
            <?php endwhile; 
            endif; ?> 
            
            <br class="clearer" />
                            
            <?php // pagination
			pagination($review_loop->max_num_pages);
			?>  
            
            <br class="clearer" /><br />
        
        <?php } elseif ($con_review_layout=="B") { ?>
        
            <div class="left-panel"> <!-- begin left panel -->
        
                <?php if ($review_loop->have_posts()) : while ($review_loop->have_posts()) : $review_loop->the_post(); $postcount++; ?>
                
                	<?php // if we're sorting by rating and this item does not have a rating, hide it
					$rating = get_post_meta($post->ID, "Rating", $single = true); 
					if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) { ?>
                
						<?php if($con_review_ad_num!=0) { // display ads in the feed ?>			
                    
                        <?php if($postcount==$con_review_ads_offset+1) { // the first ad to display ?>
                        
                            <div class="feed-panel reviews<?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                        
                                <?php $postcount+=1; ?>
                                <?php $adcount+=1; ?>
                            
                                <div class="ad">
                                
                                    <?php echo $ads[$adcount]; ?>
                                    
                                </div>
                                
                            </div>
                            
                       		<?php if ($postcount % 2 == 0) { // new line every 3 panels ?>
                            
                                <br class="clearer" />
                        
                            <?php } ?>
                            
                        <?php } elseif ((($postcount-$con_review_ads_offset-1) % ($con_review_ads_increment)==0) && ($postcount>$con_review_ads_offset) && ($con_review_ad_num>$adcount)) { // incremented ads ?>
                        
                            <div class="feed-panel reviews<?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                        
                                <?php $postcount+=1; ?>
                                <?php $adcount+=1; ?>
                            
                                <div class="ad">
                                
                                    <?php echo $ads[$adcount]; ?>
                                    
                                </div>
                            
                            </div>
                            
                            <?php if ($postcount % 2 == 0) { // new line every 3 panels ?>
                            
                                <br class="clearer" />
                        
                            <?php } ?>
                            
                        <?php } ?>
                        
                    <?php } // end if display ads in the feed ?>
                        
                        <?php // get review info
                        $ratings = con_setup_rating($rating); //setup the ratings array	
                        $award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?					
                        ?>
                        
                        <div class="feed-panel reviews<?php if ($postcount % 2 == 0) { ?> right-most<?php } ?>">
                        
                            <div class="top">&nbsp;</div>
                            
                            <div class="inner">
                        
                                <?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                
                                <?php if($award) { ?>
                            
                                    <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                
                                <?php } ?>
                                
                                <div class="category">                        
                                    
                                    <?php //get the top-level taxonomy
                                    $terms = wp_get_object_terms($post->ID,'book_author');
                                    
                                    $cat_name = $terms[0]->name;
									$cat_slug = $terms[0]->slug;
                                    $cat_link = get_term_link($cat_slug, 'book_author');
                                    if($cat_name=="") {
                                        $cat_list = get_the_term_list( $post->ID, 'book_author', ' ', ', ', '' );
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
                    
                    <?php if ($postcount % 2 == 0) { // new line every 3 panels ?>
                        
                        <br class="clearer" />
                    
                    <?php } ?>
                        
                    <?php } ?>
                
                <?php endwhile; 
                endif; ?> 
                
                <br class="clearer" />
                
                <?php // pagination
                pagination($review_loop->max_num_pages);
                ?>   
                
                <br class="clearer" />                 
            
            </div> <!-- end left panel -->
            
            <div class="right-panel sidebar"> <!-- begin right sidebar -->
            
                <div class="inner">
                
                	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Book Reviews') ) : else : ?>
                    
                    <?php endif; ?>
            
                    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_review_unique_sidebar) ) : else : ?>
                    
                    <?php endif; ?>
                    
                </div>
            
            </div>
            
            <br class="clearer" /><br />
            
        <?php } elseif ($con_review_layout=="C") { ?>
        
            <div class="feed-vertical-wrapper">
        
                <div class="left-panel"> <!-- begin left panel -->
        
                    <?php if ($review_loop->have_posts()) : while ($review_loop->have_posts()) : $review_loop->the_post(); $postcount++; ?>    
                    
                    	<?php // if we're sorting by rating and this item does not have a rating, hide it
						$rating = get_post_meta($post->ID, "Rating", $single = true); 
						if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) { ?>                
                                                
                            <div class="feed-vertical">
                            
                                <div class="inner">
                                
                                    <?php // get review info
                                    $ratings = con_setup_rating($rating); //setup the ratings array	
                                    $award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?					
                                    ?>
                                    
                                    <?php if(has_post_thumbnail()) { ?>
                                    
                                        <div class="article-image">
                                        
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
                                    
                                        <?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                        
                                        <div class="category-link">
                                        
                                            <?php //get the top-level taxonomy
                                            $terms = wp_get_object_terms($post->ID,'book_author');
                                            
                                            $cat_name = $terms[0]->name;
											$cat_slug = $terms[0]->slug;
                                            $cat_link = get_term_link($cat_slug, 'book_author');
                                            if($cat_name=="") {
                                                $cat_list = get_the_term_list( $post->ID, 'book_author', ' ', ', ', '' );
                                                echo $cat_list;
                                            } else { ?>
                                                <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
                                            <?php }?>  
                                            
                                        </div>
                                        
                                        <?php if($award) { ?>
                                    
                                            <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>
                                        
                                        <?php } ?>   
                                        
                                        <br class="clearer" />                           
                                    
                                        <h1 class="adelle"><a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                        
                                        <div class="excerpt-wrapper">
                                        
                                            <div class="excerpt">
                                            
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
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        <a class="read-more" href="<?php the_permalink(); ?>"><b><?php _e( 'Full Review', 'continuum' ); ?> &raquo;</b></a>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <br class="clearer" />
                            
                        <?php } ?>
                    
                    <?php endwhile; 
                    endif; ?> 
                    
                    <div class="feed-vertical">
                    
                        <?php // pagination
						pagination($review_loop->max_num_pages);
						?>  
                        
                        <br class="clearer" />
                    
                    </div>
            
                </div> <!-- end left panel -->
                
                <div class="right-panel sidebar alt"> <!-- begin right sidebar -->
                
                    <div class="inner">
                
						<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Book Reviews') ) : else : ?>
                        
                        <?php endif; ?>
                
                        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_review_unique_sidebar) ) : else : ?>
                        
                        <?php endif; ?>
                        
                    </div>
                
                </div>
                
                <br class="clearer" />
                
            </div>
    
        <?php } ?>
    
    </div>
    
</div>	

<?php wp_reset_query(); ?>