<?php
/**
 * Genesis Starter Theme.
 *
 * @package   SeoThemes\GenesisStarterTheme
 * @link      https://genesisstartertheme.com
 * @author    SEO Themes
 * @copyright Copyright © 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace SeoThemes\GenesisStarterTheme;

use function SeoThemes\GenesisStarterTheme\Functions\get_theme_url;

$asset_url    = \trailingslashit( get_theme_url() . 'assets' );
$google_fonts = \implode( '|', \genesis_get_config( 'google-fonts' ) );

return [
	'add'    => [
		[
			'handle' => \genesis_get_theme_handle() . '-editor',
			'src'    => $asset_url . 'js/editor.js',
			'deps'   => [ 'wp-blocks' ],
			'editor' => true,
		],
		[
			'handle'    => \genesis_get_theme_handle() . '-main',
			'src'       => $asset_url . 'js/min/main.js',
			'condition' => function () {
				return ! \genesis_is_amp();
			},
		],
		[
			'handle' => \genesis_get_theme_handle() . '-main',
			'src'    => $asset_url . 'css/main.css',
		],
		[
			'handle'    => \genesis_get_theme_handle() . '-woocommerce',
			'src'       => $asset_url . 'css/woocommerce.css',
			'condition' => function () {
				return \class_exists( 'WooCommerce' );
			},
		],
		[
			'handle'    => \genesis_get_theme_handle() . '-metaslider',
			'src'       => $asset_url . 'css/metaslider.css',
			'condition' => function () {
				return \class_exists( 'MetaSlider' );
			},
		],
		[
			'handle'    => \genesis_get_theme_handle() . '-ninjaforms',
			'src'       => $asset_url . 'css/ninja-forms.css',
			'condition' => function () {
				return \class_exists( 'Ninja_Forms' );
			},
		],
		[
			'handle' => \genesis_get_theme_handle() . '-google-fonts',
			'src'    => "//fonts.googleapis.com/css?family=$google_fonts&display=swap",
			'editor' => 'both',
		],
	],
	'remove' => [
		'superfish',
	],
];
