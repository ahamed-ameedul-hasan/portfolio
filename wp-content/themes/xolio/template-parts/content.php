<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xolio
 */

    $xolio_show_blog_share = get_theme_mod('xolio_show_blog_share', false);
    $xolio_post_tags_width = $xolio_show_blog_share ? 'col-md-7' : 'col-12';

?>
<?php if ( is_single() ) : ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'inner-blog-item blog-details-wrap format-image' );?>>

        <?php if ( has_post_thumbnail() ): ?>
        <div class="inner-blog-thumb">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </div>
        <?php endif; ?>

        <div class="inner-blog-content blog-details-content">

            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

            <div class="post-text">
                <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'xolio' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>

            <?php if (!empty(get_the_tags())) : ?>
            <div class="blog-details-bottom">

                <div class="row">
                    <div class="<?php echo esc_attr($xolio_post_tags_width); ?>">
                        <?php print xolio_get_tag();?>
                    </div>
                    <?php if (!empty($xolio_show_blog_share)) : ?>
                    <div class="col-md-5">
                        <div class="blog-details-social text-md-end">
                            <h5 class="social-title"><?php echo esc_html__( 'Social Share :', 'xolio' ) ?></h5>
                            <?php xolio_social_share(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
            <?php endif; ?>

        </div>
    </article>

<?php else: ?>


    <article id="post-<?php the_ID();?>" <?php post_class( 'inner-blog-item format-image' );?> >

        <?php if ( has_post_thumbnail() ): ?>
        <div class="inner-blog-thumb">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </a>
        </div>
        <?php endif; ?>

        <div class="inner-blog-content">

            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="post-text">
                <?php the_excerpt(); ?>
            </div>

            <!-- blog btn -->
            <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>

        </div>
    </article>

<?php endif;?>