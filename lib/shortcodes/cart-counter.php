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

	// \ob_start();
	

	$cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
	$cart_url = wc_get_cart_url();  // Set Cart URL

	?>
	<li><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
	<?php
	if ( $cart_count > 0 ) {
	?>
		<span class="cart-contents-count"><?php echo $cart_count; ?></span>
	<?php
	}

	return \ob_get_clean();
}



