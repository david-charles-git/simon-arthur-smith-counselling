<?php
  if (!defined('ABSPATH')) exit;
?>
<footer class='px-4 pt-4 border-t-2 border-black'>
  <div class='background bg-white' style='z-index: -1;'></div>
  <?php
    include_once get_template_directory() . '/template-parts/footer-navigation.php';
    wp_footer();
  ?>
</footer>
<?php include_once get_template_directory() . '/template-parts/cookie-banner.php'; ?>
<div class='opacity-0 hidden flex flex-wrap'></div>
</body>
</html>