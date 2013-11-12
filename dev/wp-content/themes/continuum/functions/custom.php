<?php
// Add RSS links to <head> section
if(function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');
    //WP Auto Feed Links
}

// This theme allows users to set a custom background
add_custom_background();

// Returns page ID from page slug
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

//show all post types on archive/category/search/feed pages
if(!is_admin()) {
	add_filter('pre_get_posts', 'query_post_type');
	function query_post_type($query) {
	  if(is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
		$post_type = get_query_var('post_type');
		//get theme options
		global $con_reviews;	
		$con_inject_reviews = $con_reviews['inject_reviews'];
		if($post_type) {
			$post_type = $post_type;
			$query->set('post_type',$post_type);
			return $query;		
		} elseif($con_inject_reviews) {	
			$post_type = array('post','con_movie_reviews','con_music_reviews','con_game_reviews','con_book_reviews','con_product_reviews');
			$query->set('post_type',$post_type);
			return $query;
		}	
	  }
	}
}

// Setup the links in the feeds for sorting purposes
function con_get_feed_link($sort) {
	$link=add_query_arg( 'feedsort', $sort ).'#feed';
	echo $link;
}
// Setup the links in the post widgets
function con_get_widget_link($sort) {
	$link=add_query_arg( 'feedsort', $sort, home_url() ).'#feed';
	echo $link;
}
// Setup the links in the review widgets
function con_get_widget_review_link($sort,$type) {
	//$link=add_query_arg( 'feedsort', $sort, home_url().'/'.$type.'-reviews/' ).'#feed';
	$arr_params = array ( 'page_id' => get_ID_by_slug($type.'-reviews'), 'feedsort' => $sort );
	$link=add_query_arg( $arr_params, home_url() ).'#feed';
	echo $link;	
}

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

 // setup custom menu functionality
function register_my_menus() {
  register_nav_menus(
	array( 'top-menu' => __( 'Top Menu' ), 'main-menu' => __( 'Main Menu' ), 'small-menu' => __( 'Small Menu' ))
  );
}
add_action( 'init', 'register_my_menus' );

