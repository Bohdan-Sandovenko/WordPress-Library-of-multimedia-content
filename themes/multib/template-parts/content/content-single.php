<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Multib
 */

?>

<article id="post-<?php the_ID(); ?>">
	<section class="py-5">
		<div class="container py-md-5 post-container">
			<?php the_content(); ?>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->