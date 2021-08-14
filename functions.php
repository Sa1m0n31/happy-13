<?php
/**
 * happy-13 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package happy-13
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'happy_13_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function happy_13_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on happy-13, use a find and replace
		 * to change 'happy-13' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'happy-13', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'happy-13' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'happy_13_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'happy_13_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function happy_13_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'happy_13_content_width', 640 );
}
add_action( 'after_setup_theme', 'happy_13_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function happy_13_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'happy-13' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'happy-13' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'happy_13_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function happy_13_scripts() {
	wp_enqueue_style( 'happy-13-style', get_stylesheet_uri() . "?n=2", array(), _S_VERSION );
	wp_enqueue_style( 'mobile-style', get_stylesheet_directory_uri() . '/mobile.css?n=2', array(), _S_VERSION );

	wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), 1.0);
	wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), 1.0, true);

	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js?n=2', array('siema-js', 'aos-js'), 1.0, true);
	wp_enqueue_script('siema-js', get_stylesheet_directory_uri() . '/js/siema.js', array(), 1.0, true);

	wp_enqueue_script( 'happy-13-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'happy_13_scripts' );

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

/* Add BANER post type */
function happy_add_baner_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Banery'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-welcome-view-site'
    );

    register_post_type("baner", $args);
}

add_action("init", "happy_add_baner_post_type");

/* Add OFFER post type */
function happy_add_offer_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Oferta'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-media-interactive'
    );

    register_post_type("offer", $args);
}

add_action("init", "happy_add_offer_post_type");


/* Add CATALOG post type */
function happy_add_catalog_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Katalogi'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-calendar-alt'
    );

    register_post_type("catalog", $args);
}

add_action("init", "happy_add_catalog_post_type");

/* Add TESTIMONIALS post type */
function happy_add_testimonials_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Opinie'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-format-quote'
    );

    register_post_type("testimonials", $args);
}

add_action("init", "happy_add_testimonials_post_type");