// add shortcode buttons to the tinyMCE editor row 3
function add_button_3() {
   if ( current_user_can('edit_posts') )
   {
     add_filter('mce_external_plugins', 'add_plugin_3');
     add_filter('mce_buttons_3', 'register_button_3');
   }
}
//setup array of shortcode buttons to add
function register_button_3($buttons) {
   array_push($buttons, "dropcap", "divider", "quote", "pullquoteleft", "pullquoteright", "boxdark", "boxlight", "togglesimple", "togglebox", "tabs", "signoff", "columns", "smallbuttons", "largebuttons", "lists");  
   return $buttons;
}
//setup array for tinyMCE editor interface
function add_plugin_3($plugin_array) {
   $plugin_array['lists'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['signoff'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['divider'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['quote'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['pullquoteleft'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['pullquoteright'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['boxdark'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['boxlight'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['togglesimple'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['togglebox'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/js/customcodes.js'; 
   $plugin_array['columns'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['smallbuttons'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['largebuttons'] = get_template_directory_uri().'/js/customcodes.js';
   return $plugin_array;
}
add_action('init', 'add_button_3'); // add the add_button function to the page init

//used for displaying top level custom taxonomies
function removeChildren($var) {
	return $var->parent == 0;
}
function getValues($arr) {
	$str = '';
	foreach($arr as $item) {
		if(strlen($str)>0) $str.=',';
		$str.=$item->name;
	}
	return $str;
}

//get a category id from a category name
function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}

//add thumbnail support
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 160, 160, true ); // default post thumbnails
	add_image_size( 'breaking', 80, 80, true );
	add_image_size( 'slider1', 390, 280, true );
	add_image_size( 'slider1-wide', 450, 320, true );
	add_image_size( 'slider1-thumbnail', 120, 72, true );		
	add_image_size( 'slider2', 710, 385, true );
	add_image_size( 'slider2-wide', 880, 385, true );
	add_image_size( 'slider3', 455, 430, true );
	add_image_size( 'slider3-wide', 630, 430, true );
	add_image_size( 'slider3-small', 80, 64, true );		
	add_image_size( 'latest', 200, 120, true );
	add_image_size( 'feed', 260, 152, true );
	add_image_size( 'feed-latest', 290, 170, true );
	add_image_size( 'feed-vertical', 200, 200, true );
	add_image_size( 'single', 602 );
	add_image_size( 'single-medium', 300 );
	add_image_size( 'single-small', 180 );
	add_image_size( 'archive', 120, 120, true );
	add_image_size( 'review', 300 );
}

//get fallback categories
function fallback_categories() {	
	echo "<ul>";
	$menu = wp_list_categories('title_li=&depth=0&echo=0');
	$menu = preg_replace('/title=\"(.*?)\"/','',$menu);
	echo $menu;
	echo "</ul>";
}

//get recent comments for spotlight area
function get_spotlight_reactions($con_reactions_num) {
	$args = array(
		'status' => 'approve',
		'number' => $con_reactions_num
	);
	$commentcount=0;
	$output='<div class="recent-reactions"><div>';
	$comments = get_comments($args);
	foreach($comments as $comment) { 
		$commentcount=$commentcount+1;
		$commentcontent = strip_tags($comment->comment_content);			
		if (strlen($commentcontent)>90) {
			$commentcontent = substr($commentcontent, 0, 87) . "...";
		}
		$commentauthor = $comment->comment_author;
		if (strlen($commentauthor)>20) {
			$commentauthor = substr($commentauthor, 0, 17) . "...";			
		}
		$commentid = $comment->comment_ID;
		$commenturl = get_comment_link($commentid);
		$output.= '<div class="comment-wrapper">';
		$output.= '<a class="comment" href="' . $commenturl . '">"' . $commentcontent . '"</a>';
		//$output.= '<a class="author" href="' . $commenturl . '">' . $commentauthor . '</a>';
		$output.= '</div>';			
		if (($commentcount % 4 == 0) && ($commentcount != $con_reactions_num)) {
			$output.= '</div><div>';
		}
	}
	$output.= '</div></div>';
	echo $output;
}

// If more than one page exists, return TRUE
function show_posts_nav($total_comments) {    
	$page_comments = get_option('page_comments');
	$comments_per_page = get_option('comments_per_page');
	if ($page_comments && ($total_comments>$comments_per_page)) {
		return true;
	} else {
		return false;
	}
}

//breadcrumb functionality
function con_get_breadcrumb() {
   $output = '<ul id="breadcrumbs">';
   $post_ancestors = get_post_ancestors($post);
   if ($post_ancestors) {
	  $post_ancestors = array_reverse($post_ancestors);
	  foreach ($post_ancestors as $crumb)
		  $output .= '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a>&nbsp;&raquo;&nbsp;</li>';
   }
   if (is_category() || is_single()) {
	  $category = get_the_category();
	  $output .= '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a>&nbsp;&raquo;&nbsp;</li>';
   }
   if (!is_category() && get_query_var('name')!="")
	  $output .= '<li class="current"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
   $output .= '</ul><br class="clearer" />';
   
   echo $output;
}

//setup unit of measurement for review ratings
function con_setup_rating($rating) {
	//get theme options
	global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
	$con_front = get_option( 'con_front', $con_front );
	$con_layout = get_option( 'con_layout', $con_layout );
	$con_feed = get_option( 'con_feed', $con_feed );
	$con_reviews = get_option( 'con_reviews', $con_reviews );
	$con_ads = get_option( 'con_ads', $con_ads );
	$con_misc = get_option( 'con_misc', $con_misc );
	
	//set theme options
	$con_review_stars_0 = $con_reviews['review_stars_0'];
	$con_review_stars_0_half = $con_reviews['review_stars_0_half'];
	$con_review_stars_1 = $con_reviews['review_stars_1'];
	$con_review_stars_1_half = $con_reviews['review_stars_1_half'];
	$con_review_stars_2 = $con_reviews['review_stars_2'];
	$con_review_stars_2_half = $con_reviews['review_stars_2_half'];
	$con_review_stars_3 = $con_reviews['review_stars_3'];
	$con_review_stars_3_half = $con_reviews['review_stars_3_half'];
	$con_review_stars_4 = $con_reviews['review_stars_4'];
	$con_review_stars_4_half = $con_reviews['review_stars_4_half'];
	$con_review_stars_5 = $con_reviews['review_stars_5'];	
	
	$unit = "star"; //default unit is star		
	if(strpos($rating," Hearts") || strpos($rating," hearts") || strpos($rating," Heart") || strpos($rating," heart")) {
		$unit = "heart"; //find out if we're using hearts instead of stars
	}
	// extract just the number from the rating meta key
	$rating = trim(str_replace(" star","",str_replace(" stars","",str_replace(" Star","",str_replace(" Stars","",str_replace(" heart","",str_replace(" hearts","",str_replace(" Heart","",str_replace(" Hearts","",$rating)))))))));
	if($stars) { // are we using stars or hearts?
		$rating = $stars;
		$unit = "star";
	} elseif($hearts) {
		$rating = $hearts;
		$unit = "heart";
	}	
	switch($rating) { // get overall text
		case 0:
			$overall = $con_review_stars_0;
			break;
		case 0.5:
			$overall = $con_review_stars_0_half;
			break;
		case .5:
			$overall = $con_review_stars_0_half;
			break;
		case 1:
			$overall = $con_review_stars_1;
			break;
		case 1.5:
			$overall = $con_review_stars_1_half;
			break;
		case 2:
			$overall = $con_review_stars_2;
			break;
		case 2.5:
			$overall = $con_review_stars_2_half;
			break;
		case 3:
			$overall = $con_review_stars_3;
			break;
		case 3.5:
			$overall = $con_review_stars_3_half;
			break;
		case 4:
			$overall = $con_review_stars_4;
			break;
		case 4.5:
			$overall = $con_review_stars_4_half;
			break;
		case 5:
			$overall = $con_review_stars_5;
			break;
	}	
	$rating = array($rating, $unit, $overall);
	return $rating;
}

//html display of stars/hearts
function con_show_rating($rating, $unit, $overall) {	
	$output = '<div class="stars tooltip" title="'.$rating.' / 5 '.$overall.'">';
		$output .= '<div class="'.$unit;
		if($rating>=1) {
			$output .= ' full';
		} elseif($rating>0) { 
			$output .= ' half';
		}
		$output .= '">&nbsp;</div>';	
		$output .= '<div class="'.$unit;
		if($rating>=2) {
			$output .= ' full';
		} elseif($rating>1) { 
			$output .= ' half';
		}
		$output .= '">&nbsp;</div>';
		$output .= '<div class="'.$unit;
		if($rating>=3) {
			$output .= ' full';
		} elseif($rating>2) { 
			$output .= ' half';
		}
		$output .= '">&nbsp;</div>';
		$output .= '<div class="'.$unit;
		if($rating>=4) {
			$output .= ' full';
		} elseif($rating>3) { 
			$output .= ' half';
		}
		$output .= '">&nbsp;</div>';
		$output .= '<div class="'.$unit;
		if($rating>=5) {
			$output .= ' full';
		} elseif($rating>4) { 
			$output .= ' half';
		}
		$output .= '">&nbsp;</div>';
	$output .= '</div>';	
	echo $output;
}

//get excerpt for feed panels
function con_feed_excerpt() {
	$excerpt = get_the_excerpt();		
	if (strlen($excerpt)>230) {
		$excerpt = substr($excerpt, 0, 227) . "...";
	}
	echo $excerpt;
}

//feed pagination
function pagination($pages = '', $range = 3)
{
 $showitems = ($range * 2)+1;  

 global $paged;
 if(is_page_template('template-home.php') && is_front_page()) {
	 $paged = (get_query_var('page')); //use the page var instead of paged (paged does not work on home page templates - WP error)
 }
 if(empty($paged)) $paged = 1;

 if($pages == '')
 {
	 global $wp_query;
	 $pages = $wp_query->max_num_pages;
	 if(!$pages)
	 {
		 $pages = 1;
	 }
 }   

 if(1 != $pages)
 {
	 echo "<div class=\"pagination-wrapper\"><div class=\"left-cap\">&nbsp;</div><div class=\"pagination\"><span class=\"page\">".__('Page ','continuum').$paged.__(' of ','continuum').$pages."</span>";
	 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."#feed'>&laquo; ".__('First','continuum')."</a>";
	 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."#feed'>&lsaquo; ".__('Previous','continuum')."</a>";

	 for ($i=1; $i <= $pages; $i++)
	 {
		 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		 {
			 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."#feed' class=\"inactive\">".$i."</a>";
		 }
	 }

	 if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."#feed\">".__('Next','continuum')." &rsaquo;</a>";
	 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."#feed'>".__('last','continuum')." &raquo;</a>";
	 echo "<br class=\"clearer\" /></div><div class=\"right-cap\">&nbsp;</div></div>\n";
 }
}

//authors	
add_action('show_user_profile', 'wpsplash_extraProfileFields');
add_action('edit_user_profile', 'wpsplash_extraProfileFields');
add_action('personal_options_update', 'wpsplash_saveExtraProfileFields');
add_action('edit_user_profile_update', 'wpsplash_saveExtraProfileFields');

function wpsplash_saveExtraProfileFields($userID) {

	if (!current_user_can('edit_user', $userID)) {
		return false;
	}

	update_user_meta($userID, 'twitter', $_POST['twitter']);
	update_user_meta($userID, 'facebook', $_POST['facebook']);
	update_user_meta($userID, 'linkedin', $_POST['linkedin']);
	update_user_meta($userID, 'digg', $_POST['digg']);
	update_user_meta($userID, 'flickr', $_POST['flickr']);
	update_user_meta($userID, 'youtube', $_POST['youtube']);
}

function wpsplash_extraProfileFields($user)
{
?>
	<h3><?php _e( 'Connect Information', 'continuum' ); ?></h3>

	<table class='form-table'>
		<tr>
			<th><label for='twitter'><?php _e( 'Twitter', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='twitter' id='twitter' value='<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your Twitter username.', 'continuum' ); ?> http://www.twitter.com/<strong>username</strong></span>
			</td>
		</tr>
		<tr>
			<th><label for='facebook'><?php _e( 'Facebook', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='facebook' id='facebook' value='<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your Facebook username/alias.', 'continuum' ); ?> http://www.facebook.com/<strong>username</strong></span>
			</td>
		</tr>
		<tr>
			<th><label for='linkedin'><?php _e( 'LinkedIn', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='linkedin' id='linkedin' value='<?php echo esc_attr(get_the_author_meta('linkedin', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your LinkedIn username.', 'continuum' ); ?> http://www.linkedin.com/in/<strong>username</strong></span>
			</td>
		</tr>
		<tr>
			<th><label for='digg'><?php _e( 'Digg', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='digg' id='digg' value='<?php echo esc_attr(get_the_author_meta('digg', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your Digg username.', 'continuum' ); ?> http://digg.com/users/<strong>username</strong></span>
			</td>
		</tr>
		<tr>
			<th><label for='flickr'><?php _e( 'Flickr', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='flickr' id='flickr' value='<?php echo esc_attr(get_the_author_meta('flickr', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your flickr username.', 'continuum' ); ?> http://www.flickr.com/photos/<strong>username</strong>/</span>
			</td>
		</tr>
        <tr>
			<th><label for='youtube'><?php _e( 'YouTube', 'continuum' ); ?></label></th>
			<td>
				<input type='text' name='youtube' id='youtube' value='<?php echo esc_attr(get_the_author_meta('youtube', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'><?php _e( 'Please enter your YouTube username.', 'continuum' ); ?> http://www.youtube.com/user/<strong>username</strong>/</span>
			</td>
		</tr>
	</table>
<?php }

//comments styling
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li id="li-comment-<?php comment_ID() ?>">
		
		<div id="comment-<?php comment_ID(); ?>">
        
        	<div class="author-image" style="width:50px;">
        
        		<?php echo get_avatar($comment,50); ?>
                
            </div>
            
            <div class="comment-wrapper">
            
            	<div class="comment-inner">
                
                	<div class="comment-top">
            
                        <div class="comment-author">             
                        
                            <?php printf(__('%s'), get_comment_author_link()) ?>
                            
                        </div>
                        
                        <?php if ($comment->comment_approved == '0') : ?>
                        
                        	<div class="comment-moderation">
                                <?php _e('Your comment is awaiting moderation.') ?>                               
                            </div>
                            
                        <?php endif; ?>
                        
                        <div class="comment-text">
                        
                       		<?php comment_text() ?>
                            
                        </div>
                        
                    </div>
                    
                    <div class="comment-bottom">
                    
                        <div class="reply">
                        
                            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                            
                        </div>
                        
                        <div class="comment-meta">
                        
                            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?>
                            
                        </div>
                        
                        <br class="clearer" />
                        
                    </div>
                    
                </div>
                
            </div>
            
            <br class="clearer" />
            
		</div>
<?php }

//open comment author's links in new windows
function get_comment_author_link_new() {

	$url = get_comment_author_url();
	$author = get_comment_author();

	if (empty( $url ) || 'http://' == $url)

		$return = $author;

	else

		$return = "<a href='$url' rel='external nofollow' class='url' target='_blank'>$author</a>";

	return $return;
}
add_filter('get_comment_author_link', 'get_comment_author_link_new');


//disable wpautop and wptexturize for column shortcodes
function con_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}
// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
// Before displaying for viewing, apply this function
add_filter('the_content', 'con_formatter', 99);
add_filter('widget_text', 'con_formatter', 99);

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
//@ini_set('pcre.backtrack_limit', 500000);

//enable reviews in RSS feed
function myfeed_request($qv) {
   if (isset($qv['feed']) && !isset($qv['post_type']))
      $qv['post_type'] = array('post', 'con_product_reviews', 'con_game_reviews', 'con_music_reviews', 'con_book_reviews', 'con_movie_reviews');
   return $qv;
}
add_filter('request', 'myfeed_request');

//add reviews to the archives tab
add_filter( 'getarchives_where' , 'ucc_getarchives_where_filter' , 10 , 2 ); 
function ucc_getarchives_where_filter( $where , $r ) { 
   $args = array( 'public' => true , '_builtin' => false ); $output = 'names'; $operator = 'and';
   $post_types = get_post_types( $args , $output , $operator ); $post_types = array_merge( $post_types , array( 'post' ) ); $post_types = "'" . implode( "' , '" , $post_types ) . "'";
   return str_replace( "post_type = 'post'" , "post_type IN ( $post_types )" , $where );
}

?>