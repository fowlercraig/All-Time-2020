@php 
  $section = get_field('section_5');
  $image = $section['image'];
@endphp

<section class="bg-gray-100 uppercase">  
  <div class="lg:h-90vh bg-gray-600">
    @include('components.background-image')
  </div>
</section>