<?php 
get_header();
?>

<section id="blog" class="ft-posts bg-gray pt-80">
			<div class="posts container min-height">
				<div class="section-title mb-45">
					<div class="section-heading">
						<div><h2 class="heading-two-typography"><?php if(get_theme_mod('hallwn_author_page_title')){ echo esc_html(get_theme_mod('hallwn_author_page_title', 'hallwn')); }else{ echo esc_html__('Author:','hallwn'); } ?> <?php the_author(); ?></h2></div>
					</div>
				</div>
				<div class="post-cards">
					<div class="left-area">							
					     <?php

                            $hallwn_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
                            $hallwn_args = array(
                            'paged' =>  $hallwn_paged, 
                            'author' => get_the_author_meta('ID'),
                            'order' => 'DESC',
                                );
                            $hallwn_query = new WP_Query( $hallwn_args );
                            if ( $hallwn_query->have_posts() ) {
                            while ( $hallwn_query->have_posts() ) {
                            $hallwn_query->the_post();
                        ?>
                        <div class="card standard-img-post" <?php post_class("hallwn-post"); ?>>
								<div class="post-img">
						
                                    <a href="<?php the_permalink(); ?>" class="card-img-top">
										<?php the_post_thumbnail('feature-thumb'); ?>
									</a>
								    <?php
								    if(has_post_thumbnail()):
								    ?>
		                            <button class="primary-btn post-category">
									    <?php
									     $hallwn_categories = get_the_category();
                                         $hallwn_separator = ', ';
                                         $hallwn_output = '';
                                          if ( ! empty( $hallwn_categories ) ) {
                                            foreach( $hallwn_categories as $hallwn_category ) {
                                            $hallwn_output .= '<a href="' . esc_url( get_category_link( $hallwn_category->term_id ) ) . '" alt="' . esc_attr( sprintf(  'View all posts in %s', 'hallwn' , $hallwn_category->name ) ) . '">' . esc_html( $hallwn_category->name ) . '</a>' . $hallwn_separator;
                                            }
                                            echo trim( $hallwn_output, $hallwn_separator );
                                        }
                                      ?>
									 </button>
									 <?php
									 endif;
									 ?>
								</div>
								<div class="card-inner">
									<h2 class="post-title pt-20"  >
									  <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<div class="post-author">
										<div class="author">
										 <span class="span-style"><?php the_author_posts_link(); ?></span>
										</div>
										<div class="date">
										<span class="span-style"><?php echo get_the_date('F j, Y'); ?></span>
										</div>
									</div>
									<p class="post-contents">
									  <?php if(get_theme_mod('hallwn_author_post_excerpt_length')){ echo wp_trim_words(get_the_excerpt(), get_theme_mod('hallwn_author_post_excerpt_length')); }else{ echo wp_trim_words(get_the_excerpt(), 10); } ?>
									</p>
									<div class="post-footer">
										<button class="comment-btn">
											<i class="fas fa-comment-dots danger-text"></i>
											<span class="span-style"><?php echo esc_html(get_comments_number()) ?></span>
										</button>
										<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ','hallwn') ?></a>
									</div>
								</div>
							</div>
                        <?php
                           }
                          }
                        wp_reset_postdata();
                        ?>
                        
					</div>
				</div>
			</div>
			<p class="paragraph-style post-pagination" ><?php posts_nav_link('   ', esc_html__('Previous Posts','hallwn'), esc_html__('Next Posts','hallwn')) ?> </p> 
		</section>                                      
<?php get_footer(); ?>