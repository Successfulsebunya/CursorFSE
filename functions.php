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
 * Set up theme support.
 *
 * @since 1.5.0
 *
 * @return void
 */
function cursorfse_setup() {
	add_theme_support(
		'html5',
		array(
			'navigation-widgets',
		)
	);
}
add_action( 'after_setup_theme', 'cursorfse_setup' );

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

/**
 * Register custom block features.
 *
 * @since 1.0.0
 *
 * @return void
 */
function cursorfse_register_block_features() {
	register_block_pattern(
		'cursorfse/hero-section',
		array(
			'title'       => __( 'Hero Section', 'cursorfse' ),
			'description' => _x( 'A simple hero section with an accessible heading and supporting text.', 'Block pattern description', 'cursorfse' ),
			'content'     => '<!-- wp:cover {"overlayColor":"contrast","dimRatio":60,"minHeight":300} --><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">Welcome to CursorFSE</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Create a clean, flexible WordPress site with blocks.</p><!-- /wp:paragraph --></div><!-- /wp:cover -->',
			'categories'  => array( 'featured' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'fancy-button',
			'label' => __( 'Fancy Button', 'cursorfse' ),
		)
	);
}
add_action( 'init', 'cursorfse_register_block_features' );
