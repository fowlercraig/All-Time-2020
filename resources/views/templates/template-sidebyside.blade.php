@set($align,get_field('alignment'))
@set($items,'items-center')

@if($align == 'centered')
  @set($items,'items-center')
@endif

@if($align == 'bottom')
  @set($items,'items-center sm:items-end')
@endif

@if($align == 'top')
  @set($items,'items-center sm:items-start')
@endif

<div class="grid md:grid-cols-2 gap-4">
  <div data-aos="fade-up" class="aspect-w-4 aspect-h-3 md:aspect-w-1 md:aspect-h-1 relative bg-gray-300 {{ $order }}">
    <div class="absolute inset-0">
      @image(get_post_thumbnail_id(), 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
    </div>
  </div>
  <div data-aos="fade-up" class="aspect-w-1 aspect-h-1 relative bg-brand-beige">
    <div class="md:absolute inset-0 content flex {{ $items }}">
      <div class="p-4 sm:p-8 xl:p-16 w-full text-center sm:text-left">
        @content
      </div>
    </div>
  </div>
</div>
