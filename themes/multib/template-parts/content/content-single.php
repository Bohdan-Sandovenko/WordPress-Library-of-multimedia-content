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
			<?php echo get_the_post_thumbnail();?>

			<h1><?php echo get_the_title();?></h1>
			<?php the_content(); ?>
			
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->