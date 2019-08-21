<?php
/**
 * warsztatqulinarny functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package warsztatqulinarny
 */

if ( ! function_exists( 'warsztatqulinarny_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function warsztatqulinarny_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on warsztatqulinarny, use a find and replace
		 * to change 'warsztatqulinarny' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'warsztatqulinarny', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'warsztatqulinarny' ),
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
		add_theme_support( 'custom-background', apply_filters( 'warsztatqulinarny_custom_background_args', array(
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
add_action( 'after_setup_theme', 'warsztatqulinarny_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function warsztatqulinarny_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'warsztatqulinarny_content_width', 640 );
}
add_action( 'after_setup_theme', 'warsztatqulinarny_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function warsztatqulinarny_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'warsztatqulinarny' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'warsztatqulinarny' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'warsztatqulinarny_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function warsztatqulinarny_scripts() {
	wp_enqueue_style( 'warsztatqulinarny-style', get_stylesheet_uri() );

	wp_enqueue_script( 'warsztatqulinarny-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'warsztatqulinarny-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'warsztatqulinarny_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) { 
	require get_template_directory() . '/inc/woocommerce.php';
}




function custom_fonts() {

	wp_enqueue_style( 'FontAwesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );
	//wp_enqueue_style( 'FiraSans', 'https://fonts.googleapis.com/css?family=Fira+Sans:400,700&amp;subset=latin-ext' );
	wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin-ext' );
	wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700&amp;subset=latin-ext' );
	//wp_enqueue_style( 'Teko', 'https://fonts.googleapis.com/css?family=Teko:400,700&amp;subset=latin-ext' );
	

}

function custom_scripts() {

	wp_deregister_script( 'jquery-core' );
	wp_deregister_script( 'jquery-migrate' );
	
		wp_enqueue_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", NULL , '3.1.1' );
		wp_enqueue_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array( 'jquery-core' ), '3.0.0' );
		wp_enqueue_script( 'lightbox2', "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/js/lightbox.min.js", array( 'jquery-core' ), '1.0.0' );
		wp_enqueue_script( 'lazyload', "https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js", NULL, '1.0.0' );
		
	
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/dist/css/main.min.css', NULL , '1.1.2' );
		wp_enqueue_style( 'lightbox2_css', "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.min.css" );
		wp_enqueue_style( 'swiper_css', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css" );
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/dist/js/app.min.js' , NULL , '1.1.2'  , true );
  }
  
  add_action('wp_enqueue_scripts', 'custom_scripts');

  add_action('wp_enqueue_scripts', 'custom_fonts');



  function remove_max_srcset_image_width( $max_width ) {
    $max_width = 1920;
    return $max_width;
}
add_image_size( 'mobile', 450, 9999 ); // Unlimited Height Mode
add_image_size( 'xl', 1366, 9999 ); // Unlimited Height Mode
add_image_size( 'xxl', 1920, 9999 ); // Unlimited Height Mode

add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );
  
  function img_resp($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);

		// generate the markup for the responsive image
		echo  'alt="'.$image_alt.'" data-src="'.$image_src.'" data-srcset="'.$image_srcset.'" data-sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
	
	}
}


// ACF OPTION PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia Strony',
		'menu_title'	=> 'Ustawienia Strony',
		'menu_slug' 	=> 'ustawienia-strony',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'ustawienia-strony',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'ustawienia-strony',
	));
	
}

// SEARCH ONLY IN POSTS
if (!is_admin()) {
	function wpb_search_filter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts','wpb_search_filter');
	}

	// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}

add_action( 'init', 'my_custom_page_word' );
function my_custom_page_word() {
global $wp_rewrite;
$wp_rewrite->pagination_base = "strona";
}

//disable related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

//disable hover zoom
function remove_image_zoom_support() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );

add_action('admin_head', 'admin_style');

function admin_style() {
  echo '<style>
	#menu-comments, #toplevel_page_ai1wm_export, #toplevel_page_edit-post_type-acf-field-group, #toplevel_page_theseoframework-settings, #toplevel_page_cptui_main_menu, #toplevel_page_wppusher {
		display: none;
	}
  </style>';
}