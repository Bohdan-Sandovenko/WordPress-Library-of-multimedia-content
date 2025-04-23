<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Multib
 */

get_header(); ?>

<div class="search-page">

  <div class="site-search">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search works...', 'placeholder', 'multib'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
      <button type="submit" class="search-submit">
        <span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'multib'); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form>
  </div>

  <h2>
    <?php
    printf(
      esc_html__( 'Results for "%s"', 'multib' ),
      '<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
    );
    ?>
  </h2>

  <div class="search-results">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="search-result-item">
          <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' );
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
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php esc_html_e( 'No results found.', 'multib' ); ?></p>
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>
