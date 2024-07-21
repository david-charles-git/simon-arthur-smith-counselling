<?php
if (!defined('ABSPATH')) {
  exit; 
}

function sas_theme_support() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sas_theme_support');


function sas_register_styles () {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('sas-main', get_template_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'sas_register_styles');


function sas_register_scripts () {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('sas-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'sas_register_scripts');


function sas_allow_mime_types($mimes) {
	$mimes['svg']   = 'image/svg+xml';
	$mimes['webp']  = 'image/webp';

	return $mimes;
}
function sas_webp_is_displayable($result, $path) {
  if ($result === false) {
    $displayable_image_types = array(IMAGETYPE_WEBP);
    $info = @getimagesize($path);
    
    if (empty($info)) {
      $result = false;
    } elseif (!in_array($info[2], $displayable_image_types)) {
      $result = false;
    } else {
      $result = true;
    }
  }
  
  return $result;
}
add_filter('mime_types', 'sas_allow_mime_types');
add_filter('file_is_displayable_image', 'sas_webp_is_displayable', 10, 2);


include_once get_template_directory() . '/acf/main.php';
