<?php 

/**
 * =============================================================
 * =============================================================
 * Welcome to Control Center of our
 * rSchool Theme... This is main file where 
 * we will include all important thing for website developing.. 
 * 
 * NOTE: Do not Change anything if you are not
 * sure what are u doing!
 * =============================================================
 * =============================================================
 * 
 */

 /**
 * =============================================================
 * =============================================================
 * Require All PHP PLugins
 * =============================================================
 * =============================================================
 * 
 */
require_once( 'include/bs4navwalker.php' );
require_once( 'include/cite_slider.php' );

 /**
 * =============================================================
 * =============================================================
 * Prepare All Css Files to be Included
 * =============================================================
 * =============================================================
 * 
 */
function __load_css_files(){

    /** Register All Files */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_register_style('rschool', get_template_directory_uri() . '/css/rschool.css' );
    wp_register_style('rschool-mobile', get_template_directory_uri() . '/css/rschool-mobile.css' );

    /** Queue */
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('rschool');
    wp_enqueue_style('rschool-mobile');

}
/**
* =============================================================
* =============================================================
* Register JS jQuery
* =============================================================
* =============================================================
* 
*/
function __register_jquery(){

    /** Remove Jqery */
    wp_deregister_script('jquery');

    /** Add New Jquery */
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');

    /** Add jQuery to queue */
    wp_enqueue_script('jquery');

}

 /**
 * =============================================================
 * =============================================================
 * Prepare All Javascript Files to be Included
 * =============================================================
 * =============================================================
 * 
 */
function __load_js_files(){

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
    wp_register_script('rschool', get_template_directory_uri() . '/js/rschool.js');

    /** queue */
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('rschool');

}

 /**
 * =============================================================
 * =============================================================
 * Sidebars
 * =============================================================
 * =============================================================
 * 
 */
function __register_sidebars(){

    // Register main sidebar 
    // on the right side
    register_sidebar([
        'name'  => 'My Primary Sidebar',
        'id'    => 'primary-sidebar',
        'class' => 'pm-sidebar',
        'before_widget' => '<article>',
        'after_widget' => '</article>'
    ]);

    // Register Sidebar on the bottom
    // left side..
    register_sidebar([
        'name'     => 'Bottom Left Sidebar',
        'id'       => 'bottom-left',
        'class'    => 'pm-bt-left',
        'before_widget' => '<article>',
        'after_widget' => '</article>'
    ]);

    // Register Sidebar on the bottom
    // left side..
    register_sidebar([
        'name'     => 'Bottom Right Sidebar',
        'id'       => 'bottom-right',
        'class'    => 'pm-bt-right',
        'before_widget' => '<article>',
        'after_widget' => '</article>'
    ]);

}

 /**
 * =============================================================
 * =============================================================
 * Limit pages
 * =============================================================
 * =============================================================
 * 
 */
function __limit_page_posts( &$query ){

    if( is_archive() ){
        $query->set('posts_per_page', 100);
    }

}


 /**
 * =============================================================
 * =============================================================
 * Menu Registration
 * =============================================================
 * =============================================================
 * 
 */
register_nav_menus([

    /** Primary Menu is main menu on top of the page */
    /** I will code in Bootstrap */
    'primary_menu' => "Primary Menu"

]);

/**
* =============================================================
* =============================================================
* ADD THEME SUPPORT
* =============================================================
* =============================================================
* 
*/
add_theme_support("menus");
add_theme_support("post-thumbnails");

 /**
 * =============================================================
 * =============================================================
 * ADD ACTIONS
 * =============================================================
 * =============================================================
 * 
 */
add_action("wp_enqueue_scripts", "__load_css_files");
add_action("wp_enqueue_scripts", "__register_jquery");
add_action("wp_enqueue_scripts", "__load_js_files");
add_action("widgets_init", "__register_sidebars");
add_action("pre_get_posts", "__limit_page_posts");
