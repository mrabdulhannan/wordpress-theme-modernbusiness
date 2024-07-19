<?php
// add title support
add_theme_support('title-tag');

// add css and js
add_action('wp_enqueue_scripts', 'mb_scripts');
function mb_scripts()
{
    // CSS
    wp_enqueue_style('mb-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), '1.0');
    wp_enqueue_style('mb-styles', get_theme_file_uri('/css/styles.css'), array('mb-bootstrap-icons'), '1.0');
    // JS
    // The Purpose of true word is to load in footer
    wp_enqueue_script('mb-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('mb-scripts', get_theme_file_uri('/js/scripts.js'), array('mb-bootstrap'), '1.0', true);
}
