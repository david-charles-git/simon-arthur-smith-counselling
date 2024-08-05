<?php
  if (!defined('ABSPATH')) exit;

  $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
  $pathCount = count($path);
  $currentPath = $path[$pathCount];

  if (get_field('MainNavigation_Group', 'options')) {
    $main_navigation_group = get_field('MainNavigation_Group', 'options');
    $main_navigation_items = $main_navigation_group['navigation_items'];
    $home_image = $main_navigation_group['image'];
    $navigation_items = [];

    for ($a = 0; $a < count($main_navigation_items); $a++) {
      $navigationItem = [];
      $itemSubNavigationItems = [];

      if ($main_navigation_items[$a]['has_sub_navigation']) {
        $sub_navigation_items = $main_navigation_items[$a]['sub_navigation_items'];

        for ($b = 0; $b < count($sub_navigation_items); $b++) {
          $subNavigationItem = [];
          $subNavigationItem['url'] = $sub_navigation_items[$b]['url'];
          $subNavigationItem['label'] = $sub_navigation_items[$b]['label'];

          array_push($itemSubNavigationItems, $subNavigationItem);
        }
      }

      $navigationItem['url'] = $main_navigation_items[$a]['url'];
      $navigationItem['label'] = $main_navigation_items[$a]['label'];
      $navigationItem['sub_navigation_items'] = $itemSubNavigationItems;
      $navigationItem['has_sub_navigation'] = $main_navigation_items[$a]['has_sub_navigation'];

      array_push($navigation_items, $navigationItem);
    }

    $navigation_items_count = count($navigation_items);
?>
    <section id='main-navigation' class='relative shadow-lg' onmouseleave='subNavigationHide()'>
      <div class='background bg-white' style='z-index: -1;'></div>

      <div>
        <nav class='flex justify-between gap-4 items-center bg-white py-2 px-4'>
          <?php if ($home_image) { ?>
            <div>
              <a href='<?php echo home_url(); ?>'>
                <img src='<?php echo $home_image; ?>' alt='Simon Arthur-Smith Counselling Logo' width='300' height='50' />
              </a>
            </div>
          <?php } ?>

          <div class='w-full text-right'>
            <ul id='top-level-navigation' class=' flex gap-2 justify-end'>
              <?php for ($a = 0; $a < $navigation_items_count; $a++) { ?>
                <li
                  onmouseover='subNavigationShow(<?php echo $a; ?>)'
                  class='mx-0 px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out'
                  style='<?php if ($currentPath === str_replace('/', '', $navigation_items[$a]['url'])) { echo 'border-color: black;'; } ?>'
                >
                  <a href='<?php echo $navigation_items[$a]['url']; ?>'><?php echo $navigation_items[$a]['label']; ?></a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </nav>
      </div>
      <?php
        for ($b = 0; $b < $navigation_items_count; $b++) {
          if ($navigation_items[$b]['has_sub_navigation']) {
      ?>
            <ul
              style='z-index: -1;'
              class='sub-level-navigation absolute w-full top-full px-4 py-2 bg-white flex justify-end gap-2 left-0 duration-200 ease-in-out -translate-y-full shadow-lg'
            >
              <?php
                for ($c = 0; $c < count($navigation_items[$b]['sub_navigation_items']); $c++) {
                  $sub_navigation_item = $navigation_items[$b]['sub_navigation_items'][$c];
              ?>
                  <li
                    class='mx-0 px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out'
                    style='<?php if ($currentPath === str_replace('/', '', $navigation_items[$a]['url'])) { echo 'border-color: black;'; } ?>'
                  >
                    <a href='<?php echo $sub_navigation_item['url']; ?>'><?php echo $sub_navigation_item['label']; ?></a>
                  </li>
              <?php } ?>
            </ul>
      <?php
          }
        }
      ?>
    </section>
<?php } ?>