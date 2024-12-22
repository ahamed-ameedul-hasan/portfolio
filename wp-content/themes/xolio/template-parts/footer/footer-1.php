<?php

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xolio
 */


// Bg color
$footer_bg_color = get_theme_mod('xolio_footer_bg_color');
$copyright_bg_color = get_theme_mod('xolio_copyright_bg_color');

// Payment Card
$footer_payment_method_img = get_theme_mod('footer_payment_method_img');
$xolio_copyright_center = $footer_payment_method_img ? 'col-md-6 text-end' : 'col-lg-12 text-center';


// BG Color
$bg_color = !empty($xolio_footer_bg_color) ? $xolio_footer_bg_color : $footer_bg_color;


// Footer Columns
$footer_columns = 0;
$footer_widgets = get_theme_mod('footer_widget_number', 4);

for ($num = 1; $num <= $footer_widgets; $num++) {
    if (is_active_sidebar('footer-' . $num)) {
        $footer_columns++;
    }
}

switch ($footer_columns) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-3 col-sm-6';
        $footer_class[2] = 'col-lg-3 col-sm-6';
        break;
    case '3':
        $footer_class[1] = 'col-lg-3 col-sm-6';
        $footer_class[2] = 'col-lg-3 col-sm-6';
        $footer_class[3] = 'col-lg-3 col-sm-6';
        break;
    case '4':
        $footer_class[1] = 'col-lg-3 col-sm-6';
        $footer_class[2] = 'col-lg-3 col-sm-6';
        $footer_class[3] = 'col-lg-3 col-sm-6';
        $footer_class[4] = 'col-lg-3 col-sm-6';
        break;
    default:
        $footer_class = 'col-lg-3 col-sm-6';
        break;
}

?>


<!-- footer-area -->
<footer>
    <div class="footer-area" data-bg-color="<?php print esc_attr($bg_color); ?>">
        <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')) : ?>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <?php
                        if ($footer_columns < 4) {
                            print '<div class="col-lg-3 col-sm-6">';
                            dynamic_sidebar('footer-1');
                            print '</div>';

                            print '<div class="col-lg-3 col-sm-6">';
                            dynamic_sidebar('footer-2');
                            print '</div>';

                            print '<div class="col-lg-3 col-sm-6">';
                            dynamic_sidebar('footer-3');
                            print '</div>';

                            print '<div class="col-lg-3 col-sm-6">';
                            dynamic_sidebar('footer-4');
                            print '</div>';
                        } else {
                            for ($num = 1; $num <= $footer_columns; $num++) {
                                if (!is_active_sidebar('footer-' . $num)) {
                                    continue;
                                }
                                print '<div class="' . esc_attr($footer_class[$num]) . '">';
                                dynamic_sidebar('footer-' . $num);
                                print '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="footer-bottom" data-bg-color="<?php print esc_attr($copyright_bg_color); ?>">
            <div class="container">
                <div class="row align-items-center">
                    <?php if (!empty($footer_payment_method_img)) : ?>
                        <div class="col-md-6">
                            <div class="cart-img">
                                <img src="<?php echo esc_url($footer_payment_method_img); ?>" alt="<?php esc_html__('Image', 'xolio') ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="<?php print esc_attr($xolio_copyright_center); ?>">
                        <div class="copyright-text">
                            <p><?php print xolio_copyright_text(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- footer-area-end -->