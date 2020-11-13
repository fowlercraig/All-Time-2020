@php $section = get_field('section_4') @endphp

<section class="bg-white relative text-xs lg:text-base">
  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 relative">
      <div class="absolute inset-0 flex items-center justify-center md:items-end md:justify-start p-8">
        <div class="w-full space-y-3 text-center md:text-left">
          <div class="font-eyebrow text-brand mb-4">Marketplace, Daily 9a-8pm</div>
          <div class="uppercase text-lg md:text-3xl leading-tight">
            House made bread, specialty items, + staples
            <br class="md:hidden">
            <a class="text-brand hover:underline inline-block mt-2 -ml-3" href="">→ order now</a>
          </div>
        </div>
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-3/4"></div>
    </div>
    <div class="w-full md:w-1/2 relative">
      <div class="absolute inset-0">
        @include('components.background-image',['image'=> $section['image']])
      </div>
      <div class="aspect-ratio-3/4"></div>
    </div>
  </div>
</section>
