                          <div class="card quote q-1 ">
								<div class="qoute-container card-inner">
								 	<?php if(has_post_thumbnail()): ?>
								<?php
									if(has_category()):
									?>
									<?php
                                     if(is_archive()){
									?>
                                      <a href="<?php echo " "; ?>">
								       <button class="primary-btn pt-15">
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
								       <button class="primary-btn pt-15">
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
                                    <?php
                                    endif;
                                    ?>
									<div class="quote-para">
										<a href="<?php the_permalink(); ?>">
										<h3 class="h3-typography"><?php the_title(); ?></h3>
										<div class="post-contents">
										<p class="paragraph-style">
										 <?php if(get_theme_mod('post_excerpt_length')){ echo wp_trim_words(get_the_excerpt(), get_theme_mod('post_excerpt_length')); }else{ echo wp_trim_words(get_the_excerpt(), 10); } ?>
										</p>
										</div>
										</a>
									</div>
									<div class="quote-author">
										<img class="author-img" src="<?php echo esc_url( get_avatar_url( get_current_user_id() ) ); ?>" alt="Quote author image">
										<div class="quote-para-2">
											<?php
											$hallwn_user_meta = get_userdata(get_current_user_id());
											$hallwn_current_user_role_slug = $hallwn_user_meta->roles[0];
											?>
											<p class="paragraph-style"><?php the_author_posts_link(); ?><span class="span-style"><?php echo esc_html(" - ".ucfirst($hallwn_current_user_role_slug)); ?></span></p>
										</div>
									</div>
								</div>
							</div>