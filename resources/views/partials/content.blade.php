<article @php(post_class())>
  <header>
    <h2 class="entry-title uppercase text-brand">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
  </header>

  <div class="entry-summary">
    @content
  </div>
</article>
