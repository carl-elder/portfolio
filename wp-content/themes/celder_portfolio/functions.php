<?php

/**
 * Enqueue theme stylesheet
 */
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );

function portfolio_enqueue_styles() {
    wp_enqueue_style(
        'theme-slug-style',
        get_stylesheet_uri()
    );
}

/**
 * Enqueue theme JS
 */
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

function portfolio_scripts() {
    wp_enqueue_script(
        'portfolio_script',
        get_parent_theme_file_uri( 'inc/theme.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
