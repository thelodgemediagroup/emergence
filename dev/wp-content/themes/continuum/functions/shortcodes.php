<?php //SHORTCODES

//columns
function con_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'con_one_third');

function con_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_third_last', 'con_one_third_last');

function con_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'con_two_third');

function con_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_third_last', 'con_two_third_last');

function con_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'con_one_half');

function con_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_half_last', 'con_one_half_last');

function con_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'con_one_fourth');

function con_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_fourth_last', 'con_one_fourth_last');

function con_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'con_three_fourth');

function con_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_fourth_last', 'con_three_fourth_last');

function con_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'con_one_fifth');

function con_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_fifth_last', 'con_one_fifth_last');

function con_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fifth', 'con_two_fifth');

function con_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_fifth_last', 'con_two_fifth_last');

function con_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fifth', 'con_three_fifth');

function con_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_fifth_last', 'con_three_fifth_last');

function con_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_fifth', 'con_four_fifth');

function con_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('four_fifth_last', 'con_four_fifth_last');

function con_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'con_one_sixth');

function con_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_sixth_last', 'con_one_sixth_last');

function con_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixth', 'con_five_sixth');

function con_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('five_sixth_last', 'con_five_sixth_last');

//buttons
function con_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'	=> '#',
    'target'	=> '',
    'variation'	=> '',
    'size'	=> '',
    'align'	=> '',
    ), $atts));

	$style = ($variation) ? ' '.$variation : '';
	$align = ($align) ? ' align'.$align : '';
	$size = ($size == 'large') ? ' large_button' : '';
	$target = ($target == 'blank') ? ' target="_blank"' : '';

	$out = '<a' .$target. ' class="button_link' .$style.$size.$align. '" href="' .$link. '"><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'con_button');

//dropcap
function con_dropcap($atts, $content = null) {
	return '<div class="dropcap adelle">'.do_shortcode($content).'</div>';
}
add_shortcode('dropcap', 'con_dropcap');

//divider
function con_divider($atts, $content = null) {
	return '<div class="divider">&nbsp;</div>';
}
add_shortcode('divider', 'con_divider');

//fancy list
function con_fancylist($atts, $content = null) {
	return '<div class="fancylist">'.do_shortcode($content).'</div>';
}
add_shortcode('fancylist', 'con_fancylist');

//arrow list
function con_arrowlist($atts, $content = null) {
	return '<div class="arrowlist">'.do_shortcode($content).'</div>';
}
add_shortcode('arrowlist', 'con_arrowlist');

//check list
function con_checklist($atts, $content = null) {
	return '<div class="checklist">'.do_shortcode($content).'</div>';
}
add_shortcode('checklist', 'con_checklist');

//star list
function con_starlist($atts, $content = null) {
	return '<div class="starlist">'.do_shortcode($content).'</div>';
}
add_shortcode('starlist', 'con_starlist');

//plus list
function con_pluslist($atts, $content = null) {
	return '<div class="pluslist">'.do_shortcode($content).'</div>';
}
add_shortcode('pluslist', 'con_pluslist');

//heart list
function con_heartlist($atts, $content = null) {
	return '<div class="heartlist">'.do_shortcode($content).'</div>';
}
add_shortcode('heartlist', 'con_heartlist');

//info list
function con_infolist($atts, $content = null) {
	return '<div class="infolist">'.do_shortcode($content).'</div>';
}
add_shortcode('infolist', 'con_infolist');

//signoff
function con_signoff() {
	//get theme options
	global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
	$con_front = get_option( 'con_front', $con_front );
	$con_layout = get_option( 'con_layout', $con_layout );
	$con_feed = get_option( 'con_feed', $con_feed );
	$con_reviews = get_option( 'con_reviews', $con_reviews );
	$con_ads = get_option( 'con_ads', $con_ads );
	$con_misc = get_option( 'con_misc', $con_misc );
	
	//set theme options
	$con_signoff_text = $con_misc['signoff_text'];
	
    return '<br class="clearer" /><div class="signoff-wrapper"><div class="signoff">'.$con_signoff_text.'</div></div>';
}
add_shortcode('signoff', 'con_signoff');

//quote
function con_quote($atts, $content = null) {
	return '<div class="quote-wrapper"><div class="quote">'.do_shortcode($content).'</div></div>';
}
add_shortcode('quote', 'con_quote');

//pullquotes
function con_pullquote_left($atts, $content = null) {
	return '<div class="pullquote-wrapper left"><div class="pullquote adelle">'.do_shortcode($content).'</div></div>';
}
add_shortcode('pullquote_left', 'con_pullquote_left');
function con_pullquote_right($atts, $content = null) {
	return '<div class="pullquote-wrapper right"><div class="pullquote adelle">'.do_shortcode($content).'</div></div>';
}
add_shortcode('pullquote_right', 'con_pullquote_right');

//plain boxes
function con_box_light($atts, $content = null) {
	return '<div class="box-wrapper-light"><div class="box-light">'.do_shortcode($content).'</div></div>';
}
add_shortcode('box_light', 'con_box_light');
function con_box_dark($atts, $content = null) {
	return '<div class="box-wrapper-dark"><div class="box-dark">'.do_shortcode($content).'</div></div>';
}
add_shortcode('box_dark', 'con_box_dark');

//jquery toggle
function con_toggle_simple($atts, $content = null) {
	extract(shortcode_atts(array(
    'title'	=> '',
	'width' => ''
    ), $atts));
	return '<h4 class="toggle">'.$title.'</h4><div class="toggle-content" style="width:'.$width.'px;">'.do_shortcode($content).'</div>';
}
add_shortcode('toggle_simple', 'con_toggle_simple');
function con_toggle_box($atts, $content = null) {
	extract(shortcode_atts(array(
    'title'	=> '',
	'width' => ''
    ), $atts));
	return '<div class="toggle-box-wrapper"><div class="toggle-box"><h4 class="toggle">'.$title.'</h4><div class="toggle-content" style="width:'.$width.'px;">'.do_shortcode($content).'</div></div></div>';
}
add_shortcode('toggle_box', 'con_toggle_box');

/*
* jQuery Tools - Tabs shortcode
*/
add_shortcode( 'tabgroup', 'con_tab_group' );
function con_tab_group( $atts, $content ){
	$GLOBALS['tab_count'] = 0;	
	do_shortcode( $content );
	$tabcount=0;
	if( is_array( $GLOBALS['tabs'] ) ){		
		foreach( $GLOBALS['tabs'] as $tab ){
			$tabcount++;
			$tabs[] = '<li><a href="#'.$tabcount.'">'.$tab['title'].'</a></li>';
			$panes[] = '<div id="'.$tabcount.'" class="tabdiv"><h3>'.$tab['title'].'</h3>'.do_shortcode($tab['content']).'</div>';
		}
		$return = '<!-- the tabs --><div class="tabs-shortcode"><ul class="tabnav">'.implode( "\n", $tabs ).'</ul><div class="tabdiv-wrapper">'.implode( "\n", $panes ).'</div></div>';
	}
	return $return;
}

add_shortcode( 'tab', 'con_tab' );
function con_tab( $atts, $content ){
extract(shortcode_atts(array(
'title' => 'Tab %d'
), $atts));

$x = $GLOBALS['tab_count'];
$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );

$GLOBALS['tab_count']++;
}

?>