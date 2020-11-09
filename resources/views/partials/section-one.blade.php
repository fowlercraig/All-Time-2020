@php $images = get_field('hero_gallery'); @endphp

@if($images)
  <section class="relative">
    <div class="absolute inset-0 z-20 p-4">
      <img class="block w-full h-full object-contain object-center" src="@asset('images/alltime_logo.svg')" alt="{{ $siteName }}">
    </div>
    <div class="gallery-images">
      @foreach($images as $image)
      <div class="gallery-image h-70vh md:h-80vh bg-black">
        @php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'w-full h-full object-cover' ) ) @endphp
      </div>
      @endforeach
    </div>
  </section>
@endif