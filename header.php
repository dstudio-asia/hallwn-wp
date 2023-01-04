<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
  </head>
<?php wp_head() ?>
 <body <?php body_class(); ?> class="theme-background" >
  <?php  wp_body_open(); ?>
 <a class="skip-link screen-reader-text" id="skip-link" href="#blog" role="link" title="Skip to content"><?php echo __('Skip to the content','hallwn'); ?></a>
	<div class="home">
	   <div class="content-wrapper">
		<header>
			<div class="container">
				<?php
				$hallwn_custom_logo_id = get_theme_mod( 'custom_logo' );
				$hallwn_logo = wp_get_attachment_image_src( $hallwn_custom_logo_id , 'full' );
				?>
				<a href="<?php echo esc_url(home_url()); ?>" id="logo"> <?php if(!$hallwn_logo){ ?> <h1 id="site-title"><?php echo esc_html(get_bloginfo( 'name' )) ?></h1>  <?php }else{ ?> <img src="<?php echo $hallwn_logo[0] ? esc_url($hallwn_logo[0]) : '#'; ?>" alt=""> <?php } ?></a>
				<button id="mobile" onclick="HallwnMyMobileMenu()" aria-haspopup="true" aria-label="Mobile Menu"><div id="menu-bars"  class="fas fa-bars"></div></button>
				<nav class="hero-nav <?php if(has_nav_menu('hallwnmenu') || function_exists( 'hallwn_default_menu' )){echo "nav-alignment";} ?>" tabindex="-1">
				    <a  href="#" id="escape-menu" onclick="HallwnEscapeMenu()" ><div id="menu-bars"><?php echo esc_html('×','hallwn'); ?></div></a>
					<?php get_template_part("template-parts/common/navigation") ?>

					<div id="nav-right" class="navbar-right <?php if(!has_nav_menu('hallwnmenu')){echo "navbar-right-mobile";} ?>" >
						<div id="myOverlay"  class="search-overlay" tabindex="-1">
							<span class="closebtn" onclick="HallwnCloseSearch()" title="Close Overlay"><a href="#" id="closebtn"><?php echo esc_html('×','hallwn'); ?></a></span>
							<div class="search-overlay-content">
								<?php get_search_form(); ?>
							</div>
						</div>

						<button class="white-btn search-btn openBtn" id="open-search" onclick="HallwnOpenSearch()" type="submit" aria-label="Open Search">
						 <i class="fas fa-search"></i>
						</button>
                        <a href="<?php echo esc_url(get_theme_mod('hallwn_header_settings_btn_url', __('#', 'hallwn'))) ?>" target="_blank">
						<button class="primary-btn subscribe-btn" type="button" id="subscribe-btn" aria-label="Header Button">
						  <?php
						  if(get_theme_mod('hallwn_header_settings_btn') != ""){
						   echo esc_html(get_theme_mod('hallwn_header_settings_btn', __('Subscribe', 'hallwn'))); 
						  }else{
						  echo __('Subscribe', 'hallwn');
						  }
						  ?>
						</button>
						</a>
					</div>
				</nav>
				
			</div>
		</header>
<div id="main-content">