<?php


function init_scripts() {
    // style css
	wp_enqueue_style( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css', array());
    // lib js
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array());
	wp_enqueue_script( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js', array(), null, false);
}
add_action( 'wp_enqueue_scripts', 'init_scripts' );

// LI navbar

function abyss_menu_class($classes){
    $classes[] = "flex flex-col md:flex-row md:gap-[10px] gap-1 items-center hover:text-saumon hover:translate-y-[2px] cursor-pointer";
    return $classes;
}

// a navbar
function abyss_menu_link_class($attrs){
    $attrs['class'] = "duration-200 font-titre text-2xl uppercase";
    return $attrs;
}

/** MENUS */
function register_custom_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Menu header'),
        'footer-menu' => __('Menu footer'),
      )
    );
}
add_action('init', 'register_custom_menus');

/* save group of acf json */
function mmi_td_json_save_groups($path) {
    return get_stylesheet_directory() . '/inc';
}
add_filter( 'acf/settings/save_json', 'mmi_td_json_save_groups' );


function mmi_td_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/inc';
    return $paths;
}
add_filter('acf/settings/load_json', 'mmi_td_json_load_point');
// styliser les li de la navbar
add_filter('nav_menu_css_class', 'abyss_menu_class');
// styliser les liens
add_filter('nav_menu_link_attributes', 'abyss_menu_link_class');
?>