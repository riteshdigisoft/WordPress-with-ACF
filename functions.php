<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

function theme_styles() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'asics-css', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array('blueskypest') );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );



// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'blueskypest_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since asics 1.0
     *
     * @return void
     */
    function blueskypest_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * This theme does not use a hard-coded <title> tag in the document head,
         * WordPress will provide it for us.
         */
        add_theme_support( 'title-tag' );

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
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary menu', 'blueskypest' ),
                'footer'  => esc_html__( 'Secondary menu', 'blueskypest' ),
            )
        );

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
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );
        
        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => esc_html__( 'Extra small', 'blueskypest' ),
                    'shortName' => esc_html_x( 'XS', 'Font size', 'blueskypest' ),
                    'size'      => 16,
                    'slug'      => 'extra-small',
                ),
                array(
                    'name'      => esc_html__( 'Small', 'blueskypest' ),
                    'shortName' => esc_html_x( 'S', 'Font size', 'blueskypest' ),
                    'size'      => 18,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => esc_html__( 'Normal', 'blueskypest' ),
                    'shortName' => esc_html_x( 'M', 'Font size', 'blueskypest' ),
                    'size'      => 20,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => esc_html__( 'Large', 'blueskypest' ),
                    'shortName' => esc_html_x( 'L', 'Font size', 'blueskypest' ),
                    'size'      => 24,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => esc_html__( 'Extra large', 'blueskypest' ),
                    'shortName' => esc_html_x( 'XL', 'Font size', 'blueskypest' ),
                    'size'      => 40,
                    'slug'      => 'extra-large',
                ),
                array(
                    'name'      => esc_html__( 'Huge', 'blueskypest' ),
                    'shortName' => esc_html_x( 'XXL', 'Font size', 'blueskypest' ),
                    'size'      => 96,
                    'slug'      => 'huge',
                ),
                array(
                    'name'      => esc_html__( 'Gigantic', 'blueskypest' ),
                    'shortName' => esc_html_x( 'XXXL', 'Font size', 'blueskypest' ),
                    'size'      => 144,
                    'slug'      => 'gigantic',
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
        $black     = '#000000';
        $dark_gray = '#28303D';
        $gray      = '#39414D';
        $green     = '#D1E4DD';
        $blue      = '#D1DFE4';
        $purple    = '#D1D1E4';
        $red       = '#E4D1D1';
        $orange    = '#E4DAD1';
        $yellow    = '#EEEADD';
        $white     = '#FFFFFF';

        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => esc_html__( 'Black', 'blueskypest' ),
                    'slug'  => 'black',
                    'color' => $black,
                ),
                array(
                    'name'  => esc_html__( 'Dark gray', 'blueskypest' ),
                    'slug'  => 'dark-gray',
                    'color' => $dark_gray,
                ),
                array(
                    'name'  => esc_html__( 'Gray', 'blueskypest' ),
                    'slug'  => 'gray',
                    'color' => $gray,
                ),
                array(
                    'name'  => esc_html__( 'Green', 'blueskypest' ),
                    'slug'  => 'green',
                    'color' => $green,
                ),
                array(
                    'name'  => esc_html__( 'Blue', 'blueskypest' ),
                    'slug'  => 'blue',
                    'color' => $blue,
                ),
                array(
                    'name'  => esc_html__( 'Purple', 'blueskypest' ),
                    'slug'  => 'purple',
                    'color' => $purple,
                ),
                array(
                    'name'  => esc_html__( 'Red', 'blueskypest' ),
                    'slug'  => 'red',
                    'color' => $red,
                ),
                array(
                    'name'  => esc_html__( 'Orange', 'blueskypest' ),
                    'slug'  => 'orange',
                    'color' => $orange,
                ),
                array(
                    'name'  => esc_html__( 'Yellow', 'blueskypest' ),
                    'slug'  => 'yellow',
                    'color' => $yellow,
                ),
                array(
                    'name'  => esc_html__( 'White', 'blueskypest' ),
                    'slug'  => 'white',
                    'color' => $white,
                ),
            )
        );

        add_theme_support(
            'editor-gradient-presets',
            array(
                array(
                    'name'     => esc_html__( 'Purple to yellow', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'purple-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to purple', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'yellow-to-purple',
                ),
                array(
                    'name'     => esc_html__( 'Green to yellow', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'green-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to green', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                    'slug'     => 'yellow-to-green',
                ),
                array(
                    'name'     => esc_html__( 'Red to yellow', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'red-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to red', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'yellow-to-red',
                ),
                array(
                    'name'     => esc_html__( 'Purple to red', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'purple-to-red',
                ),
                array(
                    'name'     => esc_html__( 'Red to purple', 'blueskypest' ),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'red-to-purple',
                ),
            )
        );


        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // Add support for custom line height controls.
        add_theme_support( 'custom-line-height' );

        // Add support for link color control.
        add_theme_support( 'link-color' );

        // Add support for experimental cover block spacing.
        add_theme_support( 'custom-spacing' );

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support( 'custom-units' );

        // Remove feed icon link from legacy RSS widget.
        add_filter( 'rss_widget_feed_link', '__return_empty_string' );
    }
}
add_action( 'after_setup_theme', 'blueskypest_setup' );


/**
 * Registers widget area.
 *
 * @since Sounds Good 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function asics_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer', 'blueskypest' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'blueskypest' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'asics_widgets_init' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since flimlab 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function suited_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'suited_content_width', 750 );
}
add_action( 'after_setup_theme', 'suited_content_width', 0 );


/**
 * Adds "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function openmind_add_ie_class() {
    ?>
    <script>
    if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
        document.body.classList.add( 'is-IE' );
    }
    </script>
    <?php
}
add_action( 'wp_footer', 'openmind_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
    /**
     * Retrieves the list item separator based on the locale.
     *
     * Added for backward compatibility to support pre-6.0.0 WordPress versions.
     *
     * @since 6.0.0
     */
    function wp_get_list_item_separator() {
        /* translators: Used between list items, there is a space after the comma. */
        return __( ', ', 'asics' );
    }
endif;



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}


// body classes
function add_browser_class_to_body($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_edge, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $is_android;

    if ($is_lynx) $classes[] = 'lynx';
    elseif ($is_gecko) $classes[] = 'gecko';
    elseif ($is_opera) $classes[] = 'opera';
    elseif ($is_NS4) $classes[] = 'ns4';
    elseif ($is_safari) $classes[] = 'safari';
    elseif ($is_chrome) $classes[] = 'chrome';
    elseif ($is_edge) $classes[] = 'edge';
    elseif ($is_IE) $classes[] = 'ie';
    else $classes[] = 'unknown';

    if ($is_iphone) $classes[] = 'iphone';
    elseif ($is_android) $classes[] = 'android';

    return $classes;
}
add_filter('body_class', 'add_browser_class_to_body');

/**************************************************/



function get_slug_from_url($url) {
// Parse the URL
$parsed_url = parse_url($url);

// Get the path from the parsed URL
$path = isset($parsed_url['path']) ? $parsed_url['path'] : '';

// Get the last segment of the path which will be the slug
$segments = explode('/', rtrim($path, '/'));
$slug = end($segments);

return $slug;
}

function is_active($url) {
// Get the current page URL
$current_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$current_url .= "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the slug of the current page URL
$current_slug = get_slug_from_url($current_url);

// Parse the provided URL
$parsed_url = parse_url($url);

// Get the path from the provided URL
$provided_path = isset($parsed_url['path']) ? $parsed_url['path'] : '';

// Get the slug from the provided URL
$provided_slug = get_slug_from_url($url);

// Compare both the full URL and the slug
return ($current_url === $url || $current_slug === $provided_slug);
}
