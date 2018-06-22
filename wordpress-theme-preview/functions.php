<?php
/**
 * preview functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package preview
 */

if ( ! function_exists( 'preview_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function preview_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on preview, use a find and replace
		 * to change 'preview' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'preview', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'preview' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'preview_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'preview_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function preview_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'preview_content_width', 640 );
}
add_action( 'after_setup_theme', 'preview_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function preview_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'preview' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'preview' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'preview_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function preview_scripts() {
	wp_enqueue_style( 'preview-style', get_stylesheet_uri() );
	wp_enqueue_style( 'preview-style-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array('preview-style'), '1.0' );
	wp_enqueue_style( 'preview-style-flickity', get_template_directory_uri() . '/css/flickity.css', array('preview-style'), '1.0' );
	wp_enqueue_style( 'preview-style-animate', get_template_directory_uri() . '/css/animate.css', array('preview-style'), '1.0' );

	wp_enqueue_script( 'preview-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js' );
	wp_enqueue_script( 'preview-toucheffects', get_template_directory_uri() . '/js/min/toucheffects-min.js' );
	wp_enqueue_script( 'preview-flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js' );
	wp_enqueue_script( 'preview-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js' );
	wp_enqueue_script( 'preview-retina', get_template_directory_uri() . '/js/retina.js' );
	wp_enqueue_script( 'preview-waypoints', get_template_directory_uri() . '/js/waypoints.min.js' );
	wp_enqueue_script( 'preview-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'preview-scripts', get_template_directory_uri() . '/js/min/scripts-min.js' );
	wp_enqueue_script( 'preview-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'preview-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'preview_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

