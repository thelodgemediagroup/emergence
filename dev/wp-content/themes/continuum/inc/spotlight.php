<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_spotlight_show = $con_front['spotlight_show'];
$con_spotlight_layout = $con_front['spotlight_layout'];
$con_spotlight_widgets = $con_front['spotlight_widgets'];
$con_spotlight_header_show = $con_front['spotlight_header_show'];
$con_spotlight_header_text = $con_front['spotlight_header_text'];
$con_spotlight_reactions_text = $con_front['spotlight_reactions_text'];
$con_reactions_num = $con_front['reaction_num'];
$con_spotlight_tag = $con_front['spotlight_tag'];
$con_spotlight_num = $con_front['spotlight_num'];
?>

<?php // see if user specified override values in post meta
$override = get_post_meta($post->ID, "Spotlight Layout", $single = true);
if($override!="") $con_spotlight_layout=$override;
$override = get_post_meta($post->ID, "Spotlight Widgets", $single = true);
if($override!="") {
	$con_spotlight_widgets=$override;
	if($con_spotlight_widgets=="false") {
		$con_spotlight_widgets=false;	
	} else {
		$con_spotlight_widgets=true;
	}
}
$spotlightargs = array('tag' => $con_spotlight_tag, 'posts_per_page' => $con_spotlight_num);
?>

