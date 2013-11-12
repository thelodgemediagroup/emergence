<?php
/*
Template Name: Full Width
*/
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
$con_page_latest_show = $con_layout['page_latest_show'];
$con_page_feed_show = $con_layout['page_feed_show'];;
$con_breadcrumb_show = $con_layout['breadcrumb_show'];
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

<?php get_header(); // show header ?>

<div id="page-content" class="full-width">

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