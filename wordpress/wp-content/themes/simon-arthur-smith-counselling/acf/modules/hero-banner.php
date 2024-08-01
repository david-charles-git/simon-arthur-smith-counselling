<?php
  if (!defined('ABSPATH')) exit;

  $hero_banners = array(
    'label' => 'Hero Banner',
    'name' => 'hero_banner',
    'display' => 'block',
    'sub_fields' => array(
      //custom_class
      array(
        'key' => 'field_HeroBanner_1',
        'label' => 'Custom Class',
        'name' => 'custom_class',
        'type' => 'text',
        'column_width' => '50%',
        'prepend' => '.',
        'formatting' => 'html',
      ),
      //type
      array(
        'key' => 'field_HeroBanner_2',
        'label' => 'Type',
        'name' => 'type',
        'type' => 'select',
        'column_width' => '50%',
        'choices' => array(
          'image' => 'Image',
          'video' => 'Video'
        ),
        'default_value' => 'image',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      //has_overlay
      array(
        'key' => 'field_HeroBanner_3',
        'label' => 'Include Overlay?',
        'name' => 'has_overlay',
        'type' => 'true_false',
        'column_width' => '60%',
        'message' => '',
        'default_value' => 1
      ),
      //overlay_opacity
      array(
        'key' => 'field_HeroBanner_4',
        'label' => 'Overlay Opacity',
        'name' => 'overlay_opacity',
        'type' => 'number',
        'column_width' => '40%',
        'default_value' => 0.3,
        'formatting' => 'html',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_3',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),
      //title
      array(
        'key' => 'field_HeroBanner_5',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //copy
      array(
        'key' => 'field_HeroBanner_6',
        'label' => 'Copy',
        'name' => 'copy',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //has_call_to_action
      array(
        'key' => 'field_HeroBanner_7',
        'label' => 'Include Call To Action?',
        'name' => 'has_call_to_action',
        'type' => 'true_false',
        'column_width' => '100%',
        'message' => '',
        'default_value' => 0
      ),
      //call_to_action_copy
      array(
        'key' => 'field_HeroBanner_8',
        'label' => 'Call To Action - Copy',
        'name' => 'call_to_action_copy',
        'type' => 'text',
        'column_width' => '40%',
        'formatting' => 'html',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_7',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),
      //call_to_action_link
      array(
        'key' => 'field_HeroBanner_9',
        'label' => 'Call To Action - Link',
        'name' => 'call_to_action_link',
        'type' => 'text',
        'column_width' => '40%',
        'formatting' => 'html',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_7',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),
      //call_to_action_open_in_new_tab
      array(
        'key' => 'field_HeroBanner_10',
        'label' => 'Call To Action - Opens In New Tab',
        'name' => 'call_to_action_open_in_new_tab',
        'type' => 'true_false',
        'column_width' => '20%',
        'default_value' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_7',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),

      /* Image */
      //image
      array(
        'key' => 'field_HeroBanner_11',
        'label' => 'Background Image',
        'name' => 'image',
        'type' => 'image',
        'column_width' => '100%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_2',
              'operator' => '==',
              'value' => 'image',
            ),
          ),
        )
      ),

      /* Video */
      //video
      array(
        'key' => 'field_HeroBanner_12',
        'label' => 'Background Video',
        'name' => 'video',
        'type' => 'file',
        'column_width' => '100%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner_2',
              'operator' => '==',
              'value' => 'video',
            ),
          ),
        )
      ),
    ),
  );
?>