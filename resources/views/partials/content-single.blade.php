<article @php post_class() @endphp>
  <header>

    <?php if ( has_post_thumbnail() ) : $caption = get_post(get_post_thumbnail_id())->post_excerpt; ?>
    <figure class="mb-6">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
      <?php if ( $caption ) : ?>
      <figcaption class="text-xs py-2">
        <?php echo $caption ?>
      </figcaption>
      <?php endif; ?>
    </figure>
    <?php endif; ?>

    <h2 class="entry-title font-sans text-sm uppercase tracking-widest font-medium mb-6">
      <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
    </h2>
  </header>
  <div class="entry-summary text-sm leading-loose mb-10">
    @php the_content() @endphp
  </div>
</article>
