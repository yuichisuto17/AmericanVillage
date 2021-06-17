<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
    }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function americanvillage_script() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'americanvillage_script' );