<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>
<?php //set theme options
$con_background = $con_misc['background'];
$con_background_fixed = $con_misc['background_fixed'];
$con_logo = $con_misc['con_logo'];
$con_color = $con_misc['color'];
$con_breaking_show = $con_misc['breaking_show'];
$con_breaking_hidden = $con_misc['breaking_hidden'];
$con_breaking_rotate = $con_misc['breaking_rotate'];
$con_breaking_duration = $con_misc['breaking_duration'];
$con_smallmenu_show = $con_misc['smallmenu_show'];
$con_search_show = $con_misc['search_show'];
$con_random_show = $con_misc['random_show'];
$con_fancy_tooltips = $con_misc['fancy_tooltips'];
$con_colorbox = $con_misc['colorbox'];
$con_spotlight_duration = $con_front['spotlight_duration'];
$con_reaction_speed = $con_front['reaction_speed'];
$con_header_ad_show = $con_ads['header_ad_show'];
$con_header_ad = $con_ads['header_ad'];
?>
<?php // use variables from page custom fields instead of continuum options page (if they exist)
$override = get_post_meta($post->ID, "Show Ad In Header", $single = true);
if($override!="") {
	$con_header_ad_show=$override;
	if($con_header_ad_show=="false") {
		$con_header_ad_show=false;	
	} else {
		$con_header_ad_show=true;
	}
}
if($con_breaking_rotate) { //jquery needs string instead of boolean
	$con_breaking_rotate="true";
} else {
	$con_breaking_rotate="false";
}
//figure out what color to use for subtitle based on selected background
if(substr($con_background,0,4) == "dark" || substr($con_background,0,4) == "silk") $subtitleclass=" dark";
?>

