<?php
  if (!defined('ABSPATH')) exit;

  $navigation_items = [];
  $home_image = get_sub_field('image');

  if (have_rows('navigation_items')) {
    while (have_rows('navigation_items')) {
      the_row();

      $navigationItem = [];
      $itemSubNavigationItems = [];
      $itemURL = get_sub_field('url');
      $itemLabel = get_sub_field('label');
      $itemHasSubNavigation = get_sub_field('has_sub_navigation');

      if (has_rows('sub_navigation_items')) {
        while (have_rows('sub_navigation_items')) {
          the_row();

          $subNavigationItem = [];
          $subItemURL = get_sub_item('url');
          $subItemLabel = get_sub_field('label');
          $subNavigationItem['URL'] = $subItemURL;
          $subNavigationItem['label'] = $subItemLabel;

          array_push($itemSubNavigationItems, $subNavigationItem);
        }
      }

      $navigationItem['url'] = $itemURL;
      $navigationItem['label'] = $itemLabel;
      $navigationItem['has_sub_navigation'] = $itemHasSubNavigation;
      $navigationItem['sub_navigation_items'] = $itemSubNavigationItems;

      array_push($navigation_items, $navigationItem);
    }
  }

  $navigation_items_count = count($navigation_items);
?>
<section id='main-navigation' class=''>
  <div class='background'></div>

  <div class='inner'>
    <nav>
      <?php if ($home_image) { ?>
        <div>
          <a href='/'>
            <img src='<?php echo $home_image; ?>' alt='Simon Arthur-Smith Counselling Logo' width='100' height='100' />
          </a>
        </div>
      <?php } ?>

      <ul class='top-level-navigation'>
        <?php for ($a = 0; $a < $navigation_items_count; $a++) { ?>
          <li data-index='<?php $a; ?>'>
            <a href='<?php echo $navigation_items[$a]['url']; ?>'><?php echo $navigation_items[$a]['label']; ?></a>
          </li>
        <?php } ?>
      </ul>

      <?php
        for ($b = 0; $b < $navigation_items_count; $b++) {
          if ($navigation_items[$b]['has_sub_navigation']) {
      ?>
            <ul data-index='<?php echo $b; ?>' class='sub-level-navigation'>
              <?php
                for ($c = 0; $c < count($navigation_items[$b]['sub_navigation_items']); $c++) {
                  $sub_navigation_item = $navigation_items[$b]['sub_navigation_items'][$c];
              ?>
                  <li>
                    <a href='<?php echo $sub_navigation_item['url']; ?>'><?php echo $sub_navigation_item['label']; ?></a>
                  </li>
              <?php } ?>
            </ul>
      <?php
          }
        }
      ?>
    </nav>
  </div>
</section>