<?php
  if (!defined('ABSPATH')) exit;

  $main_navigation = array (
    'key' => 'field_MainNavigation_group',
    'label' => 'Main Navigation Group',
    'name' => 'MainNavigation_Group',
    'type' => 'group',
    'sub_fields' => array (
      //home image
      array(
        'key' => 'field_MainNavigation_1',
        'label' => 'Home Image',
        'name' => 'image',
        'type' => 'image',
        'column_width' => '100%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      //navigation items
      array(
        'key' => 'field_MainNavigation_2',
        'label' => 'Navigation Items',
        'name' => 'navigation_items',
        'type' => 'repeater',
        'sub_fields' => array(
          //navigation label
          array(
            'key' => 'field_MainNavigation_2-1',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
            'new_lines' => 'br',
          ),
          //navigation url
          array(
            'key' => 'field_MainNavigation_2-2',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
            'new_lines' => 'br',
          ),
          //has sub navigation
          array(
            'key' => 'field_MainNavigation_2-3',
            'label' => 'Include Sub-navigation?',
            'name' => 'has_sub_navigation',
            'type' => 'true_false',
            'column_width' => '20%',
            'default_value' => 0
          ),
          //sub navigation
          array(
            'key' => 'field_MainNavigation_2-4',
            'label' => 'Sub-Navigation Items',
            'name' => 'sub_navigation_items',
            'type' => 'repeater',
            'sub_fields' => array(
              //navigation label
              array(
                'key' => 'field_MainNavigation_2-4-1',
                'label' => 'Label',
                'name' => 'label',
                'type' => 'text',
                'column_width' => '50%',
                'formatting' => 'html',
                'new_lines' => 'br',
              ),
              //navigation url
              array(
                'key' => 'field_MainNavigation_2-4-2',
                'label' => 'URL',
                'name' => 'url',
                'type' => 'text',
                'column_width' => '50%',
                'formatting' => 'html',
                'new_lines' => 'br',
              ),
            ),
            'row_min' => '',
            'row_limit' => '',
            'layout' => 'block',
            'button_label' => 'Add Sub Navigation Item',
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_MainNavigation_2-3',
                  'operator' => '==',
                  'value' => 1,
                ),
              ),
            )
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add Navigation Item'
      ),
    ),
  );
?>