@php $section = get_field('section_2') @endphp

<section class="bg-gray-100 relative text-xs lg:text-base">
  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 relative">
      <div class="absolute inset-0 flex flex-col">
        <div class="container max-w-none py-4 md:py-8 flex flex-wrap flex-none">
          <div class="w-1/2">
            Coffee, Breakfast & Lunch<br>
            9a-230p daily<br>
          </div>
          <div class="w-1/2 text-right">
            Dinner, 5-8pm Daily<br>
            Pizza, Thurs-Mon 5-8p
          </div>
        </div>
        <div class="container max-w-none h-full flex flex-col items-center justify-center text-center">
          <h2 class="text-lg lg:text-3xl mb-4">
            We’re a neighborhood<br>
            joint and we’re<br>
            at your service
          </h2>
          @include('components.button')
        </div>
        <div class="container max-w-none py-4 md:py-8 flex flex-wrap flex-none items-end">
          <div class="w-1/2">
            <a href="https://goo.gl/maps/7CvNGzoepYTDkCww5" class="hover:underline">
              2040 Hillhurst Ave<br>
              Los Angeles, CA 90027<br>
              (323) 555-1212
            </a>
          </div>
          <div class="w-1/2 text-right">
            <button @click="news = true" class="underline">Join the Newsletter</button><br>
            or <a href="/newsletter" class="underline">View the Archive</a>
          </div>
        </div>
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-3/4"></div>
    </div>
    <div class="w-full md:w-1/2 relative">
      <div class="absolute inset-0">
        @include('components.background-image',['image'=> $section['image']])
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-3/4"></div>
    </div>
  </div>
</section>
