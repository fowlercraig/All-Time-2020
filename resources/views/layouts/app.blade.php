@include('partials.header')

<div class="font-brand">
  <main class="main bg-brand-beige">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')
