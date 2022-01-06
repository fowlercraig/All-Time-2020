<div data-aos="fade-up" class="aspect-w-2 aspect-h-1 bg-gray-100 relative">
  <div class="absolute inset-0">
    @image(get_post_thumbnail_id(), 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
  </div>
  <div class="absolute inset-0 flex items-center">
    <div class="p-8 xl:p-16 max-w-full">
      <div class="content space-y-2">
        @content
      </div>
    </div>
  </div>
</div>
