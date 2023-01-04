<?php get_header(); ?>
            <section id="blog" class="ft-posts page-archive bg-gray pt-40">
			<div class="posts container min-height ">
                    <div class="section-heading">
						<h2 class="heading-two-typography" ><?php  single_cat_title(); ?></h2>
					</div>
				<div class="post-cards">
					<div class="left-area">							
						<?php
						 while(have_posts()){
							the_post();
							get_template_part("template-parts/post-formats/post",get_post_format());
						}
						?>
					</div>
				</div>
			</div>
			<p class="paragraph-style post-pagination" ><?php posts_nav_link(' - ', esc_html__('Previous Posts','hallwn'), esc_html__('Next Posts','hallwn')) ?> </p>
		</section>
<?php get_footer(); ?>