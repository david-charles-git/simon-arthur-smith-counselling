<?php
  if (!defined('ABSPATH')) exit;

  $call_to_actions = [];
  $content_copy = get_sub_field('copy');
  $content_title = get_sub_field('title');
  $content_type = get_sub_field('content_type');
  $content_class = get_sub_field('custom_class');
  $content_title_type = get_sub_field('title_type');
  $content_call_to_actions = get_sub_field('call_to_actions') ? get_sub_field('call_to_actions') : [];
  
  if ($content_call_to_actions) {
    for ($a = 0; $a < count($content_call_to_actions); $a++) {
      $cta = [];
      $cta['url'] = $content_call_to_actions[$a]['call_to_action_link'];
      $cta['label'] = $content_call_to_actions[$a]['call_to_action_copy'];
      $cta['opens_in_new_tab'] = $content_call_to_actions[$a]['call_to_action_open_in_new_tab'];
      
      array_push($call_to_actions, $cta);
    }
  }
  
  if ($content_type === 'text_and_image') {
    $content_image = get_sub_field('image');
    $image_side = get_sub_field('image_side');
  }

  if ($content_type === 'text_and_video') {
    $content_video = get_sub_field('video');
    $video_side = get_sub_field('video_side');
  }
?>
<section class='content-container relative <?php echo $content_class . ' ' .$content_type; ?>'>
  <div class='background'></div>

  <div class='relative text-center flex max-w-screen-xl gap-8 items-center'>
    <?php
      if ($content_type === 'just_text') {
        print_content($content_title, $content_copy, $call_to_actions, $content_title_type);
      } else if ($content_type === 'text_and_image') {
    ?>
      <div class='w-1/2 m-0'>
        <?php if ($image_side === 'left') { ?>
          <div class='m-0 w-full max-h-full h-[600px] overflow-hidden rounded-lg relative'>
            <img class='background min-w-full' style='height: auto; width: auto' src='<?php echo $content_image; ?>' alt='' width='400' height='400' />
          </div>
        <?php } else { ?>
          <div class='m-0'>
            <?php print_content($content_title, $content_copy, $call_to_actions, $content_title_type); ?>
          </div>
        <?php } ?>
      </div>

      <div class='w-1/2 m-0'>
        <?php if ($image_side === 'left') { ?>
          <div class='m-0'>     
            <?php print_content($content_title, $content_copy, $call_to_actions, $content_title_type); ?>
          </div>
        <?php } else { ?>
          <div class='m-0 w-full max-h-full h-[600px] overflow-hidden rounded-lg relative'>
            <img class='background min-w-full' style='height: auto; width: auto' src='<?php echo $content_image; ?>' alt='' width='400' height='400' />
          </div>
        <?php } ?>
      </div>
    <?php } else if ($content_type === 'text_and_video') { ?>
      <div class='w-1/2 m-0'>
        <?php if ($image_side === 'left') { ?>
          <div>
            <video controls>
              <source src='<?php echo $content_video; ?>' type='video/mp4' />
            </video>
          </div>
        <?php } else { ?>
          <div>
            <?php print_content($content_title, $content_copy, $call_to_actions, $content_title_type); ?>
          </div>
        <?php } ?>
      </div>
        
      <div class='w-1/2 m-0'>
        <?php if ($image_side === 'left') { ?>
          <div>
            <?php print_content($content_title, $content_copy, $call_to_actions, $content_title_type); ?>
          </div>
        <?php } else {?>
          <div>
            <video controls>
              <source src='<?php echo $content_video; ?>' type='video/mp4' />
            </video>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>