<?php //load template actions

//get breaking panel
function con_get_breaking() {
do_action( 'con_get_breaking' );
if ( file_exists( TEMPLATEPATH . '/inc/breaking.php') )
	load_template( TEMPLATEPATH . '/inc/breaking.php');
}

//get spotlight panel
function con_get_spotlight() {
do_action( 'con_get_spotlight' );
if ( file_exists( TEMPLATEPATH . '/inc/spotlight.php') )
	load_template( TEMPLATEPATH . '/inc/spotlight.php');
}

//get the latest panel
function con_get_latest() {
do_action( 'con_get_latest' );
if ( file_exists( TEMPLATEPATH . '/inc/latest.php') )
	load_template( TEMPLATEPATH . '/inc/latest.php');
}

//get the feed panel
function con_get_feed() {
do_action( 'con_get_feed' );
if ( file_exists( TEMPLATEPATH . '/inc/feed.php') )
	load_template( TEMPLATEPATH . '/inc/feed.php');
}

//get the feed panel for movie review pages
function con_get_feed_movie_review() {
do_action( 'con_get_feed_movie_review' );
if ( file_exists( TEMPLATEPATH . '/inc/feed-movie-review.php') )
	load_template( TEMPLATEPATH . '/inc/feed-movie-review.php');
}

//get the feed panel for music review pages
function con_get_feed_music_review() {
do_action( 'con_get_feed_music_review' );
if ( file_exists( TEMPLATEPATH . '/inc/feed-music-review.php') )
	load_template( TEMPLATEPATH . '/inc/feed-music-review.php');
}

//get the feed panel for game review pages
function con_get_feed_game_review() {
do_action( 'con_get_feed_game_review' );
if ( file_exists( TEMPLATEPATH . '/inc/feed-game-review.php') )
	load_template( TEMPLATEPATH . '/inc/feed-game-review.php');
}

//get the feed panel for book review pages
function con_get_feed_book_review() {
do_action( 'con_get_feed_book_review' );
if ( file_exists( TEMPLATEPATH . '/inc/feed-book-review.php') )
	load_template( TEMPLATEPATH . '/inc/feed-book-review.php');
}

//get the feed panel for product review pages
function con_get_feed_product_review() {
do_action( 'con_get_feed_product_review' );
if ( file_exists( TEMPLATEPATH . '/inc/feed-product-review.php') )
	load_template( TEMPLATEPATH . '/inc/feed-product-review.php');
}

//get category listing
function con_get_category() {
do_action( 'con_get_category' );
if ( file_exists( TEMPLATEPATH . '/inc/category.php') )
	load_template( TEMPLATEPATH . '/inc/category.php');
}

//get archive listing
function con_get_archive() {
do_action( 'con_get_archive' );
if ( file_exists( TEMPLATEPATH . '/inc/archive.php') )
	load_template( TEMPLATEPATH . '/inc/archive.php');
}

//get search results
function con_get_search() {
do_action( 'con_get_search' );
if ( file_exists( TEMPLATEPATH . '/inc/search.php') )
	load_template( TEMPLATEPATH . '/inc/search.php');
}

//get movie reviews listing
function con_get_movie_review() {
do_action( 'con_get_movie_review' );
if ( file_exists( TEMPLATEPATH . '/inc/movie-review.php') )
	load_template( TEMPLATEPATH . '/inc/movie-review.php');
}

//get music reviews listing
function con_get_music_review() {
do_action( 'con_get_music_review' );
if ( file_exists( TEMPLATEPATH . '/inc/music-review.php') )
	load_template( TEMPLATEPATH . '/inc/music-review.php');
}

//get video game reviews listing
function con_get_game_review() {
do_action( 'con_get_game_review' );
if ( file_exists( TEMPLATEPATH . '/inc/game-review.php') )
	load_template( TEMPLATEPATH . '/inc/game-review.php');
}

//get book reviews listing
function con_get_book_review() {
do_action( 'con_get_book_review' );
if ( file_exists( TEMPLATEPATH . '/inc/book-review.php') )
	load_template( TEMPLATEPATH . '/inc/book-review.php');
}

//get product reviews listing
function con_get_product_review() {
do_action( 'con_get_product_review' );
if ( file_exists( TEMPLATEPATH . '/inc/product-review.php') )
	load_template( TEMPLATEPATH . '/inc/product-review.php');
}

//get movie genre taxonomy listing
function con_get_movie_genre() {
do_action( 'con_get_movie_genre' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-movie-genre.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-movie-genre.php');
}

//get movie director taxonomy listing
function con_get_movie_director() {
do_action( 'con_get_movie_director' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-movie-director.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-movie-director.php');
}

//get movie actor taxonomy listing
function con_get_movie_actor() {
do_action( 'con_get_movie_actor' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-movie-actor.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-movie-actor.php');
}

//get music genre taxonomy listing
function con_get_music_genre() {
do_action( 'con_get_music_genre' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-music-genre.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-music-genre.php');
}

//get music artist taxonomy listing
function con_get_music_artist() {
do_action( 'con_get_music_artist' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-music-artist.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-music-artist.php');
}

//get music type taxonomy listing
function con_get_music_type() {
do_action( 'con_get_music_type' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-music-type.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-music-type.php');
}

//get game genre taxonomy listing
function con_get_game_genre() {
do_action( 'con_get_game_genre' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-game-genre.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-game-genre.php');
}

//get game platform taxonomy listing
function con_get_game_platform() {
do_action( 'con_get_game_platform' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-game-platform.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-game-platform.php');
}

//get game developer taxonomy listing
function con_get_game_developer() {
do_action( 'con_get_game_developer' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-game-developer.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-game-developer.php');
}

//get book author taxonomy listing
function con_get_book_author() {
do_action( 'con_get_book_author' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-book-author.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-book-author.php');
}

//get book genre taxonomy listing
function con_get_book_genre() {
do_action( 'con_get_book_genre' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-book-genre.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-book-genre.php');
}

//get book publisher taxonomy listing
function con_get_book_publisher() {
do_action( 'con_get_book_publisher' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-book-publisher.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-book-publisher.php');
}

//get product category taxonomy listing
function con_get_product_category() {
do_action( 'con_get_product_category' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-product-category.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-product-category.php');
}

//get product brand taxonomy listing
function con_get_product_brand() {
do_action( 'con_get_product_brand' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-product-brand.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-product-brand.php');
}

//get product price taxonomy listing
function con_get_product_price() {
do_action( 'con_get_product_price' );
if ( file_exists( TEMPLATEPATH . '/inc/taxonomy-product-price.php') )
	load_template( TEMPLATEPATH . '/inc/taxonomy-product-price.php');
}

//get sharebox
if (!function_exists('con_get_sharebox'))
{
	function con_get_sharebox() {
	do_action( 'con_get_sharebox' );
	if ( file_exists( TEMPLATEPATH . '/inc/sharebox.php') )
		load_template( TEMPLATEPATH . '/inc/sharebox.php');
	}
}

//get social links
function con_get_social() {
do_action( 'con_get_social' );
if ( file_exists( TEMPLATEPATH . '/inc/social.php') )
	load_template( TEMPLATEPATH . '/inc/social.php');
}

//get comments
function con_get_comments() {
do_action( 'con_get_comments' );
if ( file_exists( TEMPLATEPATH . '/inc/con-comments.php') )
	load_template( TEMPLATEPATH . '/inc/con-comments.php');
}

?>