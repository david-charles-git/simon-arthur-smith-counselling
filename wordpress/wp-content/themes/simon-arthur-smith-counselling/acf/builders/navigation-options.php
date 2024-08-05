<?php
  if (!defined('ABSPATH')) exit;

  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => 'Navigation',
      'menu_title' => 'Navigation',
      'menu_slug' => 'navigation',
      'icon_url' => 'dashicons-menu-alt3',
      'redirect' => false,
    ));
  }

  if (function_exists('register_field_group')) {
    include_once get_template_directory() . '/acf/modules/main-navigation.php';
    include_once get_template_directory() . '/acf/modules/footer-navigation.php';

    register_field_group(
      array(
        'id'     => 'acf_main_navigation',
        'title'  => 'Main Navigation',
        'fields' => array(
          array(
            'key' => 'main_navigation_instructions',
            'label' => 'Instructions',
            'name' => 'main_navigation_instructions',
            'type' => 'message',
            'message' => 'Navigation Instructions',
          ),
          $main_navigation,
          $footer_navigation
        ),
        'location' => array(
          array(
            array(
              'param'    => 'options_page',
              'operator' => '==',
              'value'    => 'navigation'
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