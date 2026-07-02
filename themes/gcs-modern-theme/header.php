<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
        <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/gcs-logo.png'); ?>" alt="GCS">
      <?php } ?>
    </a>
    <button class="mobile-toggle" type="button" aria-label="Open menu">Menu</button>
    <nav class="nav" id="site-nav">
      <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu(array('theme_location'=>'primary','container'=>false,'items_wrap'=>'%3$s','depth'=>1));
      } else {
        echo '<a href="'.esc_url(home_url('/capabilities')).'">Capabilities</a>';
        echo '<a href="'.esc_url(home_url('/customers')).'">Customers</a>';
        echo '<a href="'.esc_url(home_url('/contract-vehicles')).'">Contract Vehicles</a>';
        echo '<a href="'.esc_url(home_url('/why-gcs')).'">Why GCS</a>';
        echo '<a href="'.esc_url(home_url('/careers')).'">Careers</a>';
        echo '<a class="nav-cta" href="'.esc_url(home_url('/contact')).'">Contact</a>';
      }
      ?>
    </nav>
  </div>
</header>
