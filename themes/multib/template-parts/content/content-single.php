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
		<div class="container post-container">
			<a href="<?php echo home_url();?>" class="d-flex align-items-center mb-4 gap-2">
				<i class="fas fa-chevron-left"></i>
				Back
			</a>
			<?php echo get_the_post_thumbnail(null, 'full', array('class' => 'post-featured-image'));?>

			<h1 class="my-4"><?php echo get_the_title();?></h1>
			<?php the_content(); ?>
			
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->