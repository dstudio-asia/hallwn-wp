<div class="card quote q-2">
								<div class="qoute-container card-inner quote-2">
									<div class="mb-50 mt-20">
									    <i class="fas fa-quote-left"></i>
									</div>
									<a href="<?php the_permalink(); ?>">
									<h3 class="h3-typography"> <?php the_title(); ?></h3>
									<p class="post-contents">
										<?php if(get_theme_mod('post_excerpt_length')){ echo wp_trim_words(get_the_excerpt(), get_theme_mod('post_excerpt_length')); }else{ echo wp_trim_words(get_the_excerpt(), 10); } ?>
									</p>
									</a>
									<div class="quote-author-2 mt-50">
										<p class="paragraph-style"><?php the_author_posts_link(); ?></p>
									</div>
								</div>
</div>