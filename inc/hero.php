<?php
/**
 * Home Page Hero Section
 *
 * @package      PG Genesis Starter
 * @author       Paul Garcia
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Home Page Hero Section
 *
 */
add_action( 'genesis_after_header', 'pg_genesis_starter_hero_output' );
/**
 * Echos the hero section.
 *
 */
function pg_genesis_starter_hero_output( ) {

	if ( is_front_page() ) {

		$hero = get_field( 'hero' );

		?>

		<section class="hero">

			<div class="hero-inner">

				<div class="">

				</div>

			</div>

		</section>

		<?php

	}

}
