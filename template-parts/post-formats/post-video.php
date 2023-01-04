<div class="card standard-video">
								<div class="post-img">
                                    <?php if (function_exists('acf_add_local_field_group')){ $video = get_field('hallwn_video_link', get_the_ID()); }?>
									<a class="card-img-top" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('feature-thumb'); ?></a>
									<a href="<?php echo esc_url($video ? $video : "#"); ?>" <?php if(has_post_thumbnail()){ echo ' class="play-img popup-youtube" ';  }?>>
									<i class="fas fa-play-circle pt-10"></i>
									</a>
									<?php if(has_post_thumbnail()): ?>
									<?php
									if(has_category()):
									?>
									<?php
                                     if(is_archive()){
									?>
                                      <a href="<?php echo ""; ?>">
								       <button class="primary-btn post-category">
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
									  
								       <button class="primary-btn post-category">
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
								</div>
								<div class="card-inner">
									<h2 class="post-title">
										<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										</a>
									</h2>
								</div>
</div>