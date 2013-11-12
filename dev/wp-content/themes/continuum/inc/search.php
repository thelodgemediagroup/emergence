<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_search_num = $con_layout['search_num'];
$con_search_unique_sidebar = $con_layout['search_unique_sidebar'];
?>

<?php // user specified a unique search sidebar
if ($con_search_unique_sidebar) {
	$con_search_unique_sidebar="Sidebar Search";
} else {
	$con_search_unique_sidebar="Sidebar Default";
}
?>

<?php // setup the query
global $query_string;
$args=$query_string . '&posts_per_page='.$con_search_num.'&paged='.$paged.'&order=DESC&orderby='.$feedsort; 
?>

<?php $search_loop = new WP_Query($args); ?>

<div id="page-content" class="search">
    
    <div class="left-panel"> <!-- begin left panel -->
    
        <h2 class="gentesque page-title"><?php _e( 'Search Results', 'continuum' ); ?></h2>

            <?php if ($search_loop->have_posts()) : while ($search_loop->have_posts()) : $search_loop->the_post(); $postcount++; ?>  
            
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
            else : ?>
            
                <div class="feed-vertical">
            
                    <div class="inner"> 
            
                        <?php _e( 'We could not find any results matching the search terms you provided. Please try another search or use the menu above to navigate our site.', 'continuum' ); ?>
                
                    </div>
                    
                </div>
            
            <?php endif; ?>
                               
            <br class="clearer" />
        
        <div class="feed-vertical">
        
            <?php // pagination
            pagination($search_loop->max_num_pages);
            ?>  
            
            <br class="clearer" />
        
        </div>

    </div> <!-- end left panel -->
    
    <div class="right-panel sidebar alt"> <!-- begin right sidebar -->
    
        <div class="inner">
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_search_unique_sidebar) ) : else : ?>
            
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

<?php wp_reset_query(); ?>