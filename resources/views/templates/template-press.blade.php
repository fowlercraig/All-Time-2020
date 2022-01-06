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

<div class="xl:p-20">
  <div class="lg:grid lg:grid-cols-2">
    <div data-aos="fade-up" class="aspect-w-16 aspect-h-9 relative bg-gray-300 {{ $order }}">
      <div class="absolute inset-0">
        @image(get_post_thumbnail_id(), 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
      </div>
    </div>
    <div data-aos="fade-up" class="relative bg-black text-white">
      <div class="{{ $items }}">
        <div class="p-4 sm:p-8 xl:p-16 w-full text-center sm:text-left">
          <div class="prose prose-sm sm:prose text-white sm:text-white">@content</div>
        </div>
      </div>
    </div>
  </div>
</div>