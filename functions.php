<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cursorfse
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function cursorfse_styles() {
	wp_enqueue_style(
		'cursorfse-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'cursorfse_styles' );


// Register a custom block pattern and block style
function cursorfse_register_block_features() {
    // Block Pattern
    register_block_pattern(
        'cursorfse/hero-section',
        array(
            'title'       => __( 'Hero Section', 'cursorfse' ),
            'description' => _x( 'A hero section with a heading and button.', 'Block pattern description', 'cursorfse' ),
            'content'     => '<!-- wp:cover {"overlayColor":"primary","minHeight":300} --><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">Welcome to CursorFSE</h2><!-- /wp:heading --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Get Started</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:cover -->',
            'categories'  => array( 'featured' ),
        )
    );

    // Block Style
    register_block_style(
        'core/button',
        array(
            'name'  => 'fancy-button',
            'label' => __( 'Fancy Button', 'cursorfse' ),
        )
    );
}
add_action( 'init', 'cursorfse_register_block_features' );
