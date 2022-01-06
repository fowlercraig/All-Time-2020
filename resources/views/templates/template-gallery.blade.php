<div class="grid grid-cols-2 sm:grid-cols-4 sm:gap-4">
  @foreach(get_field('gallery') as $image)
    <div class="aspect-w-1 aspect-h-1"> 
      @image($image, 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
    </div>
  @endforeach
</div>