<?php
  if (!defined('ABSPATH')) exit; 

  if (function_exists("register_field_group")) {
    include_once get_template_directory() . '/acf/modules/spacer.php';
    include_once get_template_directory() . '/acf/modules/content.php';
    include_once get_template_directory() . '/acf/modules/hero-banner.php';
    include_once get_template_directory() . '/acf/modules/contact-form.php';
    
    $layouts = array(
      $spacer,
      $content,
      $hero_banners,
      $contact_form,
    );

    register_field_group(
      array(
        'id' => 'acf_pageBuilder',
        'title' => 'Page Builder',
        'fields' => array(
          array(
            'key' => 'pageBuilder_instructions',
            'label' => 'Instructions',
            'name' => 'pageBuilder_instructions',
            'type' => 'message',
            'message' => 'Page Builder Instructions',
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