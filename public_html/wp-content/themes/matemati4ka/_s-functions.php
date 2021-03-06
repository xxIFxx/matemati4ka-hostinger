<?php
/**
 * matemati4ka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package matemati4ka
 */

if ( ! function_exists( 'matemati4ka_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function matemati4ka_setup() {
	/*
	 * Разрешаем поддержку фотографий для Post Thumbnails в постах и страницах.
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Регистрируем двa меню
	 */
	register_nav_menus( array(
		'header' => esc_html__( 'top', 'matemati4ka' ),
		'sidebar' => esc_html__('sidebar', 'matemati4ka')
	));


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on matemati4ka, use a find and replace
	 * to change 'matemati4ka' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'matemati4ka', get_template_directory() . '/languages' );

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
	add_theme_support( 'custom-background', apply_filters( 'matemati4ka_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'matemati4ka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function matemati4ka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'matemati4ka_content_width', 640 );
}
add_action( 'after_setup_theme', 'matemati4ka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function matemati4ka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'matemati4ka' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'matemati4ka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'matemati4ka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function matemati4ka_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'matemati4ka-style', get_stylesheet_uri() );

	// подключаем js-файлы
	//скрипт в head
	wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
	// скрипт в head & if lt IE9
	wp_enqueue_script('respond-script', get_template_directory_uri() . '/js/respond.min.js');
	wp_script_add_data('respond-script', conditional, 'lt IE 9');
	// скрипт в подвале jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '100', true);
	wp_enqueue_script( 'jquery' );
	// скрипт в подвале main.js
	wp_enqueue_script('matemati4ka-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '101', true);

	wp_enqueue_script( 'matemati4ka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'matemati4ka-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'matemati4ka_scripts' );

/**

 * добавить поддержку формата SVG

 */
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mines', 'add_file_types_to_uploads');

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
