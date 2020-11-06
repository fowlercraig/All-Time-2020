@php $section = get_field('section_5') @endphp

<section class="relative py-4">
  <div class="px-5">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation', 
        'menu_class' => 'nav text-sm md:text-base uppercase md:flex justify-between tracking-wide items-center space-y-1 md:space-y-0 underline md:no-underline text-center', 
        'echo' => false]) 
      !!}
    @endif
  </div>
</section>
