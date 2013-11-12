<?php //get theme options
global $con_misc;
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_twitter_name = $con_misc['twitter_name'];
$con_facebook_url = $con_misc['facebook_url'];
$con_rss_feed = $con_misc['rss_feed'];
?>

<div class="social">
            
    <a class="rss tooltip" href="<?php echo $con_rss_feed; ?>" target="_blank" title="<?php _e( 'Subscribe to our RSS feed', 'continuum' ); ?>">&nbsp;</a>
    
    <a class="twitter tooltip" href="http://www.twitter.com/<?php echo $con_twitter_name; ?>" target="_blank" title="<?php _e( 'Follow us on Twitter', 'continuum' ); ?>">&nbsp;</a>
    
    <a class="facebook tooltip" href="<?php echo $con_facebook_url; ?>" target="_blank" title="<?php _e( 'Friend us on Facebook', 'continuum' ); ?>">&nbsp;</a>

</div>