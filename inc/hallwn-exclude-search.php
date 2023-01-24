<?php
add_action('pre_get_posts','hallwn_exclude_all_pages_search');
function hallwn_exclude_all_pages_search($query) {
    if (
        ! is_admin()
        && $query->is_main_query()
        && $query->is_search
        && is_user_logged_in()
    )
        $query->set( 'post_type', 'post' );
}