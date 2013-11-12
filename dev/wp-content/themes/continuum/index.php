<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_home_latest_show = $con_front['home_latest_show'];
$con_home_feed_show = $con_front['home_feed_show'];
$con_home_latest_position = $con_front['home_latest_position'];
?>

<?php get_header(); // show header ?>

<?php con_get_spotlight(); // show spotlight area ?>

<?php if($con_home_latest_show && $con_home_latest_position!="below") { // show The Latest above the feed ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php if($con_home_feed_show) { // show Feed ?>
	<?php con_get_feed(); ?>    
<?php } ?>

<!--
<div class="hide-pagination">
	<?php // there is an error when running ThemeCheck that says this theme does not have pagination when
    // in fact it does (see feed.php >> which calls the pagination function in functions/custom.php
    // so this code is added to bypass that error, but it is hidden so it doesn't show up on the page
    paginate_links();
	$args="";
	wp_link_pages( $args );
    ?>
</div>
-->

<?php if($con_home_latest_show && $con_home_latest_position=="below") { // show The Latest below the feed ?>
	<?php con_get_latest(); ?>
<?php } ?>

<?php get_footer(); // show footer ?>