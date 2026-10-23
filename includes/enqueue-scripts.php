<?php
/**
 * Enqueue scripts and styles
 *
 * @package Empralidad_Proximamente
 */

if (!defined('ABSPATH')) {
    exit;
}

function emp_proximamente_enqueue_assets() {
    $css_file = get_stylesheet_directory() . '/style.css';
    $version  = file_exists($css_file) ? filemtime($css_file) : wp_get_theme()->get('Version');
    wp_enqueue_style('emp-proximamente-main-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'emp_proximamente_enqueue_assets');

// Remove unnecessary core blocks and external stylesheets to ensure maximum performance and clean markup
function emp_proximamente_deregister_unneeded() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'emp_proximamente_deregister_unneeded', 100);
