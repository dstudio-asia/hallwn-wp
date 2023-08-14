<div class="card inspiration standard-post sp-1 ">
								<div class="card-inner">
								<?php if(has_post_thumbnail()): ?>
								<?php
									if(has_category()):
									?>
									<?php
                                     if(is_archive()){
									?>
                                      <a href="<?php echo " "; ?>">
								       <button class="primary-btn">
										 <?php
										   if(is_tag()){
                                           single_tag_title();
										   }else{
										   single_cat_title();
										   }
									     ?>
									   </button>
									   </a>

									 <?php
									 }else{
							         ?>
								       <button class="primary-btn">
										 <?php
										     $hallwn_categories = get_the_category();
                                             $hallwn_separator = ', ';
                                             $hallwn_output = '';
                                              if ( ! empty( $hallwn_categories ) ) {
                                                foreach( $hallwn_categories as $i=>$hallwn_category ) {
                                                 if($i == 3) break;
                                                $hallwn_output .= '<a href="' . esc_url( get_category_link( $hallwn_category->term_id ) ) . '" alt="' . esc_attr( sprintf(  'View all posts in %s', 'hallwn' , $hallwn_category->name ) ) . '">' . esc_html( $hallwn_category->name ) . '</a>' . $hallwn_separator;
                                                }
                                                echo trim( $hallwn_output, $hallwn_separator );
                                            }
									     ?>
									   </button>
									   </a>
									<?php
									 }
									endif;
                                    ?>
                                    <?php endif; ?>
									<h2 class="post-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<div class="post-author">
										<div class="author">
									    <span class="span-style"><?php the_author_posts_link(); ?></span>
										</div>
										<div class="date">
										 <span class="span-style"><?php echo get_the_date('F j, Y'); ?></span>
										</div>
									</div>
									<p class="post-excerpt mb-25 post-contents">
									 <?php if(get_theme_mod('post_excerpt_length')){ echo wp_trim_words(get_the_excerpt(), get_theme_mod('post_excerpt_length')); }else{ echo wp_trim_words(get_the_excerpt(), 10); } ?>
									</p>
									<div class="post-footer">
										<button class="comment-btn pl-20 pr-20">
											<i class="fas fa-comment-dots danger-text"></i>
											<span class="span-style"><?php echo esc_html(get_comments_number()); ?></span>
										</button>
										<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','hallwn') ?></a>
									</div>
								</div>
</div>