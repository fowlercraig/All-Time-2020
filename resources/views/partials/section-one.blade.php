@php $images = get_field('hero_gallery'); @endphp

@if($images)
  <section class="relative">
    <div class="gallery-images">
      @foreach($images as $image)
      <div class="gallery-image h-70vh md:h-80vh bg-black">
        @php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'w-full h-full object-cover' ) ) @endphp
      </div>
      @endforeach
    </div>
  </section>
@endif