<!doctype html>
<html class="bg-orange-lightest" {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document" x-data="{ ...dropdown(), ...news() }">
      <div class="content">
        <?php if(is_front_page()): ?>
        <main id="swup" class="main transition-fade">
        <?php else: ?>
        <main id="swup" class="main max-w-2xl px-4 pb-6 mx-auto transition-fade font-serif text-grey-darkest">
        <?php endif; ?>
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script>
      $(document).ready(function(){
        $.cookie('open', 'true');
      });
      var value = $.cookie(key);
      function dropdown() {
        return {
          open: true,
        }
      }
      function news() {
        return {
          news: false,
        }
      }
    </script>
  </body>
</html>
