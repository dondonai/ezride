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

return [
	'add'    => [
		'align-wide',
		'automatic-feed-links',
		'custom-header'            => [
			'header-selector'  => '.hero-section',
			'default_image'    => get_theme_url() . 'assets/img/hero.jpg',
			'header-text'      => false,
			'width'            => 1280,
			'height'           => 720,
			'flex-height'      => true,
			'flex-width'       => true,
			'uploads'          => true,
			'video'            => true,
			'wp-head-callback' => __NAMESPACE__ . '\Functions\header',
		],
		'editor-styles',
		'front-page-widgets'       => 5,
		'genesis-accessibility'    => [
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		],
		'genesis-after-entry-widget-area',
		'genesis-custom-logo'      => [
			'height'      => 141,
			'width'       => 168,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => [
				'.site-title',
				'.site-description',
			],
		],
		'genesis-footer-widgets'   => 3,
		'genesis-menus'            => [
			'primary'   => __( 'Header Menu', 'genesis-starter-theme' ),
			'secondary' => __( 'After Header Menu', 'genesis-starter-theme' ),
		],
		'genesis-structural-wraps' => [
			'header',
			'site-inner',
			'menu-secondary',
			'hero-section',
			'footer-widgets',
			'footer',
			'front-page-widgets',
		],
		'gutenberg'                => [
			'wide-images' => true,
		],
		'hero-section',
		'html5'                    => [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		],
		'post-thumbnails',
		'responsive-embeds',
		// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
		// 'sticky-header',
		// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
		// 'transparent-header',
		'woocommerce',
		'wc-product-gallery-zoom',
		'wc-product-gallery-lightbox',
		'wc-product-gallery-slider',
		'wp-block-styles',
	],
	'remove' => [],
];
