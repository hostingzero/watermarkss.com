<?php
/**
 * Block Variations
 *
 * @package blockera
 * @since 0.0.1
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 0.0.1
 *
 * @return void
 */
function blockera_register_block_variation() {
	wp_enqueue_script(
		'blockera-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		BLOCKERA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blockera_register_block_variation' );
