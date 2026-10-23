<?php
/**
 * The single master template for all pages
 *
 * @package Empralidad_Proximamente
 */

get_header();

$image_val = get_theme_mod('emp_proximamente_image');
$image_url = '';

if (!empty($image_val)) {
    if (is_numeric($image_val)) {
        $image_url = wp_get_attachment_url($image_val);
    } else {
        $image_url = $image_val;
    }
}

if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/img/default.png';
}
?>

<main class="emp-proximamente-wrapper" role="main">
  <div class="emp-proximamente-box">
    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="emp-proximamente-img" />
  </div>
</main>

<?php
get_footer();
