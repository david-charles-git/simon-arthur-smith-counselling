<?php
  if (!defined('ABSPATH')) exit;

  if (!function_exists('buildBreadcrumbs')) {
    function buildBreadcrumbs($separator = '', $home = 'Home') {
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
      $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
      $base = $protocol . '://' . $_SERVER['HTTP_HOST'];
      $crumbs = '';
      $slash = '/';

      if (!empty($path)) {
        $last = end(array_keys($path));
      } else {
        $last = null;
      }

      $breadcrumbs = array("<a href=\"$base$slash\" class='mr-2'>$home</a>");

      foreach ($path as $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_', '%20', '-'), array('', ' ', ' ', ' '), $crumb));

        if ($x != $last) {
          $breadcrumbs[] = "<a href=\"$base$slash$crumbs$crumb$slash\" class='mr-2'>$title</a>";
          $crumbs .= $crumb . '/';
        } else {
          $breadcrumbs[] = "<p class='mr-2 inline-block'>$title</p>";
        }
      }

      return implode($separator, $breadcrumbs);
    }
  }

  if (!is_front_page() && !is_home()) {
?>
  <section class='breadcrumbs absolute z-30 w-full text-white'>
    <div class='background bg-black opacity-10'></div>

    <div class='inner p-4 relative'>
      <?php echo buildBreadcrumbs('<span class="mr-2">/</span>'); ?>
    </div>
  </section>
<?php
  }
?>