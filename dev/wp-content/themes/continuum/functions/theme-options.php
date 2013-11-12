<?php
// Default options values
$con_front = array(
	'spotlight_show' => true,
	'spotlight_layout' => 'A',
	'spotlight_duration' => 4,
	'spotlight_num' => 5,
	'spotlight_tag' => 'spotlight',
	'spotlight_widgets' => true,
	'spotlight_header_show' => true,
	'spotlight_header_text' => 'In The Spotlight',
	'spotlight_reactions_text' => 'Recent Reactions',
	'reaction_num' => 8,
	'reaction_speed' => 35,
	'home_latest_show' => true,
	'home_latest_position' => 'above',
	'home_feed_show' => true,
);

$con_layout = array(
	'breadcrumb_show' => true,
	'featuredimage_size' => 'full',
	'infobox_show' => true,
	'sharebox_show' => true,
	'share_twitter_show' => true,
	'share_facebook_show' => true,
	'share_plusone_show' => true,
	'share_digg_show' => true,
	'share_stumbleupon_show' => true,
	'share_email_show' => true,
	'authorbox_show' => true,
	'post_feed_show' => true,
	'post_latest_show' => true,
	
	'archive_layout' => 'A',
	'archive_header' => '',
	'archive_num' => 5,
	'archive_unique_sidebar' => false,
	'archive_latest_show' => true,
	
	'category_layout' => 'A',
	'category_header' => 'Sort:',
	'category_num' => 5,
	'category_unique_sidebar' => false,
	'category_latest_show' => true,
	
	'search_num' => 5,
	'search_unique_sidebar' => false,
	'search_latest_show' => true,
	
	'author_unique_sidebar' => false,
	'author_latest_show' => true,	
	
	'page_feed_show' => true,
	'page_unique_sidebar' => false,
	'page_latest_show' => true,	
);

$con_feed = array(
	'feed_layout' => 'A',
	'feed_header' => 'Feed',
	'feed_social' => true,
	'feed_num' => 5,
	'feed_latest' => 'Latest By Category',
	'feed_latest_cats' => 'Music, Movies, Video Games, TV',
	'feed_latest_num' => 4,
	'feed_unique_sidebar' => false,
	'feed_single_header' => '',
	'feed_single_num' => 5,
	'feed_single_social' => true,	
);

$con_reviews = array(
	'posttype_enable_movies' => true,
	'posttype_enable_music' => true,
	'posttype_enable_games' => true,
	'posttype_enable_books' => true,
	'posttype_enable_products' => true,
	'inject_reviews' => true,
	'review_layout' => 'A',
	'review_num' => 5,
	'review_unique_sidebar' => true,
	'review_authorbox_show' => true,
	'review_latest_show' => true,
	'review_post_feed_show' => true,
	'review_post_latest_show' => true,
	'feed_review_num' => 5,
	'feed_review_header' => 'Related',
	'feed_review_social' => true,
	
	'review_stars_0' => 'Terrible',
	'review_stars_0_half' => 'Terrible',
	'review_stars_1' => 'Very Poor',
	'review_stars_1_half' => 'Poor',
	'review_stars_2' => 'Below Average',
	'review_stars_2_half' => 'Average',
	'review_stars_3' => 'Above Average',
	'review_stars_3_half' => 'Good',
	'review_stars_4' => 'Very Good',
	'review_stars_4_half' => 'Excellent',
	'review_stars_5' => 'Excellent',
	
	'review_movies_positive_text' => 'Positives',
	'review_movies_negative_text' => 'Negatives',
	'review_movies_bottomline_text' => 'Our Review',
	'review_music_positive_text' => 'The Good',
	'review_music_negative_text' => 'The Bad',
	'review_music_bottomline_text' => 'The Review',
	'review_games_positive_text' => 'We Liked',
	'review_games_negative_text' => 'We Disliked',
	'review_games_bottomline_text' => 'Our Final Take',
	'review_books_positive_text' => 'Thumbs Up',
	'review_books_negative_text' => 'Thumbs Down',
	'review_books_bottomline_text' => 'Overall Review',
	'review_products_positive_text' => 'Pros',
	'review_products_negative_text' => 'Cons',
	'review_products_bottomline_text' => 'Bottom Line',
);

$con_ads = array(
	'single_ad_post_show' => true,
	'single_ad_feed_show' => true,
	'single_ad_comments_show' => true,
	'single_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>', 
	'single_ad_feed' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-2.png" /></a>',
	'single_ad_comments' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-3.png" /></a>',
	
	'archive_ad_post_show' => true,
	'archive_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
	'archive_ad_num' => 4,
	'archive_ads_increment' => 4,
	'archive_ads_offset' => 4,
	'archive_ad_1' => '',
	'archive_ad_2' => '',
	'archive_ad_3' => '',
	'archive_ad_4' => '',
	'archive_ad_5' => '',
	'archive_ad_6' => '',
	'archive_ad_7' => '',
	'archive_ad_8' => '',
	'archive_ad_9' => '',
	'archive_ad_10' => '',
	
	'category_ad_post_show' => true,
	'category_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
	'category_ad_num' => 4,
	'category_ads_increment' => 4,
	'category_ads_offset' => 4,
	'category_ad_1' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/02/ad-feed-1.png" /></a>',
	'category_ad_2' => '',
	'category_ad_3' => '',
	'category_ad_4' => '',
	'category_ad_5' => '',
	'category_ad_6' => '',
	'category_ad_7' => '',
	'category_ad_8' => '',
	'category_ad_9' => '',
	'category_ad_10' => '',
	
	'review_ad_post_show' => true,
	'review_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
	'review_ad_num' => 4,
	'review_ads_increment' => 4,
	'review_ads_offset' => 4,
	'review_ad_1' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/02/ad-feed-1.png" /></a>',
	'review_ad_2' => '',
	'review_ad_3' => '',
	'review_ad_4' => '',
	'review_ad_5' => '',
	'review_ad_6' => '',
	'review_ad_7' => '',
	'review_ad_8' => '',
	'review_ad_9' => '',
	'review_ad_10' => '',
	
	'feed_ad_num' => 4,
	'feed_ads_increment' => 4,
	'feed_ads_offset' => 4,
	'feed_single_ad_num' => 4,
	'feed_single_ads_increment' => 4,
	'feed_single_ads_offset' => 4,
	'feed_review_ad_num' => 4,
	'feed_review_ads_increment' => 4,
	'feed_review_ads_offset' => 4,
	'feed_ad_1' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/02/ad-feed-1.png" /></a>',
	'feed_ad_2' => '',
	'feed_ad_3' => '',
	'feed_ad_4' => '',
	'feed_ad_5' => '',
	'feed_ad_6' => '',
	'feed_ad_7' => '',
	'feed_ad_8' => '',
	'feed_ad_9' => '',
	'feed_ad_10' => '',
	
	'header_ad_show' => true,
	'header_ad' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-top.png" /></a>',
	'page_ad_post_show' => true,
	'page_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
	'page_ad_feed_show' => true,
	'page_ad_feed' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-2.png" /></a>',
	'search_ad_post_show' => true,
	'search_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
	'author_ad_post_show' => true,
	'author_ad_post' => '<a href="http://www.google.com"><img alt="Advertisement" src="http://demos.brianmcculloh.com/continuum/files/2011/03/ad-wide-1.png" /></a>',
);

$con_misc = array(
	'background' => 'light-lithium',
	'background-fixed' => false,
	'con_logo' => get_template_directory_uri()."/images/continuum.png",
	'color' => 'lithium',	
	
	'breaking_show' => true,
	'breaking_hidden' => false,
	'breaking_rotate' => true,
	'breaking_duration' => 3,
	'breaking_tag' => 'breaking',
	'breaking_text' => 'breaking',
	'breaking_num' => 8,
	
	'latest_header' => 'The Latest',
	'latest_cats' => 'Sports, Movies, Video Games, TV',
	'latest-num' => 4,
	
	'random_show' => true,	
	'fancy_tooltips' => true,
	'colorbox' => true,
	'footer_credits' => true,
	'search_show' => true,
	'smallmenu_show' => true,
	
	'signoff_text' => "Did you enjoy this article? If so, we'd love to hear your thoughts in the comments below. It would be great if you subscribed to our RSS feed or signed up for email updates to get more goodness. There's lots more where this came from!",
	
	'twitter_name' => 'outerspice',
	'facebook_url' => 'http://www.facebook.com/pages/Outer-Spice-Web-Company/144008024120',
	'rss_feed' => '',
	'flickr_name' => '44272373@N02',
	'google_analytics' => '',
);

if ( is_admin() ) : // Load only if we are viewing an admin page

function con_register_settings() {
	// Register settings and call sanitation functions
	register_setting( 'con_theme_description', 'con_description', 'con_validate_description' );
	register_setting( 'con_theme_front', 'con_front', 'con_validate_front' );
	register_setting( 'con_theme_layout', 'con_layout', 'con_validate_layout' );
	register_setting( 'con_theme_feed', 'con_feed', 'con_validate_feed' );
	register_setting( 'con_theme_reviews', 'con_reviews', 'con_validate_reviews' );
	register_setting( 'con_theme_ads', 'con_ads', 'con_validate_ads' );
	register_setting( 'con_theme_misc', 'con_misc', 'con_validate_misc' );
	//get js and style
	$file_dir=get_template_directory_uri();
	wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
	wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");
}

add_action( 'admin_init', 'con_register_settings' );

function con_theme_options() {
	// Add theme options page to the addmin menu
	add_theme_page( 'Continuum Options', 'Continuum Options', 'edit_theme_options', 'theme_options', 'con_theme_home_page' );
}

add_action( 'admin_menu', 'con_theme_options' );

function mytheme_admin_tabs( $current = 'description' ) { 

	echo '<div class="wrap">';
	
	screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>";

    $tabs = array( 'description' => __( 'Getting Started', 'continuum' ), 'front' => __( 'Front Page', 'continuum' ), 'layout' => __( 'Page Layouts', 'continuum' ), 'feed' => __( 'The Feed', 'continuum' ), 'reviews' => __( 'Reviews', 'continuum' ), 'ads' => __( 'Ads', 'continuum' ), 'misc' => __( 'Miscellaneous', 'continuum' ) ); 
    $links = array(); 
    foreach( $tabs as $tab => $name ) : 
        if ( $tab == $current ) : 
            $links[] = "<a class='nav-tab nav-tab-active' href='?page=theme_options&tab=$tab'>$name</a>"; 
        else : 
            $links[] = "<a class='nav-tab' href='?page=theme_options&tab=$tab'>$name</a>"; 
        endif; 
    endforeach; 
    echo '<h3>'; 
    foreach ( $links as $link ) 
        echo $link; 
    echo '</h3>'; 
}

