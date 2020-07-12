<?php
/**
 * PG Genesis Starter.
 *
 * Theme supports.
 *
 * @package PG Genesis Starter
 * @author  Paul Garcia
 * @license GPL-2.0-or-later
 * @link    https://github.com/gp22/pg-genesis-starter/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-lazy-load-images'        => '',
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'pg-genesis-starter' ),
		'secondary' => __( 'Footer Menu', 'pg-genesis-starter' ),
	],
];
