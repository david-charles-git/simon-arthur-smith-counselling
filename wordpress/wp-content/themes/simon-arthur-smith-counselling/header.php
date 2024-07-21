<?php
  if (!defined('ABSPATH')) {
    exit; 
  }

  $post_id = get_the_ID();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name='theme-color' content='#95BF3C' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="gXK7RVrH4kmds74x1qfHgUkHi6rG_eXFb_fQ-4_pNnc" />
    <meta rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png' type='image/png' />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
    </header>
