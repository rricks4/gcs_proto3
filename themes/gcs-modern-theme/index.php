<?php get_header(); ?>
<main>
  <section class="page-hero"><div class="container"><h1><?php single_post_title(); ?></h1><p>Company news, awards, and insights.</p></div></section>
  <section class="section"><div class="container post-list">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="post-card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(get_the_excerpt()); ?></p></article>
    <?php endwhile; else: ?><p>No posts found.</p><?php endif; ?>
  </div></section>
</main>
<?php get_footer(); ?>
