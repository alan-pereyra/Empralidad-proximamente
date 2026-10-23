<?php
/**
 * Header template
 *
 * @package Empralidad_Proximamente
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="<?php echo esc_attr(get_theme_mod('emp_proximamente_bg_color', '#0f172a')); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('emp-proximamente-body'); ?>>
  <?php wp_body_open(); ?>