<?php if($con_spotlight_show) { ?>
    
    <div id="spotlight-wrapper">
    
        <div id="spotlight">        	
    
            <?php if($con_spotlight_layout=="A") { // Spotlight layout type 1 ?>
            
                <div id="<?php if($con_spotlight_widgets) { ?>spotlight1<?php } else { ?>spotlight2<?php } ?>">   <!-- begin wrapper for the entire spotlight area -->                    
                        
                    <div class="left-panel"> <!-- begin wrapper for the left jquery slider -->
                    
                        <?php if($con_spotlight_header_show) { ?>
                        
                            <div class="header"> <!-- begin in the spotlight header -->
                        
                                <div class="ribbon left"> 
                            
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_header_text; ?></div>
                                    
                                    </div>
                                    
                                </div> 
                                
                            </div> <!-- end in the spotlight header -->
                            
                            <br class="clearer" />
                            
                        <?php } else { ?>
                            
                            <br />
                            
                        <?php } ?>
                        
                        <div id="slider1-wrapper">
                    
                            <div id="slider1"> <!-- begin jquery slider -->
                            
                                <?php // get the thumbnails
                                if($con_spotlight_widgets) { 
                                    $postsperpage = 5;
                                } else {
                                    $postsperpage = 6;
                                }							
                                query_posts( $spotlightargs );
                                if (have_posts()) : while (have_posts()) : the_post();
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
                                    
                                    <div class="slide">
                                    
                                        <div class="article-image<?php if($isreview) { ?> review<?php } ?>">
                                        
											<?php if($isreview) {
                                                con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
                                            } ?>
                                            
                                            <br class="clearer" />
                                    
                                            <a href="<?php the_permalink(); ?>" class="darken">
                                            
                                                <?php if($con_spotlight_widgets) { 
                                                    $sliderWidth="slider1";
                                                } else { 
                                                    $sliderWidth="slider1-wide";
                                                } ?>
                                    
                                                <?php the_post_thumbnail($sliderWidth, array( 'title' => '' )); ?>
                                                
                                            </a>
                                            
                                        </div>
                                        
                                        <div class="article">
                                        
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
                                                $terms = wp_get_object_terms($post->ID,'book_author');							
                                                $catname = $terms[0]->name;
                                                $catslug = $terms[0]->slug;
                                                $catlink = get_term_link($catslug, 'book_author');	
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
                                        
                                            <a class="category gentesque tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>
                                            
                                            <?php if($isreview && $award) { ?>                            
                                                <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>                                
                                            <?php } ?> 
                                        
                                            <h1><a class="post-title adelle" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                            
                                            <div class="desc">
                                            
                                                <?php _e( 'Posted ', 'continuum' ); ?>&nbsp;<?php echo get_the_date(); ?>&nbsp;<?php _e(' by ', 'continuum' ); ?>&nbsp;<?php echo get_the_author_link(); ?>
                                            
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
                                    
                                    <?php                                
                                endwhile; 
                                endif; ?>
                            
                            </div> <!-- end jquery slider -->
                            
                            <?php wp_reset_query(); ?>
                            
                            <ul> <!-- begin thumbnails -->
                            
                                <?php // get the thumbnails
                                $postcount=0;
                                query_posts( $spotlightargs );
                                if (have_posts()) : while (have_posts()) : the_post(); $postcount++;
                                    ?>
                                
                                    <li class="thumbnail"> 
                                        <a class="brighten" id="post-<?php echo $postcount; ?>">                             	
                                            <?php the_post_thumbnail('slider1-thumbnail', array( 'title' => '' )); ?>
                                        </a>
                                    </li>
                                    
                                    <?php                                
                                endwhile; 
                                endif; ?>
                                
                                <li class="clearer"></li>
                            
                            </ul> <!-- end thumbnails -->
                            
                            <?php wp_reset_query(); ?>
                            
                        </div>
                        
                    </div> <!-- end wrapper for the left jquery slider -->
                    
                    <?php if($con_spotlight_widgets) { // show the spotlight widget panel ?>
                
                        <div class="right-panel"> <!-- begin wrapper for the right spotlight panel -->
                        
                            <div class="header"> <!-- begin recent reactions header -->
                            
                                <div class="ribbon right">
                                
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_reactions_text; ?></div>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div> <!-- end recent reactions header -->
    
                            <br class="clearer" />
                            
                            <div class="content"> <!-- begin recent reactions content -->
                            
                                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Spotlight Right') ) : else : ?>
                                               
                                    <?php get_spotlight_reactions($con_reactions_num); ?>
                                                        
                                <?php endif; ?>                        
                            
                            </div> <!-- end recent reactions content -->
                            
                        </div> <!-- end wrapper for the right spotlight panel -->
                        
                    <?php } ?>
                    
                    <br class="clearer" />
                    
                </div> <!-- end wrapper for the entire spotlight area -->
            
            <?php } elseif($con_spotlight_layout=="B") { // Spotlight layout 2 ?>
                
                <div id="<?php if($con_spotlight_widgets) { ?>spotlight1<?php } else { ?>spotlight2<?php } ?>">               
                    
                    <div class="left-panel"> <!-- begin wrapper for the left jquery slider -->
                    
                        <?php if($con_spotlight_header_show) { ?>
                        
                            <div class="header"> <!-- begin in the spotlight header -->
                        
                                <div class="ribbon left"> 
                            
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_header_text; ?></div>
                                    
                                    </div>
                                    
                                </div> 
                                
                            </div> <!-- end in the spotlight header -->
                            
                            <br class="clearer" />
                            
                        <?php } ?>
                        
                        <div id="slider2-wrapper">
                        
                            <div id="slider2">
                            
                                <?php // the images for the slider
                                $postcount=0;
                                query_posts( $spotlightargs );
                                if (have_posts()) : while (have_posts()) : the_post();  $postcount++;
                                    $title="#div".$postcount;								
                                    ?>
                                    
                                    <?php if($con_spotlight_widgets) { 
                                        $sliderWidth="slider2";
                                    } else { 
                                        $sliderWidth="slider2-wide";
                                    } ?>
                                                            
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($sliderWidth, array( 'title' => $title )); ?></a>
                                        
                                    <?php                                
                                endwhile; 
                                endif; ?>
                            
                                <?php wp_reset_query(); ?>
                            
                            </div>
                            
                            <?php // the captions for the slider - separate loop
                            $postcount=0;
                            query_posts( $spotlightargs );
                            if (have_posts()) : while (have_posts()) : the_post();  $postcount++;
                                $title="div".$postcount;
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
                                                
                                <div id="<?php echo $title; ?>" class="nivo-html-caption">  
                                    <?php if($isreview) {
                                        con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
                                    } ?>  
                                    <?php if($isreview && $award) { ?>                            
                                        <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>                                
                                    <?php } ?>                         	
                                    <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a><br />
                                    <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                                </div>
                                
                                <?php                                
                            endwhile; 
                            endif; ?>
                            
                            <?php wp_reset_query(); ?>
                            
                        </div>
                        
                    </div> <!-- end wrapper for the left jquery slider -->
                    
                    <?php if($con_spotlight_widgets) { // show the spotlight widget panel ?>
                
                        <div class="right-panel"> <!-- begin wrapper for the right spotlight panel -->
                        
                            <div class="header"> <!-- begin recent reactions header -->
                            
                                <div class="ribbon right">
                                
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_reactions_text; ?></div>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div> <!-- end recent reactions header -->
    
                            <br class="clearer" />
                            
                            <div class="content"> <!-- begin recent reactions content -->
                            
                                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Spotlight Right') ) : else : ?>
                                
                                    <?php get_spotlight_reactions($con_reactions_num); ?>
                                                        
                                <?php endif; ?>                        
                            
                            </div> <!-- end recent reactions content -->
                            
                        </div> <!-- end wrapper for the right spotlight panel -->
                        
                    <?php } ?>
                    
                    <br class="clearer" />
                    
                </div>
                
            <?php } elseif($con_spotlight_layout=="C") { // Spotlight layout 3 ?>
            
                <div id="<?php if($con_spotlight_widgets) { ?>spotlight1<?php } else { ?>spotlight2<?php } ?>">                
                    
                    <div class="left-panel"> <!-- begin wrapper for the left jquery slider -->
                    
                        <?php if($con_spotlight_header_show) { ?>
                        
                            <div class="header"> <!-- begin in the spotlight header -->
                        
                                <div class="ribbon left"> 
                            
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_header_text; ?></div>
                                    
                                    </div>
                                    
                                </div> 
                                
                            </div> <!-- end in the spotlight header -->
                            
                            <br class="clearer" />
                            
                        <?php } ?>
                        
                        <div id="slider3-wrapper">
                    
                            <div id="slider3">
                            
                                <ul class="ui-tabs-nav">
                                
                                    <?php // the captions for the slider
                                    $postcount=0;
                                    query_posts( $spotlightargs );
                                    if (have_posts()) : while (have_posts()) : the_post();  $postcount++;
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
                                        
                                        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-<?php echo $postcount; ?>">
                                            <a href="#fragment-<?php echo $postcount; ?>"><?php the_post_thumbnail('slider3-small', array( 'title' => $title )); ?><span><?php the_title(); ?></span></a>
                                        </li>
                                        
                                        <?php                                
                                    endwhile; 
                                    endif; ?>
                                    
                                    <?php wp_reset_query(); ?> 
                                                                   
                                </ul>
                                
                                <?php // the images for the slider - separate loop
                                $postcount=0;
                                query_posts( $spotlightargs );
                                if (have_posts()) : while (have_posts()) : the_post();  $postcount++;	
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
                                        $terms = wp_get_object_terms($post->ID,'book_author');							
                                        $catname = $terms[0]->name;
                                        $catslug = $terms[0]->slug;
                                        $catlink = get_term_link($catslug, 'book_author');	
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
                                                            
                                    <div id="fragment-<?php echo $postcount; ?>" class="ui-tabs-panel<?php if($postcount>1) { ?>  ui-tabs-hide<?php } ?>">
                                        <?php if($con_spotlight_widgets) { 
                                            $sliderWidth="slider3";
                                        } else { 
                                            $sliderWidth="slider3-wide";
                                        } ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($sliderWidth, array( 'title' => $title )); ?></a>
                                        
                                        <a class="category gentesque tooltip" href="<?php echo $catlink; ?>" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>
                                        
                                        <?php if($isreview) {
                                            con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
                                        } ?>
                                        
                                        <div class="info">
                                            <?php if($isreview && $award) { ?>                            
                                                <div class="award tooltip" title="<?php echo $award; ?>">&nbsp;</div>                                
                                            <?php } ?>
                                            <h1><a href="<?php the_permalink(); ?>" class="adelle"><?php the_title(); ?></a></h1>
                                            <?php the_excerpt(); ?>
                                        </div>
                                        
                                    </div>
                                        
                                    <?php                                
                                endwhile; 
                                endif; ?>
                            
                                <?php wp_reset_query(); ?>                    
                                                    
                            </div> 
                            
                        </div>
                        
                    </div> <!-- end wrapper for the left jquery slider -->
                    
                    <?php if($con_spotlight_widgets) { // show the spotlight widget panel ?>
                
                        <div class="right-panel"> <!-- begin wrapper for the right spotlight panel -->
                        
                            <div class="header"> <!-- begin recent reactions header -->
                            
                                <div class="ribbon right">
                                
                                    <div class="ribbon-inner">
                                    
                                        <div class="gentesque"><?php echo $con_spotlight_reactions_text; ?></div>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div> <!-- end recent reactions header -->
    
                            <br class="clearer" />
                            
                            <div class="content"> <!-- begin recent reactions content -->
                            
                                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Spotlight Right') ) : else : ?>
                                
                                    <?php get_spotlight_reactions($con_reactions_num); ?>
                                                        
                                <?php endif; ?>                        
                            
                            </div> <!-- end recent reactions content -->
                            
                        </div> <!-- end wrapper for the right spotlight panel -->
                        
                    <?php } ?>
                    
                    <br class="clearer" />
                    
                </div>
            
            <?php } elseif($con_spotlight_layout=="D") { // Spotlight layout 4 ?>
            
            
            
            <?php } ?>
        </div>
        
    </div>
    
<?php } ?>