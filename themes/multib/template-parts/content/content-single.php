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
			<div class="row">
				<div class="col-md-6">
					<?php echo get_the_post_thumbnail(null, 'full', array('class' => 'post-featured-image'));?>
				</div>
				<div class="col-md-6">
					<a href="<?php echo home_url();?>" class="d-flex align-items-center mb-4 gap-2 mt-3 mt-md-0">
						<i class="fas fa-chevron-left"></i>
						Back
					</a>
					<h1 class="mb-2 mt-4"><?php echo get_the_title();?></h1>
					<div class="post-meta mb-4">
						<div class="d-md-flex align-items-center text-muted">
							<div class="me-3">
								<i class="fas fa-user"></i> <?php the_author(); ?>
							</div>
							<div class="me-3">
								<i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?>
							</div>
							<div>
								<i class="fas fa-folder"></i> <?php 
									$categories = get_the_category();
									if($categories) {
										$cat_names = array();
										foreach($categories as $category) {
											$cat_names[] = $category->name;
										}
										echo implode(', ', $cat_names);
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-4">
				<?php the_content(); ?>
			</div>
			
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->