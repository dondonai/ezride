<?php
/**
 * Genesis Starter Theme.
 *
 * @package   SeoThemes\GenesisStarterTheme
 * @link      https://genesisstartertheme.com
 * @author    Dondonai Reballos
 * @copyright Copyright © 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace SeoThemes\GenesisStarterTheme\Shortcodes;

\add_shortcode( 'cart-counter', __NAMESPACE__ . '\cart_counter_shortcode' );
/**
 * Display cart counter.
 *
 * @since 3.5.0
 *
 * @param array $atts Shortcode arguments.
 *
 * @return mixed
 */
function cart_counter_shortcode( $atts ) {
	if ( \is_admin() ) {
		return false;
	}

	\ob_start();
	
	?>

	<div class="cart__counter">
		<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
		<?php echo sprintf ( _n( '<i class="fa fa-shopping-cart"></i> <span class="cart__count">%d</span>', 
			'<i class="fa fa-shopping-cart"></i> <span class="cart__count">%d</span>', 
			WC()->cart->get_cart_contents_count() ), 
			WC()->cart->get_cart_contents_count() ); 
		?> 
		</a>
	<?php echo WC()->cart->get_cart_total(); ?>
	</div>

	<?php

	return \ob_get_clean();
}



