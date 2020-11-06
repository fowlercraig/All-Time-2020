@php $section = get_field('section_4') @endphp

<section class="bg-gray-100 flex flex-wrap-reverse">  
  <div class="lg:h-90vh lg:w-1/2 flex items-end">
    <div class="container py-6">
      <div class="font-eyebrow text-brand mb-4">wine + market</div>
      <div class="uppercase text-lg md:text-3xl">We’re doing market and wine too. Everything from meals kits to lorem ipsum. <a class="text-brand hover:underline" href="">→ order now</a></div>
    </div>
  </div>
  <div class="lg:h-90vh lg:w-1/2 bg-gray-900">
    @include('components.background-image',['image'=> $section['image']])
  </div>
</section>