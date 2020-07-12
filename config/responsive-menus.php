<?php
/**
 * PG Genesis Starter.
 *
 * @package PG Genesis Starter
 * @author  Paul Garcia
 * @license GPL-2.0-or-later
 * @link    https://github.com/gp22/pg-genesis-starter/
 */

/**
 * Genesis responsive menus settings. (Requires Genesis 3.0+.)
 * Removed 'Menu' text from nav according to this article:
 * https://designody.com/remove-menu-text-from-genesis-sample/
 */
return [
	'script' => [
		'mainMenu' => __( '', 'pg-genesis-starter' ),
		'menuClasses' => [
			'others' => [ '.nav-primary' ],
		],
	],
	'extras' => [
		'media_query_width' => '960px',
	],
];
