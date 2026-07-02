<?php get_header(); ?>
<main>
  <section class="hero">
    <div class="container hero-inner">
      <div>
        <div class="eyebrow"><?php echo esc_html(gcs_get('hero_eyebrow','Federal IT & Professional Services')); ?></div>
        <h1><?php echo esc_html(gcs_get('hero_headline','Mission-Critical IT Services for Government')); ?></h1>
        <p><?php echo esc_html(gcs_get('hero_subheadline','GCS delivers secure IT, cybersecurity, software engineering, cloud, and mission support services to defense and civilian agencies across the federal government.')); ?></p>
        <div class="button-row">
          <a class="btn btn-primary" href="<?php echo esc_url(home_url('/capabilities')); ?>">Explore Services</a>
          <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contract-vehicles')); ?>">Contract Vehicles</a>
        </div>
      </div>
      <aside class="hero-card">
        <h3>Federal Delivery Snapshot</h3>
        <div class="metric-grid">
          <div class="metric"><strong>100+</strong><span>Employees</span></div>
          <div class="metric"><strong>DoD & Civilian</strong><span>Federal Customers</span></div>
          <div class="metric"><strong>CMMC Level 2</strong><span>Certified</span></div>
          <div class="metric"><strong>ISO 9001:2015</strong><span>Certified</span></div>
        </div>
      </aside>
    </div>
  </section>

  <section class="trust-bar">
    <div class="container trust-wrap">
      <div class="trust-title">Company Certifications & Contract Vehicles</div>
      <div class="pill-list">
        <span class="pill">HUBZone</span><span class="pill">WOSB</span><span class="pill-sep">|</span>
        <?php foreach (gcs_default_vehicles() as $vehicle) : ?><span class="pill"><?php echo esc_html($vehicle); ?></span><?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <h2>Capabilities Built for Federal Missions</h2>
        <p>GCS combines disciplined delivery, technical depth, and federal mission understanding to support secure, reliable operations.</p>
      </div>
      <div class="cards">
        <?php foreach (gcs_default_capabilities() as $cap) : ?>
          <article class="card">
            <div class="icon">◆</div>
            <h3><?php echo esc_html($cap['title']); ?></h3>
            <p><?php echo esc_html($cap['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section light">
    <div class="container split">
      <div class="image-panel" aria-hidden="true"></div>
      <div class="content">
        <h2>Modern technology delivery with federal accountability.</h2>
        <p>GCS supports defense and civilian agencies with a practical, mission-first approach to IT operations, cybersecurity, engineering, program management, and professional services.</p>
        <div class="checklist">
          <div class="check">Quality-managed delivery aligned to ISO 9001:2015 practices.</div>
          <div class="check">Secure operations supported by CMMC Level 2 certification.</div>
          <div class="check">Procurement-ready access through major federal contract vehicles.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <h2>Contract Vehicles</h2>
        <p>Accessible acquisition paths for federal IT, engineering, and professional services requirements.</p>
      </div>
      <div class="vehicle-grid">
        <?php foreach (gcs_default_vehicles() as $vehicle) : ?><div class="vehicle"><?php echo esc_html($vehicle); ?></div><?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
