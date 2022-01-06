@set($align,get_field('alignment'))
@set($items,'items-center')

@if($align == 'centered')
  @set($items,'items-center')
@endif

@if($align == 'bottom')
  @set($items,'items-end')
@endif

@if($align == 'top')
  @set($items,'items-start')
@endif

<div class="grid md:grid-cols-2 gap-4">
  <div data-aos="fade-up" class="aspect-w-4 aspect-h-3 md:aspect-w-1 md:aspect-h-1 relative bg-gray-300 {{ $order }}">
    <div class="absolute inset-0">
      @image(get_post_thumbnail_id(), 'full', ['class' => 'w-full h-full object-cover', 'alt' => ''])
    </div>
  </div>
  <div data-aos="fade-up" class="aspect-w-1 aspect-h-1 relative bg-brand-beige text-xs sm:text-sm">
    <div class="md:absolute inset-0 content flex">
      <div class="p-4 sm:p-8 xl:p-16 w-full flex flex-col">
        <div class="grid grid-cols-2">
          <div class="text-left">@field('top_left')</div>
          <div class="text-right">@field('top_right')</div>
        </div>
        <div class="w-full flex-grow text-center justify-center flex items-center">
          <div class="space-y-3 w-full max-w-sm">
            <h1 class="text-lg lg:text-3xl">{{ bloginfo('description') }}</h1>
            @include('components.cta',[
              'class' => 'max-w-xs mx-auto',
              'href'  => get_field('center',8)['url'],
              'text'  => get_field('center',8)['title'],
            ])
          </div>
        </div>
        <div class="grid grid-cols-2">
          <div class="text-left">@field('bottom_left')</div>
          <div class="text-right">
            <button @click="subscribe = true" class="rounded-full text-sm uppercase border border-black px-4 py-2 hover:bg-black hover:text-white">Join the Newsletter</button><br>
            <span class="text-xs">or <a href="/newsletter" class="underline">View the Archive</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
