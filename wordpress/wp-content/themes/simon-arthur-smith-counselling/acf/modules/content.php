<?php
  if (!defined('ABSPATH')) exit;

  $content = array(
    'label' => 'Content',
    'name' => 'content',
    'display' => 'block',
    'sub_fields' => array( 
      //custom_class
      array(
        'key' => 'field_Content_1',
        'label' => 'Custom Class',
        'name' => 'custom_class',
        'type' => 'text',
        'column_width' => '50%',
        'prepend' => '.',
        'formatting' => 'html',
      ),
      //type
      array(
        'key' => 'field_Content_2',
        'label' => 'Content Type',
        'name' => 'content_type',
        'type' => 'select',
        'column_width' => '50%',
        'choices' => array(
          'just_text' => 'Just Text',
          'text_and_image' => 'Text and Image',
          // 'text_and_video' => 'Text and Video'
        ),
        'default_value' => 'just_text',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      //title
      array(
        'key' => 'field_Content_3',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //title type
      array(
        'key' => 'field_Content_4',
        'label' => 'Title Type',
        'name' => 'title_type',
        'type' => 'select',
        'column_width' => '50%',
        'choices' => array(
          'h1' => 'H1',
          'h2' => 'H2',
          'h3' => 'H3',
          'h4' => 'H4',
          'h5' => 'H5',
          'h6' => 'H6'
        ),
        'default_value' => 'h2',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      //copy
      array(
        'key' => 'field_Content_5',
        'label' => 'Copy',
        'name' => 'copy',
        'type' => 'wysiwyg',
        'column_width' => '100%',
        'formatting' => 'html',
      ),
      //Call to actions
      array(
        'key' => 'field_Content_6',
        'label' => 'Call to actions',
        'name' => 'call_to_actions',
        'type' => 'repeater',
        'sub_fields' => array(
          //call_to_action_copy
          array(
            'key' => 'field_Content_6-1',
            'label' => 'Call To Action - Copy',
            'name' => 'call_to_action_copy',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
          ),
          //call_to_action_link
          array(
            'key' => 'field_Content_6-2',
            'label' => 'Call To Action - Link',
            'name' => 'call_to_action_link',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
          ),
          //call_to_action_open_in_new_tab
          array(
            'key' => 'field_Content_6-3',
            'label' => 'Call To Action - Opens In New Tab',
            'name' => 'call_to_action_open_in_new_tab',
            'type' => 'true_false',
            'column_width' => '20%',
            'default_value' => 0,
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add Call to Action'
      ),
      /* text_and_image */
      //type
      array(
        'key' => 'field_Content_7',
        'label' => 'Image Left or Right',
        'name' => 'image_side',
        'type' => 'select',
        'column_width' => '50%',
        'choices' => array(
          'left' => 'Left',
          'right' => 'Right'
        ),
        'default_value' => 'right',
        'allow_null' => 0,
        'multiple' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_Content_2',
              'operator' => '==',
              'value' => 'text_and_image',
            ),
          ),
        )
      ),
      //image
      array(
        'key' => 'field_Content_8',
        'label' => 'Image',
        'name' => 'image',
        'type' => 'image',
        'column_width' => '50%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_Content_2',
              'operator' => '==',
              'value' => 'text_and_image',
            ),
          ),
        )
      ),
      // /* text_and_video */
      // //type
      // array(
      //   'key' => 'field_Content_9',
      //   'label' => 'Video Left or Right',
      //   'name' => 'video_side',
      //   'type' => 'select',
      //   'column_width' => '50%',
      //   'choices' => array(
      //     'left' => 'Left',
      //     'right' => 'Right'
      //   ),
      //   'default_value' => 'right',
      //   'allow_null' => 0,
      //   'multiple' => 0,
      //   'conditional_logic' => array(
      //     array(
      //       array(
      //         'field' => 'field_Content_2',
      //         'operator' => '==',
      //         'value' => 'text_and_video',
      //       ),
      //     ),
      //   )
      // ),
      // //video
      // array(
      //   'key' => 'field_Content_10',
      //   'label' => 'Video',
      //   'name' => 'video',
      //   'type' => 'file',
      //   'column_width' => '50%',
      //   'save_format' => 'url',
      //   'preview_size' => 'thumbnail',
      //   'library' => 'all',
      //   'conditional_logic' => array(
      //     array(
      //       array(
      //         'field' => 'field_Content_2',
      //         'operator' => '==',
      //         'value' => 'text_and_video',
      //       ),
      //     ),
      //   )
      // ),
    ),
  );
?>