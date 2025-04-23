<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Multib
 */

get_header(); ?>

<!-- Search Form Section -->
<div class="site-search">
  <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search works...', 'placeholder', 'multib'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit">
      <span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'multib'); ?></span>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
    </button>
  </form>
</div>

<h2>Popular Works</h2>
<div class="popular-works">
  <?php
  $popular_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'comment_count',
    'order' => 'DESC'
  );
  $popular_posts = new WP_Query($popular_args);
  if ($popular_posts->have_posts()):
    while ($popular_posts->have_posts()): $popular_posts->the_post();
  ?>
      <div class="popular-item">
        <div class="post-thumbnail">
          <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              echo '<img src="' . get_template_directory_uri() . '/images/default-thumbnail.jpg" alt="Default Image" />';
            }
            ?>
          </a>
        </div>
        <div class="post-info">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><strong>Author:</strong> <?php the_author(); ?></p>
        </div>
      </div>
  <?php
    endwhile;
    wp_reset_postdata();
  else:
    echo '<p>No popular posts found.</p>';
  endif;
  ?>
</div>

<?php
// Standard page content output
if (have_posts()) {
  while (have_posts()) {
    the_post();
    get_template_part('template-parts/content/content');
  }
} else {
  get_template_part('template-parts/content/content-none');
}

get_footer();