<?php
//get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc );
		
//need to know which custom post type sidebars to enable
$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
$con_posttype_enable_products = $con_reviews['posttype_enable_products'];

//find out if we have more than 1 review type active
$typecount=0;
if($con_posttype_enable_movies) $typecount++;
if($con_posttype_enable_music) $typecount++;
if($con_posttype_enable_games) $typecount++;
if($con_posttype_enable_books) $typecount++;
if($con_posttype_enable_products) $typecount++;
		
//REGISTERING SIDEBARS
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Spotlight Right',
		'id'   => 'spotlight-right',
		'description'   => __( 'These widgets appear in the right of the spotlight area. Leave this panel blank to display the Recent Reactions comment scroller.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="gentesque">',
		'after_title'   => '</h2>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Feed',
		'id'   => 'sidebar-feed',
		'description'   => __( 'These widgets appear in the right sidebar of the feed (if specified in the Continuum options page)', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Default',
		'id'   => 'sidebar-default',
		'description'   => __( 'This is the default sidebar that will appear on every page (unless specified differently in the Continuum options page)', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Page',
		'id'   => 'sidebar-page',
		'description'   => __( 'This is the sidebar that will appear only on pages (if specified in the Continuum options page)', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Category',
		'id'   => 'sidebar-category',
		'description'   => __( 'This is the sidebar that will appear only on a category listing page (if specified in the Continuum options page)', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Comments',
		'id'   => 'sidebar-comments',
		'description'   => __( 'These widgets appear in the right sidebar of the comments section.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Archive',
		'id'   => 'sidebar-archive',
		'description'   => __( 'These widgets appear in the right sidebar of the archive pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Author',
		'id'   => 'sidebar-author',
		'description'   => __( 'These widgets appear in the right sidebar of the author pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $typecount>0) {
	register_sidebar(array(
		'name' => 'Sidebar All Reviews',
		'id'   => 'sidebar-all-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of all review pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $con_posttype_enable_movies) {
	register_sidebar(array(
		'name' => 'Sidebar Movie Reviews',
		'id'   => 'sidebar-movie-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of the movie reviews pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $con_posttype_enable_music) {
	register_sidebar(array(
		'name' => 'Sidebar Music Reviews',
		'id'   => 'sidebar-music-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of the music reviews pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $con_posttype_enable_games) {
	register_sidebar(array(
		'name' => 'Sidebar Game Reviews',
		'id'   => 'sidebar-game-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of the video game reviews pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $con_posttype_enable_books) {
	register_sidebar(array(
		'name' => 'Sidebar Book Reviews',
		'id'   => 'sidebar-book-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of the book reviews pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar') && $con_posttype_enable_products) {
	register_sidebar(array(
		'name' => 'Sidebar Product Reviews',
		'id'   => 'sidebar-product-reviews',
		'description'   => __( 'These widgets appear in the right sidebar of the product reviews pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Search',
		'id'   => 'sidebar-search',
		'description'   => __( 'These widgets appear in the right sidebar of the search results pages.', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="header-left">&nbsp;</div><div class="header-middle"><h2 class="gentesque">',
		'after_title'   => '</h2></div><div class="header-right">&nbsp;</div><br class="clearer" /><div class="content-wrapper"><div class="content">'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Share Panel',
		'id'   => 'share-panel',
		'description'   => __( 'This is the widget panel that appears inside the Share box on single post pages', 'continuum' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="gentesque">',
		'after_title'   => '</h2>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer Left',
		'id'   => 'footer-left',
		'description'   => __( 'These widgets appear in the left panel of the footer', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="gentesque">',
		'after_title'   => '</h2><div class="line">&nbsp;</div>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer Middle',
		'id'   => 'footer-middle',
		'description'   => __( 'These widgets appear in the middle panel of the footer', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="gentesque">',
		'after_title'   => '</h2><div class="line">&nbsp;</div>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer Right',
		'id'   => 'footer-right',
		'description'   => __( 'These widgets appear in the right panel of the footer', 'continuum' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="gentesque">',
		'after_title'   => '</h2><div class="line">&nbsp;</div>'
	));
}

//CUSTOM WIDGETS
add_action("widgets_init", "con_load_widgets");
function con_load_widgets()
{
	//need to know which custom post type sidebars to enable
	//get theme options
	global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
	$con_front = get_option( 'con_front', $con_front );
	$con_layout = get_option( 'con_layout', $con_layout );
	$con_feed = get_option( 'con_feed', $con_feed );
	$con_reviews = get_option( 'con_reviews', $con_reviews );
	$con_ads = get_option( 'con_ads', $con_ads );
	$con_misc = get_option( 'con_misc', $con_misc );
			
	//set theme options
	$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
	$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
	$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
	$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
	$con_posttype_enable_products = $con_reviews['posttype_enable_products'];
	
	//find out if we have more than 1 review type active
	$typecount=0;
	if($con_posttype_enable_movies) $typecount++;
	if($con_posttype_enable_music) $typecount++;
	if($con_posttype_enable_games) $typecount++;
	if($con_posttype_enable_books) $typecount++;
	if($con_posttype_enable_products) $typecount++;
	
	register_widget('con_latest_tweets');
	register_widget('con_flickr');
	register_widget('con_recent_reactions');
	register_widget('con_tabbed_posts');
	register_widget('con_tabbed_archives');
	if($typecount>0) register_widget('con_tabbed_reviews');
	if($typecount>0) register_widget('con_tabbed_latest_reviews');
	//if($typecount>0) register_widget('con_tabbed_latest_casino_reviews');
	if($typecount>0) register_widget('con_latest_reviews');
	register_widget('con_unwrapped');
	register_widget('con_ad_125');
	register_widget('con_email_subscribe');
}

//LATEST TWEETS
class con_latest_tweets extends WP_Widget {
	function con_latest_tweets() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Latest Tweets', 'description' => __( 'Displays your latest Tweets','continuum') );
		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'con_latest_tweets' );
		/* Create the widget. */
		$this->WP_Widget( 'con_latest_tweets', 'Continuum Latest Tweets', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		//get theme options
		global $con_front, $con_single, $con_other, $con_ads, $con_misc, $oswcPostTypes;
			
		//set theme options
		$con_twitter_name = $con_misc['twitter_name'];		
		
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$text_default = apply_filters('widget_title', $instance['text_default'] );
		$text_ed = apply_filters('widget_title', $instance['text_ed'] );
		$text_ing = apply_filters('widget_title', $instance['text_ing'] );
		$text_reply = apply_filters('widget_title', $instance['text_reply'] );
		$text_url = apply_filters('widget_title', $instance['text_url'] );
		$refresh = $instance['refresh'];		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title ) { ?>
			<?php echo $before_title; ?>
                <?php echo $title; ?>
            <?php echo $after_title; ?>
        <?php } 			

		/* Display Latest Tweets */
		if ( $num ) { ?>
        	<script type="text/javascript">
				jQuery(function($){
					jQuery(".tweet").tweet({
					  modpath: '<?php echo get_template_directory_uri(); ?>/functions/twitter/',
					  join_text: "auto",
					  username: "<?php echo $con_twitter_name; ?>",
					  avatar_size: 32,
					  count: <?php echo $num; ?>,
					  auto_join_text_default: "<?php echo $text_default; ?>",
					  auto_join_text_ed: "<?php echo $text_ed; ?>",
					  auto_join_text_ing: "<?php echo $text_ing; ?>",
					  auto_join_text_reply: "<?php echo $text_reply; ?>",
					  auto_join_text_url: "<?php echo $text_url; ?>",
					  loading_text: "loading tweets...",
					  refresh_interval: <?php echo $refresh; ?>					  	
					});
				  });
			</script>
            
			<div class='tweet query complex-list'></div>
            
            <div class="footer-fix">&nbsp;</div>
            
		<?php }

		/* After widget (defined by themes). */
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['num'] = strip_tags( $new_instance['num'] );
		$instance['text_default'] = strip_tags( $new_instance['text_default'] );
		$instance['text_ed'] = strip_tags( $new_instance['text_ed'] );
		$instance['text_ing'] = strip_tags( $new_instance['text_ing'] );
		$instance['text_reply'] = strip_tags( $new_instance['text_reply'] );
		$instance['text_url'] = strip_tags( $new_instance['text_url'] );
		$instance['refresh'] = strip_tags( $new_instance['refresh'] );		

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Latest Tweets', 'num' => '3', 'text_default' => 'we said,', 'text_ed' => 'we', 'text_ing' => 'we were', 'text_reply' => 'we replied', 'text_url' => 'we were checking out', 'refresh' => '60' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:160px" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e( 'Number of Tweets:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" style="width:40px" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'refresh' ); ?>"><?php _e( 'Refresh every','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'refresh' ); ?>" name="<?php echo $this->get_field_name( 'refresh' ); ?>" value="<?php echo $instance['refresh']; ?>" style="width:40px" />
            <?php _e( 'seconds','continuum'); ?>
            <p><em><?php _e( 'Only refreshes your tweets, not the page.','continuum'); ?></em></p>            
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text_default' ); ?>"><?php _e( 'Regular Tweet Prefix:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'text_default' ); ?>" name="<?php echo $this->get_field_name( 'text_default' ); ?>" value="<?php echo $instance['text_default']; ?>" style="width:90px" />
            <p><em><?php _e( 'Example: about 2 hours ago','continuum'); ?>&nbsp;<b><?php _e( 'we said,','continuum'); ?></b>&nbsp;<?php _e( 'what is your favorite comedy duo on Youtube?','continuum'); ?></em></p>  
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text_ed' ); ?>"><?php _e( 'Past Tense Prefix:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'text_ed' ); ?>" name="<?php echo $this->get_field_name( 'text_ed' ); ?>" value="<?php echo $instance['text_ed']; ?>" style="width:110px" />
            <p><em><?php _e( 'Example: about 4 hours ago','continuum'); ?>&nbsp;<b><?php _e( 'we','continuum'); ?></b>&nbsp;<?php _e( 'bought Modern Warfare 3 at the nearest Best Buy.','continuum'); ?></em></p>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text_ing' ); ?>"><?php _e( 'Present Tense Prefix:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'text_ing' ); ?>" name="<?php echo $this->get_field_name( 'text_ing' ); ?>" value="<?php echo $instance['text_ing']; ?>" style="width:90px" />
            <p><em><?php _e( 'Example: about 7 minutes ago','continuum'); ?>&nbsp;<b><?php _e( 'we were','continuum'); ?></b>&nbsp;<?php _e( 'drinking a pint of Bells Consecrator Doppelbock.','continuum'); ?></em></p>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text_reply' ); ?>"><?php _e( 'Reply Prefix:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'text_reply' ); ?>" name="<?php echo $this->get_field_name( 'text_reply' ); ?>" value="<?php echo $instance['text_reply']; ?>" style="width:140px" />
            <p><em><?php _e( 'Example: about 2 hours ago','continuum'); ?>&nbsp;<b><?php _e( 'we replied','continuum'); ?></b>&nbsp;<?php _e( '@wordpress thank you for your magnanimosity.','continuum'); ?></em></p>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text_url' ); ?>"><?php _e( 'URL Prefix:','continuum'); ?></label>
			<input id="<?php echo $this->get_field_id( 'text_url' ); ?>" name="<?php echo $this->get_field_name( 'text_url' ); ?>" value="<?php echo $instance['text_url']; ?>" style="width:145px" />
            <p><em><?php _e( 'Example: about 45 minutes ago','continuum'); ?>&nbsp;<b><?php _e( 'we were checking out','continuum'); ?></b>&nbsp;<?php _e( 'Dubstep meets guns: http://youtu.be/hDlif8Km4S4','continuum'); ?></em></p>
		</p>
        
        <p><em><?php _e( 'See the continuum documentation for further information.','continuum'); ?></em></p>
        
        <?php
	}
}

//FLICKR FEED
class con_flickr extends WP_Widget {
	function con_flickr() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Flickr Feed', 'description' => 'Displays your Flickr feed.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'con_flickr' );
		/* Create the widget. */
		$this->WP_Widget( 'con_flickr', 'Continuum Flickr Feed', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		//get theme options
		global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
		$con_front = get_option( 'con_front', $con_front );
		$con_layout = get_option( 'con_layout', $con_layout );
		$con_feed = get_option( 'con_feed', $con_feed );
		$con_reviews = get_option( 'con_reviews', $con_reviews );
		$con_ads = get_option( 'con_ads', $con_ads );
		$con_misc = get_option( 'con_misc', $con_misc );
		
		//set theme options
		$con_flickr_name = $con_misc['flickr_name'];
		$con_colorbox = $con_misc['colorbox'];		
		
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title ) { ?>
        	<?php echo str_replace('<h2 class="gentesque">','<h2 class="gentesque flickr">',$before_title); ?>
                <?php echo $title; ?>
            <?php echo $after_title; ?>           
        <?php } 			

		/* Display Latest Tweets */
		if ( $num ) { ?>
        	
        	<script type="text/javascript">
				<!--
				jQuery(document).ready(function() {                
					jQuery('#flickr').jflickrfeed({
						limit: <?php echo $num; ?>,
						qstrings: {
							id: '<?php echo $con_flickr_name; ?>'
						},
						itemTemplate: '<li>'+
										'<a rel="colorbox" href="{{image}}" title="{{title}}">' +
											'<img src="{{image_s}}" alt="{{title}}" />' +
										'</a>' +
									  '</li>'
					}, function(data) {
						<?php if($con_colorbox) { ?>
						jQuery('#flickr a').colorbox();	
						<?php } ?>		
					});
				});
				// -->
			</script>
            
			<div class="flickr"> 
                
                <ul id="flickr" class="flickr-thumbs"><li class="first"></li></ul>
                
                <br class="clearer" />
                
                <a href="http://www.flickr.com/photos/<?php echo $con_flickr_name; ?>" target="_blank"><?php _e( 'View more photos', 'continuum' ); ?> &raquo;</a>
                
            </div>
		<?php }

		/* After widget (defined by themes). */
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['num'] = strip_tags( $new_instance['num'] );

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Flickr Photos', 'num' => '6' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:160px" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>">Number of photos:</label>
			<input id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" style="width:40px" />
		</p>
        
        <?php
	}
}

//recent REACTIONS
class con_recent_reactions extends WP_Widget {
	function con_recent_reactions() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Recent Reactions', 'description' => 'Displays your recent comments in a vertically scrolling list.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'con_recent_reactions' );
		/* Create the widget. */
		$this->WP_Widget( 'con_recent_reactions', 'Continuum Recent Reactions', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {		
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		
		/* Title of widget */
		if ( $title ) { ?>
            <h2 class="gentesque no-wrapper"><?php echo $title; ?></h2><div class="line">&nbsp;</div>
        <?php } 	
		
		/* Get the reactions */
		get_spotlight_reactions($num);
		
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['num'] = strip_tags( $new_instance['num'] );

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Recent Reactions', 'num' => '8' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:160px" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>">Number of Reactions:</label>
			<input id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" style="width:40px" />
		</p>
        
        <?php
	}
}

//TABBED POSTS
class con_tabbed_posts extends WP_Widget {
	function con_tabbed_posts() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Post Tabs', 'description' => 'Displays posts, comments, and tags in a jQuery tabbed format.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'con_tabbed_posts' );
		/* Create the widget. */
		$this->WP_Widget( 'con_tabbed_posts', 'Continuum Post Tabs', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {		
		extract( $args );

		/* User-selected settings. */
		$showpopular = $instance['showpopular'];
		$showrecent = $instance['showrecent'];
		$showcomments = $instance['showcomments'];
		$showtags = $instance['showtags'];
		$numpopular = $instance['numpopular'];
		$numrecent = $instance['numrecent'];
		$numcomments = $instance['numcomments'];
		$numtags = $instance['numtags'];
		$ordertags = $instance['ordertags'];

		/* HTML output */
		?>
        	
        <div id="tabbed-posts">
            <ul class="tabnav">
				<?php if($showpopular) { ?><li><a href="#tabs-popular"><?php _e('Popular','continuum'); ?></a></li><?php } ?>
                <?php if($showrecent) { ?><li><a href="#tabs-recent"><?php _e('Recent','continuum'); ?></a></li><?php } ?>
                <?php if($showcomments) { ?><li><a href="#tabs-comments"><?php _e('Comments','continuum'); ?></a></li><?php } ?>
                <?php if($showtags) { ?><li><a href="#tabs-tags"><?php _e('Tags','continuum'); ?></a></li><?php } ?>
            </ul>
            
            <div class="tabdiv-wrapper">
        
        		<?php if($showpopular) { ?>
                    
                    <div id="tabs-popular" class="tabdiv">
                        <ul>
                            <?php // create popular query
                            $postcount=0;
                            $args='order=DESC&orderby=comment_count&posts_per_page='.$numpopular; 
                            $pop_loop = new WP_Query($args);
                            if ($pop_loop->have_posts()) : while ($pop_loop->have_posts()) : $pop_loop->the_post(); $postcount++; ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; 
                            endif; ?> 
                            <?php wp_reset_query(); ?>
                            <li class="last gentesque tooltip" title="View all articles sorted by comment count"><a href="<?php con_get_widget_link('comment_count') ?>"><?php _e('More','contiuum'); ?></a></li>
                        </ul>
                    </div>
                    
                <?php } ?>
                
                <?php if($showrecent) { ?>
            
                    <div id="tabs-recent" class="tabdiv">
                        <ul>
                        <?php // create recent query
                            $postcount=0;
                            $args='order=DESC&orderby=date&posts_per_page='.$numrecent; 
                            $pop_loop = new WP_Query($args);
                            if ($pop_loop->have_posts()) : while ($pop_loop->have_posts()) : $pop_loop->the_post(); $postcount++; ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; 
                            endif; ?> 
                            <?php wp_reset_query(); ?>
                            <li class="last gentesque tooltip" title="View all articles sorted by date"><a href="<?php con_get_widget_link('date') ?>"><?php _e('More','contiuum'); ?></a></li>
                        </ul>
                    </div>
                    
                <?php } ?>
                
                <?php if($showcomments) { ?>
            
                    <div id="tabs-comments" class="tabdiv">
                        <ul>
                        <?php //get recent comments
                        $args = array(
                            'status' => 'approve',
                            'number' => $numcomments
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
                    
                <?php } ?>
                
                <?php if($showtags) { ?>
                
                    <div id="tabs-tags" class="tabdiv">
                    
                    	<?php if($ordertags=='count') { $ordertags.="&order=DESC"; } ?>
    
                        <?php wp_tag_cloud('smallest=8&largest=22&orderby='.$ordertags.'&number='.$numtags); ?>
                        
                    </div>
                
                <?php } ?>
            
            </div>
                                     
        </div>
        
    <?php
    }
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['showpopular'] = isset( $new_instance['showpopular'] );
		$instance['showrecent'] = isset( $new_instance['showrecent'] );
		$instance['showcomments'] = isset( $new_instance['showcomments'] );
		$instance['showtags'] = isset( $new_instance['showtags'] );
		$instance['numpopular'] = strip_tags( $new_instance['numpopular'] );
		$instance['numrecent'] = strip_tags( $new_instance['numrecent'] );
		$instance['numcomments'] = strip_tags( $new_instance['numcomments'] );
		$instance['numtags'] = strip_tags( $new_instance['numtags'] );
		$instance['ordertags'] = strip_tags( $new_instance['ordertags'] );

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'showpopular' => true, 'showrecent' => true, 'showcomments' => true, 'showtags' => true, 'numpopular' => 10, 'numrecent' => 10, 'numcomments' => 7, 'numtags' => 20, 'ordertags' => 'name' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showpopular']) ? $instance['showpopular'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showpopular' ); ?>" name="<?php echo $this->get_field_name( 'showpopular' ); ?>" />
			Display 
            <input id="<?php echo $this->get_field_id( 'numpopular' ); ?>" name="<?php echo $this->get_field_name( 'numpopular' ); ?>" value="<?php echo $instance['numpopular']; ?>" style="width:30px" />
            popular posts
		</p>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showrecent']) ? $instance['showrecent'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showrecent' ); ?>" name="<?php echo $this->get_field_name( 'showrecent' ); ?>" />
			Display 
            <input id="<?php echo $this->get_field_id( 'numrecent' ); ?>" name="<?php echo $this->get_field_name( 'numrecent' ); ?>" value="<?php echo $instance['numrecent']; ?>" style="width:30px" />
            recent posts
		</p>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcomments']) ? $instance['showcomments'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcomments' ); ?>" name="<?php echo $this->get_field_name( 'showcomments' ); ?>" />
			Display
            <input id="<?php echo $this->get_field_id( 'numcomments' ); ?>" name="<?php echo $this->get_field_name( 'numcomments' ); ?>" value="<?php echo $instance['numcomments']; ?>" style="width:30px" />
            comments
		</p>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showtags']) ? $instance['showtags'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showtags' ); ?>" name="<?php echo $this->get_field_name( 'showtags' ); ?>" />
			Display 
            <input id="<?php echo $this->get_field_id( 'numtags' ); ?>" name="<?php echo $this->get_field_name( 'numtags' ); ?>" value="<?php echo $instance['numtags']; ?>" style="width:30px" />
            tags
		</p>
        
        <p>
			<input class="radio" type="radio" <?php if($instance['ordertags']=='name') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'ordertags' ); ?>" value="name" />
			Order tags by name<br />
            <input class="radio" type="radio" <?php if($instance['ordertags']=='count') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'ordertags' ); ?>" value="count" />
			Order tags by post count
		</p>
        
        <?php
	}
}
//TABBED ARCHIVES
class con_tabbed_archives extends WP_Widget {
	function con_tabbed_archives() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Page & Archive Tabs', 'description' => 'Displays pages, categories, and archives in a jQuery tabbed format.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 320, 'height' => 350, 'id_base' => 'con_tabbed_archives' );
		/* Create the widget. */
		$this->WP_Widget( 'con_tabbed_archives', 'Continuum Page & Archive Tabs', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$showcategories = $instance['showcategories'];		
		$showpages = $instance['showpages'];
		$showarchives = $instance['showarchives'];
		$numarchives = $instance['numarchives'];
		$categorylevel = $instance['categorylevel'];
		$pagelevel = $instance['pagelevel'];
		$archivetype = $instance['archivetype'];

		/* HTML output */
		?>
        	
        <div id="tabbed-archives">
            <ul class="tabnav">
				<?php if($showcategories) { ?><li><a href="#tabs-categories"><?php _e('Categories','continuum'); ?></a></li><?php } ?>
                <?php if($showpages) { ?><li><a href="#tabs-pages"><?php _e('Pages','continuum'); ?></a></li><?php } ?>
                <?php if($showarchives) { ?><li><a href="#tabs-archives"><?php _e('Archives','continuum'); ?></a></li><?php } ?>
            </ul>
            
            <div class="tabdiv-wrapper">
        
        		<?php if($showcategories) { ?>
                    
                    <div id="tabs-categories" class="tabdiv">
                        <ul>
                        	<?php if($categorylevel=="3") { ?>
                        		<?php wp_list_categories("title_li=&depth=0") ?>
                            <?php } elseif($categorylevel=="2") { ?>
                            	<?php wp_list_categories("title_li=&depth=2") ?>
                            <?php } else { ?>
                            	<?php wp_list_categories("title_li=&depth=1") ?>
                            <?php }	?>
                        </ul>
                    </div>
                    
                <?php } ?>
                
                <?php if($showpages) { ?>
            
                    <div id="tabs-pages" class="tabdiv">
                        <ul>
                        	<?php if($pagelevel=="3") { ?>
                        		<?php wp_list_pages("title_li=&depth=0") ?>
                            <?php } elseif($categorylevel=="2") { ?>
                            	<?php wp_list_pages("title_li=&depth=2") ?>
                            <?php } else { ?>
                            	<?php wp_list_pages("title_li=&depth=1") ?>
                            <?php }	?>
                        </ul>
                    </div>
                    
                <?php } ?>
                
                <?php if($showarchives) { ?>
            
                    <div id="tabs-archives" class="tabdiv">
                        <ul>
                        	<?php wp_get_archives("type=".$archivetype."&limit=".$numarchives); ?>
                        </ul>
                    </div> 
                    
                <?php } ?>
            
            </div>
                                     
        </div>
        
    <?php
    }
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['showcategories'] = isset( $new_instance['showcategories'] );
		$instance['showpages'] = isset( $new_instance['showpages'] );
		$instance['showarchives'] = isset( $new_instance['showarchives'] );
		$instance['numarchives'] = strip_tags( $new_instance['numarchives'] );
		$instance['categorylevel'] = strip_tags( $new_instance['categorylevel'] );
		$instance['pagelevel'] = strip_tags( $new_instance['pagelevel'] );
		$instance['archivetype'] = strip_tags( $new_instance['archivetype'] );

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'showcategories' => true, 'showpages' => true, 'showarchives' => true, 'numarchives' => 20, 'categorylevel' => 3, 'pagelevel' => 3, 'archivetype' => 'monthly' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcategories']) ? $instance['showcategories'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcategories' ); ?>" name="<?php echo $this->get_field_name( 'showcategories' ); ?>" />
			Display categories
            <input id="<?php echo $this->get_field_id( 'categorylevel' ); ?>" name="<?php echo $this->get_field_name( 'categorylevel' ); ?>" value="<?php echo $instance['categorylevel']; ?>" style="width:20px" />
            levels deep
		</p>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showpages']) ? $instance['showpages'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showpages' ); ?>" name="<?php echo $this->get_field_name( 'showpages' ); ?>" />
			Display pages
            <input id="<?php echo $this->get_field_id( 'pagelevel' ); ?>" name="<?php echo $this->get_field_name( 'pagelevel' ); ?>" value="<?php echo $instance['pagelevel']; ?>" style="width:20px" />
            levels deep
		</p>
        
        <p>
			<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showarchives']) ? $instance['showarchives'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showarchives' ); ?>" name="<?php echo $this->get_field_name( 'showarchives' ); ?>" />
			Display 
            <input id="<?php echo $this->get_field_id( 'numarchives' ); ?>" name="<?php echo $this->get_field_name( 'numarchives' ); ?>" value="<?php echo $instance['numarchives']; ?>" style="width:30px" />
            archives in
            <select name="<?php echo $this->get_field_name( 'archivetype' ); ?>">
            	<option<?php if($instance['archivetype']=='yearly') { ?> selected<?php } ?>>yearly</option>
                <option<?php if($instance['archivetype']=='monthly') { ?> selected<?php } ?>>monthly</option>
                <option<?php if($instance['archivetype']=='weekly') { ?> selected<?php } ?>>weekly</option>
                <option<?php if($instance['archivetype']=='daily') { ?> selected<?php } ?>>daily</option>
            </select>
            format
		</p>
        
        <p><em>Note: category and page lists are only styled up to 3 levels deep. You can display more than 3 levels of categories and pages if you want to, but anything deeper than the 3rd level will look as though it's part of the 3rd level itself. If you really do have more than 3 levels of categories, I salute you!</em></p>
        
        <?php
	}
}
//TABBED REVIEWS
if($typecount>0) {
	class con_tabbed_reviews extends WP_Widget {
		function con_tabbed_reviews() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'Continuum Review Category Tabs', 'description' => 'Displays review categories in a jQuery tabbed format.' );
			/* Widget control settings. */
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'con_tabbed_reviews' );
			/* Create the widget. */
			$this->WP_Widget( 'con_tabbed_reviews', 'Continuum Review Category Tabs', $widget_ops, $control_ops );
		}	
		function widget( $args, $instance ) {
			
			extract( $args );
	
			/* User-selected settings. */
			$reviewtype = $instance['reviewtype'];
			$showcategory1 = $instance['showcategory1'];
			$showcategory2 = $instance['showcategory2'];
			$showcategory3 = $instance['showcategory3'];
			$numcategory1 = $instance['numcategory1'];		
			$numcategory2 = $instance['numcategory2'];
			$numcategory3 = $instance['numcategory3'];
			$lvlcategory1 = $instance['lvlcategory1'];
			$lvlcategory2 = $instance['lvlcategory2'];
			$lvlcategory3 = $instance['lvlcategory3'];
			
			//find out which review type this is
			switch($reviewtype) {
				case "movie":
					$posttypename="Movie Reviews";
					$category1slug="movie_genre";
					$category1name="Genres";
					$category2slug="movie_director";
					$category2name="Directors";
					$category3slug="movie_actor";
					$category3name="Actors";
					break;
				case "music":
					$posttypename="Music Reviews";
					$category1slug="music_genre";
					$category1name="Genres";
					$category2slug="music_artist";
					$category2name="Artists";
					$category3slug="music_type";
					$category3name="Types";
					break;
				case "game":
					$posttypename="Video Game Reviews";
					$category1slug="game_genre";
					$category1name="Genres";
					$category2slug="game_platform";
					$category2name="Platforms";
					$category3slug="game_developer";
					$category3name="Developers";
					break;
				case "book":
					$posttypename="Book Reviews";
					$category1slug="book_author";
					$category1name="Authors";
					$category2slug="book_genre";
					$category2name="Genres";
					$category3slug="book_publisher";
					$category3name="Publishers";
					break;
				case "product":
					$posttypename="Product Reviews";
					$category1slug="product_category";
					$category1name="Categories";
					$category2slug="product_price";
					$category2name="Prices";
					$category3slug="product_brand";
					$category3name="Brands";
					break;
			}
	
			/* HTML output */
			?>
				
			<div id="tabbed-<?php echo $reviewtype; ?>-reviews">
				<ul class="tabnav">
					<?php if($showcategory1) { ?><li><a href="#tabs-<?php echo $category1slug; ?>"><?php echo $category1name; ?></a></li><?php } ?>
					<?php if($showcategory2) { ?><li><a href="#tabs-<?php echo $category2slug; ?>"><?php echo $category2name; ?></a></li><?php } ?>
					<?php if($showcategory3) { ?><li><a href="#tabs-<?php echo $category3slug; ?>"><?php echo $category3name; ?></a></li><?php } ?>
				</ul>
				
				<div class="tabdiv-wrapper">
			
					<?php if($showcategory1) { ?>
						
						<div id="tabs-<?php echo $category1slug; ?>" class="tabdiv">
							<ul>
                            	<li class="review-header gentesque"><?php _e( $posttypename, 'continuum' ); ?>:</li>
								<?php if($lvlcategory1=="3") { ?>
									<?php wp_list_categories("taxonomy=".$category1slug."&title_li=&depth=0&number=".$numcategory1) ?>
								<?php } elseif($lvlcategory1=="2") { ?>
									<?php wp_list_categories("taxonomy=".$category1slug."&title_li=&depth=2&number=".$numcategory1) ?>
								<?php } else { ?>
									<?php wp_list_categories("taxonomy=".$category1slug."&title_li=&depth=1&number=".$numcategory1) ?>
								<?php }	?>                            
							</ul>
						</div>
						
					<?php } ?>
					
					<?php if($showcategory2) { ?>
				
						<div id="tabs-<?php echo $category2slug; ?>" class="tabdiv">
							<ul>
                            	<li class="review-header gentesque"><?php _e( $posttypename, 'continuum' ); ?>:</li>
								<?php if($lvlcategory2=="3") { ?>
									<?php wp_list_categories("taxonomy=".$category2slug."&title_li=&depth=0&orderby=term_group&number=".$numcategory2) ?>
								<?php } elseif($lvlcategory2=="2") { ?>
									<?php wp_list_categories("taxonomy=".$category2slug."&title_li=&depth=2&orderby=term_group&number=".$numcategory2) ?>
								<?php } else { ?>
									<?php wp_list_categories("taxonomy=".$category2slug."&title_li=&depth=1&orderby=term_group&number=".$numcategory2) ?>
								<?php }	?>  
							</ul>
						</div>
						
					<?php } ?>
					
					<?php if($showcategory3) { ?>
				
						<div id="tabs-<?php echo $category3slug; ?>" class="tabdiv">
							<ul>
                            	<li class="review-header gentesque"><?php _e( $posttypename, 'continuum' ); ?>:</li>
								<?php if($lvlcategory3=="3") { ?>
									<?php wp_list_categories("taxonomy=".$category3slug."&title_li=&depth=0&number=".$numcategory3) ?>
								<?php } elseif($lvlcategory3=="2") { ?>
									<?php wp_list_categories("taxonomy=".$category3slug."&title_li=&depth=2&number=".$numcategory3) ?>
								<?php } else { ?>
									<?php wp_list_categories("taxonomy=".$category3slug."&title_li=&depth=1&number=".$numcategory3) ?>
								<?php }	?>  
							</ul>
						</div> 
						
					<?php } ?>
				
				</div>
										 
			</div>
			
		<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$reviewtype = $instance['reviewtype'];
			$showcategory1 = $instance['showcategory1'];
			$showcategory2 = $instance['showcategory2'];
			$showcategory3 = $instance['showcategory3'];
			$numcategory1 = $instance['numcategory1'];		
			$numcategory2 = $instance['numcategory2'];
			$numcategory3 = $instance['numcategory3'];
			$lvlcategory1 = $instance['lvlcategory1'];
			$lvlcategory2 = $instance['lvlcategory2'];
			$lvlcategory3 = $instance['lvlcategory3'];
	
			/* Strip tags (if needed) and update the widget settings. */
			$instance['reviewtype'] = strip_tags( $new_instance['reviewtype'] );
			$instance['showcategory1'] = isset( $new_instance['showcategory1'] );
			$instance['showcategory2'] = isset( $new_instance['showcategory2'] );
			$instance['showcategory3'] = isset( $new_instance['showcategory3'] );
			$instance['numcategory1'] = strip_tags( $new_instance['numcategory1'] );		
			$instance['numcategory2'] = strip_tags( $new_instance['numcategory2'] );
			$instance['numcategory3'] = strip_tags( $new_instance['numcategory3'] );
			$instance['lvlcategory1'] = strip_tags( $new_instance['lvlcategory1'] );
			$instance['lvlcategory2'] = strip_tags( $new_instance['lvlcategory2'] );
			$instance['lvlcategory3'] = strip_tags( $new_instance['lvlcategory3'] );
	
			return $instance;
		}
		function form( $instance ) {
			
			//get theme options
			global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
			$con_front = get_option( 'con_front', $con_front );
			$con_layout = get_option( 'con_layout', $con_layout );
			$con_feed = get_option( 'con_feed', $con_feed );
			$con_reviews = get_option( 'con_reviews', $con_reviews );
			$con_ads = get_option( 'con_ads', $con_ads );
			$con_misc = get_option( 'con_misc', $con_misc );
		
			//set theme options
			$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
			$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
			$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
			$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
			$con_posttype_enable_products = $con_reviews['posttype_enable_products'];
	
			/* Set up some default widget settings. */
			$defaults = array( 'reviewtype' => 'movie', 'showcategory1' => true, 'showcategory2' => true, 'showcategory3' => true, 'numcategory1' => 10, 'numcategory2' => 10, 'numcategory3' => 10, 'lvlcategory1' => 3, 'lvlcategory2' => 3, 'lvlcategory3' => 3 );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
			<p>
				Review Type: 
				<select name="<?php echo $this->get_field_name( 'reviewtype' ); ?>">
					<?php if($con_posttype_enable_movies) { ?><option<?php if($instance['reviewtype']=='movie') { ?> selected<?php } ?> value="movie">Movies</option><?php } ?>
					<?php if($con_posttype_enable_music) { ?><option<?php if($instance['reviewtype']=='music') { ?> selected<?php } ?> value="music">Music</option><?php } ?>
					<?php if($con_posttype_enable_games) { ?><option<?php if($instance['reviewtype']=='game') { ?> selected<?php } ?> value="game">Video Games</option><?php } ?>
					<?php if($con_posttype_enable_books) { ?><option<?php if($instance['reviewtype']=='book') { ?> selected<?php } ?> value="book">Books</option><?php } ?>
					<?php if($con_posttype_enable_products) { ?><option<?php if($instance['reviewtype']=='product') { ?> selected<?php } ?> value="product">Products</option><?php } ?>
				</select>
			</p>
		
			<p>
				<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcategory1']) ? $instance['showcategory1'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcategory1' ); ?>" name="<?php echo $this->get_field_name( 'showcategory1' ); ?>" />
				Display 
				<input id="<?php echo $this->get_field_id( 'numcategory1' ); ?>" name="<?php echo $this->get_field_name( 'numcategory1' ); ?>" value="<?php echo $instance['numcategory1']; ?>" style="width:30px" />
				tab 1 items
				<input id="<?php echo $this->get_field_id( 'lvlcategory1' ); ?>" name="<?php echo $this->get_field_name( 'lvlcategory1' ); ?>" value="<?php echo $instance['lvlcategory1']; ?>" style="width:20px" />
				levels deep
				
			</p>
			
			<p>
				<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcategory2']) ? $instance['showcategory2'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcategory2' ); ?>" name="<?php echo $this->get_field_name( 'showcategory2' ); ?>" />
				Display 
				<input id="<?php echo $this->get_field_id( 'numcategory2' ); ?>" name="<?php echo $this->get_field_name( 'numcategory2' ); ?>" value="<?php echo $instance['numcategory2']; ?>" style="width:30px" />
				tab 2 items
				<input id="<?php echo $this->get_field_id( 'lvlcategory2' ); ?>" name="<?php echo $this->get_field_name( 'lvlcategory2' ); ?>" value="<?php echo $instance['lvlcategory2']; ?>" style="width:20px" />
				levels deep
			</p>
			
			<p>
				<input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcategory3']) ? $instance['showcategory3'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcategory3' ); ?>" name="<?php echo $this->get_field_name( 'showcategory3' ); ?>" />
				Display
				<input id="<?php echo $this->get_field_id( 'numcategory3' ); ?>" name="<?php echo $this->get_field_name( 'numcategory3' ); ?>" value="<?php echo $instance['numcategory3']; ?>" style="width:30px" />
				tab 3 items
				<input id="<?php echo $this->get_field_id( 'lvlcategory3' ); ?>" name="<?php echo $this->get_field_name( 'lvlcategory3' ); ?>" value="<?php echo $instance['lvlcategory3']; ?>" style="width:20px" />
				levels deep
			</p>
			
			<?php
		}
	}
}
//TABBED LATEST REVIEWS
if($typecount>0) {
	class con_tabbed_latest_reviews extends WP_Widget {
		function con_tabbed_latest_reviews() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'Continuum Latest Review Tabs', 'description' => 'Displays reviews by most recent or highest rated in a jQuery tabbed format.' );
			/* Widget control settings. */
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'con_tabbed_latest_reviews' );
			/* Create the widget. */
			$this->WP_Widget( 'con_tabbed_latest_reviews', 'Continuum Latest Review Tabs', $widget_ops, $control_ops );
		}	
		function widget( $args, $instance ) {
			
			extract( $args );
	
			/* User-selected settings. */
			$sort = $instance['sort'];
			$showmovies = $instance['showmovies'];
			$showmusic = $instance['showmusic'];
			$showgames = $instance['showgames'];
			$showbooks = $instance['showbooks'];
			$showproducts = $instance['showproducts'];
			$nummovies = $instance['nummovies'];		
			$nummusic = $instance['nummusic'];
			$numgames = $instance['numgames'];
			$numbooks = $instance['numbooks'];
			$numproducts = $instance['numproducts'];
			
			if($sort=="highest-rated") {
				$feedsort="meta_value";
				$metakey="&meta_key=Rating";
			} else {
				$feedsort="date";
				$metakey="";
			}
			
			/* HTML output */
			?>
				
			<div id="tabbed-<?php echo $sort; ?>-reviews">
				<ul class="tabnav">
					<?php if($showmovies) { ?><li><a href="#tabs-movies-<?php echo $sort; ?>"><?php _e('Movies','continuum'); ?></a></li><?php } ?>
					<?php if($showmusic) { ?><li><a href="#tabs-music-<?php echo $sort; ?>"><?php _e('Music','continuum'); ?></a></li><?php } ?>
                    <?php if($showgames) { ?><li><a href="#tabs-games-<?php echo $sort; ?>"><?php _e('Games','continuum'); ?></a></li><?php } ?>
                    <?php if($showbooks) { ?><li><a href="#tabs-books-<?php echo $sort; ?>"><?php _e('Books','continuum'); ?></a></li><?php } ?>
                    <?php if($showproducts) { ?><li><a href="#tabs-products-<?php echo $sort; ?>"><?php _e('Products','continuum'); ?></a></li><?php } ?>
				</ul>
				
				<div class="tabdiv-wrapper">
			
					<?php if($showmovies) { ?>
						
						<div id="tabs-movies-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args='&suppress_filters=true&posts_per_page='.$nummovies.'&post_type=con_movie_reviews&order=DESC&orderby='.$feedsort.$metakey;								
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <li class="last gentesque tooltip" title="View all movie reviews"><a href="<?php con_get_widget_review_link($feedsort, 'movie') ?>"><?php _e('More','contiuum'); ?></a></li>
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showmusic) { ?>
						
						<div id="tabs-music-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args='&suppress_filters=true&posts_per_page='.$nummusic.'&post_type=con_music_reviews&order=DESC&orderby='.$feedsort.$metakey;								
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <li class="last gentesque tooltip" title="View all music reviews"><a href="<?php con_get_widget_review_link($feedsort, 'music') ?>"><?php _e('More','contiuum'); ?></a></li>
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showgames) { ?>
						
						<div id="tabs-games-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args='&suppress_filters=true&posts_per_page='.$numgames.'&post_type=con_game_reviews&order=DESC&orderby='.$feedsort.$metakey;								
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <li class="last gentesque tooltip" title="View all video game reviews"><a href="<?php con_get_widget_review_link($feedsort, 'video-game') ?>"><?php _e('More','contiuum'); ?></a></li>
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showbooks) { ?>
						
						<div id="tabs-books-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args='&suppress_filters=true&posts_per_page='.$numbooks.'&post_type=con_book_reviews&order=DESC&orderby='.$feedsort.$metakey;								
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <li class="last gentesque tooltip" title="View all book reviews"><a href="<?php con_get_widget_review_link($feedsort, 'book') ?>"><?php _e('More','contiuum'); ?></a></li>
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showproducts) { ?>
						
						<div id="tabs-products-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args='&suppress_filters=true&posts_per_page='.$numproducts.'&post_type=con_product_reviews&order=DESC&orderby='.$feedsort.$metakey;								
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <li class="last gentesque tooltip" title="View all product reviews"><a href="<?php con_get_widget_review_link($feedsort, 'product') ?>"><?php _e('More','contiuum'); ?></a></li>
           
							</ul>
						</div>
						
					<?php } ?>
				
				</div>
										 
			</div>
			
		<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$sort = $instance['sort'];
			$showmovies = $instance['showmovies'];
			$showmusic = $instance['showmusic'];
			$showgames = $instance['showgames'];
			$showbooks = $instance['showbooks'];
			$showproducts = $instance['showproducts'];
			$nummovies = $instance['nummovies'];		
			$nummusic = $instance['nummusic'];
			$numgames = $instance['numgames'];
			$numbooks = $instance['numbooks'];
			$numproducts = $instance['numproducts'];	
	
			/* Strip tags (if needed) and update the widget settings. */
			$instance['sort'] = strip_tags( $new_instance['sort'] );
			$instance['showmovies'] = isset( $new_instance['showmovies'] );
			$instance['showmusic'] = isset( $new_instance['showmusic'] );
			$instance['showgames'] = isset( $new_instance['showgames'] );
			$instance['showbooks'] = isset( $new_instance['showbooks'] );	
			$instance['showproducts'] = isset( $new_instance['showproducts'] );		
			$instance['nummovies'] = strip_tags( $new_instance['nummovies'] );
			$instance['nummusic'] = strip_tags( $new_instance['nummusic'] );
			$instance['numgames'] = strip_tags( $new_instance['numgames'] );
			$instance['numbooks'] = strip_tags( $new_instance['numbooks'] );
			$instance['numproducts'] = strip_tags( $new_instance['numproducts'] );
	
			return $instance;
		}
		function form( $instance ) {
			
			//get theme options
			global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
			$con_front = get_option( 'con_front', $con_front );
			$con_layout = get_option( 'con_layout', $con_layout );
			$con_feed = get_option( 'con_feed', $con_feed );
			$con_reviews = get_option( 'con_reviews', $con_reviews );
			$con_ads = get_option( 'con_ads', $con_ads );
			$con_misc = get_option( 'con_misc', $con_misc );
		
			//set theme options
			$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
			$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
			$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
			$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
			$con_posttype_enable_products = $con_reviews['posttype_enable_products'];
			
			//set default variables to true
			$showmoviesdefault=false;
			$showmusicdefault=false;
			$showgamesdefault=false;
			$showbooksdefault=false;
			$showproductdefault=false;
			
			//loop thru post types to get a count of active review types			
			$typecount=0; // setup count variable		
			if($con_posttype_enable_movies) {
				$showmoviesdefault=true; 
				$typecount++;
			}
			if($con_posttype_enable_music) {
				$showmusicdefault=true; 
				$typecount++;
			}
			if($con_posttype_enable_games) {
				$showgamesdefault=true; 
				$typecount++;
			}
			if($con_posttype_enable_books) {
				$showbooksdefault=true; 
				$typecount++;
			}
			if($con_posttype_enable_products) {
				$showproductsdefault=true; 
				$typecount++;
			}
			
			if($typecount>4) $showproductsdefault=false; //hide products by default if all 5 review types are active				
	
			/* Set up some default widget settings. */
			$defaults = array( 'sort' => 'latest', 'showmovies' => $showmoviesdefault, 'showmusic' => $showmusicdefault, 'showgames' => $showgamesdefault, 'showbooks' => $showbooksdefault, 'showproducts' => $showproductsdefault, 'nummovies' => 10, 'nummusic' => 10, 'numgames' => 10, 'numbooks' => 10, 'numproducts' => 10 );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
            
            <p>
                <input class="radio" type="radio" <?php if($instance['sort']=='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="highest-rated" />
                Order reviews by highest rated<br />
                <input class="radio" type="radio" <?php if($instance['sort']!='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="latest" />
                Order reviews by latest
            </p>
			
            <?php if($con_posttype_enable_movies) { ?>			
		
                <p>
                    <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showmovies']) ? $instance['showmovies'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showmovies' ); ?>" name="<?php echo $this->get_field_name( 'showmovies' ); ?>" />
                    Display 
                    <input id="<?php echo $this->get_field_id( 'nummovies' ); ?>" name="<?php echo $this->get_field_name( 'nummovies' ); ?>" value="<?php echo $instance['nummovies']; ?>" style="width:30px" />
                    movie reviews                    
                    
                </p>
                
            <?php } ?>
            
            <?php if($con_posttype_enable_music) { ?>			
		
                <p>
                    <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showmusic']) ? $instance['showmusic'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showmusic' ); ?>" name="<?php echo $this->get_field_name( 'showmusic' ); ?>" />
                    Display 
                    <input id="<?php echo $this->get_field_id( 'nummusic' ); ?>" name="<?php echo $this->get_field_name( 'nummusic' ); ?>" value="<?php echo $instance['nummusic']; ?>" style="width:30px" />
                    music reviews                    
                    
                </p>
                
            <?php } ?>
            
            <?php if($con_posttype_enable_games) { ?>			
		
                <p>
                    <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showgames']) ? $instance['showgames'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showgames' ); ?>" name="<?php echo $this->get_field_name( 'showgames' ); ?>" />
                    Display 
                    <input id="<?php echo $this->get_field_id( 'numgames' ); ?>" name="<?php echo $this->get_field_name( 'numgames' ); ?>" value="<?php echo $instance['numgames']; ?>" style="width:30px" />
                    video game reviews                    
                    
                </p>
                
            <?php } ?>
            
            <?php if($con_posttype_enable_books) { ?>			
		
                <p>
                    <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showbooks']) ? $instance['showbooks'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showbooks' ); ?>" name="<?php echo $this->get_field_name( 'showbooks' ); ?>" />
                    Display 
                    <input id="<?php echo $this->get_field_id( 'numbooks' ); ?>" name="<?php echo $this->get_field_name( 'numbooks' ); ?>" value="<?php echo $instance['numbooks']; ?>" style="width:30px" />
                    book reviews                    
                    
                </p>
                
            <?php } ?>
			
			<?php if($con_posttype_enable_products) { ?>			
		
                <p>
                    <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showproducts']) ? $instance['showproducts'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showproducts' ); ?>" name="<?php echo $this->get_field_name( 'showproducts' ); ?>" />
                    Display 
                    <input id="<?php echo $this->get_field_id( 'numproducts' ); ?>" name="<?php echo $this->get_field_name( 'numproducts' ); ?>" value="<?php echo $instance['numproducts']; ?>" style="width:30px" />
                    product reviews                    
                    
                </p>
                
            <?php } ?>
			
			<?php
		}
	}
}
//TABBED LATEST CASION REVIEWS BY TYPE
//THIS IS FUNCTIONALITY THAT WAS BUILT FOR A CLIENT. I LEFT IT IN BECAUSE I MIGHT BASE A FUTURE WIDGET ON IT. IT IS NOT CURRENTLY USED.
if($typecount>0) {
	class con_tabbed_latest_casino_reviews extends WP_Widget {
		function con_tabbed_latest_casino_reviews() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'Continuum Casino Review Tabs', 'description' => 'Displays reviews by most recent or highest rated in a jQuery tabbed format.' );
			/* Widget control settings. */
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'con_tabbed_latest_casino_reviews' );
			/* Create the widget. */
			$this->WP_Widget( 'con_tabbed_latest_casino_reviews', 'Continuum Casino Review Tabs', $widget_ops, $control_ops );
		}	
		function widget( $args, $instance ) {
			
			extract( $args );
	
			/* User-selected settings. */
			$sort = $instance['sort'];
			$showcasino = $instance['showcasino'];
			$showpoker = $instance['showpoker'];
			$showsportsbook = $instance['showsportsbook'];
			$numcasino = $instance['numcasino'];		
			$numpoker = $instance['numpoker'];
			$numsportsbook = $instance['numsportsbook'];
			
			if($sort=="highest-rated") {
				$feedsort="meta_value";
				$metakey="Rating";
			} else {
				$feedsort="date";
				$metakey="";
			}
			
			/* HTML output */
			?>
				
			<div id="tabbed-<?php echo $sort; ?>-reviews">
				<ul class="tabnav">
					<?php if($showcasino) { ?><li><a href="#tabs-casino-<?php echo $sort; ?>">Casino</a></li><?php } ?>
					<?php if($showpoker) { ?><li><a href="#tabs-poker-<?php echo $sort; ?>">Poker</a></li><?php } ?>
                    <?php if($showsportsbook) { ?><li><a href="#tabs-sportsbook-<?php echo $sort; ?>">Sportsbook</a></li><?php } ?>
				</ul>
				
				<div class="tabdiv-wrapper">
			
					<?php if($showcasino) { ?>
						
						<div id="tabs-casino-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query									
								$args = array('suppress_filters' => true, 'posts_per_page' => $numcasino, 'post_type' => 'con_product_reviews', 'order' => 'DESC', 'orderby' => $feedsort, 'meta_key' => $metakey, 'tax_query' => array( array( 'taxonomy' => 'product_category', 'field' => 'slug', 'terms' => 'audio') ) );
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <!--<li class="last gentesque tooltip" title="View all product reviews"><a href="<?php con_get_widget_review_link($feedsort, 'product') ?>">More</a></li>-->
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showpoker) { ?>
						
						<div id="tabs-poker-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args = array('suppress_filters' => true, 'posts_per_page' => $numpoker, 'post_type' => 'con_product_reviews', 'order' => 'DESC', 'orderby' => $feedsort, 'meta_key' => $metakey, 'tax_query' => array( array( 'taxonomy' => 'product_category', 'field' => 'slug', 'terms' => 'video') ) );							
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <!--<li class="last gentesque tooltip" title="View all product reviews"><a href="<?php con_get_widget_review_link($feedsort, 'product') ?>">More</a></li>-->
           
							</ul>
						</div>
						
					<?php } ?>
                    
                    <?php if($showsportsbook) { ?>
						
						<div id="tabs-sportsbook-<?php echo $sort; ?>" class="tabdiv">
							<ul>
                            	<?php // setup the query
								$args = array('suppress_filters' => true, 'posts_per_page' => $numsportsbook, 'post_type' => 'con_product_reviews', 'order' => 'DESC', 'orderby' => $feedsort, 'meta_key' => $metakey, 'tax_query' => array( array( 'taxonomy' => 'product_category', 'field' => 'slug', 'terms' => 'smart-phones') ) );							
								$cust_loop = new WP_Query($args); 
								if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
									// if we're sorting by rating and this item does not have a rating, hide it
									$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
									if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
										$ratings = con_setup_rating($rating); //setup the ratings array	
										?>
										<li>																					
											
											<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
                                            
                                            <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
											
										</li>
                                        
                                    <?php } ?>
                                    
                                <?php endwhile; 
            					endif; 
								wp_reset_query(); ?> 
                                
                                <!--<li class="last gentesque tooltip" title="View all product reviews"><a href="<?php con_get_widget_review_link($feedsort, 'product') ?>">More</a></li>-->
           
							</ul>
						</div>
						
					<?php } ?>
				
				</div>
										 
			</div>
			
		<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$sort = $instance['sort'];
			$showcasino = $instance['showcasino'];
			$showpoker = $instance['showpoker'];
			$showsportsbook = $instance['showsportsbook'];
			$numcasino = $instance['numcasino'];		
			$numpoker = $instance['numpoker'];
			$numsportsbook = $instance['numsportsbook'];
	
			/* Strip tags (if needed) and update the widget settings. */
			$instance['sort'] = strip_tags( $new_instance['sort'] );
			$instance['showcasino'] = isset( $new_instance['showcasino'] );
			$instance['showpoker'] = isset( $new_instance['showpoker'] );
			$instance['showsportsbook'] = isset( $new_instance['showsportsbook'] );
			$instance['numcasino'] = strip_tags( $new_instance['numcasino'] );
			$instance['numpoker'] = strip_tags( $new_instance['numpoker'] );
			$instance['numsportsbook'] = strip_tags( $new_instance['numsportsbook'] );
	
			return $instance;
		}
		function form( $instance ) {
			
			//set default variables to true
			$showcasinodefault=true;
			$showpokerdefault=true;
			$showsportsbookdefault=true;
	
			/* Set up some default widget settings. */
			$defaults = array( 'sort' => 'latest', 'showcasino' => $showcasinodefault, 'showpoker' => $showpokerdefault, 'showsportsbook' => $showsportsbookdefault, 'numcasino' => 10, 'numpoker' => 10, 'numsportsbook' => 10 );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
            
            <p>
                <input class="radio" type="radio" <?php if($instance['sort']=='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="highest-rated" />
                Order reviews by highest rated<br />
                <input class="radio" type="radio" <?php if($instance['sort']!='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="latest" />
                Order reviews by latest
            </p>		
		
            <p>
                <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showcasino']) ? $instance['showcasino'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showcasino' ); ?>" name="<?php echo $this->get_field_name( 'showcasino' ); ?>" />
                Display 
                <input id="<?php echo $this->get_field_id( 'numcasino' ); ?>" name="<?php echo $this->get_field_name( 'numcasino' ); ?>" value="<?php echo $instance['numcasino']; ?>" style="width:30px" />
                casino reviews                    
                
            </p>
    
            <p>
                <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showpoker']) ? $instance['showpoker'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showpoker' ); ?>" name="<?php echo $this->get_field_name( 'showpoker' ); ?>" />
                Display 
                <input id="<?php echo $this->get_field_id( 'numpoker' ); ?>" name="<?php echo $this->get_field_name( 'numpoker' ); ?>" value="<?php echo $instance['numpoker']; ?>" style="width:30px" />
                poker reviews                    
                
            </p>    
    
            <p>
                <input class="checkbox" type="checkbox" <?php checked(isset( $instance['showsportsbook']) ? $instance['showsportsbook'] : 0  ); ?> id="<?php echo $this->get_field_id( 'showsportsbook' ); ?>" name="<?php echo $this->get_field_name( 'showsportsbook' ); ?>" />
                Display 
                <input id="<?php echo $this->get_field_id( 'numsportsbook' ); ?>" name="<?php echo $this->get_field_name( 'numsportsbook' ); ?>" value="<?php echo $instance['numsportsbook']; ?>" style="width:30px" />
                sportsbook reviews                    
                
            </p>
			
			<?php
		}
	}
}
//NON-TABBED LATEST REVIEWS
if($typecount>0) {
	class con_latest_reviews extends WP_Widget {
		function con_latest_reviews() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'Continuum Latest Reviews', 'description' => 'Displays a single review type by most recent or highest rated. Add multiple widgets for each review type.' );
			/* Widget control settings. */
			$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'con_latest_reviews' );
			/* Create the widget. */
			$this->WP_Widget( 'con_latest_reviews', 'Continuum Latest Reviews', $widget_ops, $control_ops );
		}	
		function widget( $args, $instance ) {
			
			extract( $args );
	
			/* User-selected settings. */
			$title = apply_filters('widget_title', $instance['title'] );
			$sort = $instance['sort'];
			$reviewtype = $instance['reviewtype'];
			$numreviews = $instance['numreviews'];
			
			//get review type for More link URL purpose
			$reviewtypeurl = $reviewtype;
			if($reviewtypeurl=="game") $reviewtypeurl="video-game";
			
			if($sort=="highest-rated") {
				$feedsort="meta_value";
				$metakey="&meta_key=Rating";
			} else {
				$feedsort="date";
				$metakey="";
			} ?>
            
            <div class="tabdiv reviews <?php echo $reviewtype; ?>">
            
            	<?php
			
				/* Before widget (defined by themes). */
				echo $before_widget;
		
				/* Title of widget (before and after defined by themes). */
				if ( $title ) { ?>                	
					<?php echo str_replace('<h2 class="gentesque">','<h2 class="gentesque">',$before_title); ?>
						<div class="icon <?php echo $reviewtype; ?>">&nbsp;</div>
						<?php echo $title; ?>
					<?php echo $after_title; ?>
				<?php } 
				
				/* HTML output */
				?>
	
				<ul>
					<?php // setup the query
					$args='&suppress_filters=true&posts_per_page='.$numreviews.'&post_type=con_'.$reviewtype.'_reviews&order=DESC&orderby='.$feedsort.$metakey;								
					$cust_loop = new WP_Query($args); 
					if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post(); $postcount++;
						// if we're sorting by rating and this item does not have a rating, hide it
						$rating = get_post_meta(get_the_ID(), "Rating", $single = true); 
						if(($rating && $feedsort=="meta_value") || ($feedsort!="meta_value")) {										
							$ratings = con_setup_rating($rating); //setup the ratings array	
							?>
							<li>																					
								
								<?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts ?>	
								
								<a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>												
								
							</li>
							
						<?php } ?>
						
					<?php endwhile; 
					endif; 
					wp_reset_query(); ?> 
					
					<li class="last gentesque tooltip" title="View all <?php echo $reviewtype; ?> reviews"><a href="<?php con_get_widget_review_link($feedsort, $reviewtypeurl) ?>"><?php _e('More','contiuum'); ?></a></li>
	
				</ul> 
				
				<?php /* After widget (defined by themes). */
				echo $after_widget; ?>
            
            </div>
			
		<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$title = apply_filters('widget_title', $instance['title'] );
			$sort = $instance['sort'];
			$reviewtype = $instance['reviewtype'];
			$numreviews = $instance['numreviews'];	
	
			/* Strip tags (if needed) and update the widget settings. */
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['sort'] = strip_tags( $new_instance['sort'] );
			$instance['reviewtype'] = strip_tags( $new_instance['reviewtype'] );
			$instance['numreviews'] = strip_tags( $new_instance['numreviews'] );
	
			return $instance;
		}
		function form( $instance ) {
			
			//get theme options
			global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
			$con_front = get_option( 'con_front', $con_front );
			$con_layout = get_option( 'con_layout', $con_layout );
			$con_feed = get_option( 'con_feed', $con_feed );
			$con_reviews = get_option( 'con_reviews', $con_reviews );
			$con_ads = get_option( 'con_ads', $con_ads );
			$con_misc = get_option( 'con_misc', $con_misc );
		
			//set theme options
			$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
			$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
			$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
			$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
			$con_posttype_enable_products = $con_reviews['posttype_enable_products'];				
	
			$typecount=0; // setup count variable		
			if($con_posttype_enable_movies)	$typecount++;
			if($con_posttype_enable_music) $typecount++;
			if($con_posttype_enable_games) $typecount++;
			if($con_posttype_enable_books) $typecount++;
			if($con_posttype_enable_products) $typecount++;
	
			/* Set up some default widget settings. */
			$defaults = array( 'sort' => 'latest', 'title' => 'Latest Movie Reviews', 'reviewtype' => 'movie', 'numreviews' => 10 );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
            
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
                <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:160px" />
            </p>
            
            <p>
				Review Type: 
				<select name="<?php echo $this->get_field_name( 'reviewtype' ); ?>">
					<?php if($con_posttype_enable_movies) { ?><option<?php if($instance['reviewtype']=='movie') { ?> selected<?php } ?> value="movie">Movies</option><?php } ?>
					<?php if($con_posttype_enable_music) { ?><option<?php if($instance['reviewtype']=='music') { ?> selected<?php } ?> value="music">Music</option><?php } ?>
					<?php if($con_posttype_enable_games) { ?><option<?php if($instance['reviewtype']=='game') { ?> selected<?php } ?> value="game">Video Games</option><?php } ?>
					<?php if($con_posttype_enable_books) { ?><option<?php if($instance['reviewtype']=='book') { ?> selected<?php } ?> value="book">Books</option><?php } ?>
					<?php if($con_posttype_enable_products) { ?><option<?php if($instance['reviewtype']=='product') { ?> selected<?php } ?> value="product">Products</option><?php } ?>
				</select>
			</p>
            
            <p>
                <input class="radio" type="radio" <?php if($instance['sort']=='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="highest-rated" />
                Order reviews by highest rated<br />
                <input class="radio" type="radio" <?php if($instance['sort']!='highest-rated') { ?>checked <?php } ?>name="<?php echo $this->get_field_name( 'sort' ); ?>" value="latest" />
                Order reviews by latest
            </p>		
		
            <p>                
                Display 
                <input id="<?php echo $this->get_field_id( 'numreviews' ); ?>" name="<?php echo $this->get_field_name( 'numreviews' ); ?>" value="<?php echo $instance['numreviews']; ?>" style="width:30px" />  
                reviews        
                
            </p>
			
			<?php
		}
	}
}
//UNWRAPPED TEXT
class con_unwrapped extends WP_Widget {
	function con_unwrapped() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Unwrapped Text', 'description' => 'Displays arbritrary text of HTML just like the standard Text widget, but this one does not include the header bar and wrapper style - just a blank canvas for content.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'con_unwrapped' );
		/* Create the widget. */
		$this->WP_Widget( 'con_unwrapped', 'Continuum Unwrapped Text', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		//get theme options
		global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc );
		
		extract( $args );
		
		$text = $instance['text'];	
		
		/* show the widget content without any headers or wrappers */
		echo '<div class="unwrapped">'.do_shortcode($text).'</div>';	
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['text'] = $new_instance['text'];

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'text' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'text' ); ?>">Text/HTML:</label><br />
            <textarea rows="20" cols="47" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
		</p>
        
        <?php
	}
}

