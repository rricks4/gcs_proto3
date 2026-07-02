<?php /* Template Name: Customers */ get_header(); ?>
<main>
  <section class="page-hero"><div class="container"><h1>Customers</h1><p>GCS supports defense and civilian agencies across the federal government.</p></div></section>
  <section class="section"><div class="container"><div class="vehicle-grid">
    <?php foreach (gcs_default_customers() as $customer) : ?><div class="vehicle"><?php echo esc_html($customer); ?></div><?php endforeach; ?>
  </div></div></section>
</main>
<?php get_footer(); ?>
