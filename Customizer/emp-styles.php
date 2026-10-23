<?php
/**
 * Dynamic styles generated from Customizer
 *
 * @package Empralidad_Proximamente
 */

$bg_color = get_theme_mod('emp_proximamente_bg_color', '#0f172a');
?>
<style id="emp-proximamente-dynamic-css" type="text/css">
  :root {
    --emp-proximamente-bg: <?php echo esc_attr($bg_color); ?>;
  }
  html, body, .emp-proximamente-wrapper {
    background-color: var(--emp-proximamente-bg) !important;
  }
</style>
