<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title font-sans text-sm uppercase tracking-widest font-medium">
      <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
    </h2>
  </header>
  <div class="entry-summary text-sm leading-6 mb-10">
    @php the_content() @endphp
  </div>
</article>
