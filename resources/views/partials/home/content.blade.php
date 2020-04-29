<div class="md:absolute md:table md:w-full md:h-full inset-0 bg-orange-lightest ">
  <div class="md:table-cell align-middle">
    <div id="home" class="lg:flex lg:flex-wrap items-center lg:px-0 xl:px-12 w-full text-center text-sm leading-loose tracking-widest font-sans font-medium">
      <div class="w-full md:w-full mx-auto lg:mx-0 lg:w-1/4 xl:w-1/5">
        <div class="pt-6 flex flex-wrap text-green-darker uppercase lg:hidden items-center leading-tight">
          <div class="w-1/3">
            <a href="<?php the_field('how-to'); ?>" title="Opens E-Gift Card page in new window" target="_blank">
              <span class="block text-xs leading-tight">E-Gift Cards</span>
              <span class="underline text-xs">Order Online</span>
            </a>
          </div> 
          <div class="w-1/3">
            <div class="aspect-ratio aspect-ratio--1x1 bg-green-darker rounded-full">
              <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="uppercase text-white text-lg tracking-widest mb-0">All Time</h1>
              </div>
            </div>
          </div>
          <div class="w-1/3">
            <a href="<?php the_field('how-to'); ?>" title="Opens E-Gift Card page in new window" target="_blank">
              <span class="block text-xs leading-tight">Order Online</span>
              <span class="underline text-xs">For Pickup <br>or Delivery</span>
            </a>
          </div> 
        </div>
        <div class="pt-6 md:p-6 pb-0 lg:p-6 mx-auto hidden lg:block">
          <div class="mb-0 md:mb-5 md:px-6">
            <div class="aspect-ratio aspect-ratio--1x1 bg-green-darker rounded-full">
              <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="uppercase text-white text-lg tracking-widest mb-0">All Time</h1>
              </div>
            </div>
          </div>
          <div class="mb-5 relative hidden lg:block">
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="uppercase text-green-darkest">
                <a href="<?php the_field('how-to'); ?>" title="Opens E-Gift Card page in new window" target="_blank">
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
          <div class="flex flex-wrap text-center mb-6 md:mb-10 font-serif tracking-normal text-base lg:text-xl leading-tight text-green-darker">
            <div class="w-full md:w-1/2 px-4 md:border-r border-red">We're a neighborhood joint <br>and we're at your service.</div>
            <div class="w-1/2 px-4 hidden md:block">
              <button @click="news = true" class="underline" title="Opens a Newsletter Signup Modal" >Sign up for the newsletter</button>
              <br>
              or <a class="underline" title="Opens the Newsletter Archive in the same window" href="">read the archive.</a>
            </div>
          </div>
          <?php $image = get_field('main_photo'); ?>
          <div class="relative">
            <div class="absolute inset-x-0 bottom-0 md:py-3 z-10 text-center">
              <span class="text-white uppercase text-xs border-t border-dotted inline-block"><?php echo $image['caption']; ?></span>
            </div>
            <div class="aspect-ratio aspect-ratio--4x3 bg-white background" data-background-options='{"source":"<?php echo $image['sizes']['large']; ?>"}'></div>
          </div>
        </div>
      </div>
      <div class="w-2/3 lg:w-1/4 xl:w-1/5 mx-auto lg:mx-0">
        <div class="p-6">
          <div class="mb-5 px-6 hidden md:block">
            <a href="#" class="block aspect-ratio group aspect-ratio--1x1 bg-white rounded-full transition-all duration-200 ease-in-out hover:bg-green-darker hover:scale-105 hover:text-white">
              <span class="absolute inset-0 flex items-center justify-center">
                <span>
                  <h1 class="uppercase text-green-darker xl:text-lg tracking-widest group-hover:text-white">Order Online</h1>
                  <p class="text-green-darkest uppercase block leading-5 group-hover:text-white">For Pickup <br>or Delivery</p>
                </span>
              </span>
            </a>
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