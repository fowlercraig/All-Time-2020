@php 
  $section = get_field('section_5');
  $images = $section['image'];

  if(count($images) > 4){
    $count = '4';
  } else {
    $count = count($images);
  }

@endphp

<section class="bg-gray-100 uppercase relative">   
  <div class="grid grid-cols-2 lg:grid-cols-{{ $count }}">
    @foreach($images as $image) 
      <div class="relative">
        <div class="absolute inset-0">
          @include('components.background-image',['image'=> $image])
        </div>
        <div class="aspect-ratio-square bg-black"></div>
      </div>
    @endforeach
  </div>
</section>

<div class="grid-cols-4 hidden"></div>