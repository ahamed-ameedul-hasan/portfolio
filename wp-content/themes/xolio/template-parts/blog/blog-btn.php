<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xolio
 */

$xolio_blog_btn = get_theme_mod('xolio_blog_btn', __( 'Read More', 'xolio' ) );
$xolio_blog_btn_switch = get_theme_mod( 'xolio_blog_btn_switch', true );

?>

<?php if ( !empty( $xolio_blog_btn_switch ) ): ?>
<div class="tg-blog-post-bottom">
    <a href="<?php the_permalink(); ?>" class="rade-more-btn"><?php print esc_html($xolio_blog_btn); ?></a>
</div>
<?php endif;?>