<?php
/**
 * unison-based-theme Theme Customizer
 *
 * @package unison-based-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function unison_based_theme_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'unison_based_theme_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'unison_based_theme_customize_partial_blogdescription',
        ));
    }
}

add_action('customize_register', 'unison_based_theme_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function unison_based_theme_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function unison_based_theme_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function unison_based_theme_customize_preview_js()
{
    wp_enqueue_script('unison-based-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'unison_based_theme_customize_preview_js');

add_action('customize_register', 'pt_custom_contact_option');

function pt_custom_contact_option($wp_customize)
{

    $wp_customize->add_section('ust_contact_data_section',
        array(
            'title' => __('Contact Info', 'ust'),
            'priority' => 20,
            'description' => __('Contact Data', 'ust'),
        )
    );

    $wp_customize->add_setting('ust_phone_number',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
            'sanitize_callback' => '',
        )
    );


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ust_phone_number',
        array(
            'label' => __('Phone Number', ''),
            'section' => 'ust_contact_data_section',
            'settings' => 'ust_phone_number',
            'priority' => 2,
            'type' => 'text',
        )
    ));

    $wp_customize->add_setting(
        'ust_address',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
        )
    );


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ust_address',
        array(
            'label' => __('Address', ''),
            'section' => 'ust_contact_data_section',
            'settings' => 'ust_address',
            'priority' => 1,
            'type' => 'text',
        )
    ));

    $wp_customize->add_setting(
        'ust_email',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
            'sanitize_callback' => '',
        )
    );


    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ust_email',
        array(
            'label' => __('Email', 'ust'),
            'section' => 'ust_contact_data_section',
            'settings' => 'ust_email',
            'priority' => 3,
            'type' => 'text',
        )
    ));

    $wp_customize->add_setting('ust_copyright',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
            'sanitize_callback' => '',
        )
    );


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ust_copyright',
        array(
            'label' => __('Copyright', 'ust'),
            'section' => 'ust_contact_data_section',
            'settings' => 'ust_copyright',
            'priority' => 4,
            'type' => 'text',
        )
    ));
}
