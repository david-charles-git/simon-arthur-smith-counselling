<?php
  if (!defined('ABSPATH')) exit;

  $contact_form = array(
    'label' => 'Contact Form',
    'name' => 'contact_form',
    'display' => 'block',
    'sub_fields' => array(
      //custom_class
      array(
        'key' => 'field_contactForm_1',
        'label' => 'Custom Class',
        'name' => 'custom_class',
        'type' => 'text',
        'column_width' => '50%',
        'prepend' => '.',
        'formatting' => 'html',
      ),
      //title
      array(
        'key' => 'field_contactForm_2',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
      ),
    ),
  );

?>