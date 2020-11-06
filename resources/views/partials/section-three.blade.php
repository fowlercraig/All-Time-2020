@php $section = get_field('section_3') @endphp

<section class="bg-gray-100 flex flex-wrap-reverse uppercase">  
  <div class="lg:h-90vh lg:w-1/2 bg-gray-900">
    @include('components.background-image',['image'=> $section['image']])
  </div>
  <div class="lg:h-90vh lg:w-1/2 flex items-center justify-center">
    <div class="w-1/2 space-y-3 text-orange-600 text-center">
      <div>So, we're making pizza.</div>
      @include('components.background-image',['image'=> $section['image_secondary']])
      <div>Order yours today.</div>
    </div>
  </div>
</section>