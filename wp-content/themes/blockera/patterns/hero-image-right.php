<?php
/**
 * Title: Blockera Hero Image Right
 * Slug: blockera/hero-image-right
 * Categories: hero
 * 
 */
?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"calc(var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dv-spacing, 1.25rem) *3)","bottom":"calc(var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dv-spacing, 1.25rem) *2)"}}},"layout":{"inherit":true}} -->
<main class="wp-block-group alignfull" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *3);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2)"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":1,"textColor":"gray-900","fontSize":"text-6xl"} -->
<h1 class="has-text-align-left has-gray-900-color has-text-color has-text-6-xl-font-size"><?php _e('Create incredible website for your business', 'blockera'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"text-base"} -->
<p class="has-text-align-left has-text-base-font-size"><?php _e('Here at Blockera we focus on markets where innovation can unlock long-term value and drive economic growth.', 'blockera'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background"><?php _e('Learn More', 'blockera'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php _e('Sign Up', 'blockera'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"Primary-Light","className":"is-style-default","layout":{"inherit":false}} -->
<div class="wp-block-column is-style-default has-primary-light-background-color has-background"><!-- wp:image {"align":"right","sizeSlug":"large"} -->
<figure class="wp-block-image alignright size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-01.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->