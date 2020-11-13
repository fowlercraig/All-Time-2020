<header class="banner flex items-center sticky top-0 uppercase bg-white font-brand text-gray-700 text-sm md:text-lg z-50 shadow md:shadow-none">
  <div class="w-full flex items-center justify-between ">

    <a title="{{ $siteName }}" class="brand px-4 py-3 flex-none" href="{{ home_url('/') }}">
      Almost always open
    </a>

    <div class="w-full overflow-hidden relative bg-orange-600" id="containerElem">
      <ul class="hidden xl:flex items-center space-x-2 list" id="list">
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Market Place</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Coffee &amp; Breakfast</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
        <li class="list__item flex-none">&rarr;</li>
        <li class="list__item flex-none">Restaurant</li>
      </ul>
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