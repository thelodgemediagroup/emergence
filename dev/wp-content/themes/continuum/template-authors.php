<?php
// Template Name: Authors Page
?>
<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_author_latest_show = $con_layout['author_latest_show'];
$con_author_ad_post_show = $con_ads['author_ad_post_show'];
$con_author_ad_post = $con_ads['author_ad_post']; 
$con_author_unique_sidebar = $con_layout['author_unique_sidebar'];
?>

<?php // user specified a unique author sidebar
if ($con_author_unique_sidebar) {
	$con_author_unique_sidebar="Sidebar Author";
} else {
	$con_author_unique_sidebar="Sidebar Default";
}
?>

<?php get_header(); // show header ?>
	
<div id="page-content" class="author">

    <div class="left-panel">
    
        <div class="content">
        
            <h2 class="gentesque page-title"><?php _e( 'Contributors', 'continuum' ); ?></h2>
            
            <?php
            $authors = $wpdb->get_results('SELECT DISTINCT post_author FROM '.$wpdb->posts.' INNER JOIN '.$wpdb->users.' ON '.$wpdb->posts.'.post_author = '.$wpdb->users.'.ID ORDER BY '.$wpdb->users.'.display_name ASC');
			//$authors = $wpdb->get_results('SELECT DISTINCT post_author FROM '.$wpdb->posts.' WHERE post_type = "post" AND post_status = "publish" ORDER BY post_date ASC');
            if($authors):
            foreach($authors as $author):
            ?>
            
            	<div id='author-<?php the_author_meta('user_login', $author->post_author); ?>' class="authorbox-wrapper">
                        
                    <div class="authorbox">                        
                        
                        <div class="author-image">
                        
                            <?php echo get_avatar(get_the_author_meta('user_email', $author->post_author), 80); ?>
                            
                        </div>
                        
                        <div class="author-title adelle"><?php echo the_author_meta('display_name', $author->post_author); ?></div>
                        
                        <?php echo the_author_meta('description', $author->post_author); ?>
                        
                        <br class="clearer" />
                        
						<?php if(get_the_author_meta('twitter', $author->post_author) || get_the_author_meta('facebook', $author->post_author) || get_the_author_meta('linkedin', $author->post_author) || get_the_author_meta('digg', $author->post_author) || get_the_author_meta('flickr', $author->post_author) || get_the_author_meta('user_url', $author->post_author)): ?>
						<ul class="connect">
                        	<?php if(get_the_author_meta('user_url', $author->post_author)): ?>
							<li class="website"><a class="tooltip" title="<?php _e( 'Website', 'continuum' ); ?>" href='<?php the_author_meta('user_url', $author->post_author); ?>'>&nbsp;</a></li>
							<?php endif; ?>
							<?php if(get_the_author_meta('twitter', $author->post_author)): ?>
							<li class="twitter"><a class="tooltip" title="<?php _e( 'Twitter', 'continuum' ); ?>" href='http://twitter.com/<?php the_author_meta('twitter', $author->post_author); ?>'>&nbsp;</a></li>
							<?php endif; ?>
							<?php if(get_the_author_meta('facebook', $author->post_author)): ?>
							<li class="facebook"><a class="tooltip" title="<?php _e( 'Facebook', 'continuum' ); ?>" href='http://www.facebook.com/<?php the_author_meta('facebook', $author->post_author); ?>'>&nbsp;</a></li>
							<?php endif; ?>
							<?php if(get_the_author_meta('linkedin', $author->post_author)): ?>
							<li class="linkedin"><a class="tooltip" title="<?php _e( 'LinkedIn', 'continuum' ); ?>" href='http://www.linkedin.com/in/<?php the_author_meta('linkedin', $author->post_author); ?>'>&nbsp;</a></li>
							<?php endif; ?>
							<?php if(get_the_author_meta('digg', $author->post_author)): ?>
							<li class="digg"><a class="tooltip" title="<?php _e( 'Digg', 'continuum' ); ?>" href='http://digg.com/users/<?php the_author_meta('digg', $author->post_author); ?>'>&nbsp;</a></li>
							<?php endif; ?>
							<?php if(get_the_author_meta('flickr', $author->post_author)): ?>
							<li class="flickr"><a class="tooltip" title="<?php _e( 'Flickr', 'continuum' ); ?>" href='http://www.flickr.com/photos/<?php the_author_meta('flickr', $author->post_author); ?>/'>&nbsp;</a></li>
							<?php endif; ?>
                            <?php if(get_the_author_meta('youtube', $author->post_author)): ?>
							<li class="youtube"><a class="tooltip" title="<?php _e( 'YouTube', 'continuum' ); ?>" href='http://www.youtube.com/user/<?php the_author_meta('youtube', $author->post_author); ?>/'>&nbsp;</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>	
                        
                        <div class="more-articles">
                    
                            <?php
							$authorargs = array( 'post_type' => array( 'post', 'con_movie_reviews', 'con_music_reviews', 'con_game_reviews', 'con_book_reviews', 'con_product_reviews' ), 'author' => $author->post_author, 'showposts' => 1);
							$recentPost = new WP_Query($authorargs);
							while($recentPost->have_posts()): $recentPost->the_post();
							?>
								<?php _e( 'Latest: ', 'continuum' ); ?><a href='<?php the_permalink();?>'><?php the_title(); ?></a>
							<?php endwhile; ?>
                            
                        </div>
                        
                        <br class="clearer" />			
                        
                    </div>
                
                </div> 
                
                <br /> 

            <?php endforeach; endif; ?>
            
        </div>
        
    </div>
    
	<div class="right-panel sidebar"> <!-- begin right sidebar -->
            
        <div class="inner">
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar($con_author_unique_sidebar) ) : else : ?>
            
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
	
<?php if($con_author_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_author_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_author_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>