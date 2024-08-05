<?php
  if (!defined('ABSPATH')) exit;

  $copy = get_sub_field('copy');
  $title = get_sub_field('title');
  $hero_banner_type = get_sub_field('type');
  $background_image = get_sub_field('image');
  $background_video = get_sub_field('video');
  $has_overlay = get_sub_field('has_overlay');
  $custom_class = get_sub_field('custom_class');
  $overlay_opacity = get_sub_field('overlay_opacity');
  $has_call_to_action = get_sub_field('has_call_to_action');
  $call_to_action_copy = get_sub_field('call_to_action_copy');
  $call_to_action_link = get_sub_field('call_to_action_link');
  $call_to_action_open_in_new_tab = get_sub_field('call_to_action_open_in_new_tab');
?>
<section class="hero-banner <?php echo $custom_class; ?> h-[400px] overflow-hidden relative">
  <?php if ($hero_banner_type === 'image' && $background_image) { ?>
    <div class="background z-10" style="background-image: url(<?php echo $background_image; ?>);"></div>

  <?php } elseif ($hero_banner_type === 'video' && $background_video)  { ?>
    <div class="background z-10" >
      <video class='background min-h-full' style='max-width: unset; width: auto; height: auto;' autoplay loop muted playsinline>
        <source src="<?php echo $background_video; ?>" type="video/mp4">
      </video>
    </div>

  <?php } ?>

  <?php if ($has_overlay) { ?>
    <div class="background overlay z-20 bg-black" style="opacity: <?php echo $overlay_opacity; ?>"></div>
  <?php } ?>

  <div class='background text-center z-30 h-auto flex-col flex justify-center max-w-screen-lg'>
    <?php if ($title) { ?>
      <h1 class='text-white mb-4'><?php echo $title; ?></h1>
    <?php } ?>

    <?php if ($copy) { ?>
      <p class='text-white text-2xl mb-8'><?php echo $copy; ?></p>
    <?php } ?>

    <?php if ($has_call_to_action) { ?>
      <a
        class="button white"
        href="<?php echo $call_to_action_link; ?>"
        <?php echo $call_to_action_open_in_new_tab ? 'target="_blank"' : ''; ?>
      >
        <?php echo $call_to_action_copy; ?>
      </a>
    <?php } ?>
  </div>
</section>