//AD 125
class con_ad_125 extends WP_Widget {
	function con_ad_125() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Floating Ad', 'description' => 'Insert your adsense or HTML code for two 125px-wide ads that will float next to each other.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'con_ad_125' );
		/* Create the widget. */
		$this->WP_Widget( 'con_ad_125', 'Continuum Floating Ad', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		//get theme options
		global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc );
		
		extract( $args );
		
		$ad1 = $instance['ad1'];	
		$ad2 = $instance['ad2'];
		
		/* show the floated ads without any headers or wrappers */
		echo '<div class="unwrapped">';
		echo '<div class="ad1">'.$ad1.'</div>';	
		echo '<div class="ad2">'.$ad2.'</div><br class="clearer" />';	
		echo '</div>';
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['ad1'] = $new_instance['ad1'];
		$instance['ad2'] = $new_instance['ad2'];

		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'ad1' => '', 'ad2' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'ad1' ); ?>">Ad 1 HTML:</label><br />
            <textarea rows="5" cols="47" id="<?php echo $this->get_field_id( 'ad1' ); ?>" name="<?php echo $this->get_field_name( 'ad1' ); ?>"><?php echo $instance['ad1']; ?></textarea>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'ad2' ); ?>">Ad 2 HTML:</label><br />
            <textarea rows="5" cols="47" id="<?php echo $this->get_field_id( 'ad2' ); ?>" name="<?php echo $this->get_field_name( 'ad2' ); ?>"><?php echo $instance['ad2']; ?></textarea>
		</p>
        
        <p><em>Tip: you can add as many of these widgets as you want in order to create multiple ad panels on top of each other. Also, the width crops at 125px but the height does not crop, so you can use images of any height.</em></p>
        
        <?php
	}
}

