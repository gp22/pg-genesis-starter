<?php
/**
 * Site Footer
 *
 * @package      PG Genesis Starter
 * @author       Paul Garcia
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Site Footer
 *
 */
add_filter( 'genesis_footer_output', 'pg_genesis_starter_footer_output' );
/**
 * Modifies the footer output.
 *
 * @param string $output footer output from customizer.
 * @return string modified footer output.
 */
function pg_genesis_starter_footer_output( $output ) {

return <<<HTML

	<div class="">

		<div class="">

		</div>

		$output

	</div>

HTML;

}
