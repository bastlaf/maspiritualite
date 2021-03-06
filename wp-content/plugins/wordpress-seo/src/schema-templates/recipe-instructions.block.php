<?php
/**
 * Recipe instructions block schema template.
 *
 * @package Yoast\WP\SEO\Schema_Templates
 */

use Yoast\WP\SEO\Schema_Templates\Assets\Icons;
// phpcs:disable WordPress.Security.EscapeOutput -- Reason: The Icons contains safe svg.
?>

{{block name="yoast/recipe-instructions" title="<?php \esc_attr_e( 'Recipe instructions', 'wordpress-seo' ); ?>" description="<?php \esc_attr_e( 'The steps of making the recipe, in the form of an ordered list with HowToStep and/or HowToSection items.', 'wordpress-seo' ); ?>" icon="<?php echo Icons::heroicons_book_open(); ?>" category="yoast-structured-data-blocks" parent=[ "yoast/recipe" ] supports={"multiple": false} }}
<div class={{class-name}}>
	{{heading name="title" defaultHeadingLevel=3 placeholder="<?php \esc_attr_e( 'Instructions title', 'wordpress-seo' ); ?>" default="<?php \esc_attr_e( 'Instructions', 'wordpress-seo' ); ?>" }}
	{{rich-text name="instructions" tag="ol" multiline="li" placeholder="<?php \esc_attr_e( 'Enter step', 'wordpress-seo' ); ?>" }}
</div>
