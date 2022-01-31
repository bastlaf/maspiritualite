<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_theme_support( 'menus' );

add_filter('show_admin_bar', '__return_false');





function gym_register_assets() {

     // Déclarer jQuery
    //  wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
     wp_enqueue_script( // On déclare une version plus moderne
         'jquery', 
         'https://code.jquery.com/jquery-3.6.0.min.js', 
         false, 
         '3.6.0', 
         true 
     );

    // déclarer swiper JS
    wp_enqueue_script( 
        'swiper JS js', 
        'https://unpkg.com/swiper/swiper-bundle.min.js', 
        array(), 
        '1.0', 
        true
    );

    wp_enqueue_style( 
        'swiper JS css',
        'https://unpkg.com/swiper/swiper-bundle.min.css', 
        array(), 
        '1.0'
    );
     // Déclarer le JS
     wp_enqueue_script( 
         'sophie js', 
         get_template_directory_uri() . '/js/script.js', 
         [], 
         '1.0', 
         true
     );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'sophie css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Déclarer le fichier CSS
    wp_enqueue_style( 
        'sophie main', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );

     

};
add_action( 'wp_enqueue_scripts', 'gym_register_assets' );


function add_aos_animation() {
    wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', true);
    wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array( 'AOS' ), null, true);
}
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );



//fonction de création de mon CPT
function demandes_post_types() {
	
    // CPT demande
    $labels = array(
        'name' => 'evenements',
        'all_items' => 'toutes les evenements',
        'singular_name' => 'evenement',
        'add_new_item' => 'Introduire un evenement',
        'edit_item' => 'Modifier un evenement',
        'menu_name' => 'evenements'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => false,
        // 'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 7, 
        'menu_icon' => 'dashicons-welcome-add-page',
		// 'supports' => array('editor'),
		// 'taxonomies' => ['horoscopee', 'category', 'post_tag']
	);

	register_post_type( 'evenements', $args );
}
add_action( 'init', 'demandes_post_types' ); // Le hook init lance la fonction





//option page header et footer
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'menu_slug' 	=> 'header',
        'position' => 4,
        'icon_url' => 'dashicons-upload',
		'redirect'		=> false
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'Footer',
        'position' => 25,
        'icon_url' => 'dashicons-download',
		'redirect'		=> false
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Section Boutique',
		'menu_title'	=> 'Section Boutique',
		'menu_slug' 	=> 'Section Boutique',
        'position' => 5,
        'icon_url' => 'dashicons-admin-home',
		'redirect'		=> false
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Section Contact',
		'menu_title'	=> 'Section Contact',
		'menu_slug' 	=> 'Section Contact',
        'position' => 6,
        'icon_url' => 'dashicons-email',
		'redirect'		=> false
	));
   
}

if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Image par défaut',
		'menu_title'	=> 'Image par défaut',
		'parent_slug' 	=> 'edit.php?post_type=evenements',
        'redirect'		=> false
	));
}

add_action( 'admin_init', 'my_remove_menu_pages' );
// function my_remove_menu_pages() {

//    remove_menu_page('edit.php'); // Posts
//    remove_menu_page('upload.php'); // Media
//    remove_menu_page('link-manager.php'); // Links
//    remove_menu_page('edit-comments.php'); // Comments
//    remove_menu_page('edit.php?post_type=page'); // Pages
//    remove_menu_page('plugins.php'); // Plugins
//    remove_menu_page('themes.php'); // Appearance
//    remove_menu_page('users.php'); // Users
//    remove_menu_page('tools.php'); // Tools
//    remove_menu_page('options-general.php'); // Settings


  
// }
// add_filter('acf/settings/show_admin', '__return_false');
add_image_size( 'gallery-thumb', 500, 200, false );






//fonction de création de mon CPT
function demandes_post_typess() {
	
    // CPT demande
    $labels = array(
        'name' => 'news',
        'all_items' => 'toutes les news',
        'singular_name' => 'new',
        'add_new_item' => 'Introduire une new',
        'edit_item' => 'Modifier une new',
        'menu_name' => 'news'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => false,
        // 'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 7, 
        'menu_icon' => 'dashicons-welcome-add-page',
		// 'supports' => array('editor'),
		// 'taxonomies' => ['horoscopee', 'category', 'post_tag']
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'demandes_post_typess' ); // Le hook init lance la fonction