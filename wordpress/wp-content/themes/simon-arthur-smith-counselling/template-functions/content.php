<?php
  if (!defined('ABSPATH')) exit;

  function get_title_opening_tag($title_type) {
    $title_class = 'mb-4';

    if ($title_type === 'h1') {
    return '<h1 class=' . $title_class . '>';
    } else if ($title_type === 'h2') {
    return '<h2 class=' . $title_class . '>';
    } else if ($title_type === 'h3') {
    return '<h3 class=' . $title_class . '>';
    } else if ($title_type === 'h4') {
    return '<h4 class=' . $title_class . '>';
    } else if ($title_type === 'h5') {
    return '<h5 class=' . $title_class . '>';
    } else if ($title_type === 'h6') {
    return '<h6 class=' . $title_class . '>';
    }
  }

  function get_title_closing_tag($content_title_type) {
    if ($content_title_type === 'h1') {
      return '</h1>';
    } else if ($content_title_type === 'h2') {
      return '</h2>';
    } else if ($content_title_type === 'h3') {
      return '</h3>';
    } else if ($content_title_type === 'h4') {
      return '</h4>';
    } else if ($content_title_type === 'h5') {
      return '</h5>';
    } else if ($content_title_type === 'h6') {
      return '</h6>';
    }
  }

  function print_content(
    $content_title,
    $content_copy,
    $content_call_to_actions,
    $content_title_type
  ) {
    echo '<div class="max-w-screen-lg">';

    if ($content_title) {
      echo get_title_opening_tag($content_title_type) . $content_title . get_title_closing_tag($content_title_type);
    }
    
    if ($content_copy) {
      echo '<pre>';
      print_r($content_copy);
      echo '</pre>';
    }

    for ($a = 0; $a < count($content_call_to_actions); $a++) {
      echo '<a class="button black mt-8" href="' . $content_call_to_actions[$a]['url'] . '"';

      if ($content_call_to_actions[$a]['opens_in_new_tab']) {
        echo ' target="_blank"';
      }

      echo '>' . $content_call_to_actions[$a]['label'] . '</a>';
    }

    echo '</div>';
  }
?>