<div x-data="{ notification : false, subscribe : false }" class="sm:px-4">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @if(get_field('show_notification',5))
    @include('partials.notification')
  @endif
  
  @include('partials.header-bar')
  @include('partials.header')

  <main id="main" class="pb-6 space-y-4 bg-brand-beige">
    <div class="prose prose-sm mx-auto">
      @yield('content')
    </div>
  </main>

  @include('partials.footer')

</div>