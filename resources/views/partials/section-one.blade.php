@php $images = get_field('hero_gallery'); @endphp

@if($images)
  <section class="relative bg-black">
    <div class="absolute inset-0 z-20 md:p-8">
      <img class="block w-full h-full object-contain object-center" src="@asset('images/alltime_logo.svg')" alt="{{ $siteName }}">
    </div>
    <div class="absolute inset-0">
      @foreach($images as $image)
      @php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'w-full h-full object-cover' ) ) @endphp
      @endforeach
    </div>
    <div class="aspect-ratio-4/3 lg:aspect-ratio-21/9"></div>
  </section>
@endif