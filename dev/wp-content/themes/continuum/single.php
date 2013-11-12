<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_post_latest_show = $con_layout['post_latest_show'];
$con_post_feed_show = $con_layout['post_feed_show'];
$con_breadcrumb_show = $con_layout['breadcrumb_show'];
$con_infobox_show = $con_layout['infobox_show'];
$con_authorbox_show = $con_layout['authorbox_show'];
$con_featuredimage_size = $con_layout['featuredimage_size'];
$con_single_ad_post_show = $con_ads['single_ad_post_show'];
$con_single_ad_feed_show = $con_ads['single_ad_feed_show'];
$con_single_ad_comments_show = $con_ads['single_ad_comments_show'];
$con_single_ad_post = $con_ads['single_ad_post'];
$con_single_ad_feed = $con_ads['single_ad_feed'];
$con_single_ad_comments = $con_ads['single_ad_comments'];
?>

<?php // use variables from page custom fields instead of continuum options page (if they exist)
$override = get_post_meta($post->ID, "Show Latest Panel", $single = true);
if($override!="") {
	$con_post_latest_show=$override;
	if($con_post_latest_show=="false") {
		$con_post_latest_show=false;	
	} else {
		$con_post_latest_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Feed", $single = true);
if($override!="") {
	$con_post_feed_show=$override;
	if($con_post_feed_show=="false") {
		$con_post_feed_show=false;	
	} else {
		$con_post_feed_show=true;
	}
}
$override = get_post_meta($post->ID, "Featured Image Size", $single = true);
if($override!="") $con_featuredimage_size=$override;
$override = get_post_meta($post->ID, "Show Infobox", $single = true);
if($override!="") {
	$con_infobox_show=$override;
	if($con_infobox_show=="false") {
		$con_infobox_show=false;	
	} else {
		$con_infobox_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Authorbox", $single = true);
if($override!="") {
	$con_authorbox_show=$override;
	if($con_authorbox_show=="false") {
		$con_authorbox_show=false;	
	} else {
		$con_authorbox_show=true;
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

<?php get_header(); // show header ?>

<div id="page-content" class="single-post">

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

                <?php if($con_breadcrumb_show) { ?>
                    
                    <?php con_get_breadcrumb(); ?>
                    
                <?php } ?>
                
                <div class="cat-bar"> <!-- begin in the category header -->
            
                    <div class="ribbon left"> 
                
                        <div class="ribbon-inner">
                        
                            <div class="left-wrapper">
                        
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
                                
                                <div class="cat-name">
                                                        
                                    <h2 class="gentesque"><b><?php echo $parent; ?></b></h2>
                                    
                                </div>
                                
                                <div class="cat-date">
                 
                                    <?php echo get_the_date(); ?>
                                
                                </div>
                                
                            </div>
                                
                        </div>
                        
                        <div class="right-wrapper">
                        
                        	<?php if(comments_open()) { ?>
                        
                                <div class="inner tooltip" title="<?php _e( 'View Comments', 'continuum' ); ?>">
                            
                                    <?php comments_popup_link(__('0 comments', 'continuum').' &raquo;', __('1 comment', 'continuum').' &raquo;', __('% comments', 'continuum').' &raquo;'); ?>
                                    
                                </div>
                                
                            <?php } else { ?>
                            
                            	<div class="inner">&nbsp;</div>
                            
                            <?php } ?>
                        
                        </div>
                        
                    </div> 
                    
                </div> <!-- end in the categoryheader -->
            
                <h1 class="title adelle"><?php the_title(); ?></h1>
                
                <?php if($con_infobox_show) { // begin infobox ?>
                
                    <div class="infobox-wrapper">
                    
                        <div class="infobox">
                        
                            <div class="floatright">
                            
                                <?php _e( 'More articles by', 'continuum'); ?> <?php the_author_posts_link(); ?> &raquo;
                                
                            </div>
                        
                            <?php _e( 'Written by:', 'continuum' ); ?> <?php the_author_link(); ?>
                            
                            <br />
                            
                            <?php the_tags(); ?>
                        
                        </div>
                    
                    </div>
                    
                <?php } // end infobox ?>
                
                <?php if($con_featuredimage_size=="full" && has_post_thumbnail()) { ?>
                
                	<div class="article-image full">
                
                		 <?php 
						 if ( has_post_thumbnail()) {
						   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						   echo '<a class="darken tooltip" href="' . $large_image_url[0] . '" title="Click to expand this image" >';
						   the_post_thumbnail('single');
						   echo '</a>';
						 }
						 ?>
                        
                    </div>
                    
                <?php } elseif($con_featuredimage_size=="medium" && has_post_thumbnail()) { ?>
                
                    <div class="article-image">
                
                         <?php 
						 if ( has_post_thumbnail()) {
						   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						   echo '<a class="darken tooltip" href="' . $large_image_url[0] . '" title="Click to expand this image" >';
						   the_post_thumbnail('single-medium');
						   echo '</a>';
						 }
						 ?>
                        
                    </div>
                                    
                <?php } elseif($con_featuredimage_size=="small" && has_post_thumbnail()) { ?>
                
                	<div class="article-image">
                
                         <?php 
						 if ( has_post_thumbnail()) {
						   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						   echo '<a class="darken tooltip" href="' . $large_image_url[0] . '" title="Click to expand this image" >';
						   the_post_thumbnail('single-small');
						   echo '</a>';
						 }
						 ?>
                        
                    </div>
                	
                <?php } ?>
                
                <?php con_get_sharebox(); ?> 
                
                <div class="post-content">
                
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
                    
                    <?php if($con_authorbox_show) { // begin authorbox ?>
                    
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
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Default') ) : else : ?>
                    
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

<?php if($con_single_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_single_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_post_feed_show) { // show Feed ?>	
	<?php con_get_feed(); ?>    
<?php } ?>

<?php if($con_single_ad_feed_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_single_ad_feed; // ad ?>        
    </div>
<?php } ?>

<?php if(comments_open()) { ?>

	<?php con_get_comments(); ?>
    
    <?php if($con_single_ad_comments_show) { ?>
        <div class="full-width-ad">    
            <?php echo $con_single_ad_comments; // ad ?>        
        </div>
    <?php } ?>
    
<?php } ?>

<?php if($con_post_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>