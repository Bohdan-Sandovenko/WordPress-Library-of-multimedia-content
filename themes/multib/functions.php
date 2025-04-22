<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Multib
 */


if (!function_exists('theme_setup')) {
	function theme_setup()
	{
		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height' => $logo_height,
				'width' => $logo_width,
				'flex-width' => true,
				'flex-height' => true,
				'unlink-homepage-logo' => true,
			)
		);

		add_theme_support('editor-styles');

		$editor_stylesheet_path = './assets/css/style-editor.css';

		add_editor_style($editor_stylesheet_path);

		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => esc_html__('Extra small', 'spa'),
					'shortName' => esc_html_x('XS', 'Font size', 'spa'),
					'size' => 16,
					'slug' => 'extra-small',
				),
				array(
					'name' => esc_html__('Small', 'spa'),
					'shortName' => esc_html_x('S', 'Font size', 'spa'),
					'size' => 18,
					'slug' => 'small',
				),
				array(
					'name' => esc_html__('Normal', 'spa'),
					'shortName' => esc_html_x('M', 'Font size', 'spa'),
					'size' => 20,
					'slug' => 'normal',
				),
				array(
					'name' => esc_html__('Large', 'spa'),
					'shortName' => esc_html_x('L', 'Font size', 'spa'),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => esc_html__('Extra large', 'spa'),
					'shortName' => esc_html_x('XL', 'Font size', 'spa'),
					'size' => 40,
					'slug' => 'extra-large',
				),
				array(
					'name' => esc_html__('Huge', 'spa'),
					'shortName' => esc_html_x('XXL', 'Font size', 'spa'),
					'size' => 96,
					'slug' => 'huge',
				),
				array(
					'name' => esc_html__('Gigantic', 'spa'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'spa'),
					'size' => 144,
					'slug' => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black = '#000000';
		$dark_gray = '#28303D';
		$gray = '#39414D';
		$green = '#D1E4DD';
		$blue = '#D1DFE4';
		$purple = '#D1D1E4';
		$red = '#E4D1D1';
		$orange = '#E4DAD1';
		$yellow = '#EEEADD';
		$white = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name' => esc_html__('Black', 'spa'),
					'slug' => 'black',
					'color' => $black,
				),
				array(
					'name' => esc_html__('Dark gray', 'spa'),
					'slug' => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name' => esc_html__('Gray', 'spa'),
					'slug' => 'gray',
					'color' => $gray,
				),
				array(
					'name' => esc_html__('Green', 'spa'),
					'slug' => 'green',
					'color' => $green,
				),
				array(
					'name' => esc_html__('Blue', 'spa'),
					'slug' => 'blue',
					'color' => $blue,
				),
				array(
					'name' => esc_html__('Purple', 'spa'),
					'slug' => 'purple',
					'color' => $purple,
				),
				array(
					'name' => esc_html__('Red', 'spa'),
					'slug' => 'red',
					'color' => $red,
				),
				array(
					'name' => esc_html__('Orange', 'spa'),
					'slug' => 'orange',
					'color' => $orange,
				),
				array(
					'name' => esc_html__('Yellow', 'spa'),
					'slug' => 'yellow',
					'color' => $yellow,
				),
				array(
					'name' => esc_html__('White', 'spa'),
					'slug' => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name' => esc_html__('Purple to yellow', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'purple-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to purple', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug' => 'yellow-to-purple',
				),
				array(
					'name' => esc_html__('Green to yellow', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'green-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to green', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug' => 'yellow-to-green',
				),
				array(
					'name' => esc_html__('Red to yellow', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'red-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to red', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug' => 'yellow-to-red',
				),
				array(
					'name' => esc_html__('Purple to red', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug' => 'purple-to-red',
				),
				array(
					'name' => esc_html__('Red to purple', 'spa'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug' => 'red-to-purple',
				),
			)
		);

		add_theme_support('menus');

		add_theme_support( 'timeline' );
	}
}
add_action('after_setup_theme', 'theme_setup');

function mutib_assets()
{
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), null, null);
	wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), null, null);
	wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, null);
	wp_enqueue_script('count-to', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.1.0/jquery.countTo.min.js', array(), null, null);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/jquery-ui/jquery-ui.min.js', array(), null, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap.bundle.min.js', array(), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.js', array(), null, true);

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css', array(), null, null);
	wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/assets/jquery-ui/jquery-ui.min.css', array(), null, null);
	wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, null);
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null, null);
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null, null);
}

add_action('wp_enqueue_scripts', 'mutib_assets');

add_filter('wpcf7_autop_or_not', '__return_false');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
