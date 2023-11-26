<?php
/**
 * Title: 404
 * Slug: blockera/404
 * Categories: text
 * inserter: no
 *
 * @package blockera
 * @since 0.0.1
 */

?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"calc(var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dv-spacing, 1.25rem) *3)","bottom":"calc(var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dv-spacing, 1.25rem) *2)"}}},"layout":{"inherit":true}} -->
<main class="wp-block-group alignfull" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *3);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2)"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"primary","className":"is-style-default","fontSize":"small"} -->
<h5 class="has-text-align-center is-style-default has-primary-color has-text-color has-small-font-size"><?php _e('404', 'blockera'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","textColor":"foreground","className":"is-style-default","fontSize":"x-large"} -->
<h2 class="has-text-align-center is-style-default has-foreground-color has-text-color has-x-large-font-size">
<?php _e('Page not found', 'blockera'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"Paragraph"} -->
<p class="has-text-align-center has-paragraph-color has-text-color"><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'blockera'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","backgroundColor":"primary","textColor":"background"} /--></main>
<!-- /wp:group -->
