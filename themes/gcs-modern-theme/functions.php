<?php
if (!defined('ABSPATH')) { exit; }

define('GCS_THEME_VERSION', '1.0.0');

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/acf-json.php';

function gcs_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array('height'=>100,'width'=>360,'flex-height'=>true,'flex-width'=>true));
  register_nav_menus(array('primary'=>'Primary Menu','footer'=>'Footer Menu'));
}
add_action('after_setup_theme','gcs_setup');

function gcs_assets() {
  wp_enqueue_style('gcs-fonts','https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap',array(),null);
  wp_enqueue_style('gcs-main',get_template_directory_uri().'/assets/css/main.css',array(),GCS_THEME_VERSION);
  wp_enqueue_script('gcs-main',get_template_directory_uri().'/assets/js/main.js',array(),GCS_THEME_VERSION,true);
}
add_action('wp_enqueue_scripts','gcs_assets');

function gcs_get($key,$default='') {
  if (function_exists('get_field')) {
    $value = get_field($key);
    if ($value !== null && $value !== false && $value !== '') return $value;
  }
  $value = get_theme_mod($key, $default);
  return $value ?: $default;
}

function gcs_default_capabilities() {
  return array(
    array('title'=>'Cybersecurity','text'=>'CMMC, RMF, compliance, vulnerability management, and secure operations.'),
    array('title'=>'Cloud & Infrastructure','text'=>'Enterprise systems administration, cloud, hybrid infrastructure, and service operations.'),
    array('title'=>'Software & Data','text'=>'Application support, databases, automation, Power Platform, and data-driven solutions.'),
    array('title'=>'Program Management','text'=>'Disciplined program execution, governance, quality, staffing, and reporting.'),
    array('title'=>'Mission Support','text'=>'Administrative, operational, logistics, and professional services supporting federal missions.'),
    array('title'=>'Engineering Services','text'=>'Technical engineering, lifecycle support, documentation, analysis, and modernization.'),
  );
}

function gcs_default_vehicles() {
  return array('OASIS+','GSA MAS','SeaPort NxG','SEWP VI','MDA SHIELD');
}

function gcs_default_customers() {
  return array('Department of Defense','Department of the Navy','U.S. Air Force','U.S. Coast Guard','USDA','DISA','NASA','DOJ','DOT');
}
