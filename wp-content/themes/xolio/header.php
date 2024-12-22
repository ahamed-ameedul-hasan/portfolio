<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xolio
 */
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>


    <?php
        $xolio_preloader = get_theme_mod( 'xolio_preloader', false );
        $xolio_backtotop = get_theme_mod( 'xolio_backtotop', false );
        $xolio_cursor = get_theme_mod( 'xolio_cursor', false );

        $xolio_preloader_logo = get_template_directory_uri() . '/assets/img/preloader.png';

        $preloader_logo = get_theme_mod('preloader_logo', $xolio_preloader_logo);

        $xolio_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
        $xolio_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

        if ($xolio_header_style == 'header-style-2' && empty($_GET['s'])) {
            $main_wrapper_class = $xolio_header_style ? 'black-background' : '';
        } else {
            $main_wrapper_class = $xolio_default_header_style ? '' : '';
        }
    ?>


    <?php if ( !empty( $xolio_preloader ) ): ?>
        <!--Preloader-->
        <div id="preloader">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="<?php echo esc_url( $preloader_logo ) ?>" alt="<?php echo esc_html__('Preloader', 'xolio' ) ?>"></div>
                </div>
            </div>
        </div>
        <!--Preloader-end -->
    <?php endif;?>


    <?php if ( !empty( $xolio_backtotop ) ): ?>
        <!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->
    <?php endif;?>


    <?php if ( !empty( $xolio_cursor ) ): ?>
    <!-- Custom-cursor -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span><?php echo esc_html__('Drag', 'xolio') ?></span></div>
    <!-- Custom-cursor-end -->
    <?php endif;?>


    <?php do_action( 'xolio_header_style' );?>

    <!-- main-area -->
    <main class="main-area <?php echo esc_attr( $main_wrapper_class ); ?>">

        <?php do_action( 'xolio_before_main_content' ); ?>