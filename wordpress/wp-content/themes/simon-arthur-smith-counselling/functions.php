<?php

function sas_register_styles () {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sas-main', get_template_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'sas_register_styles');

function sas_register_scripts () {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('sas-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'sas_register_scripts');