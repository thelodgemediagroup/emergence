<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_page_latest_show = $con_layout['page_latest_show'];
$con_page_feed_show = $con_layout['page_feed_show'];
$con_page_unique_sidebar = $con_layout['page_unique_sidebar'];
$con_breadcrumb_show = $con_layout['page_breadcrumb_show'];
$con_featuredimage_size = $con_layout['featuredimage_size'];
$con_page_ad_post_show = $con_ads['page_ad_post_show'];
$con_page_ad_feed_show = $con_ads['page_ad_feed_show'];
$con_page_ad_post = $con_ads['page_ad_post'];
$con_page_ad_feed = $con_ads['page_ad_feed'];
?>

<?php // use variables from page custom fields instead of continuum options page (if they exist)
$override = get_post_meta($post->ID, "Show Latest Panel", $single = true);
if($override!="") {
	$con_page_latest_show=$override;
	if($con_page_latest_show=="false") {
		$con_page_latest_show=false;	
	} else {
		$con_page_latest_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Feed", $single = true);
if($override!="") {
	$con_page_feed_show=$override;
	if($con_page_feed_show=="false") {
		$con_page_feed_show=false;	
	} else {
		$con_page_feed_show=true;
	}
}
$override = get_post_meta($post->ID, "Featured Image Size", $single = true);
if($override!="") $con_featuredimage_size=$override;
$override = get_post_meta($post->ID, "Show Ad Below Post", $single = true);
if($override!="") {
	$con_page_ad_post_show=$override;
	if($con_page_ad_post_show=="false") {
		$con_page_ad_post_show=false;	
	} else {
		$con_page_ad_post_show=true;
	}
}
$override = get_post_meta($post->ID, "Show Ad Below Feed", $single = true);
if($override!="") {
	$con_page_ad_feed_show=$override;
	if($con_page_ad_feed_show=="false") {
		$con_page_ad_feed_show=false;	
	} else {
		$con_page_ad_feed_show=true;
	}
}
?>

<?php 
$sidebar="Sidebar Default";
if($con_page_unique_sidebar) $sidebar="Sidebar Page"; ?>

<?php get_header(); // show header ?>

<div id="page-content">

    <div class="left-panel">
    
        <div class="content">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php if($con_breadcrumb_show) { ?>
                    
                    <?php con_get_breadcrumb(); ?>
                    
                <?php } ?>                
            
                <h2 class="title adelle"><?php the_title(); ?></h2>
                
                <?php if($con_featuredimage_size=="full" && has_post_thumbnail()) { ?>
                
                	<div class="article-image">
                
                		<?php the_post_thumbnail('single', array( 'title' => '' )); ?>
                        
                    </div>
                    
                <?php } elseif($con_featuredimage_size=="medium" && has_post_thumbnail()) { ?>
                
                    <div class="article-image">
                
                        <?php the_post_thumbnail('single-medium', array( 'title' => '' )); ?>
                        
                    </div>
                                    
                <?php } elseif($con_featuredimage_size=="small" && has_post_thumbnail()) { ?>
                
                	<div class="article-image">
                
                        <?php the_post_thumbnail('single-small', array( 'title' => '' )); ?>
                        
                    </div>
                	
                <?php } ?>
                
                <?php con_get_sharebox(); ?>  
                
                <div class="post-content">
            
                    <?php the_content(); ?>
                    
                </div>
            
			<?php endwhile;
            endif; ?>
            
            <br class="clearer" />
        
        </div>
        
    </div>
    
	<div class="right-panel sidebar">
    
        <div class="inner"> 
            
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($sidebar) ) : else : ?>
                    
                <div id="tabbed-posts">
                    <ul class="tabnav">
                    <li><a href="#tabs-popular">Popular</a></li>
                    <li><a href="#tabs-recent">Recent</a></li>
                    <li><a href="#tabs-comments">Comments</a></li>
                    <li><a href="#tabs-tags">Tags</a></li>
                    </ul>
                    
                    <div class="tabdiv-wrapper">
                
                        <div id="tabs-popular" class="tabdiv">
                            <ul>
								<?php // create popular query
                                $postcount=0;
								$args='order=DESC&orderby=comment_count&posts_per_page=10'; 
                                $pop_loop = new WP_Query($args);
                                if ($pop_loop->have_posts()) : while ($pop_loop->have_posts()) : $pop_loop->the_post(); $postcount++; ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; 
                                endif; ?> 
                                <li class="last gentesque tooltip" title="View all articles sorted by comment count"><a href="<?php echo home_url(); ?>/<?php con_get_feed_link('comment_count') ?>">More</a></li>
                            </ul>
                        </div>
                    
                        <div id="tabs-recent" class="tabdiv">
                        	<ul>
                            <?php // create recent query
                                $postcount=0;
								$args='order=DESC&orderby=date&posts_per_page=10'; 
                                $pop_loop = new WP_Query($args);
                                if ($pop_loop->have_posts()) : while ($pop_loop->have_posts()) : $pop_loop->the_post(); $postcount++; ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; 
                                endif; ?> 
                                <li class="last gentesque tooltip" title="View all articles sorted by date"><a href="<?php echo home_url(); ?>/<?php con_get_feed_link('date') ?>">More</a></li>
                            </ul>
                        </div>
                    
                        <div id="tabs-comments" class="tabdiv">
                            <ul>
                            <?php //get recent comments
							$args = array(
								'status' => 'approve',
								'number' => 10
							);	
							$comments = get_comments($args);
							foreach($comments as $comment) :								
								$commentcontent = strip_tags($comment->comment_content);			
								if (strlen($commentcontent)>110) {
									$commentcontent = substr($commentcontent, 0, 107) . "...";
								}
								$commentauthor = $comment->comment_author;
								if (strlen($commentauthor)>50) {
									$commentauthor = substr($commentauthor, 0, 47) . "...";			
								}
								$commentid = $comment->comment_ID;
								$commenturl = get_comment_link($commentid); ?>
								<li><a href="<?php echo $commenturl; ?>">"<?php echo $commentcontent; ?>"<span> -&nbsp;<?php echo $commentauthor; ?></span></a></li>
							<?php endforeach; ?>
                            </ul>
                        </div> 
                        
                        <div id="tabs-tags" class="tabdiv">

                            <?php wp_tag_cloud('smallest=8&largest=22&number=20&orderby=name'); ?>
                            
                        </div>
                    
                    </div>
                                             
                </div>
                
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

<?php if($con_page_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_page_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_page_feed_show) { // show Feed ?>
	<?php con_get_feed(); ?>    
<?php } ?>

<?php if($con_page_ad_feed_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_page_ad_feed; // ad ?>        
    </div>
<?php } ?>

<?php if($con_page_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>