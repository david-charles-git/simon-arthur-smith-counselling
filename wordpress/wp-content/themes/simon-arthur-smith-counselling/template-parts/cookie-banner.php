<?php
  if (!defined('ABSPATH')) exit;

  $cookieBanner_class = 'fixed top-0 left-0 w-full h-full max-w-none z-50 duration-200 ease-in-out hidden';
  $cookieBannerContent_class = 'absolute bottom-0 left-0 py-4 bg-black max-w-none w-full translate-y-full duration-200 ease-in-out';
?>
<div
  id='cookie-banner'
  class='<?php echo $cookieBanner_class; ?>'
>
  <div class='background bg-black max-w-none opacity-40'></div>

  <div
    id='cookie-banner-content'
    class='<?php echo $cookieBannerContent_class; ?>'
  >
    <div class='px-4 text-white flex gap-4 justify-between max-w-screen-lg'>
      <p>We use basic cookies on our website to see how you interact with it. You must accept, to continue using this site. <a href='https://business.yell.com/websites-privacy-cookie-policy/' target='_blank'>Privacy Policy</a></p>

      <div class='flex gap-4 mx-0'>
        <button class='button white' onclick='cookieBannerAccept()'>Accept</button>
      </div>
    </div>
  </div>
</div>