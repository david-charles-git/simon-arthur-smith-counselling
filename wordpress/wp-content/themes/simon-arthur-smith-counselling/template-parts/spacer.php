<?php
  if (!defined('ABSPATH')) exit;

  $type = get_sub_field('type');
  $custom_class = get_sub_field('custom_class');
?>
<div class='spacer-container w-full <?php echo $type; ?> <?php echo $custom_class; ?>'></div>