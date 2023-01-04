<?php 
get_header();  
the_post(); 
?>
<div class="home-demo bg-gray">
        <div class="container home-blog  pt-60 pb-10">
            <div class="grid-cards <?php  if ( is_active_sidebar( 'hallwn-1' ) || is_active_sidebar('hallwn-2') ){ echo "has-sidebar";}else{ echo "no-sidebar"; } ?>">
                <div class="post-cards lg-cards" >
                    <div class="large-card wide-img-post white-bg">
                        <div class="post-img">
                            <a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array(  'class' => 'card-img-top')); ?></a>
                            <?php if(has_post_thumbnail()): ?>
                            <?php if(has_category('',$post->ID)){ ?>
						     <button class="primary-btn post-category" id="category">
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
						     <?php } ?>
						     </a>
                            <?php endif; ?>
                        </div>
                        <div class="card-inner single-page" id="single-page">
                            <h1 class="post-title single-title pb-25 <?php if(!has_post_thumbnail()){echo "pt-25" ;} ?>">
                               <?php the_title(); ?>
                            </h1>
                            <div class="post-author single-post">
                                <div class="author" id="author">
                                    <span class="icon-bg">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <span> <?php the_author_posts_link(); ?></span>
                                </div>
                                <div class="date">
                                    <span class="icon-bg">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    <span> <?php echo esc_html(get_the_date('F j, Y'));?></span>
                                </div>
                                <div class="comment">
                                    <span class="icon-bg">
                                        <i class="fas fa-comment-dots"></i>
                                    </span>
                                    <span> <?php echo esc_html(get_comments_number()); ?></span>
                                </div>
                                
                                <?php
                                if( function_exists('acf_add_local_field_group') && get_field('hallwn_reading_time', get_the_ID())){
                                ?>
                                <div class="time">
                                    <span class="icon-bg">
                                        <i class="fas fa-book-reader"></i>
                                    </span>
                                    <span><?php echo esc_html(get_field('hallwn_reading_time', get_the_ID()));  ?></span>
                                </div>
                                <?php
                                }
                                ?>
                        
                                <?php if(!has_post_thumbnail()):  ?>
                                <div class="category" id="category">
                                    <span class="icon-bg">
                                        <i class="far fa-bookmark"></i>
                                    </span>
                                        <span>
                                        <?php
                                            $hallwn_categories = get_the_category();
                                              $hallwn_separator = ', ';
                                              $hallwn_output = '';
                                              if ( ! empty( $hallwn_categories ) ) {
                                                foreach( $hallwn_categories as $hallwn_category ) {
                                                $hallwn_output .= '<a href="' . esc_url( get_category_link( $hallwn_category->term_id ) ) . '" alt="' . esc_attr( sprintf( 'View all posts in %s', 'hallwn' , $hallwn_category->name ) ) . '">' . esc_html( $hallwn_category->name ) . '</a>' . $hallwn_separator;
                                                }
                                                echo trim( $hallwn_output, $hallwn_separator );
                                            }
                                        ?>
                                        </span>
						                </a>
                                </div>
                                <?php endif; ?>
                            </div>
                           <div class="post-contents">
                            <?php the_content(); wp_link_pages(); ?>
                           </div>
                           
                            <?php
                            if(has_tag()):
                            ?>
                            <div class="share-blog-post social-share d-flex mt-30 mb-30">
                                <?php if(has_tag()){ ?>
                                <div class="tags">
                                    <h3 class="post-heading mb-30"><?php esc_html_e('Tags','hallwn')  ?></h3>
                                    <ul class="mt-30">
                                    <?php
                                     $hallwn_post_tags = get_the_tags();
                                     if ($hallwn_post_tags) {
                                       foreach($hallwn_post_tags as $hallwn_tag) {
                                         echo '<a href="'.esc_url( get_tag_link( $hallwn_tag->term_id ) ).'"><li class="primary-btn">'.$hallwn_tag->name.'</li></a>';
                                       }
                                     }
                                     ?>
                                    </ul>
                                </div>
                                <?php } ?>
                                <?php
                                if(shortcode_exists( 'Sassy_Social_Share' )):
                                ?>
                                <div class="share-left d-flex">
                                    <h3 class="mb-20 share-padding"><?php esc_html_e('Share post','hallwn'); ?></h3>
                                    <div class="left">
                                     <?php echo do_shortcode('[Sassy_Social_Share]'); ?> 
                                    </div>
                                </div>
                                <?php
                                 endif;
                                ?>
                            </div>
                            <?php
                            endif;
                            ?>
                            <div class="blogger-profile mt-20">
                                <div class="blogger-details">
                                     <?php $hallwn_user = wp_get_current_user(); ?>
                                    <img src="<?php echo esc_url( get_avatar_url( $hallwn_user->ID ) ); ?>" alt="blogger Image">
                                    <div class="blogger-info">
                                        <p class="mb-15"> <?php esc_html(the_author_meta('nickname')); ?></p>
                                        <p class="related-post-title">
                                        <?php
                                        echo esc_html(the_author_meta( "description" ));
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Post starts -->
                            <?php
                              $hallwn_related_posts = new WP_Query(array(
                              'post_type' => 'post',
                              'category__in' => wp_get_post_categories(get_the_ID()),
                              'post__not_in' => array(get_the_ID()),
                              'posts_per_page' => 3,
                              'orderby' => 'date',
                              ));
                            ?>
                            <?php if ($hallwn_related_posts->have_posts()) : ?>
                            <div class="gallery-post mt-40">
                                <div class="gallery-container">
                                 
                                    <div class="gallery-header ">
                                        <h3 class="post-heading mb-30"> <span><?php esc_html_e('Related Posts ','hallwn')  ?></span> </h3>
                                    </div>
                                   
                                    <div id="lifeStyle">

                                        <div class="gallery-cards mt-20">
                                        <?php
                                          while ($hallwn_related_posts->have_posts()) {
                                                 $hallwn_related_posts->the_post();
                                        ?>
                                            <div class="gallery-card" >
                                                <div class="card-container">
                                                    <div class="gallery-card-img">
                                                       <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                                    </div>
                                                    <div class="gallery-content" id="gallery-content">
                                                     <?php if(has_category('',$post->ID)){ ?>
									                 <button class="primary-btn mb-15">
									                 <?php
									                     $hallwn_categories = get_the_category();
                                                         $hallwn_separator = ', ';
                                                         $hallwn_output = '';
                                                         if ( ! empty( $hallwn_categories ) ) {
                                                            foreach( $hallwn_categories as $i=>$hallwn_category ) {
                                                            if($i == 2) break;
                                                            $hallwn_output .= '<a href="' . esc_url( get_category_link( $hallwn_category->term_id ) ) . '" alt="' . esc_attr( sprintf(  'View all posts in %s', 'hallwn' , $hallwn_category->name ) ) . '">' . esc_html( $hallwn_category->name ) . '</a>' . $hallwn_separator;
                                                            }
                                                            echo trim( $hallwn_output, $hallwn_separator );
                                                        }
									                 ?>
									                 </button>
									                 <?php } ?>
						                             </a>
                                                        <a href="<?php the_permalink(); ?>">
                                                        <p class="related-post-title"><?php the_title(); ?></p>
                                                        </a>
                                                        
                                                        <a href="<?php the_permalink(); ?>" class="comment-btn pl-20 pr-20 mt-25">
                                                            <i class="fas fa-comment-dots"></i>
                                                            <span class="span-style autor-single-span"><?php esc_html_e('Read More ','hallwn')  ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                             }
                                             wp_reset_query();
                                           ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                             endif;
                            ?>
                            <!-- releted Post end -->
                            <div class="blog-comment mt-60">
                               <?php if ( have_comments() ) : ?>
                                <div class="heading mb-30">
                                    <h3><?php esc_html_e('Comments','hallwn')  ?> <?php echo esc_html(get_comments_number()); ?></h3>
                                </div> 
                                <?php endif; ?>
                                <?php
                               
                               if(comments_open() && !post_password_required()){
                                   comments_template();
                               }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  if ( is_active_sidebar( 'hallwn-1' ) || is_active_sidebar('hallwn-2') ) : ?>
                <div class="side-bar mb-30" id="side-bar">
                    <?php get_sidebar('hallwn-1'); ?>
                    <?php get_sidebar('hallwn-2') ;?>
               </div>
               <?php  endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>