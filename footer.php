<footer class="home-footer pt-70" id="footer">
			<div class="container">
				<div class="footer-top">
					<div class="footer-content">
					    	
						<div class="content-box2">
							<div class="post-heading content-heading footer">
								<span class="span-style footer-nav-title"><?php echo wp_get_nav_menu_name('hallwn_footer_left') ? esc_html(wp_get_nav_menu_name('hallwn_footer_left'))  : esc_html__('About Us', 'hallwn'); ?></span>
							</div>

							<div class="content-list">
							<?php
                              echo wp_nav_menu(array(
						      'theme_location'=>'hallwn_footer_left'
					          ));
					         ?>
							</div>
						</div>
						<div class="content-box3">
							<div class="content-heading post-heading footer">
								<span class="span-style footer-nav-title" ><?php echo wp_get_nav_menu_name('hallwn_footer_middle') ? esc_html(wp_get_nav_menu_name('hallwn_footer_middle'))  : esc_html__('Quick Access', 'hallwn'); ?></span>
							</div>

							<div class="content-list">
							<?php
                              echo wp_nav_menu(array(
						      'theme_location'=>'hallwn_footer_middle'
					          ));
					         ?>
							</div>

						</div>
						<div class="content-box4">
							<div class="content-heading post-heading footer">
							    
								<span class="span-style footer-nav-title" ><?php echo wp_get_nav_menu_name('hallwn_footer_right') ? esc_html(wp_get_nav_menu_name('hallwn_footer_right'))  : esc_html__('Blog Layout', 'hallwn'); ?></span>
							</div>
							<div class="content-list">
							 <?php
                              echo wp_nav_menu(array(
						      'theme_location'=>'hallwn_footer_right',
					          ));
					         ?>
							</div>

						</div>
						<?php
                        if(is_active_sidebar( 'hallwn-footer-gallery' )){
                        ?>
						<div class="content-box4 footer-gallery footer pt-10">
                            <?php
                             dynamic_sidebar('hallwn-footer-gallery');
                            ?>
						</div>
						<?php
                        }
						?>
					</div>
				</div>

				<div class="footer-bottom">
					<p class="paragraph-style"><?php echo esc_html(get_theme_mod('hallwn_footer_copyright_description',__('A WordPress Theme By Debuggers Studio','hallwn'))); ?></p>
				</div>
			</div>
		</footer>
		</div>
	</div>
	</div>
<?php wp_footer() ?>
</body>
</html>