// Function to generate options page
function con_theme_home_page() {
	global $pagenow;
	
	if ( $pagenow == 'themes.php' && $_GET['page'] == 'theme_options' ) : 
    if ( isset ( $_GET['tab'] ) ) : 
        $tab = $_GET['tab']; 
    else: 
        $tab = 'description'; 
    endif; 
	
	mytheme_admin_tabs($tab);
	
    switch ( $tab ) : 
		case 'description' :
			theme_description_options();
			break;
        case 'front' : 
            theme_front_options(); 
            break; 
        case 'layout' : 
            theme_layout_options(); 
            break; 
		case 'feed' : 
            theme_feed_options(); 
            break; 
        case 'reviews' : 
            theme_reviews_options(); 
            break; 
		case 'ads' : 
            theme_ads_options(); 
            break; 
		case 'misc' : 
            theme_misc_options(); 
            break; 
    endswitch; 
	endif;
}

// Function to generate options page
function theme_description_options() {
	global $con_description; ?>	
    
    	<div style="padding:0px 10px; width:850px;">
        
        	<div style="float:left">
            	<img alt="Continuum" src="<?php echo get_template_directory_uri(); ?>/images/continuum.png" />
            </div>
            <div style="float:left;padding-top:15px;color:#49749F;font-weight:bold;">
            	Industrial strength magazine publishing platform&trade;
            </div>
            
            <br style="clear:both;"  />
        
        	<h3><?php _e( 'Introduction &amp; How To Get Help', 'continuum' ); ?></h3>
            
            <p>
				<?php _e( 'The Continuum Theme Options page is separated into tabs to make it easier to manage the abundance of options (there are over 190 of them!). If you want to skip all this and just get your site working, you should be able to get by with changing a couple of the options on the Miscellaneous tab, and you are in business. The rest of these settings exist to give you the option of customizing your website to whatever level you want. Some of the tabs are further categorized by toggle bars for your convenience. Just click the toggle bar title to expand the section and manage the options, and click it again to collapse it. The options are layed out in an intuitive, easy-to-use format that makes it easy for you to find the setting you want to adjust. There is a short description next to each option, so if something seems confusing at first, just look at the description and you will probably figure it out. If at any time you do get stuck and cannot figure out how to make Continuum do what you want it to do, you have four options at your disposal:', 'continuum' ); ?>
                
                <ol>
                	<li><?php _e( 'Refer to the', 'continuum' ); ?> <a href="<?php echo get_template_directory_uri(); ?>/documentation/" target="_blank"><?php _e( 'help documentation', 'continuum' ); ?></a> <?php _e( 'that is inside of the Continuum folder that you downloaded from Theme Forest, as it contains further detailed information on using Continuum.', 'continuum' ); ?></li>
                    <li><?php _e( 'Refer to the Continuum FAQ page at Theme Forest. At the time of this writing, the link to the FAQs are next to the link to the item comments on the Continuum item details page.', 'continuum' ); ?></li>
                    <li><?php _e( 'Search for help on the support forum, or post a new topic with your question:', 'continuum'); ?> <a href="http://support.industrialthemes.com/viewforum.php?f=1"><?php _e ('Support Forum','continuum'); ?></a></li>                    
                    <li><?php _e( 'Contact the author of Continuum via a ', 'continuum' ); ?><a href="http://themeforest.net/user/IndustrialThemes"><?php _e( 'Theme Forest message', 'continuum' ); ?></a>.
                </ol>
                
                <?php _e( 'We know what it is like to be frustrated while trying to use a theme, and we want you to know that we are here to help. We want you to fully enjoy all the benefits of Continuum that we took months to build!', 'continuum' ); ?>                
            </p>
            
            <h3><?php _e( 'Explanation of the Theme Options Tabs', 'continuum' ); ?></h3>
            
            <p>
            
            <b><?php _e( 'FRONT PAGE tab', 'continuum' ); ?></b> - <?php _e( 'these settings let you adjust the layout and style of the front page of your site. Whether you are using "Your latest posts" as the "Front page displays" option on the Settings >> Reading Settings page, or you have selected a specific page as your front page, this is where you manage the settings. Keep in mind, this tab deals with the layout of the elements specific to the front page. If you are wondering where things like background, logo, ad placement, "feed" layout, and "breaking" slider settings are, you will find those on other tabs, such as the Ads tab or the Miscellaneous tab, since these are elements that appear on more pages than just the front page.', 'continuum' ); ?>
            
            </p>    
            
            <p>
            
            <b><?php _e( 'PAGE LAYOUTS tab', 'continuum' ); ?></b> - <?php _e( 'these settings are divided into four categories:', 'continuum' ); ?>
            
            	<ol>
                	<li><?php _e( 'Single Posts - when you click on a post title or thumbnail and view the full post details, you are viewing a "single post"', 'continuum' ); ?></li>
                    <li><?php _e( 'Archive Pages - when you click a link in your sidebar calendar widget, or you are viewing all of the posts from a specific tag or author, you are viewing an "archive page"', 'continuum' ); ?></li>
                    <li><?php _e( 'Category Archive Pages - when you click a category in one of your menus, or the category of a post in any of the post listings, you are viewing a "category archive page"', 'continuum' ); ?></li>
                    <li><?php _e( 'Other Pages - when you are viewing a page other than the ones mentioned above, such as the search results page, the authors page, or a page you create in Wordpress, you are viewing an "other page". Pretty technical, we know.', 'continuum' ); ?></li>
                </ol>
            
            </p>
            
            <p>
            
            <b><?php _e( 'THE FEED tab', 'continuum' ); ?></b> - <?php _e( 'Continuum uses a "Feed" framework to display your latest posts. It is a very simple concept: it is just your latest posts, displayed in a list down the page, in one of four possible layouts. "The Feed" can be sorted via the links in the "feed bar", which displays above your latest posts, and it can optionally be displayed not only on your front page, but on every page of your site below the page or post content. It is a way of presenting as much of your content as you can to your readers in an attempt to get them to stay on your site as long possible, viewing as many pages as possible. Because there are different kinds of pages in Wordpress - the front page, blog pages, regular pages, archive pages, etc. - there are slightly different settings for each kind of page.', 'continuum' ); ?>
            
            </p>   
            
            <p>
            
            <b><?php _e( 'REVIEWS tab', 'continuum' ); ?></b> - <?php _e( 'Continuum gives you five custom post types for reviewing Movies, Music, Video Games, Books, and Products. You can enable/disable these review types, as well as set the layout of the review listings and adjust the different elements that appear on single review pages, using the General Settings toggle panel on the Reviews tab. The Rating Labels and Review Labels toggle panels let you further customize how you display your reviews on your site.', 'continuum' ); ?>
            
            </p>  
            
            <p>
            
            <b><?php _e( 'ADS tab', 'continuum' ); ?></b> - <?php _e( 'Continuum has a built-in advertising framework that lets you specify the ads that display throughout your pages. You can display different ads on different types of pages, which are divided out between the various toggle panels on the Ads tab. Continuum is even able to inject ads into your "Feed" (note: this is the Continuum feed framework which displays on your website, which is not to be confused with your RSS feed), and lets you specify the frequency and amount of ads that are displayed.', 'continuum' ); ?>
            
            </p>   
            
            <p>
            
            <b><?php _e( 'MISCELLANEOUS tab', 'continuum' ); ?></b> - <?php _e( 'there are some elements that apply to all of your pages, such as the site background, logo, "breaking" panel, "latest" panel, and more. All of these site-wide settings are found on the Miscellanous tab.', 'continuum' ); ?>
            
            </p>
            
            <br />
	
    		<div class="special-text"><?php _e( '*You can override settings denoted in blue on individual posts &amp; pages using custom fields. See the Continuum Custom Field Guide located on all page &amp; post edit screens at the bottom of the page.', 'continuum' ); ?></div>
            
            <br />
            
            <h3>Custom Review Types Add-On</h3>
            
            <a href="http://blog.chomperstomp.com/refactor-2-0/"><img
src="http://blog.chomperstomp.com/wp-content/uploads/2012/05/screenshot1.jpg"
alt="Continuum Refactor 2.0" /></a>
        
        </div>
    
	</div>
    
<?php }

