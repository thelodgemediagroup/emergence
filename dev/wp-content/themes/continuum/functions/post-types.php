<?php 
//get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc );
	
//determine which custom post types to enable from theme options page
$con_posttype_enable_movies = $con_reviews['posttype_enable_movies'];
$con_posttype_enable_music = $con_reviews['posttype_enable_music'];
$con_posttype_enable_games = $con_reviews['posttype_enable_games'];
$con_posttype_enable_books = $con_reviews['posttype_enable_books'];
$con_posttype_enable_products = $con_reviews['posttype_enable_products'];

//##########################################
//create custom post type of Movie Reviews
//##########################################
if($con_posttype_enable_movies) {
	function create_con_movie_reviews() {
		register_post_type( 'con_movie_reviews',
			array(
				'labels' => array(
					'name' => __( 'Movie Reviews' , 'continuum'),
					'singular_name' => __( 'Movie Review' , 'continuum'),
					'add_new' => __('Add new review', 'continuum'),
					'edit_item' => __('Edit review', 'continuum'),
					'new_item' => __('New review', 'continuum'),
					'view_item' => __('View review', 'continuum'),
					'search_items' => __('Search reviews', 'continuum'),
					'not_found' => __('No reviews found', 'continuum'),
					'not_found_in_trash' => __('No reviews found in Trash', 'continuum')
				),
				'public' => true,
				'menu_position' => 25,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/review-movie.png',
				'rewrite' => array('slug' => 'movie-review'),
				'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions'),
				'taxonomies' => array('category', 'post_tag')
			)
		);
	}
	add_action( 'init', 'create_con_movie_reviews' );
	
	//genre taxonomy for the Movie Review post type
	function movie_genre() {
	   register_taxonomy(
		'movie_genre',
		'con_movie_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'query_var' => true,
			'rewrite' => array('slug' => 'movie-genre')
		)
	);
	}
	add_action( 'init', 'movie_genre' );
	
	//director taxonomy for the Movie Review post type
	function movie_director() {
	   register_taxonomy(
		'movie_director',
		'con_movie_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Director',
			'query_var' => true,
			'rewrite' => array('slug' => 'movie-director')
		)
	);
	}
	add_action( 'init', 'movie_director' );
	
	//actor taxonomy for the Movie Review post type
	function movie_actor() {
	   register_taxonomy(
		'movie_actor',
		'con_movie_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Actor',
			'query_var' => true,
			'rewrite' => array('slug' => 'movie-actor')
		)
	);
	}
	add_action( 'init', 'movie_actor' );
}

//##########################################
//create custom post type of Music Reviews
//##########################################

if($con_posttype_enable_music) {
	function create_con_music_reviews() {
		register_post_type( 'con_music_reviews',
			array(
				'labels' => array(
					'name' => __( 'Music Reviews', 'continuum' ),
					'singular_name' => __( 'Music Review', 'continuum' ),
					'add_new' => __('Add new review', 'continuum'),
					'edit_item' => __('Edit review', 'continuum'),
					'new_item' => __('New review', 'continuum'),
					'view_item' => __('View review', 'continuum'),
					'search_items' => __('Search reviews', 'continuum'),
					'not_found' => __('No reviews found', 'continuum'),
					'not_found_in_trash' => __('No reviews found in Trash', 'continuum')
				),
				'public' => true,
				'menu_position' => 26,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/review-music.png',
				'rewrite' => array('slug' => 'music-review'),
				'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions'),
				'taxonomies' => array('category', 'post_tag')
			)
		);
	}
	add_action( 'init', 'create_con_music_reviews' );
	
	//artist taxonomy for the Music Review post type
	function music_artist() {
	   register_taxonomy(
		'music_artist',
		'con_music_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Artist',
			'query_var' => true,
			'rewrite' => array('slug' => 'music-artist')
		)
	);
	}
	add_action( 'init', 'music_artist' );
	
	//genre taxonomy for the Music Review post type
	function music_genre() {
	   register_taxonomy(
		'music_genre',
		'con_music_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'query_var' => true,
			'rewrite' => array('slug' => 'music-genre')
		)
	);
	}
	add_action( 'init', 'music_genre' );
	
	//type taxonomy for the Music Review post type
	function music_type() {
	   register_taxonomy(
		'music_type',
		'con_music_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Type',
			'query_var' => true,
			'rewrite' => array('slug' => 'music-type')
		)
	);
	}
	add_action( 'init', 'music_type' );
	
}

//##########################################
//create custom post type of Video Game Reviews
//##########################################

