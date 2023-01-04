<?php
if (!function_exists("hallwn_footer_gallery_widget"))
{
    function hallwn_footer_gallery_widget()
    {

        register_sidebar(array(
            'name' => esc_html__('Footer Widget', 'hallwn') ,
            'id' => 'hallwn-footer-gallery',
            'before_widget' => '<div class="popup-gallery">',
            'after_widget' => '</div>',
        ));
    }
    add_action('widgets_init', 'hallwn_footer_gallery_widget');
}
if (!function_exists("hallwn_ads_widgets_init"))
{
    function hallwn_ads_widgets_init()
    {
        register_sidebar(array(
            'name' => esc_html__('Hallwn 1', 'hallwn') ,
            'id' => 'hallwn-1',
            'description' => esc_html__('Add Ads Imge', 'hallwn') ,
            'before_widget' => '<div class=""><div class="">',
            'after_widget' => '</div></div>',
        ));
    }
    add_action('widgets_init', 'hallwn_ads_widgets_init');
}
if (!function_exists("hallwn_gallery_widgets_init"))
{
    function hallwn_gallery_widgets_init()
    {

        register_sidebar(array(
            'name' => esc_html__('Hallwn 2', 'hallwn') ,
            'id' => 'hallwn-2',
            'before_widget' => ' ',
            'after_widget' => '',
        ));
    }
    add_action('widgets_init', 'hallwn_gallery_widgets_init');
}

