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
            <span class="list__item">Coffee</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Breakfast</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Sandwiches</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Pizza</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Real Wine</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">House Made Bread</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Staples</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Speciality Items</span>
            <span class="list__item">&rarr;</span>
            <span class="list__item">Farmers Market</span>
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