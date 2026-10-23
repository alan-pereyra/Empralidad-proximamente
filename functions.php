<?php
/**
 * Empralidad - Proximamente Theme Functions
 *
 * @package Empralidad_Proximamente
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// 0) Includes
require_once get_template_directory() . '/Customizer/emp-customizer.php';
require_once get_template_directory() . '/includes/enqueue-scripts.php';

// 1) Dinamics Css
function emp_proximamente_theme_customize_css() {
    include get_template_directory() . '/Customizer/emp-styles.php';
}
add_action('wp_head', 'emp_proximamente_theme_customize_css', 100);

// 2) Theme support setup
function emp_proximamente_setup() {
    // Title tag support
    add_theme_support('title-tag');

    // Disable block templates and unnecessary features to enforce single clean coming-soon layout
    remove_theme_support('block-templates');
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'emp_proximamente_setup');

// 3) Bloquear cualquier otra plantilla de pagina en el administrador (solo una posible)
add_filter('theme_page_templates', '__return_empty_array');

// 4) Forzar que absolutamente cualquier vista de la web use el mismo layout de index.php (un solo tipo de pagina en toda la web)
add_filter('template_include', function($template) {
    if (!is_admin()) {
        $single_layout = get_template_directory() . '/index.php';
        if (file_exists($single_layout)) {
            return $single_layout;
        }
    }
    return $template;
}, 9999);
