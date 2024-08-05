<?php
  if (!defined('ABSPATH')) exit;

  $title = get_sub_field('title');
  $custom_class = get_sub_field('custom_class');
?>
<section id='contact-form-container' class='<?php echo $custom_class; ?>'>
  <div class='max-w-screen-lg text-center'>
      <h2 class='mb-4'><?php echo $title; ?></h2>

      <form id='contact-form' class='flex flex-col gap-4 max-w-screen-sm relative' onsubmit='handleContactFormSubmit(event)'>
        <div class='flex gap-4 text-left m-0 justify-center'>
          <div class='m-0 text-left w-full'>
            <label class='block' for='firstName'>First Name</label>
            <input
              required
              type='text'
              id='firstName'
              name='firstName'
              class='w-full border-slate-200'
              placeholder='Enter your first name'
              onblur='handleInputBlur(event)'
              onfocus='handleInputFocus(event)'
            />
            <p class='error-message hidden opacity-0 duration-200 ease-in-out text-red-500 text-xs text-left'>Please enter your first name</p>
          </div>

          <div class='m-0 w-full'>
            <label class='block' for='lastName'>Last Name</label>
            <input
              required
              type='text'
              id='lastName'
              name='lastName'
              class='w-full border-slate-200'
              placeholder='Enter your last name'
              onblur='handleInputBlur(event)'
              onfocus='handleInputFocus(event)'
            />
            <p class='error-message hidden opacity-0 duration-200 ease-in-out text-red-500 text-xs text-left'>Please enter your last name</p>
          </div>
        </div>

        <div class='flex gap-4 text-left m-0 justify-center'>
          <div class='m-0 w-full'>
            <label class='block text-left' for='email'>Email</label>
            <input
              required
              id='email'
              type='email'
              name='email'
              placeholder='Enter your email'
              class='w-full border-slate-200'
              onblur='handleInputBlur(event)'
              onfocus='handleInputFocus(event)'
            />
            <p class='error-message hidden opacity-0 duration-200 ease-in-out text-red-500 text-xs text-left'>Please enter a valid email</p>
          </div>

          <div class='m-0 w-full'>
            <label class='block text-left' for='subject'>Subject</label>
            <input
              required
              type='text'
              id='subject'
              name='subject'
              placeholder='Enter a subject'
              class='w-full border-slate-200'
              onblur='handleInputBlur(event)'
              onfocus='handleInputFocus(event)'
            />
            <p class='error-message hidden opacity-0 duration-200 ease-in-out text-red-500 text-xs text-left'>Please enter a subject</p>
          </div>
        </div>

        <div class='m-0 w-full'>
          <label class='block text-left' for='message'>Message</label>
          <textarea
            required
            type='text'
            id='message'
            name='message'
            placeholder='Enter your message'
            class='w-full min-h-[100px] border-slate-200'
            onblur='handleInputBlur(event)'
            onfocus='handleInputFocus(event)'
          ></textarea>
          <p class='error-message hidden opacity-0 duration-200 ease-in-out text-red-500 text-xs text-left'>Please enter a message</p>
        </div>

        <div class='m-0'>
          <button class='button black' type='submit'>Submit</button>
        </div>

        <div class='success background hidden opacity-0 duration-200 ease-in-out text-center flex flex-col gap-4 bg-white'>
          <p class='text-lg text-green-500'>Message Successfully Sent</p>
          <p>Thank you for your message. I will get back to you as soon as possible.</p>
          <div>
            <button class='button black' type='button' onclick='handleSuccessClose(event)'>Close</button>
          </div>
        </div>

        <div class='error background hidden opacity-0 duration-200 ease-in-out text-center flex flex-col gap-4 bg-white'>
          <p class='text-lg text-red-500'>An error occurred</p>
          <p>An error occurred whilst trying to submit your message. Please try again.</p>
          <div>
            <button class='button black' type='button' onclick='handleErrorClose(event)'>Retry</button>
          </div>
        </div>

        <div class='loading background hidden opacity-0 duration-200 ease-in-out text-center flex flex-col gap-4 bg-white'>
          <p class='text-lg'>Loading</p>
        </div>
      </form>
  </div>
</section>