<?php /* Template Name: Capabilities */ get_header(); ?>
<main>
  <section class="page-hero"><div class="container"><h1>Capabilities</h1><p>Secure IT, cybersecurity, engineering, and professional services supporting federal mission outcomes.</p></div></section>
  <section class="section"><div class="container"><div class="cards">
    <?php foreach (gcs_default_capabilities() as $cap) : ?><article class="card"><div class="icon">◆</div><h3><?php echo esc_html($cap['title']); ?></h3><p><?php echo esc_html($cap['text']); ?></p></article><?php endforeach; ?>
  </div></div></section>
</main>
<?php get_footer(); ?>
