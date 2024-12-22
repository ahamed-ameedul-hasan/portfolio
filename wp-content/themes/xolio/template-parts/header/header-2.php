<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xolio
 */

// Header Settings
$xolio_show_sticky_header = get_theme_mod('xolio_show_sticky_header', false);
$sticky_header = $xolio_show_sticky_header ? 'sticky-header' : 'sticky-default';

// Header Button
$xolio_show_header_button = get_theme_mod('xolio_show_header_button', false);
$xolio_header_btn_text = get_theme_mod('xolio_header_btn_text', __('Contact', 'xolio'));
$xolio_header_btn_url = get_theme_mod('xolio_header_btn_url', __('#!', 'xolio'));
$xolio_show_mobile_social = get_theme_mod('xolio_show_mobile_social', false);

// Header Contact
$xolio_show_header_contact = get_theme_mod('xolio_show_header_contact', false);
$xolio_header_contact_title = get_theme_mod('xolio_header_contact_title', __('Contact', 'xolio'));
$xolio_header_contact_mail = get_theme_mod('xolio_header_contact_mail', __('company@gmail.com', 'xolio'));
$xolio_header_contact_location = get_theme_mod('xolio_header_contact_location', __('Ranelagh Place, Liverpool, L3 5UL, England', 'xolio'));
$xolio_header_contact_time = get_theme_mod('xolio_header_contact_time', __('7 Days a week <br> from 10-00 am to 6-00 pm', 'xolio'));
$xolio_header_contact_chat = get_theme_mod('xolio_header_contact_chat', __('Lat’s Chat', 'xolio'));
$xolio_header_contact_chat_url = get_theme_mod('xolio_header_contact_chat_url', __('#', 'xolio'));


// Header Project
$xolio_show_header_project = get_theme_mod('xolio_show_header_project', true);
$header_project_img = get_template_directory_uri() . '/assets/img/images/our_project_img.png';
$xolio_header_project_img = get_theme_mod('xolio_header_project_img', $header_project_img);
$xolio_header_project_title = get_theme_mod('xolio_header_project_title', __('One of Our <span>Best Ongoing</span> Projects', 'xolio'));
$xolio_header_project_btn = get_theme_mod('xolio_header_project_btn', __('Details', 'xolio'));
$xolio_header_project_btn_url = get_theme_mod('xolio_header_project_btn_url', __('#', 'xolio'));

// Header Support
$xolio_show_customer_support = get_theme_mod('xolio_show_customer_support', true);
$xolio_header_support_title = get_theme_mod('xolio_header_support_title', __('Customer Support', 'xolio'));
$xolio_header_help_title = get_theme_mod('xolio_header_help_title', __('Need Help Choosing a Plan?', 'xolio'));
$xolio_header_help_desc = get_theme_mod('xolio_header_help_desc', __('We offer solutions for businesses of all sizes. For questions about our plans and products, contact our team of experts. Get in touch', 'xolio'));
$xolio_header_support_btn = get_theme_mod('xolio_header_support_btn', __('Support', 'xolio'));
$xolio_header_support_btn_url = get_theme_mod('xolio_header_support_btn_url', __('#', 'xolio'));
$xolio_header_doc_btn = get_theme_mod('xolio_header_doc_btn', __('Documentation', 'xolio'));
$xolio_header_doc_btn_url = get_theme_mod('xolio_header_doc_btn_url', __('#', 'xolio'));

?>


