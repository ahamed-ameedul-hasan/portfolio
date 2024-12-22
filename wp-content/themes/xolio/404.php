<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package xolio
 */

get_header();
?>


<?php
    $xolio_error_text = get_theme_mod('xolio_error_text', __('404', 'xolio'));
    $xolio_error_title = get_theme_mod('xolio_error_title', __('Sorry, the page you are looking for could not be found', 'xolio'));
    $xolio_error_link_text = get_theme_mod('xolio_error_link_text', __('Back to home', 'xolio'));
?>

<!-- error-area -->
<section class="error-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10">
                <div class="error-content text-center">
                    <h2 class="error-text"><?php print esc_html($xolio_error_text) ?></h2>
                    <h5 class="content"><?php print esc_html($xolio_error_title); ?></h5>
                    <a href="<?php print esc_url(home_url('/')); ?>" class="btn">
                        <?php print esc_html($xolio_error_link_text); ?>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error-area-end -->

<?php
get_footer();