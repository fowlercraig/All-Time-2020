<div class="aspect-w-4 aspect-h-3 md:aspect-w-16 md:aspect-h-9 relative">
  <div class="absolute inset-0">
    @image(get_post_thumbnail_id(), 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
  </div>
  <div class="absolute inset-0 flex flex-wrap p-8 xl:p-16 text-brand">
    <div class="w-1/2 self-start">
      @svg('images/all', 'block w-full h-full object-contain object-center', ['aria-label' => 'Logo'])
    </div>
    <div class="w-1/2 self-end">
      @svg('images/time', 'block w-full h-full object-contain object-center', ['aria-label' => 'Logo'])
    </div>
  </div>
</div>
