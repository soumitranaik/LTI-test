<?php
function lti_theme_setup() {
   
    add_theme_support('post-thumbnails');

    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lti-theme'),
    ));
}
add_action('after_setup_theme', 'lti_theme_setup');

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'footer' => __('Footer Menu', 'lti-theme')
        )
    );
}
add_action('init', 'mytheme_register_menus');


function lti_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('carousel-js', get_template_directory_uri() . '/carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'lti_theme_scripts');

function mytheme_customize_register($wp_customize) {
    
    $wp_customize->add_section('mytheme_logo_section', array(
        'title'       => __('Logo', 'mytheme'),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site title and tagline in the header',
    ));

  
    $wp_customize->add_setting('mytheme_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_logo', array(
        'label'    => __('Logo', 'mytheme'),
        'section'  => 'mytheme_logo_section',
        'settings' => 'mytheme_logo',
    )));
}

add_action('customize_register', 'mytheme_customize_register');