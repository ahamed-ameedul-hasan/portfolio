<?php

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xolio
 */

$categories = get_the_terms( $post->ID, 'category' );
$xolio_blog_date = get_theme_mod( 'xolio_blog_date', true );
$xolio_blog_comments = get_theme_mod( 'xolio_blog_comments', true );
$xolio_blog_author = get_theme_mod( 'xolio_blog_author', true );
$xolio_blog_cat = get_theme_mod( 'xolio_blog_cat', false );

?>

<div class="blog-meta-two">
    <ul class="list-wrap d-flex flex-wrap align-items-center">

        <?php if ( !empty($xolio_blog_cat) ): ?>
            <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<li class="tag"><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></li>';
                }
            ?>
        <?php endif;?>

        <?php if ( !empty($xolio_blog_author) ): ?>
            <li><i class="far fa-user"></i><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><?php print get_the_author();?></a></li>
        <?php endif;?>

        <?php if ( !empty($xolio_blog_date) ): ?>
            <li><i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></li>
        <?php endif;?>

        <?php if ( !empty($xolio_blog_comments) ): ?>
            <li><i class="far fa-comments"></i> <a href="<?php comments_link();?>"><?php comments_number();?></a></li>
        <?php endif;?>

    </ul>
</div>