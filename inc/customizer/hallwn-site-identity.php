<?php
if(!function_exists('hallwn_register_additional_customizer_settings')){
function hallwn_register_additional_customizer_settings( $hallwn_wp_customizer ) {
    
   // Add Section To Customizer 
  
   $hallwn_wp_customizer->add_section('hallwn_header',array(
    'title'=> __('Header','hallwn'),
    'priority'=>'70',
    ));
    
   $hallwn_wp_customizer->add_section('hallwn_footer',array(
    'title'=> __('Footer','hallwn'),
    'priority'=>'70',
    ));
    
    // Header Section
    
   $hallwn_wp_customizer->add_setting('hallwn_header_settings_btn',array(
       'default'=> __('Subscribe','hallwn'),
       'transport'=>'refresh',
        array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
   ));
   
   $hallwn_wp_customizer->add_control('hallwn_options_header_button_title',array(
       'label'=> __('Button Title', 'hallwn'),
       'section'=>'hallwn_header',
       'settings'=>'hallwn_header_settings_btn',
       'type'=>'text'
   ));
   
   
   $hallwn_wp_customizer->add_setting('hallwn_header_settings_btn_url',array(
       'default'=> esc_url('#','hallwn'),
       'transport'=>'refresh',
        array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
   ));
   
   $hallwn_wp_customizer->add_control('hallwn_options_header_button_url',array(
       'label'=> __('Button URL', 'hallwn'),
       'section'=>'hallwn_header',
       'settings'=>'hallwn_header_settings_btn_url',
       'type'=>'url'
   ));
   
   // header background Color
   
   $hallwn_wp_customizer->add_setting( 'header_bg_color',
    array(
        'default' => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    )
    );

    $hallwn_wp_customizer->add_control('hallwn_header_background_color',array(
       'label'=> __('Header Background Color', 'hallwn'),
       'section'=>'colors',
       'settings'=>'header_bg_color',
       'type'=>'color'
   ));
   
   
   // Footer Section
   
   $hallwn_wp_customizer->add_setting('hallwn_footer_copyright_description',array(
       'default'=> __('A WordPress Theme By Debuggers Studio','hallwn'),
       'transport'=>'refresh',
        array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
   ));
   
   $hallwn_wp_customizer->add_control('hallwn_footer_copyright_description_text',array(
       'label'=> __('Copyright Text', 'hallwn'),
       'section'=>'hallwn_footer',
       'settings'=>'hallwn_footer_copyright_description',
       'type'=>'textarea'
   ));
   
   
   // Footer background Color
   
   $hallwn_wp_customizer->add_setting( 'footer_bg_color',
    array(
        'default' => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    )
    );

    $hallwn_wp_customizer->add_control('hallwn_footer_background_color',array(
       'label'=> __('Footer Background Color', 'hallwn'),
       'section'=>'colors',
       'settings'=>'footer_bg_color',
       'type'=>'color'
   ));
   
   
}
add_action( 'customize_register', 'hallwn_register_additional_customizer_settings' );
}