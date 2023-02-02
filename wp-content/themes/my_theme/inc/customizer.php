<?php

/**
 * Create Logo Setting and Upload Control
 */
function addintional_customizer_settings($wp_customize)
{
    // add a setting for the footer logo
    $wp_customize->add_setting('footer_logo');

    // Add a control to upload the footer logo
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
            'label' => 'Upload Footer Logo',
            'section' => 'title_tagline',
            'settings' => 'footer_logo',
        )
    ));

    // add a setting for the site contrast logo
    $wp_customize->add_setting('contrast_logo');

     // Add a control to upload the contrast logo
     $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'contrast_logo',
        array(
            'label' => 'Upload Contrast Logo',
            'section' => 'title_tagline',
            'settings' => 'contrast_logo',
        )
    ));
}
add_action('customize_register', 'addintional_customizer_settings');
