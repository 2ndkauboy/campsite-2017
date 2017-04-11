<?php
/**
 * CampSite 2017 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CampSite_2017
 */

if ( ! function_exists( 'campsite_2017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function campsite_2017_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CampSite 2017, use a find and replace
	 * to change 'wordcamporg' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wordcamporg', get_parent_theme_file_path( '/languages' ) );

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

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wordcamporg' ),
	) );
	register_nav_menus( array(
		'secondary' => esc_html__( 'Secondary', 'wordcamporg' ),
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
	add_theme_support( 'custom-background', apply_filters( 'campsite_2017_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'campsite_2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function campsite_2017_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'campsite_2017_content_width', 640 );
}
add_action( 'after_setup_theme', 'campsite_2017_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function campsite_2017_widgets_init() {
	// Generic main Sidebar Widget Area - Will show in all pages. Will load default content.
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'wordcamporg' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Main Widgets Sidebar. Shows up in all pages.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Generic main Sidebar Widget Area - Will show in all pages. Empty by default.
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'wordcamporg' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Secondary Widgets Sidebar - shows up in all pages after the Primary Sidebar block.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Before Content Widget Area - located inside the #content block, before any other content. Will show in all pages except the homepage. Empty by default.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (All pages except homepage)', 'wordcamporg' ),
		'id'            => 'before-content-1',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, in all pages except the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Before Content Widget Area for the Homepage - located inside the #content block, before any other content. Will show only on the homepage. Empty by default.
	// Before Content Homepage 1.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (Homepage) Area 1', 'wordcamporg' ),
		'id'            => 'before-content-homepage-1',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, only on the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Before Content Homepage 2.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (Homepage) Area 2', 'wordcamporg' ),
		'id'            => 'before-content-homepage-2',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, only on the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Before Content Homepage 3.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (Homepage) Area 3', 'wordcamporg' ),
		'id'            => 'before-content-homepage-3',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, only on the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Before Content Homepage 4.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (Homepage) Area 4', 'wordcamporg' ),
		'id'            => 'before-content-homepage-4',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, only on the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Before Content Homepage 5.
	register_sidebar( array(
		'name'          => esc_html__( 'Before Content (Homepage) Area 5', 'wordcamporg' ),
		'id'            => 'before-content-homepage-5',
		'description'   => esc_html__( 'Will show a widgets area, inside the #content block, before all the content, only on the homepage.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Header Widget Areas - Will show in all pages. Empty by default. (When activated, there will be a wrapper block around all the Header widget areas)
	// Header Widget Area 1.
	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area 1', 'wordcamporg' ),
		'id'            => 'header-1',
		'description'   => esc_html__( 'Will Show a widgets area on the header - can be combined with other Header Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Header Widget Area 2.
	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area 2', 'wordcamporg' ),
		'id'            => 'header-2',
		'description'   => esc_html__( 'Will Show a widgets area on the header - can be combined with other Header Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Header Widget Area 3.
	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area 3', 'wordcamporg' ),
		'id'            => 'header-3',
		'description'   => esc_html__( 'Will Show a widgets area on the header - can be combined with other Header Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Header Widget Area 4.
	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area 4', 'wordcamporg' ),
		'id'            => 'header-4',
		'description'   => esc_html__( 'Will Show a widgets area on the header - can be combined with other Header Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Header Widget Area 5.
	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget Area 5', 'wordcamporg' ),
		'id'            => 'header-5',
		'description'   => esc_html__( 'Will Show a widgets area on the header - can be combined with other Header Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Footer Widget Areas - Will show in all pages. Empty by default. (When activated, there will be a wrapper block around all the Footer widget areas)
	// Footer Widget Area 1.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 1', 'wordcamporg' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Will Show a widgets area on the footer - can be combined with other Footer Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer Widget Area 2.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 2', 'wordcamporg' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Will Show a widgets area on the footer - can be combined with other Footer Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer Widget Area 3.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 3', 'wordcamporg' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Will Show a widgets area on the footer - can be combined with other Footer Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer Widget Area 4.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 4', 'wordcamporg' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Will Show a widgets area on the footer - can be combined with other Footer Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer Widget Area 5.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 5', 'wordcamporg' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Will Show a widgets area on the footer - can be combined with other Footer Widget Area blocks.', 'wordcamporg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'campsite_2017_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function campsite_2017_scripts() {
	wp_enqueue_style( 'campsite-2017-style', get_stylesheet_uri() );

	wp_enqueue_script( 'campsite-2017-navigation', get_theme_file_uri( '/js/navigation.js' ), array(), '20151215', true );

	wp_enqueue_script( 'campsite-2017-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'campsite_2017_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require get_parent_theme_file_path( '/inc/extras.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * Load Jetpack compatibility file.
 */
require get_parent_theme_file_path( '/inc/jetpack.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );
