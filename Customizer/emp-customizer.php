<?php
/**
 * Customizer configuration for Empralidad-proximamente
 *
 * @package Empralidad_Proximamente
 */

if (!defined('ABSPATH')) {
    exit;
}

function emp_proximamente_customize_register($wp_customize) {
    // 1) Remover todas las secciones y paneles por defecto de WordPress para que SOLO quede el color y la imagen
    $default_sections = array(
        'title_tagline',
        'colors',
        'header_image',
        'background_image',
        'static_front_page',
        'custom_css'
    );
    foreach ($default_sections as $sec) {
        $wp_customize->remove_section($sec);
    }

    $default_panels = array(
        'nav_menus',
        'widgets'
    );
    foreach ($default_panels as $pan) {
        $wp_customize->remove_panel($pan);
    }

    // 2) Única sección del tema: Próximamente
    $wp_customize->add_section('emp_proximamente_section', array(
        'title'       => __('Próximamente', 'empralidad-proximamente'),
        'priority'    => 1,
        'description' => __('Personalización exclusiva: Color de fondo e imagen central cuadrada.', 'empralidad-proximamente')
    ));

    // Opción 1: Color de fondo
    $wp_customize->add_setting('emp_proximamente_bg_color', array(
        'default'           => '#0f172a',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_proximamente_bg_color_control', array(
        'label'       => __('Color de Fondo', 'empralidad-proximamente'),
        'description' => __('Elige el color de fondo de la web.', 'empralidad-proximamente'),
        'section'     => 'emp_proximamente_section',
        'settings'    => 'emp_proximamente_bg_color',
        'priority'    => 10
    )));

    // Opción 2: Imagen central (formato cuadrado de tamaño fijo)
    $wp_customize->add_setting('emp_proximamente_image', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_proximamente_image_control', array(
        'label'       => __('Imagen Central (Cuadrada)', 'empralidad-proximamente'),
        'description' => __('Sube una imagen. Se recortará automáticamente en formato cuadrado 1:1 de tamaño fijo.', 'empralidad-proximamente'),
        'section'     => 'emp_proximamente_section',
        'settings'    => 'emp_proximamente_image',
        'width'       => 500,
        'height'      => 500,
        'flex_width'  => false,
        'flex_height' => false,
        'priority'    => 20
    )));
}
add_action('customize_register', 'emp_proximamente_customize_register', 999);
