<?php
      
    add_action('wp_enqueue_scripts','get_style_and_scripts');

    function get_style_and_scripts(){
        wp_enqueue_style('main', get_stylesheet_directory_uri().'/assets/css/main.css' ,false , time());

        wp_enqueue_script('my_jquery', get_stylesheet_directory_uri().'/assets/js/jquery.min.js', false, null, true);
        wp_enqueue_script('jqury_scroly', get_stylesheet_directory_uri().'/assets/js/jquery.scrolly.min.js', 'my_jquery',null, true);
        wp_enqueue_script('jquery_scrolex', get_stylesheet_directory_uri().'/assets/js/jquery.scrollex.min.js', 'my_jquery',null, true);
        wp_enqueue_script('skell', get_stylesheet_directory_uri().'/assets/js/skel.min.js', false ,null, true);
        wp_enqueue_script('util', get_stylesheet_directory_uri().'/assets/js/util.js', false ,null, true);
        wp_enqueue_script('main', get_stylesheet_directory_uri().'/assets/js/main.js', false ,time(), true);
    };

    register_nav_menus(array(
        'head_menu' => 'Главное меню'
    ));

    add_theme_support( 'post-thumbnails' ); // для всех типов постов

    add_theme_support('custom-logo', array('height' => 1440, 'width' => 960, 'flex-height' => true)); //Позволяет использовать кастомной логотип

    load_theme_textdomain('wptuts'); //Переводит текст в теме

    add_theme_support('title-tag'); //Позволяет включить настройку тега title автоматически


    

?>