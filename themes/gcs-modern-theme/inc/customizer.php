<?php
if (!defined('ABSPATH')) { exit; }
function gcs_customize_register($wp_customize) {
  $wp_customize->add_section('gcs_home', array('title'=>'GCS Homepage Content','priority'=>30));
  $fields = array(
    'hero_eyebrow'=>array('Federal IT & Professional Services','Hero Eyebrow'),
    'hero_headline'=>array('Mission-Critical IT Services for Government','Hero Headline'),
    'hero_subheadline'=>array('GCS delivers secure IT, cybersecurity, software engineering, cloud, and mission support services to defense and civilian agencies across the federal government.','Hero Subheadline')
  );
  foreach ($fields as $key=>$data) {
    $wp_customize->add_setting($key, array('default'=>$data[0], 'sanitize_callback'=>'sanitize_text_field'));
    $wp_customize->add_control($key, array('label'=>$data[1], 'section'=>'gcs_home', 'type'=>'text'));
  }
}
add_action('customize_register','gcs_customize_register');
