<?php
/**
 * xolio customizer
 *
 * @package xolio
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function xolio_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'xolio_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Xolio Customizer', 'xolio' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'xolio_default_setting', [
        'title'       => esc_html__( 'Xolio Default Setting', 'xolio' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'header_info_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'xolio' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'mobile_menu_setting', [
        'title'       => esc_html__( 'Mobile Menu Setting', 'xolio' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'xolio' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'xolio' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'xolio' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'xolio' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'xolio' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'xolio' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'xolio' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'xolio' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'xolio_customizer',
    ] );
}

add_action( 'customize_register', 'xolio_customizer_panels_sections' );


/*
Theme Default Settings
*/
function _xolio_default_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_preloader',
        'label'    => esc_html__( 'Preloader ON/OFF', 'xolio' ),
        'section'  => 'xolio_default_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_backtotop',
        'label'    => esc_html__( 'Back to Top ON/OFF', 'xolio' ),
        'section'  => 'xolio_default_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_cursor',
        'label'    => esc_html__( 'Cursor Effect ON/OFF', 'xolio' ),
        'section'  => 'xolio_default_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_xolio_default_fields' );


/*
Header Right Settings
*/
function _header_right_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_header_button',
        'label'    => esc_html__('Show Header Button', 'xolio'),
        'section'  => 'header_info_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'xolio'),
            'off' => esc_html__('Disable', 'xolio'),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_btn_text',
        'label'    => esc_html__('Enter Button Text', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_button',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Contact', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_btn_url',
        'label'    => esc_html__('Enter Button URL', 'xolio'),
        'description' => esc_html__('If you want to use Popup contact then use on Button URL "#!"', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_button',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('#!', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_header_contact',
        'label'    => esc_html__( 'Show Header Popup Contact', 'xolio' ),
        'section'  => 'header_info_setting',
        'description' => esc_html__('When click on the Header Button you find this option', 'xolio'),
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_contact_title',
        'label'    => esc_html__( 'Enter Title Text', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__( 'Contact', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_contact_mail',
        'label'    => esc_html__( 'Enter email', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('company@gmail.com', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'xolio_header_contact_location',
        'label'    => esc_html__( 'Enter location', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Ranelagh Place, Liverpool, L3 5UL, England', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'xolio_header_contact_time',
        'label'    => esc_html__( 'Enter work time', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => wp_kses_post('7 Days a week <br> from 10-00 am to 6-00 pm', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_contact_chat',
        'label'    => esc_html__( 'Enter live chat text', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Let\'s Chat', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_contact_chat_url',
        'label'    => esc_html__( 'Enter live chat URL', 'xolio' ),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('#', 'xolio' ),
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_header_project',
        'label'    => esc_html__('Show Header Project', 'xolio'),
        'section'  => 'header_info_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'xolio'),
            'off' => esc_html__('Disable', 'xolio'),
        ],
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'xolio_header_project_img',
        'label'       => esc_html__('Image', 'xolio'),
        'description' => esc_html__('Upload Project Image', 'xolio'),
        'section'     => 'header_info_setting',
        'default'     => get_template_directory_uri() . '/assets/img/images/our_project_img.png',
        'priority'    => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_project',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_project_title',
        'label'    => esc_html__('Enter Project Title', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_project',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => wp_kses_post('One of Our <span>Best Ongoing</span> Projects', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_project_btn',
        'label'    => esc_html__('Enter Button Text', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_project',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Details', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_project_btn_url',
        'label'    => esc_html__('Enter Button URL', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_project',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('#', 'xolio'),
    ];

    // Customer Support
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_customer_support',
        'label'    => esc_html__('Show Header Support', 'xolio'),
        'section'  => 'header_info_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'xolio'),
            'off' => esc_html__('Disable', 'xolio'),
        ],
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_support_title',
        'label'    => esc_html__('Enter Support Title', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => wp_kses_post('Customer Support', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_help_title',
        'label'    => esc_html__('Enter Help Title', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => wp_kses_post('Need Help Choosing a Plan?', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'xolio_header_help_desc',
        'label'    => esc_html__('Enter Help Description', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => wp_kses_post('We offer solutions for businesses of all sizes. For questions about our plans and products, contact our team of experts. Get in touch', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_support_btn',
        'label'    => esc_html__('Enter Support Button Text', 'xolio'),
        'description' => esc_html__('If you want to delete this field just remove the URL', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Support', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_support_btn_url',
        'label'    => esc_html__('Enter Support Button URL', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('#', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_doc_btn',
        'label'    => esc_html__('Enter Documentation Button Text', 'xolio'),
        'description' => esc_html__('If you want to delete this field just remove the URL', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('Documentation', 'xolio'),
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_header_doc_btn_url',
        'label'    => esc_html__('Enter Documentation Button URL', 'xolio'),
        'section'  => 'header_info_setting',
        'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_customer_support',
                'operator' => '===',
                'value'    => true,
            ],
            [
                'setting'  => 'xolio_show_header_contact',
                'operator' => '===',
                'value'    => true,
            ],
        ],
        'default'  => esc_html__('#', 'xolio'),
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_right_fields' );

/*
Mobile Menu Settings
*/
function _mobile_menu_fields( $fields ) {

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'mobile_logo',
        'label'       => esc_html__( 'Mobile Menu Logo Dark', 'xolio' ),
        'description' => esc_html__( 'Upload Your Logo.', 'xolio' ),
        'section'     => 'mobile_menu_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_mobile_social',
        'label'    => esc_html__( 'Show Mobile Menu Social', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => 0,
        'priority' => 12,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    // Mobile section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_mobile_fb_url',
        'label'    => esc_html__( 'Facebook URL', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => esc_html__( '#', 'xolio' ),
        'priority' => 12,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_mobile_social',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_mobile_twitter_url',
        'label'    => esc_html__( 'Twitter URL', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => esc_html__( '#', 'xolio' ),
        'priority' => 12,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_mobile_social',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_mobile_instagram_url',
        'label'    => esc_html__( 'Instagram URL', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => esc_html__( '#', 'xolio' ),
        'priority' => 12,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_mobile_social',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_mobile_linkedin_url',
        'label'    => esc_html__( 'Linkedin URL', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => esc_html__( '#', 'xolio' ),
        'priority' => 12,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_mobile_social',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_mobile_telegram_url',
        'label'    => esc_html__( 'Telegram URL', 'xolio' ),
        'section'  => 'mobile_menu_setting',
        'default'  => esc_html__( '#', 'xolio' ),
        'priority' => 12,
        'active_callback'  => [
            [
                'setting'  => 'xolio_show_mobile_social',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_mobile_menu_fields' );


/*
Header Settings
 */
function _header_header_fields( $fields ) {

    // Sticky Header
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_sticky_header',
        'label'    => esc_html__( 'Show Sticky Header', 'xolio' ),
        'section'  => 'section_header_logo',
        'default'  => 0,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'xolio' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'xolio' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1' => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'xolio' ),
        'description' => esc_html__( 'Upload Your Logo', 'xolio' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'secondary_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'xolio' ),
        'description' => esc_html__( 'Upload Your Logo', 'xolio' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/secondary_logo.png',
    ];

    $fields[] = [
        'type'        => 'dimension',
        'settings'    => 'logo_size_adjust',
		'label'       => esc_html__( 'Logo Size', 'xolio' ),
		'description' => esc_html__( 'Adjust your logo size with px', 'xolio' ),
		'section'     => 'section_header_logo',
		'default'     => '126px',
        'choices'     => [
			'accept_unitless' => true,
		],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__('Preloader Logo', 'xolio'),
        'description' => esc_html__('Upload Preloader Logo.', 'xolio'),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/preloader.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_hide_default',
        'label'    => esc_html__( 'Breadcrumb Hide by Default', 'xolio' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Nav Hide', 'xolio' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_blog_btn_switch',
        'label'    => esc_html__( 'Blog Button ON/OFF', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta ON/OFF', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_blog_author',
        'label'    => esc_html__( 'Blog Author Meta ON/OFF', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_blog_date',
        'label'    => esc_html__( 'Blog Date Meta ON/OFF', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta ON/OFF', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'xolio_show_blog_share',
        'label'    => esc_html__( 'Show Blog Share', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'xolio' ),
            'off' => esc_html__( 'Disable', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'xolio' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'xolio' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'xolio' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'xolio' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'xolio' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'xolio' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'xolio' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'xolio' ),
        'priority'    => 11,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'xolio' ),
            '3' => esc_html__( 'Widget Number 3', 'xolio' ),
            '2' => esc_html__( 'Widget Number 2', 'xolio' ),
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'xolio_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'xolio' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'xolio' ),
        'section'     => 'footer_setting',
        'default'     => '#1F1D28',
        'priority'    => 12,
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'footer_payment_method_img',
        'label'       => esc_html__('Footer Payment Method Card', 'xolio'),
        'description' => esc_html__('Payment Method Card', 'xolio'),
        'section'     => 'footer_setting',
        'priority'    => 13,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'xolio_copyright_bg_color',
        'label'       => __( 'Copyright BG Color', 'xolio' ),
        'description' => esc_html__( 'Copyright bg color control.', 'xolio' ),
        'section'     => 'footer_setting',
        'default'     => '#24222e',
        'priority'    => 14,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_copyright',
        'label'    => esc_html__( 'CopyRight', 'xolio' ),
        'section'  => 'footer_setting',
        'default'  => wp_kses_post( 'Copyright © <span>Xolio</span> 2023. All Rights Reserved', 'xolio' ),
        'priority' => 15,
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function xolio_color_fields( $fields ) {

    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'xolio_color_option',
        'label'       => __( 'Primary Color', 'xolio' ),
        'description' => esc_html__('This is a Primary color control.', 'xolio' ),
        'section'     => 'color_setting',
        'default'     => '#F89E52',
        'priority'    => 10,
    ];

    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'xolio_color_option2',
        'label'       => __('Secondary Color', 'xolio' ),
        'description' => esc_html__('This is a Secondary color control.', 'xolio' ),
        'section'     => 'color_setting',
        'default'     => '#3482FF',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'xolio_color_fields' );

// 404
function xolio_404_fields( $fields ) {

    // 404 settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_error_text',
        'label'    => esc_html__('404 Text', 'xolio'),
        'section'  => '404_page',
        'default'  => esc_html__('404', 'xolio'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'xolio_error_title',
        'label'    => esc_html__( 'Not Found Title', 'xolio' ),
        'section'  => '404_page',
        'default'  => esc_html__('Sorry, the page you are looking for could not be found', 'xolio' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'xolio' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'xolio' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'xolio_404_fields' );


/**
 * Added Fields
 */
function xolio_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'xolio' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'xolio_typo_fields' );


/**
 * Added Fields
 */
function xolio_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_ev_slug',
        'label'    => esc_html__( 'Event Slug', 'xolio' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourevent', 'xolio' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'xolio_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'xolio' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourportfolio', 'xolio' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'xolio_slug_setting' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function XOLIO_THEME_OPTION( $name ) {
    $value = '';
    if ( class_exists( 'xolio' ) ) {
        $value = Kirki::get_option( xolio_get_theme(), $name );
    }

    return apply_filters('XOLIO_THEME_OPTION', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function xolio_get_theme() {
    return 'xolio';
}