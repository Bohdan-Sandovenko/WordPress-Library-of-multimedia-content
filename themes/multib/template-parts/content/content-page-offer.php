<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Multib
 */

?>

<article id="post-<?php the_ID(); ?>">
  <section class="py-5">
    <div class="container py-md-5">
      <div class="blog-content text">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->
