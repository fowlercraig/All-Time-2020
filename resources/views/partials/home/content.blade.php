<div class="md:absolute md:table md:w-full md:h-full inset-0">
  <div class="md:table-cell align-middle">
    <div id="home" class="max-w-9xl mx-auto lg:flex lg:flex-wrap items-center lg:px-0 xl:px-12 w-full text-center text-sm leading-loose tracking-widest font-sans font-medium">
      <div class="w-full md:w-full mx-auto lg:mx-0 lg:w-1/4 xl:w-1/5">
        <div class="pt-6 flex flex-wrap text-green-darker uppercase lg:hidden items-center leading-tight justify-center">
          <div class="w-1/4">
            <div class="aspect-ratio aspect-ratio--1x1 bg-green-darkest rounded-full">
              <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="uppercase text-white text-sm tracking-widest mb-0">All Time</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-6 md:p-6 pb-0 lg:p-6 mx-auto hidden lg:block">
          <div class="mb-0 md:mb-5 md:px-6">
            <div class="aspect-ratio aspect-ratio--1x1 bg-green-darkest rounded-full">
              <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="uppercase text-white text-lg tracking-widest mb-0">All Time</h1>
              </div>
            </div>
          </div>
          <div class="mb-5 relative hidden lg:block">
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="uppercase text-green-darkest">
                <a href="<?php the_field('gift-card'); ?>" title="Opens E-Gift Card page in new window" target="_blank">
                  <span class="block text-lg leading-tight">E-Gift Cards</span>
                  <span class="underline">Order Online</span>
                </a>
              </div>
            </div>
            <img class="w-full" src="@asset('images/outline-rectangle.svg')">
          </div>
          <div class="mb-0 aspect-ratio aspect-ratio--1x1 z-10 hidden lg:block">
            <div class="absolute inset-0 flex items-center justify-center text-white text-green-darkest uppercase">
              <div><?php the_field('hours_early'); ?></div>
            </div>
            @include('partials.home.white-square')
          </div>
          <div class="mb-0 aspect-ratio aspect-ratio--1x1 -mt-12 hidden lg:block">
            <div class="absolute inset-0 flex items-center justify-center text-white text-white uppercase">
              <div><?php the_field('hours_later'); ?></div>
            </div>
            @include('partials.home.green-square')
          </div>
        </div>
      </div>
      <div class="lg:w-1/2 xl:w-3/5">
        <div class="pt-6 md:p-6">
          <div class="flex flex-wrap text-center mb-6 md:mb-10 font-serif tracking-normal text-base lg:text-base leading-tight text-green-darker">
            <div class="w-full md:w-1/2 px-4 md:border-r border-red">We're a neighborhood joint <br>and we're at your service.</div>
            <div class="w-1/2 px-4 hidden md:block">
              <button @click="news = true" class="underline" title="Opens a Newsletter Signup Modal" >Sign up for the newsletter</button>
              <br>
              or <a class="underline" title="Opens the Newsletter Archive in the same window" href="<?php the_field('newsletter_archive'); ?>">read the archive.</a>
            </div>
          </div>
          @include('partials.home.banner')
          <?php $image = get_field('main_photo'); ?>
          <div class="relative">
            <!--
            <div class="absolute inset-x-0 bottom-0 md:py-3 z-10 text-center opacity-50 hover:opacity-100 transition-all duration-200 ease-in-out">
              <span class="text-white uppercase text-xs border-t border-dotted inline-block"><?php echo $image['caption']; ?></span>
            </div>
            `-->
            <a target="_blank" href="<?php the_field('chow_now'); ?>">
              <div class="aspect-ratio aspect-ratio--4x3 bg-white background" data-background-options='{"source":"<?php echo $image['sizes']['large']; ?>"}'></div>
            </a>
          </div>

          <div class="p-4 text-green-darker uppercase text-sm font-serif flex justify-between bg-white block md:hidden">
            <button @click="news = true" class="underline" title="Opens a Newsletter Signup Modal" >Sign up for the newsletter</button>
            <span class="tracking-normal normal-case text-grey-dark">or</span>
            <a class="tracking-normal normal-case underline" href="/newsletter">Read the Archive</a>
          </div>

          <div class="pt-6 text-green-darker uppercase text-xs space-x-4">
            <a href="<?php the_field('instagram'); ?>" class="border-b pb-1" title="Opens Instagram in a new window" target="_blank">Follow us on Instagram</a>
            <a href="#" @click="wine = true" class="border-b pb-1" title="Opens a Newsletter Signup Modal">Join the Wine Club</a>
            <a href="#" @click="video = true" class="border-b pb-1" title="Opens a Newsletter Signup Modal">Boiling Point Video</a>
          </div>
        </div>
      </div>
      <div class="w-2/3 lg:w-1/4 xl:w-1/5 mx-auto lg:mx-0">
        <div class="p-6">
          <div class="mb-5 px-6 hidden md:block">
            @include('partials.home.button-order')
          </div>
          <div class="w-full md:w-1/2 md:w-full mb-5 relative">
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="uppercase text-green-darkest">
                <a href="<?php the_field('how-to'); ?>" title="Downloads Cooking Instructions PDF" target="_blank">
                  <span class="block text-lg leading-tight">How-To</span>
                  <span>Cook this stuff</span>
                </a>
              </div>
            </div>
            <img class="w-full" src="@asset('images/outline-rectangle.svg')">
          </div>
          <div class="mb-0 aspect-ratio aspect-ratio--1x1 z-10 relative">
            <div class="absolute inset-0 flex items-center justify-center text-green-darkest uppercase">
              <div><?php the_field('address'); ?></div>
            </div>
            @include('partials.home.white-square')
          </div>
          <div class="mb-0 aspect-ratio aspect-ratio--1x1 -mt-12">
            <div class="absolute inset-0 flex items-center justify-center text-white text-green-darkest uppercase">
              <div><?php the_field('phone'); ?></div>
            </div>
            <img class="w-full" src="@asset('images/outline-diamond.svg')">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>