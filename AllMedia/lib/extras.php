<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

function short_title($num) {
 
$limit = $num+1;
 
$content = str_split(get_the_title());
 
$length = count($content);
 
if ($length>=$num) {
 
$content = array_slice( $content, 0, $num);
 
$content = implode("",$content)."...";
 
echo '<p>'.$content.'</p>' ;
 
} else {
 
the_title();
 
}
 
}

function short_content($num) {
 
$limit = $num+1;
 
$content = str_split(get_the_content());
 
$length = count($content);
 
if ($length>=$num) {
 
$content = array_slice( $content, 0, $num);
 
$content = implode("",$content)."...";
 
echo '<p>'.$content.'</p>' ;
 
} else {
 
the_content();
 
}
 
}
