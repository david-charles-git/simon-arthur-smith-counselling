<?php
  if (!defined('ABSPATH')) exit; 

  if (function_exists("register_field_group")) {
    include_once get_template_directory() . '/acf/modules/hero-banner.php';
    
    $layouts = array(
      $hero_banners
    );

    register_field_group(
      array(
        'id' => 'acf_pageBuilder',
        'title' => 'Page Builder',
        'fields' => array(
          array(
            'key' => 'instructions',
            'label' => 'Instructions',
            'name' => 'instructions',
            'type' => 'message',
            'message' => 'Please fill out the fields below with the required information. Make sure to double-check your entries before saving.',
          ),
          array(
            'key' => 'pageBuilder',
            'label' => 'Page Builder',
            'name' => 'pageBuilder',
            'type' => 'flexible_content',
            'layouts' => $layouts
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'page',
            )
          ),
        ),
        'options' => array(
          'position' => 'normal',
          'layout' => 'no_box',
          'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
      )
    );
  }
?>