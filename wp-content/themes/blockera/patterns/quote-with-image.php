<?php
/**
 * Title: Quote and image
 * Slug: blockera/quote-with-image
 * Categories: featured
 * Block Types: core/image, core/quote
 *
 * @package blockera
 * @since 0.0.1
 */

?>
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p><?php _e('Add quote', 'blockera'); ?></p><cite><?php _e('Add citation', 'blockera'); ?></cite></blockquote>
<!-- /wp:quote -->
<!-- wp:image {"width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img alt="" width="200" height="200"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
