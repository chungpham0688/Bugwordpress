<?php
add_action('after_setup_theme', function () {
        require_once get_theme_file_path('inc/merlin/includes/base/class-custom-shapes.php');
    });

add_action('after_setup_theme', function () {
        require_once get_theme_file_path('inc/merlin/includes/product/class-wc-product-labels.php');
    });

add_action('after_setup_theme', function () {
     require_once get_theme_file_path('inc/merlin/vendor/autoload.php');
     require_once get_theme_file_path('inc/merlin/class-merlin.php');
    require_once get_theme_file_path('inc/merlin-config.php');
if (class_exists('Pavo_CPT')) {
                $files = glob(trailingslashit(get_template_directory()) . 'inc/core/*.php');
                foreach ($files as $file) {
                    require $file;
                }
            }
});

### Version 1.0.1
- Resolve Outdated WooCommerce 9.7.0 Issues
- Updated theme compatibility with WordPress 6.8
