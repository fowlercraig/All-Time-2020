@php $section = get_field('section_3') @endphp

<section class="bg-white relative text-xs lg:text-base">
  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 relative">
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-1/2 space-y-3 text-orange-600 text-center">
          <div>All Time Pizza</div>
          @include('components.background-image',['image'=> $section['image_secondary']])
          <div>Thurs-Monday 5-8pm</div>
        </div>
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-3/4"></div>
    </div>
    <div class="w-full md:w-1/2 relative md:order-first">
      <div class="absolute inset-0">
        @include('components.background-image',['image'=> $section['image']])
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-3/4"></div>
    </div>
  </div>
</section>
