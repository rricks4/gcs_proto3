<?php get_header(); ?>
<main>
  <section class="page-hero"><div class="container"><h1><?php the_title(); ?></h1><p><?php echo esc_html(get_the_date()); ?></p></div></section>
  <section class="section"><div class="container prose"><?php while(have_posts()): the_post(); the_content(); endwhile; ?></div></section>
</main>
<?php get_footer(); ?>
