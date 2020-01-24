<?php
/** Enable HTML5 Templates */
add_theme_support( 'html5', [
	'search-form',
	'comment-list',
	'comment-form',
	'gallery',
	'caption',
] );

/** Allow WordPress to manage the document title */
add_theme_support( 'title-tag' );

/** Register Menus */
add_action('init', function () {
	register_nav_menus([
		'header' => __('Header Menu', 'custom'),
	]);
});

/** Enqueue Styles & Scripts */
function custom_wp_enqueue_scripts() {
	wp_enqueue_style('typekit', 'https://use.typekit.net/ttx1qvt.css');
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('app', get_theme_file_uri('/dist/app.css'));
	wp_enqueue_script('animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.js', ['jquery'], false, true);
	wp_enqueue_script('app', get_theme_file_uri('/dist/app.js'), ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');

add_filter( 'gform_confirmation_anchor', '__return_true' );

/** Tell ACF where to store and pull local JSON files */
function carbon_acf_json_save_point($path) {
    return get_template_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'carbon_acf_json_save_point');

function carbon_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'carbon_acf_json_load_point');
