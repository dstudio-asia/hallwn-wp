<?php
if (!function_exists("hallwn_assets"))
{
    function hallwn_assets()
    {
        $hallwn_theme_version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style("fontawesome-css", get_theme_file_uri("/assets/css/fontawesome.css") , null);
        wp_enqueue_style("mulish-theme-font", "//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Mulish:wght@400;500;600;700&display=swap", false);
        wp_enqueue_style("inter-theme-font", "//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap", false);
        if (is_rtl())
        {
            wp_enqueue_style("hallwn-style-rtl", get_theme_file_uri("/assets/css/rtl-style.css") , null,  $hallwn_theme_version);
            wp_enqueue_style("hallwn-responsive-rtl", get_theme_file_uri("/assets/css/responsive-rtl.css") , null,  $hallwn_theme_version);
            wp_enqueue_style("hallwn-inline-rtl", get_theme_file_uri("/assets/css/inline-rtl.css") , null,  $hallwn_theme_version);
        }
        else
        {
            wp_enqueue_style("hallwn-style", get_theme_file_uri("/assets/css/style.css") , null,  $hallwn_theme_version);
            wp_enqueue_style("hallwn-responsive", get_theme_file_uri("/assets/css/responsive.css") , null,  $hallwn_theme_version);
            wp_enqueue_style("hallwn-inline", get_theme_file_uri("/assets/css/inline.css") , null,  $hallwn_theme_version);
        }
        wp_enqueue_style("hallwn-default", get_theme_file_uri("/assets/css/default.css") , null,  $hallwn_theme_version);
        wp_enqueue_style("hallwn-theme-style", get_stylesheet_uri(), null,  $hallwn_theme_version);
        wp_style_add_data('hallwn-theme-style', 'rtl', 'replace');
        
        if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	 	wp_enqueue_script( 'comment-reply' );
	    }
        
        if (is_user_logged_in())
        {
            wp_enqueue_script("hallwn-admin-comment-notification-js", get_theme_file_uri("/assets/js/admin-comment-notification.js") , array(
                "jquery"
            ) ,  $hallwn_theme_version, true);
        }
        else
        {
            wp_enqueue_script("hallwn-comment-notification-js", get_theme_file_uri("/assets/js/comment-notification.js") , array(
                "jquery"
            ) ,  $hallwn_theme_version, true);
        }
        wp_enqueue_script("hallwn-main-js", get_theme_file_uri("/assets/js/main.js") , array(
            "jquery"
        ) ,  $hallwn_theme_version, true);
    }
    add_action('wp_enqueue_scripts', 'hallwn_assets');
}