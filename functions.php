<?php
/**
 * primedocbilling functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package primedocbilling
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function primedocbilling_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on primedocbilling, use a find and replace
		* to change 'primedocbilling' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'primedocbilling', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'primedocbilling' ),
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
			'primedocbilling_custom_background_args',
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

	// Add support for wide and full alignment.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'primedocbilling_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function primedocbilling_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'primedocbilling_content_width', 640 );
}
add_action( 'after_setup_theme', 'primedocbilling_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function primedocbilling_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'primedocbilling' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'primedocbilling' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'primedocbilling_widgets_init' );

/**
 * Enqueue scripts and styles with performance optimizations.
 */
function primedocbilling_scripts() {
	// Get theme version for cache busting
	$theme_version = _S_VERSION;
	
	// Preconnect to external domains for performance
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	
	// Load stylesheets with proper versioning
	wp_enqueue_style( 'primedocbilling-tailwind-style', get_template_directory_uri() . '/assets/css/tailwind.prod.min.css', array(), $theme_version );
	wp_enqueue_style( 'primedocbilling-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), $theme_version );
	wp_enqueue_style( 'primedocbilling-slick-style', get_template_directory_uri() . '/assets/css/plugins/slick.1.8.1.min.css', array(), $theme_version );
	wp_enqueue_style( 'primedocbilling-main-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'primedocbilling-offer-card-enhancements', get_template_directory_uri() . '/offer-card-enhancements.css', array(), $theme_version );
	
	// Load Font Awesome locally if available, otherwise use CDN with integrity
	if ( file_exists( get_template_directory() . '/assets/css/all.min.css' ) ) {
		wp_enqueue_style( 'primedocbilling-fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), $theme_version );
	} else {
		wp_enqueue_style( 'primedocbilling-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
	}
	
	// Load Google Fonts with display=swap for performance
	wp_enqueue_style( 'primedocbilling-googlefonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', array(), null );
	
	// Load scripts with proper dependencies and defer/async
	wp_enqueue_script( 'primedocbilling-jquery-js', get_template_directory_uri() . '/assets/js/vendors/jquery-3.7.0.min.js', array(), '3.7.0', true );
	
	// Slick slider depends on jQuery
	wp_enqueue_script( 'primedocbilling-slick-js', get_template_directory_uri() . '/assets/js/plugins/slick.1.8.1.min.js', array( 'primedocbilling-jquery-js' ), '1.8.1', true );
	
	// AOS animation library
	wp_enqueue_script( 'primedocbilling-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '2.3.4', true );
	
	// TW Elements
	wp_enqueue_script( 'primedocbilling-twelements-js', get_template_directory_uri() . '/assets/js/tw-elements.umd.min.js', array(), $theme_version, true );
	
	// Main bundle - load in footer
	wp_enqueue_script( 'primedocbilling-tailwind-js', get_template_directory_uri() . '/assets/js/bundle.js', array(), $theme_version, true );
	
	// Main theme script - depends on jQuery
	wp_enqueue_script( 'primedocbilling-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'primedocbilling-jquery-js' ), $theme_version, true );
	
	// REMOVED: Tailwind CDN script - this is a major performance issue
	// wp_enqueue_script( 'primedocbilling-tailwind-script', '//cdn.tailwindcss.com', array(), NULL, true);
	
	// Add defer attribute to non-critical scripts
	add_filter( 'script_loader_tag', 'primedocbilling_defer_scripts', 10, 2 );
}
add_action( 'wp_enqueue_scripts', 'primedocbilling_scripts' );

/**
 * Add defer attribute to non-critical scripts for performance.
 */
function primedocbilling_defer_scripts( $tag, $handle ) {
	$defer_scripts = array(
		'primedocbilling-aos-js',
		'primedocbilling-twelements-js',
	);
	
	if ( in_array( $handle, $defer_scripts, true ) ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	
	return $tag;
}

/**
 * Add lazy loading to images.
 */
function primedocbilling_add_lazy_loading( $attr, $attachment, $size ) {
	if ( ! is_admin() ) {
		$attr['loading'] = 'lazy';
		$attr['decoding'] = 'async';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'primedocbilling_add_lazy_loading', 10, 3 );

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

/**
 * Load author page functions
 */
require get_template_directory() . '/inc/author-functions.php';

/**
 * Load SEO enhancements for admin
 */
require get_template_directory() . '/inc/seo-enhancements.php';

/**
 * Load Service Page custom fields for admin
 */
require get_template_directory() . '/inc/service-page-fields.php';

/**
 * Use standard WordPress category structure
 * No custom category base - use default /category/
 */

/**
 * Flush rewrite rules to reset to standard WordPress structure
 */
function flush_rewrite_rules_on_activation() {
	global $wp_rewrite;
	$wp_rewrite->set_category_base('category');
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'flush_rewrite_rules_on_activation');

/**
 * Reset category base to default on theme switch
 */
function reset_category_base() {
	global $wp_rewrite;
	$wp_rewrite->set_category_base('category');
	flush_rewrite_rules();
}
add_action('init', 'reset_category_base', 99);

/**
 * Add custom schema markup for specific pages.
 */
function add_custom_schema_markup() {
	if ( is_page('medical-billing') ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@graph' => array(
				array(
					'@type' => array( 'MedicalBusiness', 'Organization' ),
					'@id' => esc_url( home_url( '/' ) ) . '#organization',
					'name' => 'Prime Doc Billing LLC',
					'url' => esc_url( home_url( '/' ) ),
					'logo' => esc_url( get_template_directory_uri() . '/assets/images/logo.png' ),
					'description' => esc_attr( 'Prime Doc Billing LLC is a trusted medical billing partner serving healthcare providers across the USA.' ),
					'telephone' => '+1 347-650-2656',
					'email' => 'info@primedocbilling.com',
					'address' => array(
						'@type' => 'PostalAddress',
						'addressCountry' => 'US'
					),
					'areaServed' => 'USA',
				)
			)
		);
		
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action('wp_head', 'add_custom_schema_markup');

/**
 * Add schema markup for medical billing process page.
 */
function add_custom_schema_markup_for_medical_billing_process() {
	if ( is_page('process') ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type' => 'WebPage',
			'@id' => esc_url( get_permalink() ) . '#webpage',
			'url' => esc_url( get_permalink() ),
			'name' => esc_attr( get_the_title() ),
			'description' => esc_attr( wp_strip_all_tags( get_the_excerpt() ) ),
		);
		
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action('wp_head', 'add_custom_schema_markup_for_medical_billing_process');

/**
 * Add schema markup for medical billing outsourcing page.
 */
function add_custom_schema_markup_for_medical_billing_outsourcing() {
	if ( is_page('outsourcing') ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type' => 'WebPage',
			'@id' => esc_url( get_permalink() ) . '#webpage',
			'url' => esc_url( get_permalink() ),
			'name' => esc_attr( get_the_title() ),
			'description' => esc_attr( wp_strip_all_tags( get_the_excerpt() ) ),
		);
		
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action('wp_head', 'add_custom_schema_markup_for_medical_billing_outsourcing');
