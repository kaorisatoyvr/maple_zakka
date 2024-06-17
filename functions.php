<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

    // Google Fonts
    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('sage/google-fonts', 'https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap', false, null);
        wp_enqueue_style('sage/google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Tenor+Sans&display=swap', false, null);
    }, 100);

    // Enqueue custom JavaScript for FAQ accordion
    function enqueue_custom_scripts() {
        // Replace 'your-theme-name' with your actual theme folder name
        wp_enqueue_script('sage/custom-js', get_template_directory_uri() . '/resources/scripts/custom.js', ['jquery'], null, true);
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
    

    // homepage category buttons
    function enqueue_category_scripts() {
        wp_enqueue_script( 'category-fixed', get_stylesheet_directory_uri() . '/resources/scripts/category-fixed.js', array('jquery'), '1.0', true );

        wp_enqueue_script( 'hamburger', get_stylesheet_directory_uri() . '/resources/scripts/hamburger.js', array('jquery'), '1.0', true );

    }

    add_action( 'wp_enqueue_scripts', 'enqueue_category_scripts' );
    
    // Register menu
    add_action('init', function() {
        register_nav_menus([
            'social-media' => esc_html__('Social Media - Footer Right', 'maple_zakka'),
            'footer-left' => esc_html__('Footer Quick Link - Footer Left', 'maple_zakka'),
            'footer-middle' => esc_html__('Contact Us - Footer Middle', 'maple_zakka'),
            'mobile-header' => esc_html__('Mobile Header - Hamburger', 'maple_zakka'),
        ]);
    });

// Fontawesome
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.0.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

// Function to remove woocommerce hooks
function remove_product_display() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
}
add_action( 'wp', 'remove_product_display' );

function remove_custom_date_author() {
    remove_action( 'woocommerce_single_product_summary', 'custom_add_date_author', 35 );
}
add_action( 'wp', 'remove_custom_date_author' );

