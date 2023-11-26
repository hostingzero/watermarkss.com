<?php
/**
 * Block patterns
 *
 * @package blockera
 * @since 0.0.1
 */

/**
 * Display the search term in the heading on the search page.
 * Todo: Remove when the query title block is updated to work for the search page.
 *
 * @since 0.0.1
 *
 * @return string Search page title
 */
function blockera_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'blockera' ), esc_html( $search_term ) ) : __( 'Search results', 'blockera' );
	} else {
		return __( 'Search results placeholder title', 'blockera' );
	}
}

/**
 * Display a link to the privacy policy page, if one is published.
 *
 * @since 0.0.1
 *
 * @return string Link to the privacy policy page, if one is published.
 */
function blockera_privacy() {
	if ( get_the_privacy_policy_link() ) {
		return '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
	}
}

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 0.0.1
 *
 * @return void
 */
function blockera_register_block_patterns() {

	/**
	 * Register example block pattern categories and patterns.
	 *
	 * @since 0.0.1
	 */

	// Register "Images" block pattern category.
	register_block_pattern_category(
		'blockera/images',
		array( 'label' => esc_html__( 'Images', 'blockera' ) )
	);

	// Register "Hero" block pattern category.
	register_block_pattern_category(
		'blockera/hero',
		array( 'label' => esc_html__( 'Hero', 'blockera' ) )
	);

	// Register "Features" block pattern category.
	register_block_pattern_category(
		'blockera/features',
		array( 'label' => esc_html__( 'Features', 'blockera' ) )
	);

}


/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 *
 * @since 0.0.1
 *
 * @return void
 */
function blockera_unregister_patterns() {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'header' );
}
add_action( 'init', 'blockera_unregister_patterns', 10 );

// Register block patterns and categories.
add_action( 'init', 'blockera_register_block_patterns', 10 );
