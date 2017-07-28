<?php
/**
 * 
 * OleinPress functions and definitions
 *
 * file name : functions.php
 *
 * created   : 2017/07/11
 *
 * @package OleinPress
 */

if ( ! function_exists( 'oleinpress_setup' ) ) :

function oleinpress_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oleinpress', get_template_directory() . '/languages' );
	
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
	add_image_size( 'olenpress-blog-thumbnail', 300, 150, true );
	
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
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);
	add_theme_support( 'custom-background', $args );
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'oleinpress' ),
	) );
	
}
endif;
add_action( 'after_setup_theme', 'oleinpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oleinpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oleinpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'oleinpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oleinpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oleinpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oleinpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer left', 'oleinpress' ),
		'id'            => 'footer-left',
		'description'   => esc_html__( 'Add widgets here.', 'oleinpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer right', 'oleinpress' ),
		'id'            => 'footer-right',
		'description'   => esc_html__( 'Add widgets here.', 'oleinpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'oleinpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oleinpress_scripts() {
	wp_enqueue_style( 'oleinpress-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'FontAwesome', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css' );
	
	wp_enqueue_style( 'noto-sans-jp', '//fonts.googleapis.com/earlyaccess/notosansjp.css' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,700' );
}
add_action( 'wp_enqueue_scripts', 'oleinpress_scripts' );

/**
 * Implement the Custom Header feature.
 */
$args = array(
	'width'         => 1800,
	'height'        => 600,
	'default-image' => '',
);
add_theme_support( 'custom-header', $args );


/*
 * read more ボタンをexcerpt出力の後に設置
 */
// function new_excerpt_more( $more ) {
// 	return '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">もっと読む</a>';
// }
// add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
 * functions for OleinPress theme
 */
require get_template_directory() . '/inc/oleinpress-functions.php';


?>