//EMAIL SUBSCRIBE
class con_email_subscribe extends WP_Widget {
	function con_email_subscribe() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Continuum Email Subscribe', 'description' => 'Displays a form for users to subscribe to your Feedburner feed via email.' );
		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'con_email_subscribe' );
		/* Create the widget. */
		$this->WP_Widget( 'con_email_subscribe', 'Continuum Email Subscribe', $widget_ops, $control_ops );
	}	
	function widget( $args, $instance ) {
		//get theme options
		global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc );
					
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$feedburner = $instance['feedburner'];
			
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title ) { ?>
			<?php echo $before_title; ?>
                <?php echo $title; ?><div class="feedburner">&nbsp;</div>
            <?php echo $after_title; ?>
			
			<form class="subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p><?php _e( 'Enter your email address', 'continuum' ); ?></p><p><input type="text" name="email"/></p><input type="hidden" value="<?php echo $feedburner; ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" class="btn gentesque tooltip" value="Subscribe" title="You will receive a daily email with new content from our website." /></form> 
            
            <br class="clearer" />
		
		<?php }

		/* After widget (defined by themes). */
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['feedburner'] = strip_tags( $new_instance['feedburner'] );
	
		return $instance;
	}
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Subscribe Via Email', 'feedburner' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:160px" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feedburner' ); ?>">Feedburner Feed Name:</label>
			<input id="<?php echo $this->get_field_id( 'feedburner' ); ?>" name="<?php echo $this->get_field_name( 'feedburner' ); ?>" value="<?php echo $instance['feedburner']; ?>" style="width:160px" />
		</p>
        
        <p><a href="http://netprofitstoday.com/blog/how-to-find-your-feedburner-id/" target="_blank">How to find your Feed Name &raquo;</a></p>
        
        <?php
	}
}

?>