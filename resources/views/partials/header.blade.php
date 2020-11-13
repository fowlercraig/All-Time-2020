<header class="banner flex items-center sticky top-0 uppercase bg-white font-brand text-gray-700 text-sm md:text-lg z-50 shadow md:shadow-none">
  <div class="w-full flex items-center justify-between ">

    <a title="{{ $siteName }}" class="brand px-4 py-3 flex-none" href="{{ home_url('/') }}">
      Almost always open
    </a>

    <div class="w-full overflow-hidden relative" id="containerElem">
        <div class="marquee">
          <div class="hidden md:block" id="list">
            <span class="list__item">Market Place</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Coffee &amp; Breakfast</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Restaurant</span>
          </div>
        </div>
    </div>
    
    @include('components.button')

  </div>
</header>


<script>
  new Marquee('list', {
    direction: 'rtl',
    speed: 1,
  });
</script>