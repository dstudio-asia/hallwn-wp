<?php get_header();?>
		<section id="blog" class="ft-posts pt-80 <?php if(have_posts()){ echo "bg-gray" ; } ?>">
			<div class="posts container">
			    <?php
			     if(have_posts()):
			    ?>
				<?php
				endif;
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
					 <div class="home-demo four-zero-four bg-gray">
                        <div class="posts container home-blog content-wrapper-404">
                            <h2 class="heading-two-typography home-page"><i class="fas fa-exclamation-circle"></i></h2>
                            <h6 class="heading-six-home-page" ><?php esc_html_e('No Posts Published Yet', 'hallwn'); ?></h6>
                            <p class="paragraph-search">
                             <?php esc_html_e('Are you looking for  blog posts ? Sorry site has no posts to display', 'hallwn'); ?>
                            </p>
                        </div>
                    </div>
					<?php
					 }
					?>	
				</div>
			</div>
				<p class="paragraph-style post-pagination" ><?php posts_nav_link('  ', esc_html__('Previous Posts','hallwn'), esc_html__('Next Posts','hallwn')) ?> </p>
		</section>
<?php  get_footer() ?>