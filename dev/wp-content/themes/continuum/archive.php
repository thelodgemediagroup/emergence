<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_archive_latest_show = $con_layout['archive_latest_show'];
$con_archive_ad_post_show = $con_ads['archive_ad_post_show'];
$con_archive_ad_post = $con_ads['archive_ad_post']; 
?>

<?php get_header(); // show header ?>

<?php con_get_archive(); ?>    

<?php if($con_archive_ad_post_show) { ?>
    <div class="full-width-ad">    
        <?php echo $con_archive_ad_post; // ad ?>        
    </div>
<?php } ?>

<?php if($con_archive_latest_show) { // show The Latest panel ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>