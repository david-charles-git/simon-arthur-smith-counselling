<?php
  if (!defined('ABSPATH')) exit; 

  $theme_uri = get_template_directory_uri();

  function sas_theme_support() {
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'sas_theme_support');

  function sas_register_styles () {
    global $theme_uri;
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sas-main', $theme_uri  . '/assets/css/main.css', array(), $version, 'all');
  }
  add_action('wp_enqueue_scripts', 'sas_register_styles');

  function sas_register_scripts () {
    global $theme_uri;
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('sas-main', $theme_uri  . '/assets/js/main.js', array(), $version, true);
  }
  add_action('wp_enqueue_scripts', 'sas_register_scripts');

  function sas_allow_mime_types($mimes) {
    $mimes['svg']   = 'image/svg+xml';
    $mimes['webp']  = 'image/webp';

    return $mimes;
  }
  add_filter('mime_types', 'sas_allow_mime_types');

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
  add_filter('file_is_displayable_image', 'sas_webp_is_displayable', 10, 2);

  function sas_remove_content_editor() {
    remove_post_type_support( 'page', 'editor' );
  }
  add_action('admin_head', 'sas_remove_content_editor');

  function sas_ses_phpmailer_init( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'email-smtp.us-east-1.amazonaws.com'; // Change to your SES region
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587; // Can be 25, 465, or 587
    $phpmailer->Username   = 'YOUR_AWS_SES_SMTP_USERNAME';
    $phpmailer->Password   = 'YOUR_AWS_SES_SMTP_PASSWORD';
    $phpmailer->SMTPSecure = 'tls'; // Can be 'ssl' for Port 465

    // Optional settings
    $phpmailer->From       = 'your_verified_email@example.com';
    $phpmailer->FromName   = 'Your Name';
  }
  add_action( 'phpmailer_init', 'custom_phpmailer_init' );

  include_once get_template_directory() . '/acf/main.php';
  include_once get_template_directory() . '/template-functions/main.php';
?>