<?php
if (!defined('ABSPATH')) {
  exit; 
}

if (function_exists("register_field_group")) {
  include_once get_template_directory() . '/acf/modules/hero_banners.php';
  
  $layouts = array(
    $hero_banners
  );

  register_field_group(
    array(
      'id' => 'acf_pageBuilder',
      'title' => 'Page Builder',
      'fields' => array(
        array(
          'key' => 'pageBuilder00-pp',
          'label' => 'Page Builder - pp',
          'name' => 'pageBuilder-pp',
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