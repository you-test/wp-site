<?php

function add_css_js_files() {
  
  //css google font
  wp_enqueue_style('reset', get_template_directory_uri().'/css_sass/reset.css');
  wp_enqueue_style('style', get_template_directory_uri().'/style.css');
  wp_enqueue_style('mystyle', get_template_directory_uri().'/css_sass/mystyle.css');

  //delete jQuery
  wp_deregister_script('jquery');

  //cdn jQuery, script
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
  wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');
}
add_action('wp_enqueue_scripts', 'add_css_js_files');

function site_setup() {
  //eye catch image ON
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'site_setup');