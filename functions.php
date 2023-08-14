<?php

/**
 * Hallwn Custom Navigation Walker File
 */

require get_template_directory() . '/inc/hallwn-walker.php';

/**
 * Hallwn Footer Description Control
 */

require get_template_directory() . '/inc/customizer/hallwn-site-identity.php';

/**
 * Hallwn Comment Fields Helper  
 */

require get_template_directory() . '/inc/hallwn-comments-helper.php';

/**
 * Hallwn After Theme Setup
 */

require get_template_directory() . '/inc/hallwn-after-theme-setup.php';

/**
 * Hallwn Default Navigation
 */

require get_template_directory() . '/inc/hallwn-default-nav.php';

/**
 * Hallwn Add Editor Style
 */

require get_template_directory() . '/inc/hallwn-add-editor-style.php';

/**
 * Hallwn Widget Registration
 */

require get_template_directory() . '/inc/hallwn-register-widgets.php';

/**
 * Hallwn Assets Loading
 */

require get_template_directory() . '/inc/hallwn-enqueue.php';

/**
 * Hallwn Additional Style
 */

if(is_rtl()){

 require get_template_directory() . '/inc/hallwn-inline-rtl-style.php';

}else{

  require get_template_directory() . '/inc/hallwn-inline-style.php';

}
 
if(is_rtl()){
require get_template_directory() . '/inc/hallwn-translation.php';
}


