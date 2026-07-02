<?php /* Template Name: Contract Vehicles */ get_header(); ?>
<main>
  <section class="page-hero"><div class="container"><h1>Contract Vehicles & Certifications</h1><p>Procurement-ready access to GCS capabilities through major federal contract vehicles.</p></div></section>
  <section class="section"><div class="container">
    <div class="section-head"><h2>Company Certifications</h2><p>Core socioeconomic and quality credentials.</p></div>
    <div class="vehicle-grid"><div class="vehicle">HUBZone</div><div class="vehicle">WOSB</div><div class="vehicle">CMMC Level 2 Certified</div><div class="vehicle">ISO 9001:2015</div></div>
  </div></section>
  <section class="section light"><div class="container">
    <div class="section-head"><h2>Contract Vehicles</h2><p>Available acquisition paths for federal customers and teaming partners.</p></div>
    <div class="vehicle-grid"><?php foreach (gcs_default_vehicles() as $vehicle) : ?><div class="vehicle"><?php echo esc_html($vehicle); ?></div><?php endforeach; ?></div>
  </div></section>
</main>
<?php get_footer(); ?>
