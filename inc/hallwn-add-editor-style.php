<?php
if (!function_exists("hallwn_add_editor_styles"))
{
    function hallwn_add_editor_styles()
    {
        add_editor_style('custom-editor-style.css');
    }
    add_action('admin_init', 'hallwn_add_editor_styles');
}