// Function to generate options page
function theme_front_options() {
	global $con_front;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>	

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_front', $con_front ); ?>
	
	<?php settings_fields( 'con_theme_front' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table">
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'Spotlight Slider', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><span class="special"><?php _e( 'Display Spotlight Slider', 'continuum' ); ?></span></th>
	<td>
	<input type="checkbox" id="spotlight_show" name="con_front[spotlight_show]" value="1" <?php checked( true, $settings['spotlight_show'] ); ?> />
    <label for="spotlight_show"><?php _e( 'Display the Spotlight Slider area', 'continuum' ); ?></label>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><span class="special"><?php _e( 'Layout', 'continuum' ); ?></span></th>
	<td class="spotlightbuttons">
    <div class="radiowrapper">
        <div class="radiobutton">
        	A<br />
            <input type="radio" id="spotlight_layout_A" name="con_front[spotlight_layout]" value="A" <?php checked( $settings['spotlight_layout'], "A" ); ?> />
        </div>
        <div class="radioimage">
            <label for="spotlight_layout_A"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/spotlight-layout-A.png" alt="layout A" /></label>
        </div>
    </div>
    <div class="radiowrapper">
        <div class="radiobutton">
        	B<br />
            <input type="radio" id="spotlight_layout_B" name="con_front[spotlight_layout]" value="B" <?php checked( $settings['spotlight_layout'], "B" ); ?> />
        </div>
        <div class="radioimage">
            <label for="spotlight_layout_B"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/spotlight-layout-B.png" alt="layout B" /></label>
        </div>
    </div>
    <div class="radiowrapper">
        <div class="radiobutton">
        	C<br />
            <input type="radio" id="spotlight_layout_C" name="con_front[spotlight_layout]" value="C" <?php checked( $settings['spotlight_layout'], "C" ); ?> />
        </div>
        <div class="radioimage">
            <label for="spotlight_layout_C"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/spotlight-layout-C.png" alt="layout C" /></label>
        </div>
    </div>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="spotlight_duration"><?php _e( 'Slide Duration', 'continuum' ); ?></label></th>
	<td>
	<select id="spotlight_duration" name="con_front[spotlight_duration]">
    	<?php $i=1;
		while ($i<=30) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['spotlight_duration']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
		} ?>
	</select>
    <?php _e( 'Number of seconds each slide will display before rotating', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="spotlight_num"><?php _e( 'Number of Slides', 'continuum' ); ?></label></th>
	<td>
	<select id="spotlight_num" name="con_front[spotlight_num]">
    	<?php $i=1;
		while ($i<=20) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['spotlight_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
		} ?>
	</select>
    <?php _e( 'Number of slides to rotate through. Only affects slider layout B.', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="spotlight_tag"><?php _e( 'Spotlight Tag', 'continuum' ); ?></label></th>
	<td>
	<input id="spotlight_tag" name="con_front[spotlight_tag]" type="text" value="<?php  esc_attr_e($settings['spotlight_tag']); ?>" />
    <?php _e( 'Name of the tag that you want to use to mark posts as Spotlight', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><?php _e( 'Display Header', 'continuum' ); ?></th>
	<td>
	<input type="checkbox" id="spotlight_header_show" name="con_front[spotlight_header_show]" value="1" <?php checked( true, $settings['spotlight_header_show'] ); ?> />
    <label for="spotlight_header_show"><?php _e( 'Display the Spotlight header', 'continuum' ); ?></label>
	</td>
	</tr>	
    
    <tr valign="top"><th scope="row"><label for="spotlight_header_text"><?php _e( 'Header Text', 'continuum' ); ?></label></th>
	<td>
	<input id="spotlight_header_text" name="con_front[spotlight_header_text]" type="text" value="<?php  esc_attr_e($settings['spotlight_header_text']); ?>" />
    <?php _e( 'Text to display as the Spotlight Slider header', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><span class="special"><?php _e( 'Display Widgets', 'continuum' ); ?></span></th>
	<td>
	<input type="checkbox" id="spotlight_widgets" name="con_front[spotlight_widgets]" value="1" <?php checked( true, $settings['spotlight_widgets'] ); ?> />
    <label for="spotlight_widgets"><?php _e( 'Display the Spotlight widget area to the right of the Spotlight slider', 'continuum' ); ?></label>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="spotlight_reactions_text"><?php _e( 'Widget Header Text', 'continuum' ); ?></label></th>
	<td>
	<input id="spotlight_reactions_text" name="con_front[spotlight_reactions_text]" type="text" value="<?php  esc_attr_e($settings['spotlight_reactions_text']); ?>" />
    <?php _e( 'Text to display as the Spotlight Widgets header', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="reaction_num"><?php _e( 'Number of Recent Reactions', 'continuum' ); ?></label></th>
	<td>
	<select id="reaction_num" name="con_front[reaction_num]">
    	<?php $i=4;
		while ($i<=64) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['reaction_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i=$i+4;
		} ?>
	</select>
    <?php _e( 'Number of recent reactions to display in the scroller. Select 4 to disable scrolling.', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="reaction_speed"><?php _e( 'Recent Reactions Speed', 'continuum' ); ?></label></th>
	<td>
	<select id="reaction_speed" name="con_front[reaction_speed]">
    	<?php $i=5;
		while ($i<=100) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['reaction_speed']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i=$i+5;
		} ?>
	</select>
    <?php _e( 'Speed of the vertically-scrolling Recent Reactions comment scroller', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'Layout', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="home_latest_show" class="special"><?php _e( 'Display "The Latest"', 'continuum' ); ?></label></th>
	<td>
	<input type="checkbox" id="home_latest_show" name="con_front[home_latest_show]" value="1" <?php checked( true, $settings['home_latest_show'] ); ?> />
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><span class="special"><?php _e( '"The Latest" Position', 'continuum' ); ?></span></th>
	<td>
	<input type="radio" id="home_latest_position_above" name="con_front[home_latest_position]" value="above" <?php checked( $settings['home_latest_position'], "above" ); ?> />
	<label for="home_latest_position_above"><?php _e( 'Above "The Feed"', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="home_latest_position_below" name="con_front[home_latest_position]" value="below" <?php checked( $settings['home_latest_position'], "below" ); ?> />
	<label for="home_latest_position_below"><?php _e( 'Below "The Feed"', 'continuum' ); ?></label>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="home_feed_show" class="special"><?php _e( 'Display "The Feed"', 'continuum' ); ?></label></th>
	<td>
	<input type="checkbox" id="home_feed_show" name="con_front[home_feed_show]" value="1" <?php checked( true, $settings['home_feed_show'] ); ?> />
	</td>
	</tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

// Function to generate options page
function theme_layout_options() {
	global $con_layout;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_layout', $con_layout ); ?>
	
	<?php settings_fields( 'con_theme_layout' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>
    
    <div class="rm_wrap">
        <div class="rm_opts">
        
        	<?php //single posts ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Single Posts', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                
                    <tr valign="top"><th scope="row"><label for="breadcrumb_show"><?php _e( 'Display Breadcrumbs', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="breadcrumb_show" name="con_layout[breadcrumb_show]" value="1" <?php checked( true, $settings['breadcrumb_show'] ); ?> />&nbsp;&nbsp;&nbsp;&nbsp;<?php _e( '(Applies to pages AND posts)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><span class="special"><?php _e( 'Featured Image Size', 'continuum' ); ?></span></th>
                    <td>
                    <input type="radio" id="featuredimage_size_small" name="con_layout[featuredimage_size]" value="small" <?php checked( $settings['featuredimage_size'], "small" ); ?> />
					<label for="featuredimage_size_small"><?php _e( 'Small', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="featuredimage_size_medium" name="con_layout[featuredimage_size]" value="medium" <?php checked( $settings['featuredimage_size'], "medium" ); ?> />
					<label for="featuredimage_size_medium"><?php _e( 'Medium', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="featuredimage_size_full" name="con_layout[featuredimage_size]" value="full" <?php checked( $settings['featuredimage_size'], "full" ); ?> />
					<label for="featuredimage_size_full"><?php _e( 'Full', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="featuredimage_size_none" name="con_layout[featuredimage_size]" value="none" <?php checked( $settings['featuredimage_size'], "none" ); ?> />
					<label for="featuredimage_size_none"><?php _e( 'None', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php _e( '(Applies to pages AND posts)', 'continuum' ); ?>             
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="infobox_show" class="special"><?php _e( 'Display Infobox', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="infobox_show" name="con_layout[infobox_show]" value="1" <?php checked( true, $settings['infobox_show'] ); ?> /> <?php _e( 'The infobox appears above the post title containing author, tags, and more articles link', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="sharebox_show" class="special"><?php _e( 'Display Sharebox', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="sharebox_show" name="con_layout[sharebox_show]" value="1" <?php checked( true, $settings['sharebox_show'] ); ?> /> <?php _e( 'The sharebox appears below the post featured image and floats to the left of the content', 'continuum' ); ?><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e( '(Applies to pages and posts)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><?php _e( 'Sharebox Items', 'continuum' ); ?></th>
                    <td>
                    <input type="checkbox" id="share_twitter_show" name="con_layout[share_twitter_show]" value="1" <?php checked( true, $settings['share_twitter_show'] ); ?> /> <label for="share_twitter_show"><?php _e( 'Twitter', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="share_facebook_show" name="con_layout[share_facebook_show]" value="1" <?php checked( true, $settings['share_facebook_show'] ); ?> /> <label for="share_facebook_show"><?php _e( 'Facebook', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="share_plusone_show" name="con_layout[share_plusone_show]" value="1" <?php checked( true, $settings['share_plusone_show'] ); ?> /> <label for="share_plusone_show"><?php _e( 'Google +1', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="share_digg_show" name="con_layout[share_digg_show]" value="1" <?php checked( true, $settings['share_digg_show'] ); ?> /> <label for="share_digg_show"><?php _e( 'Digg', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="share_stumbleupon_show" name="con_layout[share_stumbleupon_show]" value="1" <?php checked( true, $settings['share_stumbleupon_show'] ); ?> /> <label for="share_stumbleupon_show"><?php _e( 'Stumble Upon', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <input type="checkbox" id="share_email_show" name="con_layout[share_email_show]" value="1" <?php checked( true, $settings['share_email_show'] ); ?> /> <label for="share_email_show"><?php _e( 'E-mail', 'continuum' ); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="authorbox_show" class="special"><?php _e( 'Display Authorbox', 'continuum' ); ?> </label></th>
                    <td>
                    <input type="checkbox" id="authorbox_show" name="con_layout[authorbox_show]" value="1" <?php checked( true, $settings['authorbox_show'] ); ?> /> <?php _e( 'The authorbox appears below the post content containing information about the author', 'continuum' ); ?>  
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="post_feed_show" class="special"><?php _e( 'Display "The Feed"', 'continuum' ); ?>  </label></th>
                    <td>
                    <input type="checkbox" id="post_feed_show" name="con_layout[post_feed_show]" value="1" <?php checked( true, $settings['post_feed_show'] ); ?> /> <?php _e( 'On single pages "The Feed" will show related posts by tags and by categories', 'continuum' ); ?>  
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="post_latest_show" class="special"><?php _e( 'Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="post_latest_show" name="con_layout[post_latest_show]" value="1" <?php checked( true, $settings['post_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the single post pages', 'continuum' ); ?>
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />
            
            <?php //archive pages ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Archive Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                
                    <tr valign="top"><th scope="row"><?php _e( 'Archive Layout', 'continuum' ); ?></th>
                    <td>                    
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	A<br />
                            <input type="radio" id="archive_layout_A" name="con_layout[archive_layout]" value="A" <?php checked( $settings['archive_layout'], "A" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="archive_layout_A"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-A.png" alt="layout A" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	B<br />
                            <input type="radio" id="archive_layout_B" name="con_layout[archive_layout]" value="B" <?php checked( $settings['archive_layout'], "B" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="archive_layout_B"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-B.png" alt="layout B" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	C<br />
                            <input type="radio" id="archive_layout_C" name="con_layout[archive_layout]" value="C" <?php checked( $settings['archive_layout'], "C" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="archive_layout_C"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-C.png" alt="layout C" /></label>
                        </div>
                    </div> 
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_header"><?php _e( 'Archive Header Text', 'continuum' ); ?></label></th>
                    <td>
                    <input id="archive_header" name="con_layout[archive_header]" type="text" value="<?php  esc_attr_e($settings['archive_header']); ?>" />
                    <?php _e( 'Text to display as the archive header. Leave blank for built-in archive headers.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_num"><?php _e( 'Posts Per Page', 'continuum' ); ?></label></th>
                    <td>
                    <select id="archive_num" name="con_layout[archive_num]">
                        <?php $i=1;
                        while ($i<=50) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['archive_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of archive posts to display per page (archive pages are paginated)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_unique_sidebar"><?php _e( 'Unique Archive Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="archive_unique_sidebar" name="con_layout[archive_unique_sidebar]" value="1" <?php checked( true, $settings['archive_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Archive widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_latest_show"><?php _e( 'Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="archive_latest_show" name="con_layout[archive_latest_show]" value="1" <?php checked( true, $settings['archive_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the archive pages', 'continuum' ); ?>
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />
            
            <?php //category pages ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Category Archive Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'These are the settings that are used when viewing the archives for a category, and they override regular archive settings.', 'continuum' ); ?></div>
                    </th>
                    </tr>
                
                    <tr valign="top"><th scope="row"><?php _e( 'Category Archive Layout', 'continuum' ); ?></th>
                    <td>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	A<br />
                            <input type="radio" id="category_layout_A" name="con_layout[category_layout]" value="A" <?php checked( $settings['category_layout'], "A" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="category_layout_A"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-A.png" alt="layout A" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	B<br />
                            <input type="radio" id="category_layout_B" name="con_layout[category_layout]" value="B" <?php checked( $settings['category_layout'], "B" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="category_layout_B"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-B.png" alt="layout B" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	C<br />
                            <input type="radio" id="category_layout_C" name="con_layout[category_layout]" value="C" <?php checked( $settings['category_layout'], "C" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="category_layout_C"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-C.png" alt="layout C" /></label>
                        </div>
                    </div> 
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_header"><?php _e( 'Category Header Text', 'continuum' ); ?></label></th>
                    <td>
                    <input id="category_header" name="con_layout[category_header]" type="text" value="<?php  esc_attr_e($settings['category_header']); ?>" />
                    <?php _e( 'Text to display as the category header', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_num"><?php _e( 'Posts Per Page', 'continuum' ); ?></label></th>
                    <td>
                    <select id="category_num" name="con_layout[category_num]">
                        <?php $i=1;
                        while ($i<=50) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['category_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of category archive posts to display per page (category archive pages are paginated)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_unique_sidebar"><?php _e( 'Unique Category Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="category_unique_sidebar" name="con_layout[category_unique_sidebar]" value="1" <?php checked( true, $settings['category_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Category widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_latest_show"><?php _e( 'Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="category_latest_show" name="con_layout[category_latest_show]" value="1" <?php checked( true, $settings['category_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the category archive pages', 'continuum' ); ?>
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />
            
            <?php //other pages ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Other Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top"><th scope="row"><label for="search_num"><?php _e( 'Search: Posts Per Page', 'continuum' ); ?></label></th>
                    <td>
                    <select id="search_num" name="con_layout[search_num]">
                        <?php $i=1;
                        while ($i<=50) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['search_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of search results to display per page (search results pages are paginated)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="search_unique_sidebar"><?php _e( 'Unique Search Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="search_unique_sidebar" name="con_layout[search_unique_sidebar]" value="1" <?php checked( true, $settings['search_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Search widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="search_latest_show"><?php _e( 'Search: Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="search_latest_show" name="con_layout[search_latest_show]" value="1" <?php checked( true, $settings['search_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the search results page', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="author_unique_sidebar"><?php _e( 'Unique Authors Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="author_unique_sidebar" name="con_layout[author_unique_sidebar]" value="1" <?php checked( true, $settings['author_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Author widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="author_latest_show"><?php _e( 'Authors: Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="author_latest_show" name="con_layout[author_latest_show]" value="1" <?php checked( true, $settings['author_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the author listings page', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_feed_show" class="special"><?php _e( 'Pages: Display "The Feed"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="page_feed_show" name="con_layout[page_feed_show]" value="1" <?php checked( true, $settings['page_feed_show'] ); ?> /> <?php _e( 'Display "The Feed" below the page content', 'continuum' ); ?> 
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_unique_sidebar"><?php _e( 'Unique Pages Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="page_unique_sidebar" name="con_layout[page_unique_sidebar]" value="1" <?php checked( true, $settings['page_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Page widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_latest_show" class="special"><?php _e( 'Pages: Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="page_latest_show" name="con_layout[page_latest_show]" value="1" <?php checked( true, $settings['page_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of regular pages', 'continuum' ); ?>
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />
            
            
        </div>
    </div>
    
	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

// Function to generate options page
function theme_feed_options() {
	global $con_feed;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>	

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_feed', $con_feed ); ?>
	
	<?php settings_fields( 'con_theme_feed' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

	<tr valign="top"><th scope="row"><span class="special"><?php _e( 'Feed Layout', 'continuum' ); ?></span></th>
	<td>
    <div class="radiowrapper">
        <div class="radiobutton">
        	A<br />
            <input type="radio" id="feed_layout_A" name="con_feed[feed_layout]" value="A" <?php checked( $settings['feed_layout'], "A" ); ?> />
        </div>
        <div class="radioimage">
            <label for="feed_layout_A"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-A.png" alt="layout A" /></label>
        </div>
    </div>
    <div class="radiowrapper">
        <div class="radiobutton">
        	B<br />
            <input type="radio" id="feed_layout_B" name="con_feed[feed_layout]" value="B" <?php checked( $settings['feed_layout'], "B" ); ?> />
        </div>
        <div class="radioimage">
            <label for="feed_layout_B"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-B.png" alt="layout B" /></label>
        </div>
    </div>
    <div class="radiowrapper">
        <div class="radiobutton">
        	C<br />
            <input type="radio" id="feed_layout_C" name="con_feed[feed_layout]" value="C" <?php checked( $settings['feed_layout'], "C" ); ?> />
        </div>
        <div class="radioimage">
            <label for="feed_layout_C"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-C.png" alt="layout C" /></label>
        </div>
    </div>
    <div class="radiowrapper">
        <div class="radiobutton">
        	D<br />
            <input type="radio" id="feed_layout_D" name="con_feed[feed_layout]" value="D" <?php checked( $settings['feed_layout'], "D" ); ?> />
        </div>
        <div class="radioimage">
            <label for="feed_layout_D"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-D.png" alt="layout D" /></label>
        </div>
    </div>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="feed_header" class="special"><?php _e( 'Feed Header Text', 'continuum' ); ?></label></th>
    <td>
    <input id="feed_header" name="con_feed[feed_header]" type="text" value="<?php  esc_attr_e($settings['feed_header']); ?>" />
    <?php _e( 'Text to display as the feed header', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_social"><?php _e( 'Display Social Links', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="feed_social" name="con_feed[feed_social]" value="1" <?php checked( true, $settings['feed_social'] ); ?> /> <?php _e( 'Display the social links in the feed bar', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_num" class="special"><?php _e( 'Posts Per Page', 'continuum' ); ?></label></th>
    <td>
    <select id="feed_num" name="con_feed[feed_num]">
        <?php $i=1;
        while ($i<=50) { ?>			
            <option value="<?php echo $i; ?>"<?php if($settings['feed_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
        } ?>
    </select>
    <?php _e( 'Number of feed posts to display per page (feed pages are paginated)', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_latest" class="special"><?php _e( 'Layout D Header Text', 'continuum' ); ?></label></th>
    <td>
    <input id="feed_latest" name="con_feed[feed_latest]" type="text" value="<?php  esc_attr_e($settings['feed_latest']); ?>" />
    <?php _e( 'Text to display as the feed header for layout D', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_latest_cats"><?php _e( 'Feed Latest Categories', 'continuum' ); ?></label></th>
    <td>
    <textarea id="feed_latest_cats" name="con_feed[feed_latest_cats]" rows="3" cols="75"><?php echo stripslashes($settings['feed_latest_cats']); ?></textarea><br />
    <?php _e( 'Comma-separated list of categories to use for feed layout D (e.g. "Sports, Movies, Video Games, TV")', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_latest_num"><?php _e( 'Latest Number', 'continuum' ); ?></label></th>
    <td>
    <select id="feed_latest_num" name="con_feed[feed_latest_num]">
        <?php $i=1;
        while ($i<=10) { ?>			
            <option value="<?php echo $i; ?>"<?php if($settings['feed_latest_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
        } ?>
    </select>
    <?php _e( 'Number of posts to display for each category in feed layout D', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_unique_sidebar"><?php _e( 'Unique Feed Sidebar', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="feed_unique_sidebar" name="con_feed[feed_unique_sidebar]" value="1" <?php checked( true, $settings['feed_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar Feed widget panel for the feed sidebar instead of the Sidebar Default widget panel', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'Single Pages and Posts', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="feed_single_header" class="special"><?php _e( 'Feed Header Text', 'continuum' ); ?></label></th>
    <td>
    <input id="feed_single_header" name="con_feed[feed_single_header]" type="text" value="<?php  esc_attr_e($settings['feed_single_header']); ?>" />
    <?php _e( 'Text to display as the feed header on single posts and pages', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_single_social" class="special"><?php _e( 'Display Social Links', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="feed_single_social" name="con_feed[feed_single_social]" value="1" <?php checked( true, $settings['feed_single_social'] ); ?> /> <?php _e( 'Display the social links in the feed bar on single pages and posts', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="feed_single_num" class="special"><?php _e( 'Number of Posts', 'continuum' ); ?></label></th>
    <td>
    <select id="feed_single_num" name="con_feed[feed_single_num]">
        <?php $i=1;
        while ($i<=50) { ?>			
            <option value="<?php echo $i; ?>"<?php if($settings['feed_single_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
        } ?>
    </select>
    <?php _e( 'Number of feed posts to display on single posts and pages (feed posts are <b>not</b> paginated on single posts and pages)', 'continuum' ); ?>
    </td>
    </tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

// Function to generate options page
function theme_reviews_options() {
	global $con_reviews;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_reviews', $con_reviews ); ?>
	
	<?php settings_fields( 'con_theme_reviews' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>
    
    <div class="rm_wrap">
        <div class="rm_opts">        
        	          
            <?php //general settings ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'General Settings', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

                    <tr valign="top"><th scope="row"><label for="posttype_enable_movies"><?php _e( 'Enable Movie Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="posttype_enable_movies" name="con_reviews[posttype_enable_movies]" value="1" <?php checked( true, $settings['posttype_enable_movies'] ); ?> />
                    </td>
                    </tr>   
                    
                    <tr valign="top"><th scope="row"><label for="posttype_enable_music"><?php _e( 'Enable Music Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="posttype_enable_music" name="con_reviews[posttype_enable_music]" value="1" <?php checked( true, $settings['posttype_enable_music'] ); ?> />
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="posttype_enable_games"><?php _e( 'Enable Video Game Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="posttype_enable_games" name="con_reviews[posttype_enable_games]" value="1" <?php checked( true, $settings['posttype_enable_games'] ); ?> />
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="posttype_enable_books"><?php _e( 'Enable Book Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="posttype_enable_books" name="con_reviews[posttype_enable_books]" value="1" <?php checked( true, $settings['posttype_enable_books'] ); ?> />
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="posttype_enable_products"><?php _e( 'Enable Product Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="posttype_enable_products" name="con_reviews[posttype_enable_products]" value="1" <?php checked( true, $settings['posttype_enable_products'] ); ?> />
                    </td>
                    </tr>  
                    
                    <tr valign="top"><th scope="row"><label for="inject_reviews"><?php _e( 'Inject Reviews', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="inject_reviews" name="con_reviews[inject_reviews]" value="1" <?php checked( true, $settings['inject_reviews'] ); ?> />
                    <?php _e( 'Inject reviews into all post listing pages instead of keeping them separate on their own pages.', 'continuum' ); ?>
                    </td>
                    </tr>  
                    
                    <tr valign="top"><th scope="row"><?php _e( 'Review Listing Layout', 'continuum' ); ?></th>
                    <td>                    
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	A<br />
                            <input type="radio" id="review_layout_A" name="con_reviews[review_layout]" value="A" <?php checked( $settings['review_layout'], "A" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="review_layout_A"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-A.png" alt="layout A" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	B<br />
                            <input type="radio" id="review_layout_B" name="con_reviews[review_layout]" value="B" <?php checked( $settings['review_layout'], "B" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="review_layout_B"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-B.png" alt="layout B" /></label>
                        </div>
                    </div>
                    <div class="radiowrapper">
                        <div class="radiobutton">
                        	C<br />
                            <input type="radio" id="review_layout_C" name="con_reviews[review_layout]" value="C" <?php checked( $settings['review_layout'], "C" ); ?> />
                        </div>
                        <div class="radioimage">
                            <label for="review_layout_C"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/feed-layout-C.png" alt="layout C" /></label>
                        </div>
                    </div>                 
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_num"><?php _e( 'Posts Per Page', 'continuum' ); ?></label></th>
                    <td>
                    <select id="review_num" name="con_reviews[review_num]">
                        <?php $i=1;
                        while ($i<=50) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['review_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of reviews to display per page (review pages are paginated)', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_unique_sidebar"><?php _e( 'Unique Review Sidebar', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_unique_sidebar" name="con_reviews[review_unique_sidebar]" value="1" <?php checked( true, $settings['review_unique_sidebar'] ); ?> /> <?php _e( 'Use the Sidebar All Reviews widget panel instead of Sidebar Default', 'continuum' ); ?>
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="review_authorbox_show" class="special"><?php _e( 'Display Authorbox', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_authorbox_show" name="con_reviews[review_authorbox_show]" value="1" <?php checked( true, $settings['review_authorbox_show'] ); ?> /> <?php _e( 'The authorbox appears below the review content containing information about the author', 'continuum' ); ?>  
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="review_latest_show"><?php _e( 'Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_latest_show" name="con_reviews[review_latest_show]" value="1" <?php checked( true, $settings['review_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of review pages', 'continuum' ); ?>
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="review_post_feed_show" class="special"><?php _e( 'Single: Display "The Feed"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_post_feed_show" name="con_reviews[review_post_feed_show]" value="1" <?php checked( true, $settings['review_post_feed_show'] ); ?> /> <?php _e( 'On single review pages "The Feed" will show related posts by taxonomies and post types', 'continuum' ); ?> 
                    </td>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="review_post_latest_show" class="special"><?php _e( 'Single: Display "The Latest"', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_post_latest_show" name="con_reviews[review_post_latest_show]" value="1" <?php checked( true, $settings['review_post_latest_show'] ); ?> /> <?php _e( 'Display "The Latest" at the bottom of the single review pages', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_num" class="special"><?php _e( 'Feed: Number of Posts', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_review_num" name="con_reviews[feed_review_num]">
                        <?php $i=1;
                        while ($i<=50) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_review_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of reviews to display in "The Feed" on single review pages', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_header" class="special"><?php _e( 'Feed Header Text', 'continuum' ); ?></label></th>
                    <td>
                    <input id="feed_review_header" name="con_reviews[feed_review_header]" type="text" value="<?php  esc_attr_e($settings['feed_review_header']); ?>" />
                    <?php _e( 'Text to display as the feed header on single review pages', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_social"><?php _e( 'Display Social Links', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="feed_review_social" name="con_reviews[feed_review_social]" value="1" <?php checked( true, $settings['feed_review_social'] ); ?> /> <?php _e( 'Display the social links in the feed bar on single review pages', 'continuum' ); ?>
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />
            
            <?php //rating labels ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Rating Labels', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'The Continuum rating system uses 0 thru 5, increasing at 0.5 increments. That means there are 11 possible ratings that you can assign to a review. You can label what these ratings mean using the textboxes below. These labels will show up when users hover over a review rating, and on single review pages next to the "Bottom Line".', 'continuum' ); ?></div>
                    </th>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_0"><?php _e( '0 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_0" name="con_reviews[review_stars_0]" type="text" value="<?php  esc_attr_e($settings['review_stars_0']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_0_half"><?php _e( '0.5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_0_half" name="con_reviews[review_stars_0_half]" type="text" value="<?php  esc_attr_e($settings['review_stars_0_half']); ?>" />
                    </td>
                    </tr>
                
                    <tr valign="top"><th scope="row"><label for="review_stars_1"><?php _e( '1 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_1" name="con_reviews[review_stars_1]" type="text" value="<?php  esc_attr_e($settings['review_stars_1']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_1_half"><?php _e( '1.5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_1_half" name="con_reviews[review_stars_1_half]" type="text" value="<?php  esc_attr_e($settings['review_stars_1_half']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_2"><?php _e( '2 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_2" name="con_reviews[review_stars_2]" type="text" value="<?php  esc_attr_e($settings['review_stars_2']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_2_half"><?php _e( '2.5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_2_half" name="con_reviews[review_stars_2_half]" type="text" value="<?php  esc_attr_e($settings['review_stars_2_half']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_3"><?php _e( '3 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_3" name="con_reviews[review_stars_3]" type="text" value="<?php  esc_attr_e($settings['review_stars_3']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_3_half"><?php _e( '3.5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_3_half" name="con_reviews[review_stars_3_half]" type="text" value="<?php  esc_attr_e($settings['review_stars_3_half']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_4"><?php _e( '4 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_4" name="con_reviews[review_stars_4]" type="text" value="<?php  esc_attr_e($settings['review_stars_4']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_4_half"><?php _e( '4.5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_4_half" name="con_reviews[review_stars_4_half]" type="text" value="<?php  esc_attr_e($settings['review_stars_4_half']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_stars_5"><?php _e( '5 Rating Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_stars_5" name="con_reviews[review_stars_5]" type="text" value="<?php  esc_attr_e($settings['review_stars_5']); ?>" />
                    </td>
                    </tr>
                
                    </table>
                
                </div>
            </div>    
            <br />            
            
            <?php //review labels ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Review Labels', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'In addition to a number-based rating, you can give each review a "Positive" and a "Negative" summary (think "pros" and "cons") using custom fields. Of course, you might not want to call these fields by their "Positives", "Negatives", and "Bottom Line" defaults and instead use your own verbiage such as "Pros", "Cons", and "Overview", respectively. Or maybe even "The Good", "The Bad", and "Our Take". You can even use different labels for each review type. Use the textboxes below to specify your labels.', 'continuum' ); ?></div>
                    </th>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_movies_positive_text"><?php _e( 'Movies "Positive" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_movies_positive_text" name="con_reviews[review_movies_positive_text]" type="text" value="<?php  esc_attr_e($settings['review_movies_positive_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_movies_negative_text"><?php _e( 'Movies "Negative" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_movies_negative_text" name="con_reviews[review_movies_negative_text]" type="text" value="<?php  esc_attr_e($settings['review_movies_negative_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_movies_bottomline_text"><?php _e( 'Movies "Bottom Line" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_movies_bottomline_text" name="con_reviews[review_movies_bottomline_text]" type="text" value="<?php  esc_attr_e($settings['review_movies_bottomline_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_music_positive_text"><?php _e( 'Music "Positive" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_music_positive_text" name="con_reviews[review_music_positive_text]" type="text" value="<?php  esc_attr_e($settings['review_music_positive_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_music_negative_text"><?php _e( 'Music "Negative" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_music_negative_text" name="con_reviews[review_music_negative_text]" type="text" value="<?php  esc_attr_e($settings['review_music_negative_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_music_bottomline_text"><?php _e( 'Music "Bottom Line" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_music_bottomline_text" name="con_reviews[review_music_bottomline_text]" type="text" value="<?php  esc_attr_e($settings['review_music_bottomline_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_games_positive_text"><?php _e( 'Video Games "Positive" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_games_positive_text" name="con_reviews[review_games_positive_text]" type="text" value="<?php  esc_attr_e($settings['review_games_positive_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_games_negative_text"><?php _e( 'Video Games "Negative" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_games_negative_text" name="con_reviews[review_games_negative_text]" type="text" value="<?php  esc_attr_e($settings['review_games_negative_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_games_bottomline_text"><?php _e( 'Video Gms "Bottom Line" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_games_bottomline_text" name="con_reviews[review_games_bottomline_text]" type="text" value="<?php  esc_attr_e($settings['review_games_bottomline_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_books_positive_text"><?php _e( 'Books "Positive" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_books_positive_text" name="con_reviews[review_books_positive_text]" type="text" value="<?php  esc_attr_e($settings['review_books_positive_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_books_negative_text"><?php _e( 'Books "Negative" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_books_negative_text" name="con_reviews[review_books_negative_text]" type="text" value="<?php  esc_attr_e($settings['review_books_negative_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_books_bottomline_text"><?php _e( 'Books "Bottom Line" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_books_bottomline_text" name="con_reviews[review_books_bottomline_text]" type="text" value="<?php  esc_attr_e($settings['review_books_bottomline_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_products_positive_text"><?php _e( 'Products "Positive" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_products_positive_text" name="con_reviews[review_products_positive_text]" type="text" value="<?php  esc_attr_e($settings['review_products_positive_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_products_negative_text"><?php _e( 'Products "Negative" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_products_negative_text" name="con_reviews[review_products_negative_text]" type="text" value="<?php  esc_attr_e($settings['review_products_negative_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_products_bottomline_text"><?php _e( 'Products "Bottom Line" Label', 'continuum' ); ?></label></th>
                    <td>
                    <input id="review_products_bottomline_text" name="con_reviews[review_products_bottomline_text]" type="text" value="<?php  esc_attr_e($settings['review_products_bottomline_text']); ?>" />
                    </td>
                    </tr>
                    
                    <tr valign="top">
                    <td colspan="2">
                    <div class="note"><?php _e( 'Note: Changing the review labels will not affect the custom field names that you assign to the reviews. You will always use "Positivies", "Negatives", and "Rating" as the custom field names. The labels above merely change how the review appears to the users on the front-end.', 'continuum' ); ?></div>
                    </td>
                    </tr>
                
                    </table>
                    
                    
                
                </div>
            </div>    
            <br />
            
        </div>
    </div>	

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>
    
    <h2>Plugin To Enable Unlimited Custom Review Types</h2>
    
    <form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/404685725047057"
    id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm"
    target="_top">
       <input name="item_name_1" type="hidden" value="Refactor 2.0"/>
       <input name="item_description_1" type="hidden" value="A re-written
    version of the Continuum Theme by an independent 3rd party developer.
    You must have purchased a license for the original Continuum theme
    from ThemeForest before purchasing this."/>
       <input name="item_quantity_1" type="hidden" value="1"/>
       <input name="item_price_1" type="hidden" value="19.99"/>
       <input name="item_currency_1" type="hidden" value="USD"/>
       <input name="shopping-cart.items.item-1.digital-content.description"
    type="hidden" value="Download and install the theme just like you
    normally would (upload the zip to your /wp-content/themes folder and
    unzip it into a folder named &amp;quot;continuum&amp;quot;
    there).&#xa;&#xa;Feel free to post questions here:
    http://blog.chomperstomp.com/questions/"/>
       <input name="shopping-cart.items.item-1.digital-content.key"
    type="hidden" value="iOrFiSKSQPKCTqeB47Tap3VeoCRs9NCBKjtM00VkKb8="/>
       <input name="shopping-cart.items.item-1.digital-content.key.is-encrypted"
    type="hidden" value="true"/>
       <input name="shopping-cart.items.item-1.digital-content.url"
    type="hidden" value="http://blog.chomperstomp.com/themes-and-plugins/continuum-refactor/"/>
       <input name="_charset_" type="hidden" value="utf-8"/>
       <input alt=""
    src="http://blog.chomperstomp.com/wp-content/uploads/2012/05/large-promo.jpg"
    type="image" />
    </form>

	</div>

	<?php
}

// Function to generate options page
function theme_ads_options() {
	global $con_ads;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_ads', $con_ads ); ?>
	
	<?php settings_fields( 'con_theme_ads' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<div class="rm_wrap">
        <div class="rm_opts">        
        	          
            <?php //single  ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Single Posts', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

                    <tr valign="top"><th scope="row"><label for="single_ad_post_show"><?php _e( 'Display Post Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="single_ad_post_show" name="con_ads[single_ad_post_show]" value="1" <?php checked( true, $settings['single_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the post content', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="single_ad_post"><?php _e( 'Post Ad HTML', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="single_ad_post" name="con_ads[single_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['single_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="single_ad_feed_show"><?php _e( 'Display Feed Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="single_ad_feed_show" name="con_ads[single_ad_feed_show]" value="1" <?php checked( true, $settings['single_ad_feed_show'] ); ?> /> <?php _e( 'Display an ad below "The Feed"', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="single_ad_feed"><?php _e( 'Feed Ad HTML', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="single_ad_feed" name="con_ads[single_ad_feed]" rows="4" cols="70"><?php echo stripslashes($settings['single_ad_feed']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="single_ad_comments_show"><?php _e( 'Display Comment Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="single_ad_comments_show" name="con_ads[single_ad_comments_show]" value="1" <?php checked( true, $settings['single_ad_comments_show'] ); ?> /> <?php _e( 'Display an ad below the comments', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="single_ad_comments"><?php _e( 'Comment Ad HTML', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="single_ad_comments" name="con_ads[single_ad_comments]" rows="4" cols="70"><?php echo stripslashes($settings['single_ad_comments']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                                
                    </table>
                
                </div>
            </div>    
            <br />
            
            <?php //archive  ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Archive Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">

                    <tr valign="top"><th scope="row"><label for="archive_ad_post_show"><?php _e( 'Display Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="archive_ad_post_show" name="con_ads[archive_ad_post_show]" value="1" <?php checked( true, $settings['archive_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the archive listings', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_post"><?php _e( 'Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_post" name="con_ads[archive_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_num"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="archive_ad_num" name="con_ads[archive_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['archive_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the archive listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ads_increment"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="archive_ads_increment" name="con_ads[archive_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['archive_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ads_offset"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="archive_ads_offset" name="con_ads[archive_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['archive_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_1"><?php _e( 'Ad 1', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_1" name="con_ads[archive_ad_1]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_1']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                	<tr valign="top"><th scope="row"><label for="archive_ad_2"><?php _e( 'Ad 2', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_2" name="con_ads[archive_ad_2]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_2']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_3"><?php _e( 'Ad 3', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_3" name="con_ads[archive_ad_3]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_3']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_4"><?php _e( 'Ad 4', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_4" name="con_ads[archive_ad_4]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_4']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_5"><?php _e( 'Ad 5', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_5" name="con_ads[archive_ad_5]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_5']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_6"><?php _e( 'Ad 6', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_6" name="con_ads[archive_ad_6]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_6']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_7"><?php _e( 'Ad 7', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_7" name="con_ads[archive_ad_7]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_7']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_8"><?php _e( 'Ad 8', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_8" name="con_ads[archive_ad_8]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_8']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_9"><?php _e( 'Ad 9', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_9" name="con_ads[archive_ad_9]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_9']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="archive_ad_10"><?php _e( 'Ad 10', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="archive_ad_10" name="con_ads[archive_ad_10]" rows="4" cols="70"><?php echo stripslashes($settings['archive_ad_10']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    </table>
                    
                </div>
            </div>    
            <br />
            
            <?php //category archive  ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Category Archive Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">

                    <tr valign="top"><th scope="row"><label for="category_ad_post_show"><?php _e( 'Display Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="category_ad_post_show" name="con_ads[category_ad_post_show]" value="1" <?php checked( true, $settings['category_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the category listings', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_post"><?php _e( 'Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_post" name="con_ads[category_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_num"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="category_ad_num" name="con_ads[category_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['category_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the category listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ads_increment"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="category_ads_increment" name="con_ads[category_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['category_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ads_offset"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="category_ads_offset" name="con_ads[category_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['category_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_1"><?php _e( 'Ad 1', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_1" name="con_ads[category_ad_1]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_1']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                	<tr valign="top"><th scope="row"><label for="category_ad_2"><?php _e( 'Ad 2', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_2" name="con_ads[category_ad_2]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_2']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_3"><?php _e( 'Ad 3', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_3" name="con_ads[category_ad_3]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_3']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_4"><?php _e( 'Ad 4', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_4" name="con_ads[category_ad_4]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_4']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_5"><?php _e( 'Ad 5', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_5" name="con_ads[category_ad_5]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_5']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_6"><?php _e( 'Ad 6', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_6" name="con_ads[category_ad_6]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_6']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_7"><?php _e( 'Ad 7', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_7" name="con_ads[category_ad_7]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_7']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_8"><?php _e( 'Ad 8', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_8" name="con_ads[category_ad_8]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_8']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_9"><?php _e( 'Ad 9', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_9" name="con_ads[category_ad_9]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_9']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="category_ad_10"><?php _e( 'Ad 10', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="category_ad_10" name="con_ads[category_ad_10]" rows="4" cols="70"><?php echo stripslashes($settings['category_ad_10']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    </table>
                    
                </div>
            </div>    
            <br />            
            
            <?php //review ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Review Pages', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'These settings affect the review listings pages rather than The Feed below the content of the single review pages. To change the settings for ads that appear in The Feed, whic appears below the content of any single page or post, use The Feed toggle panel below.', 'continuum' ); ?></div>
                    </th>
                    </tr>

                    <tr valign="top"><th scope="row"><label for="review_ad_post_show"><?php _e( 'Display Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="review_ad_post_show" name="con_ads[review_ad_post_show]" value="1" <?php checked( true, $settings['review_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the review listings', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_post"><?php _e( 'Footer Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_post" name="con_ads[review_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_num"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="review_ad_num" name="con_ads[review_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['review_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the review listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ads_increment"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="review_ads_increment" name="con_ads[review_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['review_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ads_offset"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="review_ads_offset" name="con_ads[review_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['review_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_1"><?php _e( 'Ad 1', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_1" name="con_ads[review_ad_1]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_1']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                	<tr valign="top"><th scope="row"><label for="review_ad_2"><?php _e( 'Ad 2', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_2" name="con_ads[review_ad_2]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_2']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_3"><?php _e( 'Ad 3', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_3" name="con_ads[review_ad_3]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_3']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_4"><?php _e( 'Ad 4', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_4" name="con_ads[review_ad_4]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_4']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_5"><?php _e( 'Ad 5', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_5" name="con_ads[review_ad_5]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_5']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_6"><?php _e( 'Ad 6', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_6" name="con_ads[review_ad_6]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_6']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_7"><?php _e( 'Ad 7', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_7" name="con_ads[review_ad_7]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_7']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_8"><?php _e( 'Ad 8', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_8" name="con_ads[review_ad_8]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_8']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_9"><?php _e( 'Ad 9', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_9" name="con_ads[review_ad_9]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_9']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="review_ad_10"><?php _e( 'Ad 10', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="review_ad_10" name="con_ads[review_ad_10]" rows="4" cols="70"><?php echo stripslashes($settings['review_ad_10']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    </table>
                    
                </div>
            </div>    
            <br />
            
            <?php //feed ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'The Feed', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_num"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_ad_num" name="con_ads[feed_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the feed listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ads_increment"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_ads_increment" name="con_ads[feed_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ads_offset"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_ads_offset" name="con_ads[feed_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>   
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'You can specify a different number, increment, and offset for ads that display in "The Feed" on <b>single posts</b>.', 'continuum' ); ?></div>
                    </th>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_single_ad_num"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_single_ad_num" name="con_ads[feed_single_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_single_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the feed listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_single_ads_increment"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_single_ads_increment" name="con_ads[feed_single_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_single_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_single_ads_offset"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_single_ads_offset" name="con_ads[feed_single_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_single_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>  
                    
                    <tr valign="top">
                    <th scope="row" colspan="2">
                    <div class="note"><?php _e( 'You can specify a different number, increment, and offset for ads that display in "The Feed" on <b>review pages</b>.', 'continuum' ); ?></div>
                    </th>
                    </tr> 
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_ad_num" class="special"><?php _e( 'Number of Ads', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_review_ad_num" name="con_ads[feed_review_ad_num]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_review_ad_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of ads to display throughout the feed listings. Select "0" to hide these ads.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_ads_increment" class="special"><?php _e( 'Increment', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_review_ads_increment" name="con_ads[feed_review_ads_increment]">
                        <?php $i=2;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_review_ads_increment']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Display an ad every Nth post. For instance, if "3" is selected, every 3rd post will be an ad.', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_review_ads_offset" class="special"><?php _e( 'Off-set', 'continuum' ); ?></label></th>
                    <td>
                    <select id="feed_review_ads_offset" name="con_ads[feed_review_ads_offset]">
                        <?php $i=0;
                        while ($i<=10) { ?>			
                            <option value="<?php echo $i; ?>"<?php if($settings['feed_review_ads_offset']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                    <?php _e( 'Number of posts to display before the first ad', 'continuum' ); ?>
                    </td>
                    </tr>                 

                    <tr valign="top"><th scope="row"><label for="feed_ad_1"><?php _e( 'Ad 1', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_1" name="con_ads[feed_ad_1]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_1']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                	<tr valign="top"><th scope="row"><label for="feed_ad_2"><?php _e( 'Ad 2', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_2" name="con_ads[feed_ad_2]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_2']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_3"><?php _e( 'Ad 3', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_3" name="con_ads[feed_ad_3]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_3']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_4"><?php _e( 'Ad 4', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_4" name="con_ads[feed_ad_4]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_4']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_5"><?php _e( 'Ad 5', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_5" name="con_ads[feed_ad_5]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_5']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_6"><?php _e( 'Ad 6', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_6" name="con_ads[feed_ad_6]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_6']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_7"><?php _e( 'Ad 7', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_7" name="con_ads[feed_ad_7]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_7']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_8"><?php _e( 'Ad 8', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_8" name="con_ads[feed_ad_8]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_8']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_9"><?php _e( 'Ad 9', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_9" name="con_ads[feed_ad_9]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_9']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="feed_ad_10"><?php _e( 'Ad 10', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="feed_ad_10" name="con_ads[feed_ad_10]" rows="4" cols="70"><?php echo stripslashes($settings['feed_ad_10']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    </table>
                    
                </div>
            </div>    
            <br />
            
            <?php //more ?>
            <div class="rm_section">
                <div class="rm_title">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/functions/images/trans.png" class="inactive" alt="plus" /><?php _e( 'Even More Ads...', 'continuum' ); ?></h3>
                    <span class="submit">
                        <input type="submit" value="Save Options" />
                    </span>
                    <div class="clearfix"></div>
                </div>
            
                <div class="rm_options">
        
                    <table class="form-table">
                    
                    <tr valign="top"><th scope="row"><label for="header_ad_show" class="special"><?php _e( 'Display Header Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="header_ad_show" name="con_ads[header_ad_show]" value="1" <?php checked( true, $settings['header_ad_show'] ); ?> /> <?php _e( 'Display an ad in the header next to the logo', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="header_ad"><?php _e( 'Header Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="header_ad" name="con_ads[header_ad]" rows="4" cols="70"><?php echo stripslashes($settings['header_ad']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_ad_post_show" class="special"><?php _e( 'Display Page Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="page_ad_post_show" name="con_ads[page_ad_post_show]" value="1" <?php checked( true, $settings['page_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the content of pages', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_ad_post"><?php _e( 'Page Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="page_ad_post" name="con_ads[page_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['page_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_ad_feed_show" class="special"><?php _e( 'Display Page Feed Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="page_ad_feed_show" name="con_ads[page_ad_feed_show]" value="1" <?php checked( true, $settings['page_ad_feed_show'] ); ?> /> <?php _e( 'Display an ad below "The Feed" on pages', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="page_ad_feed"><?php _e( 'Page Feed Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="page_ad_feed" name="con_ads[page_ad_feed]" rows="4" cols="70"><?php echo stripslashes($settings['page_ad_feed']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="search_ad_post_show"><?php _e( 'Display Search Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="search_ad_post_show" name="con_ads[search_ad_post_show]" value="1" <?php checked( true, $settings['search_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the search listings', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="search_ad_post"><?php _e( 'Search Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="search_ad_post" name="con_ads[search_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['search_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="author_ad_post_show"><?php _e( 'Display Author Ad', 'continuum' ); ?></label></th>
                    <td>
                    <input type="checkbox" id="author_ad_post_show" name="con_ads[author_ad_post_show]" value="1" <?php checked( true, $settings['author_ad_post_show'] ); ?> /> <?php _e( 'Display an ad below the author listings', 'continuum' ); ?>
                    </td>
                    </tr>
                    
                    <tr valign="top"><th scope="row"><label for="author_ad_post"><?php _e( 'Author Ad', 'continuum' ); ?></label></th>
                    <td>
                    <textarea id="author_ad_post" name="con_ads[author_ad_post]" rows="4" cols="70"><?php echo stripslashes($settings['author_ad_post']); ?></textarea><br />
                    <?php _e( 'The HTML for the advertisment', 'continuum' ); ?>
                    </td>
                    </tr>
                                        
                    </table>
                    
                </div>
            </div>    
            <br />
            
        </div>
    </div>	

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

// Function to generate options page
function theme_misc_options() {
	global $con_misc;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'continuum' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'con_misc', $con_misc ); ?>
	
	<?php settings_fields( 'con_theme_misc' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

	<tr valign="top"><th scope="row"><label for="background"><?php _e( 'Site Background', 'continuum' ); ?></label></th>
	<td>
	<select id="background" name="con_misc[background]">	
    	<option value="light-lithium"<?php if($settings['background']=='light-lithium') { ?> selected="selected"<?php } ?>><?php _e( 'Light Lithium', 'continuum' ); ?></option>
        <option value="light-xenon"<?php if($settings['background']=='light-xenon') { ?> selected="selected"<?php } ?>><?php _e( 'Light Xenon', 'continuum' ); ?></option>
        <option value="light-titanium"<?php if($settings['background']=='light-titanium') { ?> selected="selected"<?php } ?>><?php _e( 'Light Titanium', 'continuum' ); ?></option>
        <option value="light-plutonium"<?php if($settings['background']=='light-plutonium') { ?> selected="selected"<?php } ?>><?php _e( 'Light Plutonium', 'continuum' ); ?></option>
        <option value="light-iridium"<?php if($settings['background']=='light-iridium') { ?> selected="selected"<?php } ?>><?php _e( 'Light Iridium', 'continuum' ); ?></option>
        <option value="light-magnesium"<?php if($settings['background']=='light-magnesium') { ?> selected="selected"<?php } ?>><?php _e( 'Light Magnesium', 'continuum' ); ?></option>        
        <option value="dark-lithium"<?php if($settings['background']=='dark-lithium') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Lithium', 'continuum' ); ?></option>
        <option value="dark-xenon"<?php if($settings['background']=='dark-xenon') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Xenon', 'continuum' ); ?></option>
        <option value="dark-titanium"<?php if($settings['background']=='dark-titanium') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Titanium', 'continuum' ); ?></option>
        <option value="dark-plutonium"<?php if($settings['background']=='dark-plutonium') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Plutonium', 'continuum' ); ?></option>
        <option value="dark-iridium"<?php if($settings['background']=='dark-iridium') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Iridium', 'continuum' ); ?></option>
        <option value="dark-magnesium"<?php if($settings['background']=='dark-magnesium') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Magnesium', 'continuum' ); ?></option>
        <option value="light-lithium-textured"<?php if($settings['background']=='light-lithium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Lithium 2', 'continuum' ); ?></option>
        <option value="light-xenon-textured"<?php if($settings['background']=='light-xenon-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Xenon 2', 'continuum' ); ?></option>
        <option value="light-titanium-textured"<?php if($settings['background']=='light-titanium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Titanium 2', 'continuum' ); ?></option>
        <option value="light-plutonium-textured"<?php if($settings['background']=='light-plutonium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Plutonium 2', 'continuum' ); ?></option>
        <option value="light-iridium-textured"<?php if($settings['background']=='light-iridium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Iridium 2', 'continuum' ); ?></option>
        <option value="light-magnesium-textured"<?php if($settings['background']=='light-magnesium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Light Magnesium 2', 'continuum' ); ?></option>        
        <option value="dark-lithium-textured"<?php if($settings['background']=='dark-lithium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Lithium 2', 'continuum' ); ?></option>
        <option value="dark-xenon-textured"<?php if($settings['background']=='dark-xenon-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Xenon 2', 'continuum' ); ?></option>
        <option value="dark-titanium-textured"<?php if($settings['background']=='dark-titanium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Titanium 2', 'continuum' ); ?></option>
        <option value="dark-plutonium-textured"<?php if($settings['background']=='dark-plutonium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Plutonium 2', 'continuum' ); ?></option>
        <option value="dark-iridium-textured"<?php if($settings['background']=='dark-iridium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Iridium 2', 'continuum' ); ?></option>
        <option value="dark-magnesium-textured"<?php if($settings['background']=='dark-magnesium-textured') { ?> selected="selected"<?php } ?>><?php _e( 'Dark Magnesium 2', 'continuum' ); ?></option>  
        <option value="silk-light-cool-1"<?php if($settings['background']=='silk-light-cool-1') { ?> selected="selected"<?php } ?>><?php _e( 'Supernova Blue', 'continuum' ); ?></option>  
        <option value="silk-light-cool-2"<?php if($settings['background']=='silk-light-cool-2') { ?> selected="selected"<?php } ?>><?php _e( 'Black Hole Blue', 'continuum' ); ?></option> 
        <option value="silk-light-warm-1"<?php if($settings['background']=='silk-light-warm-1') { ?> selected="selected"<?php } ?>><?php _e( 'Galactic Red', 'continuum' ); ?></option> 
        <option value="silk-light-warm-2"<?php if($settings['background']=='silk-light-warm-2') { ?> selected="selected"<?php } ?>><?php _e( 'Star Cluster Orange', 'continuum' ); ?></option> 
        <option value="custom"<?php if($settings['background']=='custom') { ?> selected="selected"<?php } ?>><?php _e( 'Custom Background', 'continuum' ); ?></option> 
	</select>
    <?php _e( 'If you choose Custom Background, set using Appearance >> Background.', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="background_fixed"><?php _e( 'Fixed Background Image', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="background_fixed" name="con_misc[background_fixed]" value="1" <?php checked( true, $settings['background_fixed'] ); ?> /> <?php _e( 'Fix the background image so that it does not move when you scroll the page', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="con_logo"><?php _e( 'Logo URL', 'continuum' ); ?></label></th>
	<td>
	<textarea id="con_logo" name="con_misc[con_logo]" rows="3" cols="75"><?php echo stripslashes($settings['con_logo']); ?></textarea><br />
    <?php _e( 'The URL of your logo image. You can use the Media >> Add New screen to upload your logo. Copy + Paste the URL of your uploaded logo here.', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="color"><?php _e( 'Color Scheme', 'continuum' ); ?></label></th>
	<td>
	<select id="color" name="con_misc[color]">	
    	<option value="lithium"<?php if($settings['color']=='lithium') { ?> selected="selected"<?php } ?>><?php _e( 'Lithium', 'continuum' ); ?></option>
        <option value="xenon"<?php if($settings['color']=='xenon') { ?> selected="selected"<?php } ?>><?php _e( 'Xenon', 'continuum' ); ?></option>
        <option value="titanium"<?php if($settings['color']=='titanium') { ?> selected="selected"<?php } ?>><?php _e( 'Titanium', 'continuum' ); ?></option>
        <option value="plutonium"<?php if($settings['color']=='plutonium') { ?> selected="selected"<?php } ?>><?php _e( 'Plutonium', 'continuum' ); ?></option>
        <option value="iridium"<?php if($settings['color']=='iridium') { ?> selected="selected"<?php } ?>><?php _e( 'Iridium', 'continuum' ); ?></option>
        <option value="magnesium"<?php if($settings['color']=='magnesium') { ?> selected="selected"<?php } ?>><?php _e( 'Magnesium', 'continuum' ); ?></option>   
	</select>
    <?php _e( 'Although it is not required, Continuum is designed to use the same color for the background and the color scheme.', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'Breaking Panel', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_show"><?php _e( 'Display Breaking Panel', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="breaking_show" name="con_misc[breaking_show]" value="1" <?php checked( true, $settings['breaking_show'] ); ?> /> <?php _e( 'Display the Breaking toggle panel at the top of all pages', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_hidden"><?php _e( 'Hidden By Default', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="breaking_hidden" name="con_misc[breaking_hidden]" value="1" <?php checked( true, $settings['breaking_hidden'] ); ?> /> <?php _e( 'The Breaking Panel will be hidden by default and will need to be toggled on', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_rotate"><?php _e( 'Rotate Breaking Panel', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="breaking_rotate" name="con_misc[breaking_rotate]" value="1" <?php checked( true, $settings['breaking_rotate'] ); ?> /> <?php _e( 'Automatically rotate the Breaking panel instead of having to use the arrows', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_duration"><?php _e( 'Breaking Panel Duration', 'continuum' ); ?></label></th>
	<td>
	<select id="breaking_duration" name="con_misc[breaking_duration]">
    	<?php $i=1;
		while ($i<=30) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['breaking_duration']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
		} ?>
	</select>
    <?php _e( 'Number of seconds each breaking panel will display before rotating', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_tag"><?php _e( 'Breaking Tag', 'continuum' ); ?></label></th>
	<td>
	<input id="breaking_tag" name="con_misc[breaking_tag]" type="text" value="<?php esc_attr_e($settings['breaking_tag']); ?>" />
    <?php _e( 'Name of the tag that you want to use to mark posts as Breaking', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_text"><?php _e( 'Breaking Text', 'continuum' ); ?></label></th>
	<td>
	<input id="breaking_text" name="con_misc[breaking_text]" type="text" value="<?php esc_attr_e($settings['breaking_text']); ?>" />
    <?php _e( 'Text that displays in the breaking pull-down tab', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="breaking_num"><?php _e( 'Breaking Number of Posts', 'continuum' ); ?></label></th>
	<td>
	<select id="breaking_num" name="con_misc[breaking_num]">
    	<?php $i=4;
		while ($i<=40) { ?>			
    		<option value="<?php echo $i; ?>"<?php if($settings['breaking_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i=$i+4;
		} ?>
	</select>
    <?php _e( 'Number of breaking posts to use in the rotator', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'The Latest', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="latest_header"><?php _e( 'Latest Header Text', 'continuum' ); ?></label></th>
	<td>
	<input id="latest_header" name="con_misc[latest_header]" type="text" value="<?php  esc_attr_e($settings['latest_header']); ?>" />
    <?php _e( 'Text that displays as the header of "The Latest" panel', 'continuum' ); ?>
	</td>
	</tr> 
   
    <tr valign="top"><th scope="row"><label for="latest_cats"><?php _e( 'Latest Categories', 'continuum' ); ?></label></th>
	<td>
	<textarea id="latest_cats" name="con_misc[latest_cats]" rows="3" cols="75"><?php echo stripslashes($settings['latest_cats']); ?></textarea><br />
    <?php _e( 'Comma-separated list of categories to use in "The Latest" panel (e.g. "Sports, Movies, Video Games, TV', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="latest_num"><?php _e( 'Latest Number', 'continuum' ); ?></label></th>
    <td>
    <select id="latest_num" name="con_misc[latest_num]">
        <?php $i=1;
        while ($i<=10) { ?>			
            <option value="<?php echo $i; ?>"<?php if($settings['latest_num']==$i) { ?> selected="selected"<?php } ?>><?php echo $i; ?></option>
        <?php $i++;
        } ?>
    </select>
    <?php _e( 'Number of posts to display for each category in "The Latest" panel', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top">
	<td colspan="2">
	<h3><?php _e( 'More Options', 'continuum' ); ?></h3>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="search_show"><?php _e( 'Display Search Form', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="search_show" name="con_misc[search_show]" value="1" <?php checked( true, $settings['search_show'] ); ?> /> <?php _e( 'Display the search form in the top menu bar', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="smallmenu_show"><?php _e( 'Display Small Menu', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="smallmenu_show" name="con_misc[smallmenu_show]" value="1" <?php checked( true, $settings['smallmenu_show'] ); ?> /> <?php _e( 'Display the right-aligned small menu that sits above the main menu', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="random_show"><?php _e( 'Display Random Button', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="random_show" name="con_misc[random_show]" value="1" <?php checked( true, $settings['random_show'] ); ?> /> <?php _e( 'Display the random button to the right of the main menu', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="fancy_tooltips"><?php _e( 'Display Fancy Tooltips', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="fancy_tooltips" name="con_misc[fancy_tooltips]" value="1" <?php checked( true, $settings['fancy_tooltips'] ); ?> /> <?php _e( 'Display the fancy jQuery tooltips that appear upon hover overs throughout the site', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="colorbox"><?php _e( 'Colorbox Enabled', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="colorbox" name="con_misc[colorbox]" value="1" <?php checked( true, $settings['colorbox'] ); ?> /> <?php _e( 'Enable the colorbox jQuery plugin', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="footer_credits"><?php _e( 'Display Footer Credits', 'continuum' ); ?></label></th>
    <td>
    <input type="checkbox" id="footer_credits" name="con_misc[footer_credits]" value="1" <?php checked( true, $settings['footer_credits'] ); ?> /> <?php _e( 'Display the Continuum credits in the footer', 'continuum' ); ?>
    </td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="signoff_text"><?php _e( 'Signoff Text', 'continuum' ); ?></label></th>
	<td>
	<textarea id="signoff_text" name="con_misc[signoff_text]" rows="5" cols="75"><?php echo stripslashes($settings['signoff_text']); ?></textarea><br />
    <?php _e( 'When you use the Signoff shortcode this is the text that will display', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="twitter_name"><?php _e( 'Twitter Username', 'continuum' ); ?></label></th>
	<td>
	<input id="twitter_name" name="con_misc[twitter_name]" type="text" value="<?php  esc_attr_e($settings['twitter_name']); ?>" />
    <?php _e( 'Your Twitter Username', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="facebook_url"><?php _e( 'Facebook URL', 'continuum' ); ?></label></th>
	<td>
	<input id="facebook_url" name="con_misc[facebook_url]" type="text" value="<?php  esc_attr_e($settings['facebook_url']); ?>" style="width:500px;" />
    <?php _e( 'Your Facebook URL', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="flickr_name"><?php _e( 'Flickr Account ID', 'continuum' ); ?></label></th>
	<td>
	<input id="flickr_name" name="con_misc[flickr_name]" type="text" value="<?php  esc_attr_e($settings['flickr_name']); ?>" />
    <?php _e( 'Your Flickr Account ID. Use this service to find it: http://idgettr.com/', 'continuum' ); ?> 
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="rss_feed"><?php _e( 'RSS Feed URL', 'continuum' ); ?></label></th>
	<td>
	<input id="rss_feed" name="con_misc[rss_feed]" type="text" value="<?php  esc_attr_e($settings['rss_feed']); ?>" style="width:500px;" />
    <?php _e( 'Your RSS Feed URL', 'continuum' ); ?>
	</td>
	</tr>
    
    <tr valign="top"><th scope="row"><label for="google_analytics"><?php _e( 'Google Analytics', 'continuum' ); ?></label></th>
	<td>
	<textarea id="google_analytics" name="con_misc[google_analytics]" rows="15" cols="75"><?php echo stripslashes($settings['google_analytics']); ?></textarea><br />
    <?php _e( 'Copy &amp; paste your Google Analytics code', 'continuum' ); ?>
	</td>
	</tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

function con_validate_front( $input ) {
	global $con_front;

	$settings = get_option( 'con_front', $con_front );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['spotlight_tag'] = wp_filter_nohtml_kses( $input['spotlight_tag'] );
	$input['spotlight_header_text'] = wp_filter_post_kses( $input['spotlight_header_text'] );
	$input['spotlight_reactions_text'] = wp_filter_post_kses( $input['spotlight_reactions_text'] );
	
	return $input;
}

function con_validate_layout( $input ) {
	global $con_layout;

	$settings = get_option( 'con_layout', $con_layout );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['archive_header_text'] = wp_filter_post_kses( $input['archive_header_text'] );
	$input['category_header_text'] = wp_filter_post_kses( $input['category_header_text'] );	
		
	return $input;
}

function con_validate_feed( $input ) {
	global $con_feed;

	$settings = get_option( 'con_feed', $con_feed );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['feed_header_text'] = wp_filter_post_kses( $input['feed_header_text'] );
	$input['feed_latest'] = wp_filter_post_kses( $input['feed_latest'] );	
	$input['feed_latest_cats'] = wp_filter_post_kses( $input['feed_latest_cats'] );	
	$input['feed_single_header'] = wp_filter_post_kses( $input['feed_single_header'] );	
		
	return $input;
}

function con_validate_reviews( $input ) {
	global $con_reviews;

	$settings = get_option( 'con_reviews', $con_reviews );
		
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['feed_review_header'] = wp_filter_post_kses( $input['feed_review_header'] );
	$input['review_stars_0'] = wp_filter_post_kses( $input['review_stars_0'] );
	$input['review_stars_0_half'] = wp_filter_post_kses( $input['review_stars_0_half'] );
	$input['review_stars_1'] = wp_filter_post_kses( $input['review_stars_1'] );
	$input['review_stars_1_half'] = wp_filter_post_kses( $input['review_stars_1_half'] );
	$input['review_stars_2'] = wp_filter_post_kses( $input['review_stars_2'] );
	$input['review_stars_2_half'] = wp_filter_post_kses( $input['review_stars_2_half'] );
	$input['review_stars_3'] = wp_filter_post_kses( $input['review_stars_3'] );
	$input['review_stars_3_half'] = wp_filter_post_kses( $input['review_stars_3_half'] );
	$input['review_stars_4'] = wp_filter_post_kses( $input['review_stars_4'] );
	$input['review_stars_4_half'] = wp_filter_post_kses( $input['review_stars_4_half'] );
	$input['review_stars_5'] = wp_filter_post_kses( $input['review_stars_5'] );	
	$input['review_movies_positive_text'] = wp_filter_post_kses( $input['review_movies_positive_text'] );
	$input['review_movies_negative_text'] = wp_filter_post_kses( $input['review_movies_negative_text'] );
	$input['review_movies_bottomline_text'] = wp_filter_post_kses( $input['review_movies_bottomline_text'] );
	$input['review_music_positive_text'] = wp_filter_post_kses( $input['review_music_positive_text'] );
	$input['review_music_negative_text'] = wp_filter_post_kses( $input['review_music_negative_text'] );
	$input['review_music_bottomline_text'] = wp_filter_post_kses( $input['review_music_bottomline_text'] );
	$input['review_games_positive_text'] = wp_filter_post_kses( $input['review_games_positive_text'] );
	$input['review_games_negative_text'] = wp_filter_post_kses( $input['review_games_negative_text'] );
	$input['review_games_bottomline_text'] = wp_filter_post_kses( $input['review_games_bottomline_text'] );
	$input['review_books_positive_text'] = wp_filter_post_kses( $input['review_books_positive_text'] );
	$input['review_books_negative_text'] = wp_filter_post_kses( $input['review_books_negative_text'] );
	$input['review_books_bottomline_text'] = wp_filter_post_kses( $input['review_books_bottomline_text'] );
	$input['review_products_positive_text'] = wp_filter_post_kses( $input['review_products_positive_text'] );
	$input['review_products_negative_text'] = wp_filter_post_kses( $input['review_products_negative_text'] );
	$input['review_products_bottomline_text'] = wp_filter_post_kses( $input['review_products_bottomline_text'] );

	return $input;
}

function con_validate_ads( $input ) {
	global $con_ads;

	$settings = get_option( 'con_ads', $con_ads );
		
	//don't strip tags from ad textareas because HTML tags need to be allowed for input
	
	return $input;
}

function con_validate_misc( $input ) {
	global $con_misc;

	$settings = get_option( 'con_misc', $con_misc );
		
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['breaking_tag'] = wp_filter_post_kses( $input['breaking_tag'] );
	$input['breaking_text'] = wp_filter_post_kses( $input['breaking_text'] );
	$input['latest_header'] = wp_filter_post_kses( $input['latest_header'] );
	$input['twitter_name'] = wp_filter_post_kses( $input['twitter_name'] );
	$input['flickr_name'] = wp_filter_post_kses( $input['flickr_name'] );
	
	return $input;
}

endif;  // EndIf is_admin()
?>