<?php
  $hero_banners = array(
    'label' => 'Hero Banners',
    'name' => 'hero_banners',
    'display' => 'block',
    'sub_fields' => array(
      //hasCustomClass
      array(
        'key' => 'field_HeroBanner0-pp',
        'label' => 'Add Custom Class(es)',
        'name' => 'hasCustomClass',
        'type' => 'true_false',
        'column_width' => '50%',
        'default_value' => 0
      ),
      //customClass
      array(
        'key' => 'field_HeroBanner1-pp',
        'label' => 'Custom Class(es)',
        'name' => 'customClass',
        'type' => 'text',
        'column_width' => '50%',
        'prepend' => '.',
        'formatting' => 'html',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner0-pp',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),
      //type
      array(
        'key' => 'field_HeroBanner2-pp',
        'label' => 'Type',
        'name' => 'type',
        'type' => 'select',
        'column_width' => '100%',
        'choices' => array(
          'singleImage_slim' => 'Single Image - Slim',
          'singleVideo_slim' => 'Single Video - Slim'
        ),
        'default_value' => 'singleImage_slim',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      //hasBreadcrumbs
      array(
        'key' => 'field_HeroBanner3-pp',
        'label' => 'Include breadcrumbs?',
        'name' => 'hasBreadcrumbs',
        'type' => 'true_false',
        'column_width' => '40%',
        'default_value' => 0
      ),
      //hasOverlay
      array(
        'key' => 'field_HeroBanner4-pp',
        'label' => 'Include Overlay?',
        'name' => 'hasOverlay',
        'type' => 'true_false',
        'column_width' => '40%',
        'message' => '',
        'default_value' => 0
      ),
      //overlayOpacity
      array(
        'key' => 'field_HeroBanner5-pp',
        'label' => 'Overlay Opacity',
        'name' => 'overlayOpacity',
        'type' => 'number',
        'column_width' => '20%',
        'default_value' => 0.3,
        'formatting' => 'html',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner4-pp',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),

      /* Single Option Items */

      //titleDesktop
      array(
        'key' => 'field_HeroBanner6-pp',
        'label' => 'Title - Desktop',
        'name' => 'titleDesktop_single',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
      //titleMobile
      array(
        'key' => 'field_HeroBanner7-pp',
        'label' => 'Title - Mobile',
        'name' => 'titleMobile_single',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
      //copyDesktop
      array(
        'key' => 'field_HeroBanner8-pp',
        'label' => 'Copy - Desktop',
        'name' => 'copyDesktop_single',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
      //copyMobile
      array(
        'key' => 'field_HeroBanner9-pp',
        'label' => 'Copy - Mobile',
        'name' => 'copyMobile_single',
        'type' => 'textarea',
        'column_width' => '50%',
        'formatting' => 'html',
        'new_lines' => 'br',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
      //hasCTA
      array(
        'key' => 'field_HeroBanner10-pp',
        'label' => 'Include CTA(s)?',
        'name' => 'hasCTA_single',
        'type' => 'true_false',
        'column_width' => '100%',
        'message' => '',
        'default_value' => 0
      ),
      //CTARepeater
      array(
        'key' => 'field_HeroBanner11-pp',
        'label' => 'Add CTAs',
        'name' => 'CTARepeater_single',
        'type' => 'repeater',
        'sub_fields' => array(
          //CTACopy
          array(
            'key' => 'field_HeroBanner11a-pp',
            'label' => 'CTA - Copy',
            'name' => 'CTACopy',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
          ),
          //CTAHref
          array(
            'key' => 'field_HeroBanner11b-pp',
            'label' => 'CTA - Href',
            'name' => 'CTAHref',
            'type' => 'text',
            'column_width' => '40%',
            'formatting' => 'html',
          ),
          //CTAOpensInNewTab
          array(
            'key' => 'field_HeroBanner11c-pp',
            'label' => 'CTA - Opens In New Tab',
            'name' => 'CTAOpensInNewTab',
            'type' => 'true_false',
            'column_width' => '20%',
            'default_value' => 0
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'block',
        'button_label' => 'Add CTA',
        'conditional_logic' => array(
          array(
            //AND
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
            array(
              'field' => 'field_HeroBanner10-pp',
              'operator' => '==',
              'value' => 1,
            ),
          ),
          //OR
          array(
            //AND
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
            array(
              'field' => 'field_HeroBanner10-pp',
              'operator' => '==',
              'value' => 1,
            ),
          ),
        )
      ),

      /* Single Image - Slim */

      //imageDesktop
      array(
        'key' => 'field_HeroBanner12-pp',
        'label' => 'Image - Desktop',
        'name' => 'imageDesktop_singleImage',
        'type' => 'image',
        'column_width' => '50%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
        )
      ),
      //imageMobile
      array(
        'key' => 'field_HeroBanner13-pp',
        'label' => 'Image - Mobile',
        'name' => 'imageMobile_singleImage',
        'type' => 'image',
        'column_width' => '50%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleImage_slim',
            ),
          ),
        )
      ),

      /* Single Video - Slim */

      //videoDesktop
      array(
        'key' => 'field_HeroBanner14-pp',
        'label' => 'Video - Desktop',
        'name' => 'videoDesktop_singleVideo',
        'type' => 'file',
        'column_width' => '50%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
      //videoMobile
      array(
        'key' => 'field_HeroBanner15-pp',
        'label' => 'Video - Mobile',
        'name' => 'videoMobile_singleVideo',
        'type' => 'file',
        'column_width' => '50%',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_HeroBanner2-pp',
              'operator' => '==',
              'value' => 'singleVideo_slim',
            ),
          ),
        )
      ),
    ),
  );