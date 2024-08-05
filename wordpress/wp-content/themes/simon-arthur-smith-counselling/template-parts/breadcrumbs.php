<?php
  if (!defined('ABSPATH')) exit;

  if (!is_front_page() && !is_home()) {
?>
  <section id='breadcrumbs' class='w-full top-12 absolute z-30'>
    <div class='background bg-black opacity-10'></div>

    <div class='px-4 relative text-white'>
      <?php echo buildBreadcrumbs(); ?>
    </div>
  </section>
<?php
  }
?>