@php $section = get_field('section_2') @endphp

<section class="bg-gray-100 flex flex-wrap uppercase text-xs md:text-base">
  <div class="h-70vh lg:h-90vh w-full lg:w-1/2 flex flex-col">
    <div class="container flex flex-wrap py-6">
      <div class="w-1/2">
        2040 Hillhurst Ave<br>
        Los Angeles, CA 90027<br>
        (323) 555-1212
      </div>
      <div class="w-1/2 text-right">
        Join the newsletter<br>
        or View the archive<br>
      </div>
    </div>
    <div class="container h-full flex flex-col items-center justify-center text-center">
      <h2 class="text-lg md:text-3xl mb-4">
        We’re a neighborhood<br>
        joint and we’re<br>
        at your service
      </h2>
      @include('components.button')
    </div>
    <div class="container flex flex-wrap items-end py-6">
      <div class="w-1/2">
        2040 Hillhurst Ave<br>
        Los Angeles, CA 90027<br>
        (323) 555-1212
      </div>
      <div class="w-1/2 text-right">
        Join the newsletter<br>
        or View the archive<br>
      </div>
    </div>
  </div>
  <div class="w-70vh lg:h-90vh w-full lg:w-1/2 bg-gray-900 text-white">
    @include('components.background-image',['image'=> $section['image']])
  </div>
</section>