<?php if ( ! isset( $content_width ) ) $content_width = 960; ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		<?php //Print the <title> tag based on what is being viewed
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'continuum' ), max( $paged, $page ) );
        ?>
    </title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> <!-- the main structure and main page elements style -->  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components.css" type="text/css" /> <!-- included components and additional style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/js.css" type="text/css" media="screen" /> <!-- styles for the various jquery plugins -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors.css" type="text/css" /> <!-- different color options -->
    <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" />
    <![endif]-->
    
    <!--[if gte IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" />
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css" type="text/css" /> <!-- custom css for users to edit instead of build-in stylesheets -->
    
    <?php if($con_background_fixed) { ?>
    
    	<style type="text/css">
		
			body { background-attachment:fixed !important; }
		
		</style>
    
    <?php } ?>
    
    <?php if($con_breaking_hidden) { ?>
    
    	<style type="text/css">
		
			#breaking-wrapper {display:none;}
		
		</style>
    
    <?php } ?>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    
    <?php wp_enqueue_script("jquery"); //load jquery ?>
    
	<?php wp_head(); ?>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script> <!-- jquery plugin js -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script> <!-- continuum js -->
    
    <?php if($con_fancy_tooltips) { ?>
    
		<script type="text/javascript">      
            jQuery.noConflict();
                 
            jQuery(document).ready(function() { 
            
                //FANCY TOOLTIPS
                jQuery('.tooltip').tipTip({delay:0, defaultPosition:"top", maxWidth:"100px"});
				
			});
		
   		</script>
    
    <?php } ?>
    
    <?php if($con_colorbox) { ?>
    
		<script type="text/javascript">      
            jQuery.noConflict();
                 
            jQuery(document).ready(function() { 
            
                //colorbox
				jQuery('.review .article-image a').colorbox({transition:'fade', speed:300});
				jQuery('.single-post .content .article-image a').colorbox({transition:'fade', speed:300});
				jQuery('.colorbox').colorbox({transition:'fade', speed:300});
				jQuery('.colorboxiframe').colorbox({transition:'fade', speed:300, iframe:true, innerWidth:640, innerHeight:390});
				jQuery(".post-content a[href$='.jpg'],a[href$='.png'],a[href$='.gif']").colorbox(); 
				jQuery('.post-content .gallery a').colorbox({  rel:'gallery' });
				
			});
		
   		</script>
    
    <?php } ?>    
    
    <script type="text/javascript">      
        jQuery.noConflict();
		     
        jQuery(document).ready(function() { 
							
			//BREAKING SLIDER
			jQuery('#breaking').anythingSlider({
                easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
                autoPlay: <?php echo $con_breaking_rotate; ?>,  // This turns off the entire FUNCTIONALY, not just if it starts running or not.
                delay: <?php echo $con_breaking_duration; ?>000,  // How long between slide transitions in AutoPlay mode
                startStopped: false,            // If autoPlay is on, this can force it to start stopped
                animationTime: 600,             // How long the slide transition takes
                hashTags: false,                 // Should links change the hashtag in the URL?
                buildNavigation: false,          // If true, builds and list of anchor links to link to each slide
                pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
                startText: "Go",             // Start text
                stopText: "Stop",               // Stop text
                navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
            });
			
			function formatText(index, panel) {
			  return index + "";
			}
			
			//SPOTLIGHT SLIDER LAYOUT 1
			jQuery('#slider1').cycle({
				fx: 'fade', // transition types: http://jQuery.malsup.com/cycle/browser.html
				timeout: <?php echo $con_spotlight_duration; ?>000, // how long the slide is displayed
				speed: 300, // the speed of the transition effect
				pause: 1, // pause on hover
				cleartype: true, // IE FIX
				cleartypeNoBg: true // IE FIX
			});	
			
			//SPOTLIGHT SLIDER LAYOUT 3
			jQuery("#slider3 > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", <?php echo $con_spotlight_duration; ?>000, true);
			
			//RECENT REACTIONS CYCLER
			jQuery('.recent-reactions').cycle({
				fx: 'scrollUp', // transition types: http://jQuery.malsup.com/cycle/browser.html
				timeout: 1, // how long the slide is displayed
				speed: <?php echo $con_reaction_speed; ?>000, // the speed of the transition effect
				easing: 'linear',	
				continuous: 1,
				cleartype: true, // IE FIX
				cleartypeNoBg: true // IE FIX
			});	
        }); 
		
		//setup the nivo slider
		jQuery(window).load(function() {
			jQuery('#slider2').nivoSlider({
				effect:'random', //Specify sets like: 'fold,fade,sliceDown'
				slices:15,
				animSpeed:300, //Slide transition speed
				pauseTime:<?php echo $con_spotlight_duration; ?>000,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:true, //Next and Prev
				directionNavHide:true, //Only show on hover
				controlNav:true, //1,2,3...
				controlNavThumbs:true, //Use thumbnails for Control Nav
				controlNavThumbsFromRel:false, //Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', //Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
				keyboardNav:true, //Use left and right arrows
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:false, //Force manual transitions
				captionOpacity:0.8 //Universal caption opacity								 
			});
		});
		
    </script>
    
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> <!-- google plus 1 button js -->
    
    <!--[if gte IE 9]> <script type="text/javascript"> Cufon.set('engine', 'canvas'); </script> <![endif]--> 
	
</head>

<body <?php body_class($con_background.' '.$con_color); ?>>

	<div id="page-menu-wrapper">
    
    	<div id="page-menu">
            
            <div class="container<?php if(!$con_search_show) { ?> wide<?php } ?>">
            
				<?php //title attribute gets in the way - remove it
                $menu = wp_nav_menu( array( 'theme_location' => 'top-menu', 'container' => 'div', 'fallback_cb' => 'wp_page_menu', 'container_class' => 'menu', 'echo' => '0' ) );
                $menu = preg_replace('/title=\"(.*?)\"/','',$menu);
                echo $menu;
                ?>
                
            </div>
            
            <?php if($con_search_show) { ?>
            
                <div id="search">
                
                    <div class="wrapper">
                    
                        <div class="inner">
                
                            <!-- SEARCH -->  
                            <form method="get" id="searchform" action="<?php echo home_url(); ?>/">                             
                                <input type="text" value="<?php _e( 'search', 'continuum' ); ?>" onfocus="if (this.value == '<?php _e( 'search', 'continuum' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'search', 'continuum' ); ?>';}" name="s" id="s" />          
                            </form>                       
                            
                        </div>
                        
                    </div>
                
                </div>
                
            <?php } ?>
            
            <br class="clearer" />
        
        </div>
    
    </div>
	
	<div id="page-wrap"> <!-- everything below the top menu should be inside the page wrap div -->
    
    	<?php  // breaking panel   
		if(is_front_page()) {
			if ($con_breaking_show) {    
                con_get_breaking();            
            }            
        } else {  			
			$override = get_post_meta($post->ID, "Show Breaking Panel", $single = true);
			if($override!="") {
				$con_breaking_show=$override;
				if($con_breaking_show=="false") {
					$con_breaking_show=false;	
				} else {
					$con_breaking_show=true;
				}
			}			
       		if ($con_breaking_show) {    
                con_get_breaking();            
            }        
        } 
		?>

		<div id="logo-bar">
        
        	<div class="floatleft">
        
				<?php if($con_logo != "") { ?>
                    <a href="<?php echo home_url(); ?>/">
                        <img alt="<?php bloginfo('name'); ?>" src="<?php echo $con_logo; ?>" />
                    </a>
                <?php } else { ?>     
                    <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
                <?php } ?>
                
                <div class="subtitle gentesque<?php echo $subtitleclass; ?>"><?php bloginfo('description'); ?></div>
                
            </div>
            
            
            <?php if($con_header_ad_show) { ?>
                <div class="header-ad">    
                    <?php echo $con_header_ad; // ad ?>        
                </div>
            <?php } ?>
            
            <br class="clearer" />
            
		</div>
        
        <?php if($con_smallmenu_show) { ?>
        
            <div id="small-menu-wrapper">
            
                <div id="small-menu">
                
                    <div class="left-cap">&nbsp;</div>
                    
                    <?php //title attribute gets in the way - remove it
                    $menu = wp_nav_menu( array( 'theme_location' => 'small-menu', 'container' => '0', 'fallback_cb' => 'wp_page_menu', 'echo' => '0' ) );
                    $menu = preg_replace('/title=\"(.*?)\"/','',$menu);
                    echo $menu;
                    ?>
                    
                    <div class="right-cap">&nbsp;</div>
                
                </div>
                
                <br class="clearer" />
                
            </div>
            
        <?php } ?>
        
        <div id="main-menu-wrapper">
        
        	<div class="left-cap">&nbsp;</div>
        
            <div id="main-menu">
            
            	<div class="container">
                
					<?php //title attribute gets in the way - remove it
                    $menu = wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '0', 'fallback_cb' => 'fallback_categories', 'echo' => '0' ) );
                    $menu = preg_replace('/title=\"(.*?)\"/','',$menu);
                    echo $menu;
                    ?>
                    
                </div>
                
                <?php //random article button
				if ($con_random_show) { 
					$randargs='&posts_per_page=1&orderby=rand&ignore_sticky_posts=1'; 
					$rand_loop = new WP_Query($randargs);
					if ($rand_loop->have_posts()) : while ($rand_loop->have_posts()) : $rand_loop->the_post();	
						?>
					
						<div id="random-article">
					
							<a class="tooltip" title="<?php _e( 'Random Article', 'continuum' ); ?>" href="<?php the_permalink(); ?>"><img alt="<?php _e( 'Random Article', 'continuum' ); ?>" src="<?php echo get_template_directory_uri(); ?>/images/random-article.png" /></a>
						
						</div>
                        
                    <?php endwhile; 
					endif; 
					wp_reset_query();?> 
                    
                <?php } ?>
				
            </div>
            
            <div class="right-cap">&nbsp;</div>
            
            <br class="clearer" />
            
        </div>

