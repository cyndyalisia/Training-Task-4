<?php
    if(!function_exists('trainingTheme_enqueue_styles')){
        function trainingTheme_enqueue_styles() {
            wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
            $dependencies = array('bootstrap');
            wp_enqueue_style( 'trainingTheme-style', get_stylesheet_uri(), $dependencies );
            if ( is_child_theme() ) {
                // load parent stylesheet first if this is a child theme
        	       wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
            }
            // load active theme stylesheet in both cases
            wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );

        }
    }
    
    if(!function_exists('trainingTheme_enqueue_scripts')){
        function trainingTheme_enqueue_scripts() {
            $dependencies = array('jquery');
            wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
        }
    }

    if(!function_exists('wpb_custom_new_menu')){
        function wpb_custom_new_menu() {
            register_nav_menus(
                array(
                    'my-custom-menu' => __( 'My Custom Menu' ),
                    'extra-menu' => __( 'Extra Menu' )
                )
            );
        }
    }

    if(!function_exists('trainingTheme_wp_setup')){
        function trainingTheme_wp_setup() {
            add_theme_support( 'title-tag' );
        }
    }

    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    add_action( 'wp_enqueue_scripts', 'trainingTheme_enqueue_styles' );
    add_action( 'wp_enqueue_scripts', 'trainingTheme_enqueue_scripts' );
    add_action( 'init', 'wpb_custom_new_menu' );
    add_action( 'after_setup_theme', 'trainingTheme_wp_setup' );
?>
