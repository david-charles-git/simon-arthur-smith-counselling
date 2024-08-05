<?php
  if (!defined('ABSPATH')) exit;

  $footer_navigation = array (
    'key' => 'field_FooterNavigation_group',
    'label' => 'Footer Navigation Group',
    'name' => 'FooterNavigation_Group',
    'type' => 'group',
    'sub_fields' => array (
      //home image
      array(
        'key' => 'field_FooterNavigation_1',
        'label' => 'Home Image',
        'name' => 'image',
        'type' => 'image',
        'column_width' => '100%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      //Email label
      array(
        'key' => 'field_FooterNavigation_2',
        'label' => 'Email Label',
        'name' => 'email_label',
        'type' => 'text',
        'column_width' => '25%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //Email Address
      array(
        'key' => 'field_FooterNavigation_3',
        'label' => 'Email Address',
        'name' => 'email_address',
        'type' => 'text',
        'column_width' => '25%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //Phone number label
      array(
        'key' => 'field_FooterNavigation_4',
        'label' => 'Phone Number Label',
        'name' => 'phone_number_label',
        'type' => 'text',
        'column_width' => '25%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //Phone number
      array(
        'key' => 'field_FooterNavigation_5',
        'label' => 'Phone Number',
        'name' => 'phone_number',
        'type' => 'text',
        'column_width' => '25%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //Address label
      array(
        'key' => 'field_FooterNavigation_6',
        'label' => 'Address Label',
        'name' => 'address_label',
        'type' => 'text',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //Address url
      array(
        'key' => 'field_FooterNavigation_7',
        'label' => 'Address URL',
        'name' => 'address_url',
        'type' => 'text',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
      //terms items
      array(
        'key' => 'field_FooterNavigation_8',
        'label' => 'Terms Items',
        'name' => 'terms_items',
        'type' => 'repeater',
        'sub_fields' => array(
          //terms label
          array(
            'key' => 'field_FooterNavigation_8-1',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
            'new_lines' => 'br',
          ),
          //terms url
          array(
            'key' => 'field_FooterNavigation_8-2',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
            'new_lines' => 'br',
          ),
          //opens in new tab
          array(
            'key' => 'field_FooterNavigation_8-3',
            'label' => 'Opens In New Tab?',
            'name' => 'opens_in_new_tab',
            'type' => 'true_false',
            'column_width' => '20%',
            'default_value' => 0
          )
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add Terms Item'
      ),
      //navigation items
      array(
        'key' => 'field_FooterNavigation_9',
        'label' => 'Navigation Items',
        'name' => 'navigation_items',
        'type' => 'repeater',
        'sub_fields' => array(
          //navigation label
          array(
            'key' => 'field_FooterNavigation_9-1',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'column_width' => '50%',
            'formatting' => 'html',
            'new_lines' => 'br',
          ),
          //navigation url
          array(
            'key' => 'field_FooterNavigation_9-2',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '50%',
            'formatting' => 'html',
            'new_lines' => 'br',
          )
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add Navigation Item'
      ),
      //associated bodies images
      array(
        'key' => 'field_FooterNavigation_10',
        'label' => 'Associated Bodies',
        'name' => 'associated_bodies',
        'type' => 'repeater',
        'sub_fields' => array(
          //associated body image
          array(
            'key' => 'field_FooterNavigation_10-1',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '50%',
            'save_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          //associated body url
          array(
            'key' => 'field_FooterNavigation_10-2',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '50%',
            'formatting' => 'html',
            'new_lines' => 'br',
          )
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add Associated Body'
      ),
    ),
  );
?>