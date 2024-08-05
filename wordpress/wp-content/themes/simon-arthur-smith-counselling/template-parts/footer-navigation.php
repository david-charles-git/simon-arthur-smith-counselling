<?php
  if (!defined('ABSPATH')) exit;

  if (get_field('FooterNavigation_Group', 'options')) {
    $footer_navigation_group = get_field('FooterNavigation_Group', 'options');
    $footer_associated_bodies = $footer_navigation_group['associated_bodies'];
    $footer_navigation_items = $footer_navigation_group['navigation_items'];
    $phone_number_label = $footer_navigation_group['phone_number_label'];
    $footer_navigation_terms = $footer_navigation_group['terms_items'];
    $address_label = $footer_navigation_group['address_label'];
    $email_address = $footer_navigation_group['email_address'];
    $phone_number = $footer_navigation_group['phone_number'];
    $address_url = $footer_navigation_group['address_url'];
    $email_label = $footer_navigation_group['email_label'];
    $home_image = $footer_navigation_group['image'];
    $associated_bodies = [];
    $navigation_items = [];
    $terms_items = []; 

    if ($footer_navigation_terms) {
      for ($a = 0; $a < count($footer_navigation_terms); $a++) {
        $termsItem = [];
        $termsItem['url'] = $footer_navigation_terms[$a]['url'];
        $termsItem['label'] = $footer_navigation_terms[$a]['label'];
        $termsItem['opens_in_new_tab'] = $footer_navigation_terms[$a]['opens_in_new_tab'];

        array_push($terms_items, $termsItem);
      }
    }

    if ($footer_navigation_items) {
      for ($b = 0; $b < count($footer_navigation_items); $b++) {
        $navigationItem = [];
        $navigationItem['url'] = $footer_navigation_items[$b]['url'];
        $navigationItem['label'] = $footer_navigation_items[$b]['label'];

        array_push($navigation_items, $navigationItem);
      }
    }

    if ($footer_associated_bodies) {
      for ($c = 0; $c < count($footer_associated_bodies); $c++) {
        $associatedBody = [];
        $associatedBody['url'] = $footer_associated_bodies[$c]['url'];
        $associatedBody['image'] = $footer_associated_bodies[$c]['image'];

        array_push($associated_bodies, $associatedBody);
      }

    }
?>
    <div id='footer-navigation' class='mb-2 text-center'>
      <?php if ($home_image) { ?>
        <div>
          <a href='<?php echo home_url(); ?>'>
            <img src='<?php echo $home_image; ?>' alt='Simon Arthur-Smith Counselling Logo' width='300' height='50' />
          </a>
        </div>
      <?php } ?>

      <ul class='flex justify-center gap-4 mt-4 items-center'>
        <?php for ($d = 0; $d < count($associated_bodies); $d++) { ?>
          <li class='mx-0'>
            <a href='<?php echo $associated_bodies[$d]['url']; ?>'>
              <img src='<?php echo $associated_bodies[$d]['image']; ?>' alt='Associated Body Logo' width='80' height='50' />
            </a>
          </li>
        <?php } ?>
      </ul>

      <ul>
        <li class='mt-4'>
          <a class='px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out mb-2' href='mailto:<?php echo $email_address; ?>'><?php echo $email_label; ?></a>
        </li>
        <li class='mt-1'>
          <a  class='px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out mb-2' href='tel:<?php echo $phone_number; ?>'><?php echo $phone_number_label; ?></a>
        </li>
        <li class='mt-1'>
          <a class='px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out mb-2' href='<?php echo $address_url; ?>'><?php echo $address_label; ?></a>
        </li>
      </ul>

      <ul class='flex justify-center mt-4'>
        <?php for ($a = 0; $a < count($navigation_items); $a++) { ?>
          <li class='mx-0 px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out'>
            <a href='<?php echo $navigation_items[$a]['url']; ?>'>
              <?php echo $navigation_items[$a]['label']; ?>
            </a>
          </li>
        
          <?php if ($a < count($terms_items) + 1) { ?>
            <span class='mx-1'>|</span>
          <?php } ?>
        <?php } ?>
      </ul>

      <ul class='text-center flex justify-center'>
        <?php for ($a = 0; $a < count($terms_items); $a++) { ?>
          <li class='mx-0 px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out'>
            <a
              href='<?php echo $terms_items[$a]['url']; ?>'
              target='<?php if ($terms_items[$a]['opens_in_new_tab']) { echo '_blank'; } else { echo '_self'; } ?>'
            >
              <?php echo $terms_items[$a]['label']; ?>
            </a>
          </li>
          
          <span class='mx-1'>|</span>
        <?php } ?>

        <li class='mx-0 px-2 border-b-2 border-transparent hover:border-black duration-200 ease-in-out'>
          <a href='https://business.yell.com/' target='_blank'>Powered by Yell Business</a>
        </li>
      </ul>

      <p class='text-center text-xs py-4'>&copy; <?php echo date('Y'); ?> Simon Arthur Smith Counselling. The content on this website is owned by us and our licensors. Do not copy any content (including images) without our consent.</p>
    </div>
<?php } ?>