<?php if (!defined('ABSPATH')) { exit; } ?>
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/gcs-logo.png'); ?>" alt="GCS">
      <p style="margin-top:16px;max-width:460px;">Mission-critical IT, cybersecurity, engineering, and professional services for federal agencies.</p>
    </div>
    <div>
      <h4>Company</h4>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/capabilities')); ?>">Capabilities</a></li>
        <li><a href="<?php echo esc_url(home_url('/customers')); ?>">Customers</a></li>
        <li><a href="<?php echo esc_url(home_url('/contract-vehicles')); ?>">Contract Vehicles</a></li>
        <li><a href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a></li>
      </ul>
    </div>
    <div>
      <h4>Corporate Information</h4>
      <p>UEI: W3BEMK548CF3</p>
      <p>CAGE: 1PJR2</p>
      <p>Headquarters: Harvey, LA</p>
      <p>Additional Offices: Stennis, MS and St. Louis, MO</p>
    </div>
  </div>
  <div class="container footer-bottom">© <?php echo date('Y'); ?> Global Commerce and Services, LLC. All rights reserved.</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
