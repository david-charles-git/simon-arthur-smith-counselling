<?php
  if (!defined('ABSPATH')) exit;

  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => 'Main Navigation',
      'menu_title' => 'Main Navigation',
      'menu_slug' => 'main-navigation',
      'icon_url' => 'dashicons-admin-generic',
      'redirect' => false,
    ));
  }

  if (function_exists('register_field_group')) {
    include_once get_template_directory() . '/acf/modules/main-navigation.php';

    register_field_group(
      array(
        'id'     => 'acf_main_navigation',
        'title'  => 'Main Navigation',
        'fields' => array(
          array(
            'key' => 'instructions',
            'label' => 'Instructions',
            'name' => 'instructions',
            'type' => 'message',
            'message' => 'Please fill out the fields below with the required information. Make sure to double-check your entries before saving.',
          ),
          $main_navigation
        ),
        'location' => array(
          array(
            array(
              'param'    => 'options_page',
              'operator' => '==',
              'value'    => 'main-navigation'
            )
          ),
        ),
        'options' => array(
          'position'       => 'normal',
          'layout'         => 'no_box',
          'hide_on_screen' => array(),
          "show_in_rest" => true
        ),
        'menu_order' => 0
      ),
    );
  }
?>