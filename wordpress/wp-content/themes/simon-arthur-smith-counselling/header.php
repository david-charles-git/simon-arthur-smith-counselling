<?php
  if (!defined('ABSPATH')) exit; 
  $recapture_site_key = '6LeT-h8qAAAAAO8g1S6ttM04JHy9vmwl4VKn_5gJ';
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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recapture_site_key; ?>"></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header id='header' class='fixed w-full z-50 duration-200 ease-in-out'>
      <?php include_once get_template_directory() . '/template-parts/main-navigation.php'; ?>
    </header>

    <?php include_once get_template_directory() . '/template-parts/breadcrumbs.php'; ?>
