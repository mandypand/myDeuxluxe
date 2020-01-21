<?php 
    function get_my_scripts(){
        wp_enqueue_style(
            "fontawesome",
            get_stylesheet_directory_uri() . "/assets/css/font-awesome.css"
        );

        wp_enqueue_style(
            "owlcss",
            get_stylesheet_directory_uri() . "/assets/css/owl.carousel.css"
        );

        wp_enqueue_style(
            "owl2css",
            get_stylesheet_directory_uri() . "/assets/css/owl.theme.default.min.css"
        );

        wp_enqueue_style(
            "style", 
            get_stylesheet_directory_uri() . "/style.css"
        );

        wp_enqueue_script(
            "owlscript", 
            get_template_directory_uri() . "/assets/js/jquery.min.js", 
             array("jquery"), 
             false, 
             true
         );

         wp_enqueue_script(
            "owlscript2", 
            get_template_directory_uri() . "/assets/js/owl.carousel.js", 
             array("jquery"), 
             false, 
             true
         );

        wp_enqueue_script(
            "slideshow", 
            get_template_directory_uri() . "/assets/js/slideshow.js", 
             array("jquery"), 
             false, 
             true
         );

         wp_enqueue_script(
            "popup", 
            get_template_directory_uri() . "/assets/js/popup.js", 
             array("jquery"), 
             false, 
             true
         );

         wp_enqueue_script(
            "script", 
            get_template_directory_uri() . "/assets/js/script.js", 
             array("jquery"), 
             false, 
             true
         );
    }
    add_action("wp_enqueue_scripts", "get_my_scripts");

    
    function register_all_my_menus(){
        register_nav_menus([
            "primary-menu" => "Header Menu"
        ]);
    }
    add_action("init", "register_all_my_menus");

    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'deuxluxe General Settings',
            'menu_title'	=> 'deuxluxe Settings',
            'menu_slug' 	=> 'deuxluxe-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
    
    }

   
    function register_my_sidebar(){
        register_sidebar([
            "name" => "search sidebar blogpost",
            "id" => "sidebar-widget"
        ]);
    }
    add_action("widgets_init", "register_my_sidebar");

    
    add_theme_support( "post-thumbnails" );

    
    add_post_type_support("page", "excerpt");

    function create_post_type(){
        register_post_type( "cityguide" , [
        "labels" => [
        "name" => "CITY GUIDE",
        "singular_name" => "CITY GUIDE"
        ],
        "public" => true,
        "has_archive" => true,
        "supports" => ["title", "editor", "thumbnail"]
        ]);
       }
       add_action( "init" , "create_post_type" );


?>