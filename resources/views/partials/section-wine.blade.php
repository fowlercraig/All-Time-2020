@php $section = get_field('section_7') @endphp

<section class="bg-white relative text-xs lg:text-base">
  <div class="flex flex-wrap md:items-center">
    
    <div class="w-full md:w-1/2 relative md:absolute z-30">
      <div class="absolute inset-0 flex items-center justify-center md:items-center md:justify-start p-8">
        <div class="w-full space-y-3 text-center md:text-left">
          <div class="font-eyebrow text-brand mb-4">Wine Club</div>
          <div class="uppercase text-lg md:text-3xl leading-tight">
            Daily 5pm-8pm
            <br>
            <a class="text-brand hover:underline inline-block mt-2 -ml-3" href="">Join In →</a>
          </div>
        </div>
      </div>
      <div class="aspect-ratio-square"></div>
    </div>

    <div class="w-full relative">
      <div class="absolute inset-0">
        @include('components.background-image',['image'=> $section['image']])
      </div>
      <div class="aspect-ratio-square md:aspect-ratio-16/9"></div>
    </div>

  </div>
</section>
