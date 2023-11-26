<?php
/**
 * Block styles.
 *
 * @package blockera
 * @since 0.0.1
 */

/**
 * Register block styles
 *
 * @since 0.0.1
 *
 * @return void
 */
function blockera_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'blockera-sticky',
			'label' => __( 'Sticky header', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blockera-flat-button',
			'label' => __( 'Flat button', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blockera-button-shadow',
			'label' => __( 'Button with shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'blockera-navigation-button',
			'label' => __( 'Button style', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'blockera-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'blockera-list-underline',
			'label' => __( 'Underlined list items', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'blockera-text-shadow',
			'label' => __( 'Text shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'blockera-text-shadow',
			'label' => __( 'Text shadow', 'blockera' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'blockera-text-shadow',
			'label' => __( 'Text shadow', 'blockera' ),
		)
	);
}
add_action( 'init', 'blockera_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 0.0.1
 *
 * @return void
 */
function blockera_unregister_block_style() {
	wp_enqueue_script(
		'blockera-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BLOCKERA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blockera_unregister_block_style' );
