<?php
  if (!defined('ABSPATH')) exit;

  $spacer = array(
    'label' => 'Spacer',
    'name' => 'spacer',
    'display' => 'block',
    'sub_fields' => array(
      //custom_class
      array(
        'key' => 'field_Spacer_1',
        'label' => 'Custom Class',
        'name' => 'custom_class',
        'type' => 'text',
        'column_width' => '50%',
        'prepend' => '.',
        'formatting' => 'html',
      ),
      //size
      array(
        'key' => 'field_Spacer_2',
        'label' => 'Type',
        'name' => 'type',
        'type' => 'select',
        'column_width' => '50%',
        'choices' => array(
          'small' => 'Small',
          'medium' => 'Medium',
          'large' => 'Large',
        ),
        'default_value' => 'small',
        'allow_null' => 0,
        'multiple' => 0,
      )
    ),
  );
?>