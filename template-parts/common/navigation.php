<?php
if(has_nav_menu('hallwnmenu')){
wp_nav_menu(array(
    "theme_location" => "hallwnmenu",
    "container" => false,
    "walker" => new Hallwn_Walker(),
));
}else{
    wp_nav_menu(
	array(
		'theme_location' => 'hallwnmenu',
		"container" => false,
		'fallback_cb'    => 'hallwn_default_menu'
	)
);
}					