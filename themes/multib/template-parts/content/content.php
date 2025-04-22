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
	<?= the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
