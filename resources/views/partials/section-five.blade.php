@php 
  $section = get_field('section_5');
  $image = $section['image'];
@endphp

<section class="bg-gray-100 uppercase relative">  
  <div class="absolute inset-0">
    @include('components.background-image')
  </div>
  <div class="aspect-ratio-4/3 lg:aspect-ratio-16/9"></div>
</section>