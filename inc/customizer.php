<?php 


function tasty_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'theme_color', array(
        'title' => __( 'Theme Color' ),
        'description' => __( 'Change Your Theme Color' ),
        'priority' => 160,
      ) );

      $wp_customize->add_setting( 'theme_color_setting', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '#a68b7c',
        'transport' => 'refresh', // or postMessage
      ) );
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_color_control', array(
        'label' => __( 'Theme Color', 'tasty' ),
        'section' => 'theme_color',
        'settings' => 'theme_color_setting'
      ) ) );
  }
  add_action( 'customize_register', 'tasty_customize_register' );