if($con_posttype_enable_games) {
	function create_con_game_reviews() {
		register_post_type( 'con_game_reviews',
			array(
				'labels' => array(
					'name' => __( 'Game Reviews', 'continuum' ),
					'singular_name' => __( 'Video Game Review', 'continuum' ),
					'add_new' => __('Add new review', 'continuum'),
					'edit_item' => __('Edit review', 'continuum'),
					'new_item' => __('New review', 'continuum'),
					'view_item' => __('View review', 'continuum'),
					'search_items' => __('Search reviews', 'continuum'),
					'not_found' => __('No reviews found', 'continuum'),
					'not_found_in_trash' => __('No reviews found in Trash', 'continuum')
				),
				'public' => true,
				'menu_position' => 27,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/review-game.png',
				'rewrite' => array('slug' => 'video-game-review'),
				'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions'),
				'taxonomies' => array('category', 'post_tag')
			)
		);
	}
	add_action( 'init', 'create_con_game_reviews' );
	
	//genre taxonomy for the Video Game Review post type
	function game_genre() {
	   register_taxonomy(
		'game_genre',
		'con_game_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'query_var' => true,
			'rewrite' => array('slug' => 'game-genre')
		)
	);
	}
	add_action( 'init', 'game_genre' );
	
	//platform taxonomy for the Video Game Review post type
	function game_platform() {
	   register_taxonomy(
		'game_platform',
		'con_game_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Platform',
			'query_var' => true,
			'rewrite' => array('slug' => 'game-platform')
		)
	);
	}
	add_action( 'init', 'game_platform' );
	
	//developer taxonomy for the Video Game Review post type
	function game_developer() {
	   register_taxonomy(
		'game_developer',
		'con_game_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Developer',
			'query_var' => true,
			'rewrite' => array('slug' => 'game-developer')
		)
	);
	}
	add_action( 'init', 'game_developer' );
}

//##########################################
//create custom post type of Book Reviews
//##########################################

if($con_posttype_enable_books) {
	function create_con_book_reviews() {
		register_post_type( 'con_book_reviews',
			array(
				'labels' => array(
					'name' => __( 'Book Reviews', 'continuum' ),
					'singular_name' => __( 'Book Review', 'continuum' ),
					'add_new' => __('Add new review', 'continuum'),
					'edit_item' => __('Edit review', 'continuum'),
					'new_item' => __('New review', 'continuum'),
					'view_item' => __('View review', 'continuum'),
					'search_items' => __('Search reviews', 'continuum'),
					'not_found' => __('No reviews found', 'continuum'),
					'not_found_in_trash' => __('No reviews found in Trash', 'continuum')
				),
				'public' => true,
				'menu_position' => 28,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/review-book.png',
				'rewrite' => array('slug' => 'book-review'),
				'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions'),
				'taxonomies' => array('category', 'post_tag')
			)
		);
	}
	add_action( 'init', 'create_con_book_reviews' );
	
	//author taxonomy for the Book Review post type
	function book_author() {
	   register_taxonomy(
		'book_author',
		'con_book_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Author',
			'query_var' => true,
			'rewrite' => array('slug' => 'book-author')
		)
	);
	}
	add_action( 'init', 'book_author' );
	
	//genre taxonomy for the Book Review post type
	function book_genre() {
	   register_taxonomy(
		'book_genre',
		'con_book_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'query_var' => true,
			'rewrite' => array('slug' => 'book-genre')
		)
	);
	}
	add_action( 'init', 'book_genre' );
	
	//publisher taxonomy for the Book Review post type
	function book_publisher() {
	   register_taxonomy(
		'book_publisher',
		'con_book_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Publisher',
			'query_var' => true,
			'rewrite' => array('slug' => 'book-publisher')
		)
	);
	}
	add_action( 'init', 'book_publisher' );
}

//##########################################
//create custom post type of Product Reviews
//##########################################

if($con_posttype_enable_products) {
	function create_con_product_reviews() {
		register_post_type( 'con_product_reviews',
			array(
				'labels' => array(
					'name' => __( 'Prod. Reviews', 'continuum' ),
					'singular_name' => __( 'Product Review', 'continuum' ),
					'add_new' => __('Add new review', 'continuum'),
					'edit_item' => __('Edit review', 'continuum'),
					'new_item' => __('New review', 'continuum'),
					'view_item' => __('View review', 'continuum'),
					'search_items' => __('Search reviews', 'continuum'),
					'not_found' => __('No reviews found', 'continuum'),
					'not_found_in_trash' => __('No reviews found in Trash', 'continuum')
				),
				'public' => true,
				'menu_position' => 29,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/review-product.png',
				'rewrite' => array('slug' => 'product-review'),
				'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions'),
				'taxonomies' => array('category', 'post_tag')
			)
		);
	}
	add_action( 'init', 'create_con_product_reviews' );
	
	//product category taxonomy for the Product Review post type
	function product_category() {
	   register_taxonomy(
		'product_category',
		'con_product_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Product Category',
			'query_var' => true,
			'rewrite' => array('slug' => 'product-category')
		)
	);
	}
	add_action( 'init', 'product_category' );
	
	//price taxonomy for the Product Review post type
	function product_price() {
	   register_taxonomy(
		'product_price',
		'con_product_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Price',
			'query_var' => true,
			'rewrite' => array('slug' => 'product-price')
		)
	);
	}
	add_action( 'init', 'product_price' );
	
	
	//brand for the Product Review post type
	function product_brand() {
	   register_taxonomy(
		'product_brand',
		'con_product_reviews',
		array(
			'hierarchical' => true,
			'label' => 'Brand',
			'query_var' => true,
			'rewrite' => array('slug' => 'product-brand')
		)
	);
	}
	add_action( 'init', 'product_brand' );
}

?>