<?php
/**
 * Filters
 *
 * @package blockera
 * @since 0.0.1
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 0.0.1
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'blockera' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 0.0.1
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '&hellip;';
	}
);