<?php

/**
 * Enqueue theme stylesheet
 */
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );

function portfolio_enqueue_styles() {
    wp_enqueue_style(
        'portfolio-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

/**
 * Enqueue editor CSS
 */


add_action('after_setup_theme', 'portfolio_setup');

function portfolio_setup() {
    add_editor_style(get_stylesheet_uri());
    get_theme_file_uri('inc/css/editor.css');
}

/**
 * Enqueue theme JS
 */
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_scripts' );

function portfolio_enqueue_scripts() {
    wp_enqueue_script(
        'portfolio_script',
        get_theme_file_path( 'inc/theme.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
