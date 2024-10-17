<?php
function my_simple_theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    
    // Enqueue custom CSS file
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');
    
    // Enqueue custom JS file if needed (optional)
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_simple_theme_enqueue_styles');
?>