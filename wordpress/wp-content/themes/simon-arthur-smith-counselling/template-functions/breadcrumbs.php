<?php
  if (!defined('ABSPATH')) exit;

  function buildBreadcrumbs($separator = '<span class="mr-1 text-xs">|</span>', $home = 'Home') {
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

    $breadcrumbs = array("<a style='border-bottom-width: 1px;' href=\"$base$slash\" class='mr-1 text-xs px-1 border-transparent hover:border-white duration-200 ease-in-out'>$home</a>");

    foreach ($path as $x => $crumb) {
      $title = ucwords(str_replace(array('.php', '_', '%20', '-'), array('', ' ', ' ', ' '), $crumb));

      if ($x != $last) {
        $breadcrumbs[] = "<a style='border-bottom-width: 1px;' href=\"$base$slash$crumbs$crumb$slash\" class='mr-1 text-xs px-1 border-b-2 border-transparent hover:border-white duration-200 ease-in-out'>$title</a>";
        $crumbs .= $crumb . '/';
      } else {
        $breadcrumbs[] = "<p class='inline-block mr-1 text-xs px-1 border-b-2 border-transparent'>$title</p>";
      }
    }

    return implode($separator, $breadcrumbs);
  }
?>