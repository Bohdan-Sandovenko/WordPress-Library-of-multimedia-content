<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Multib
 */

get_header();

if ( have_posts() ) {
		printf(
			/* translators: %s: Search term. */
			esc_html__( 'Results for "%s"', 'twentytwentyone' ),
			'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
		);
	?>
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

	} // End the loop.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
