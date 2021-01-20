<?php
/**
 * Mensch Meyer functions and definitions
 *
 * @package Mensch Meyer
 */

if ( ! function_exists( 'mensch_meyer_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mensch_meyer_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mensch Meyer, use a find and replace
	 * to change 'mensch-meyer' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mensch-meyer', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'mensch-meyer-featured', '656', '300', true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Header', 'mensch-meyer' ),
	) );

	add_editor_style( array( 'editor-style.css', mensch_meyer_fonts_url() ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 400,
		'width'       => 1200,
		'flex-height' => true,
		'flex-width'  => true
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mensch_meyer_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add custom colors to Gutenberg
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Dark Green', 'mensch-meyer' ),
				'slug' => 'dark-green',
				'color' => '#1c7c7c',
			),
			array(
				'name'  => esc_html__( 'Dark Gray', 'mensch-meyer' ),
				'slug' => 'dark-gray',
				'color' => '#666',
			),
			array(
				'name'  => esc_html__( 'Medium Gray', 'mensch-meyer' ),
				'slug' => 'medium-gray',
				'color' => '#999',
			),
			array(
				'name'  => esc_html__( 'Light Gray', 'mensch-meyer' ),
				'slug' => 'light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => esc_html__( 'White', 'mensch-meyer' ),
				'slug' => 'white',
				'color' => '#fff',
			),
		)
	);

}
endif; // mensch_meyer_setup
add_action( 'after_setup_theme', 'mensch_meyer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mensch_meyer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mensch_meyer_content_width', 656 );
}
add_action( 'after_setup_theme', 'mensch_meyer_content_width', 0 );

function mensch_meyer_adjust_content_width() {
	global $content_width;

	if ( is_page_template( 'templates/full-width-page.php' ) ) {
		$content_width = 937;
	}
}
add_action( 'template_redirect', 'mensch_meyer_adjust_content_width' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mensch_meyer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mensch-meyer' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'mensch-meyer' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'mensch-meyer' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'mensch-meyer' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mensch_meyer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mensch_meyer_scripts() {
	wp_enqueue_style( 'mensch-meyer-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mensch-meyer-fonts', mensch_meyer_fonts_url(), array(), null );

	// Theme block stylesheet.
	wp_enqueue_style( 'mensch-meyer-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'mensch-meyer-style' ), '1.0' );

	wp_enqueue_script( 'mensch-meyer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mensch-meyer-scripts', get_template_directory_uri() . '/js/mensch-meyer.js', array( 'jquery' ), '20170608', true );

	wp_enqueue_script( 'mensch-meyer-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mensch_meyer_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function mensch_meyer_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'mensch-meyer-block-editor-style', get_theme_file_uri( '/css/editor-blocks.css' ) );
	// Fonts.
	wp_enqueue_style( 'mensch-meyer-fonts-url', mensch_meyer_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'mensch_meyer_block_editor_styles' );

/**
 * Register Google Fonts
 */
function mensch_meyer_fonts_url() {
    $fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Roboto Slab, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$robotoslab = esc_html_x( 'on', 'Roboto Slab font: on or off', 'mensch-meyer' );

	if ( 'off' !== $robotoslab  ) {

		$font_families = array();
		$font_families[] = 'Roboto Slab:300,400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';
