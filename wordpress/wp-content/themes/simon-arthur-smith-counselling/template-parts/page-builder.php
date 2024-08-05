<?php
  if (!defined('ABSPATH')) exit;
  
  $post_id = get_the_ID();

  if (have_rows('pageBuilder', $post_id)) {
    while (have_rows('pageBuilder', $post_id)) {
			the_row();

			if (get_row_layout() == 'hero_banner') {
				get_template_part('template-parts/hero-banner');
			} else if (get_row_layout() == 'spacer') {
        get_template_part('template-parts/spacer');
      } else if (get_row_layout() == 'content') {
        get_template_part('template-parts/content');
      } else if (get_row_layout() == 'contact_form') {
        get_template_part('template-parts/contact-form');
      }
    }
	}
?>
