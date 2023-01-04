<?php

/**
 * Provides a default menu for hallwn theme, if not other menu has been provided.
 *
 */
function hallwn_default_menu() {

	$hallwn_default_menu  = '<ul id="menu-main-menu" class="menu">';
	$hallwn_default_menu .= '<li><a href="https://wp.dstudio.asia/hallwn-demo/" aria-current="page">Home</a></li>';
	$hallwn_default_menu .= '<li><a href="#">About Us</a></li>';
	$hallwn_default_menu .= '<li><a href="#">Parent Menu</a>';
	$hallwn_default_menu .= '<ul class="dropdown"><div class="dropdown-content">';
	$hallwn_default_menu .= '<li><a href="#">Child Menu</a></li>';
	$hallwn_default_menu .= '</div></ul>';
	$hallwn_default_menu .= '</ul>';
	echo $hallwn_default_menu;
}
