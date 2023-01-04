<?php
if (!function_exists("hallwn_setup"))
{

    function hallwn_setup()
    {
        add_theme_support('automatic-feed-links');
        load_theme_textdomain('hallwn', get_theme_file_path("/languages"));
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support("wp-block-styles");
        add_theme_support("responsive-embeds");
        add_theme_support("custom-header");
        add_theme_support("align-wide");
        add_theme_support("post-formats", array(
            "quote",
            "video",
            "link",
            "status",
            "aside",
        ));
        register_nav_menus(array(
            'hallwnmenu' => esc_html('Hallwn Primary Menu', 'hallwn') ,
        ));
        register_nav_menus(array(
            'hallwn_footer_left' => esc_html('Hallwn Footer Left Menu', 'hallwn') ,
        ));
        register_nav_menus(array(
            'hallwn_footer_middle' => esc_html('Hallwn Footer Middle Menu', 'hallwn') ,
        ));
        register_nav_menus(array(
            'hallwn_footer_right' => esc_html('Hallwn Footer Right Menu', 'hallwn') ,
        ));
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));
        add_theme_support('custom-selective-refresh-widgets');
        
        add_theme_support('custom-background', apply_filters('hallwn_custom_background_args', array(
            'default-color' => '#f8f8f8',
            'default-image' => '',
        )));
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme', 'hallwn_setup');

}

if (!function_exists("hallwn_custom_logo_setup"))
{
    function hallwn_custom_logo_setup()
    {
        $defaults = array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array(
                'site-title',
                'site-description'
            ) ,
            'unlink-homepage-logo' => true,
        );

        add_theme_support('custom-logo', $defaults);
    }
    add_action('after_setup_theme', 'hallwn_custom_logo_setup');
}

if (!function_exists("hallwn_content_width"))
{
    function hallwn_content_width()
    {
        $GLOBALS['hallwn_content_width'] = apply_filters('hallwn_content_width', 1170);
    }
    add_action('after_setup_theme', 'hallwn_content_width', 0);
}

