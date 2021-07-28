<?php

function site_setup() {
    add_theme_support('post-thumbnails'); //アイキャッチ画像ON
}
add_action('after_setup_theme', 'site_setup');

function add_css_js_files() {
  //cssの読み込み
  wp_enqueue_style('reset-css', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
  wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');

  //WordPress内蔵のjQueryの無効化
  wp_deregister_script('jquery');

  //JavaScriptの読み込み
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js');
  wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');
  wp_enqueue_script('slick-script', get_template_directory_uri().'/js/slick.min.js');
}

//action hook
add_action('wp_enqueue_scripts', 'add_css_js_files');



?>
