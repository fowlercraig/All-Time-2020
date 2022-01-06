<div x-data="{ notification : true, subscribe : false }" class="sm:px-4">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @if(get_field('show_notification',5))
    @include('partials.notification')
  @endif

  @include('partials.header')

  <main id="main" class="space-y-4">
    @yield('content')
  </main>

  @include('partials.footer')
</div>
