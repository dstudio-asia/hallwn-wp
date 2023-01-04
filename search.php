<?php get_header();?>
		<section class="ft-posts pt-80 bg-gray">
			<div class="posts container">
			    <?php
				  if(have_posts()){
				?>
				<div class="section-title search-page mb-45">
					<div class="section-heading search-page">
						  <h2 class="heading-two-search-page" ><?php if(get_theme_mod('hallwn_search_title')){ echo esc_html(get_theme_mod('hallwn_search_title', 'hallwn')); }else{ echo esc_html__('You Searched for: ','hallwn'); } ?> <?php echo get_search_query(); ?></h2>
					</div>
				</div>
				<?php
				  }
				?>
				<div class="post-cards">
					<div class="left-area">							
						<?php
						 while(have_posts()){
							the_post();
							get_template_part("template-parts/post-formats/post",get_post_format());
						}
						?>
					 </div>
					 <?php
					 if(!have_posts()){
					 ?>
						<div class="home-demo four-zero-four">
                        <div class="posts container home-blog content-wrapper-404">
                            <h2 class="heading-two-typography serarch-page"><i class="fas fa-search"></i></h2>
                            <h2 class="heading-two-search-page" ><?php if(get_theme_mod('hallwn_search_title')){ echo esc_html(get_theme_mod('hallwn_search_title', 'hallwn')); }else{ echo esc_html__('You Searched for: ','hallwn'); } ?> <?php echo get_search_query(); ?></h2>
                            <p class="paragraph-search">
                             <?php if(get_theme_mod('hallwn_search_not_found_des')){ echo esc_html(get_theme_mod('hallwn_search_not_found_des', 'hallwn')); }else{ echo esc_html__('Looks like your search are too specific! Try setting the filters to something more general.','hallwn'); } ?>
                            </p>
                          <a href="<?php echo esc_url(home_url()); ?>">
                          <button class="primary-btn subscribe-btn btn-404" type="button" >
                          <?php if(get_theme_mod('hallwn_search_not_found_btn')){ echo esc_html(get_theme_mod('hallwn_search_not_found_btn', 'hallwn')); }else{ echo esc_html__('Back To Home','hallwn'); } ?> 
                          </button> 
                          </a>
                        </div>
                    </div>
				</div>	
				 </div>
					<?php
					 }
					?>	
			
			<p class="paragraph-style post-pagination"><?php posts_nav_link() ?> </p>
		</section>
<?php  get_footer() ?>