<!-- header-area -->
<header>
    <div id="<?php echo esc_attr($sticky_header); ?>" class="menu-area menu-style-two transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <?php xolio_header_logo(); ?>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <?php xolio_header_menu(); ?>
                            </div>

                            <?php if (!empty($xolio_show_header_button)) : ?>
                                <div class="header-action">
                                    <ul class="list-wrap">
                                        <li class="header-btn"><a href="<?php echo esc_url($xolio_header_btn_url) ?>" class="btn"><?php echo esc_html($xolio_header_btn_text); ?> <span></span></a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>

                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <?php xolio_mobile_logo(); ?>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>

                            <?php if (!empty($xolio_show_mobile_social)) : ?>
                                <div class="social-links">
                                    <?php xolio_mobile_social_profiles(); ?>
                                </div>
                            <?php endif; ?>

                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>

        <?php if (!empty($xolio_show_header_contact)) : ?>
            <!-- header-contact -->
            <div class="header-contact-wrap black-background">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="left-side-content">
                                <?php if (!empty($xolio_header_contact_title)) : ?>
                                    <h3 class="title"><?php echo esc_html($xolio_header_contact_title); ?></h3>
                                <?php endif; ?>
                                <div class="row">

                                    <div class="col-xl-4 col-lg-5 col-md-6">
                                        <div class="contact-info-list">
                                            <ul class="list-wrap">

                                                <?php if (!empty($xolio_header_contact_mail)) : ?>
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 6.5C1.5 4.89295 1.95538 3.86848 2.63534 3.2371C3.32535 2.59637 4.36497 2.25 5.75 2.25H15.75C17.135 2.25 18.1746 2.59637 18.8647 3.2371C19.5446 3.86848 20 4.89295 20 6.5V13.5C20 15.107 19.5446 16.1315 18.8647 16.7629C18.1746 17.4036 17.135 17.75 15.75 17.75H5.75C4.36497 17.75 3.32535 17.4036 2.63534 16.7629C1.95538 16.1315 1.5 15.107 1.5 13.5V6.5ZM5.75 0.75C4.13503 0.75 2.67465 1.15363 1.61466 2.1379C0.544615 3.13152 0 4.60705 0 6.5V13.5C0 15.393 0.544615 16.8685 1.61466 17.8621C2.67465 18.8464 4.13503 19.25 5.75 19.25H15.75C17.365 19.25 18.8254 18.8464 19.8853 17.8621C20.9554 16.8685 21.5 15.393 21.5 13.5V6.5C21.5 4.60705 20.9554 3.13152 19.8853 2.1379C18.8254 1.15363 17.365 0.75 15.75 0.75H5.75ZM16.2181 7.58602C16.5417 7.32751 16.5945 6.85558 16.336 6.53194C16.0775 6.20829 15.6056 6.15548 15.2819 6.41398L12.1529 8.91324L12.1525 8.91352C11.3961 9.51536 10.0946 9.51549 9.33799 8.91393L6.21898 6.41471C5.89574 6.1557 5.42373 6.20778 5.16471 6.53102C4.9057 6.85426 4.95778 7.32627 5.28102 7.58529L8.40101 10.0853L8.40286 10.0868C9.70626 11.1244 11.7837 11.1244 13.0871 10.0868L13.0881 10.086L16.2181 7.58602Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <a href="mailto:<?php echo esc_attr($xolio_header_contact_mail); ?>"><?php echo esc_html($xolio_header_contact_mail); ?></a>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if (!empty($xolio_header_contact_location)) : ?>
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.48199 7.65591C3.37522 3.73032 6.71708 1.74769 10.1338 1.75C13.5508 1.75231 16.8905 3.73971 17.7791 7.66556L17.7791 7.6656C18.8362 12.3354 15.943 16.3756 13.2111 18.999L13.2097 19.0004C11.4913 20.659 8.77127 20.661 7.04076 18.9997C4.31866 16.3762 1.42493 12.3261 2.48199 7.65591ZM10.1348 0.250002C14.1154 0.252693 18.1706 2.60029 19.2421 7.33441C20.4848 12.8239 17.0589 17.3834 14.251 20.08C11.9497 22.3008 8.31046 22.2989 6.00106 20.0809L6.00012 20.08C3.20236 17.3836 -0.22362 12.8139 1.01908 7.32441L1.01926 7.32364C2.09618 2.58953 6.1542 0.247312 10.1348 0.250002ZM7.76166 9.30994C7.76166 8.00103 8.82274 6.93994 10.1317 6.93994C11.4406 6.93994 12.5017 8.00103 12.5017 9.30994C12.5017 10.6189 11.4406 11.6799 10.1317 11.6799C8.82274 11.6799 7.76166 10.6189 7.76166 9.30994ZM10.1317 5.43994C7.99432 5.43994 6.26166 7.1726 6.26166 9.30994C6.26166 11.4473 7.99432 13.1799 10.1317 13.1799C12.269 13.1799 14.0017 11.4473 14.0017 9.30994C14.0017 7.1726 12.269 5.43994 10.1317 5.43994Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <span><?php echo esc_html($xolio_header_contact_location); ?></span>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if (!empty($xolio_header_contact_time)) : ?>
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 11C1.5 5.89421 5.64421 1.75 10.75 1.75C15.8558 1.75 20 5.89421 20 11C20 16.1058 15.8558 20.25 10.75 20.25C5.64421 20.25 1.5 16.1058 1.5 11ZM10.75 0.25C4.81579 0.25 0 5.06579 0 11C0 16.9342 4.81579 21.75 10.75 21.75C16.6842 21.75 21.5 16.9342 21.5 11C21.5 5.06579 16.6842 0.25 10.75 0.25ZM11.1289 6.50977C11.1289 6.09555 10.7931 5.75977 10.3789 5.75977C9.96469 5.75977 9.62891 6.09555 9.62891 6.50977V10.6098C9.62891 11.0862 9.79027 11.5637 10.0149 11.9576C10.2393 12.3511 10.5673 12.7322 10.9755 12.9744L10.9766 12.975L14.0746 14.8238C14.4303 15.0361 14.8907 14.9198 15.1029 14.5641C15.3152 14.2084 15.1989 13.748 14.8432 13.5357L11.7433 11.6857L11.7413 11.6845C11.6099 11.6067 11.4483 11.4431 11.3179 11.2145C11.1875 10.9859 11.1289 10.7633 11.1289 10.6098V6.50977Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <span><?php echo wp_kses_post($xolio_header_contact_time); ?></span>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>

                                            </ul>

                                            <?php if (!empty($xolio_header_contact_chat_url)) : ?>
                                                <div class="lats-chat">
                                                    <a href="<?php echo esc_url($xolio_header_contact_chat_url); ?>"><?php echo esc_html($xolio_header_contact_chat); ?></a>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <?php if (!empty($xolio_show_header_project)) : ?>
                                        <div class="col-xl-8 col-lg-7 col-md-6">
                                            <div class="our-best-project">
                                                <div class="content">
                                                    <?php if (!empty($xolio_header_project_title)) : ?>
                                                        <h4 class="title"><?php echo wp_kses_post($xolio_header_project_title); ?></h4>
                                                    <?php endif; ?>

                                                    <?php if (!empty($xolio_header_project_btn_url)) : ?>
                                                        <a href="<?php echo esc_url($xolio_header_project_btn_url); ?>" class="btn"><?php echo esc_html($xolio_header_project_btn); ?> <span></span></a>
                                                    <?php endif; ?>
                                                </div>

                                                <?php if (!empty($xolio_header_project_img)) : ?>
                                                    <div class="thumb">
                                                        <img src="<?php print esc_url($xolio_header_project_img); ?>" alt="<?php echo esc_html__('Thumbnail', 'xolio') ?>">
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                        <?php if (!empty($xolio_show_customer_support)) : ?>
                            <div class="col-lg-4">
                                <div class="customer-support-wrap">
                                    <?php if (!empty($xolio_header_support_title)) : ?>
                                        <h4 class="title"><?php echo esc_html($xolio_header_support_title); ?></h4>
                                    <?php endif; ?>

                                    <?php if (!empty($xolio_header_help_title || $xolio_header_help_desc)) : ?>
                                        <div class="customer-support-content">

                                            <?php if (!empty($xolio_header_help_title)) : ?>
                                                <div class="content-top">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/support_img.png" alt="img">
                                                    <h4 class="title"><?php echo esc_html($xolio_header_help_title); ?></h4>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (!empty($xolio_header_help_desc)) : ?>
                                                <p><?php echo esc_html($xolio_header_help_desc); ?></p>
                                            <?php endif; ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($xolio_header_support_btn_url || $xolio_header_doc_btn_url)) : ?>
                                        <div class="content-bottom">

                                            <?php if (!empty($xolio_header_support_btn_url)) : ?>
                                                <a href="<?php echo esc_url($xolio_header_support_btn_url); ?>"><?php echo esc_html($xolio_header_support_btn); ?></a>
                                            <?php endif; ?>

                                            <?php if (!empty($xolio_header_doc_btn_url)) : ?>
                                                <a href="<?php echo esc_url($xolio_header_doc_btn_url); ?>"><?php echo esc_html($xolio_header_doc_btn); ?></a>
                                            <?php endif; ?>

                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="body-contact-overlay black"></div>
            <!-- header-contact-end -->
        <?php endif; ?>

    </div>
</header>
<!-- header-area-end -->