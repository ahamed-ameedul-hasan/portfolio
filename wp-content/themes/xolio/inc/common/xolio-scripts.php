<?php

/**
 * xolio_scripts description
 * @return [type] [description]
 */
function xolio_scripts() {


    /**
     * ALL CSS FILES
    */
    wp_enqueue_style( 'xolio-fonts', xolio_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', XOLIO_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', XOLIO_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'xolio-animate', XOLIO_THEME_CSS_DIR . 'animate.min.css', ['e-animations'] );
    wp_enqueue_style( 'magnific-popup', XOLIO_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'font-awesome-free', XOLIO_THEME_CSS_DIR . 'fontawesome-all.min.css', [] );
    wp_enqueue_style( 'swiper-bundle', XOLIO_THEME_CSS_DIR . 'swiper-bundle.min.css', [] );
    wp_enqueue_style( 'odometer', XOLIO_THEME_CSS_DIR . 'odometer.css', [] );
    wp_enqueue_style( 'slick', XOLIO_THEME_CSS_DIR . 'slick.css', [] );
    wp_enqueue_style( 'xolio-default', XOLIO_THEME_CSS_DIR . 'default.css', [] );
    wp_enqueue_style( 'xolio-core', XOLIO_THEME_CSS_DIR . 'xolio-core.css', [] );
    wp_enqueue_style( 'xolio-unit', XOLIO_THEME_CSS_DIR . 'xolio-unit.css', [] );
    wp_enqueue_style( 'xolio-style', get_stylesheet_uri() );
    wp_enqueue_style( 'xolio-responsive', XOLIO_THEME_CSS_DIR . 'responsive.css', [] );


    // ALL JS FILES
    wp_enqueue_script( 'bootstrap-bundle', XOLIO_THEME_JS_DIR . 'bootstrap.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'isotope', XOLIO_THEME_JS_DIR . 'isotope.pkgd.min.js', [ 'imagesloaded' ], '', true );
    wp_enqueue_script( 'magnific-popup', XOLIO_THEME_JS_DIR . 'jquery.magnific-popup.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'odometer', XOLIO_THEME_JS_DIR . 'jquery.odometer.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', XOLIO_THEME_JS_DIR . 'swiper-bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'appear', XOLIO_THEME_JS_DIR . 'jquery.appear.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'slick', XOLIO_THEME_JS_DIR . 'slick.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'parallax', XOLIO_THEME_JS_DIR . 'parallax.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'parallaxScroll', XOLIO_THEME_JS_DIR . 'jquery.parallaxScroll.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'tween-max', XOLIO_THEME_JS_DIR . 'tween-max.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', XOLIO_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'xolio-main', XOLIO_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'xolio_scripts' );

/*
Register Fonts
*/
function xolio_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
    */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'xolio' ) ) {
        $font_url = add_query_arg( 'family', 'Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800' , "//fonts.googleapis.com/css");
    }
    return $font_url;
}