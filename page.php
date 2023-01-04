<?php get_header(); the_post();?>
<div class="home-demo bg-gray">
        <div class="container no-post home-blog  pt-80 pb-80" >
            <div class="grid-cards page-page">
                <div class=" post-cards lg-cards">
                    <div class="large-card wide-img-post white-bg ">
                        <div class="post-img">
                            <a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('single-post-thumb',array(  'class' => 'page-img-top')); ?></a>
                         </div>
                        <div class="card-inner">
                            <h4 class="post-title heading-four">
                               <?php the_title(); ?>
                            </h4>
                            <div class="post-author mt-25">
                                <div class="author" >
                                    <span class="icon-bg">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <span class="span-style"> <?php the_author_posts_link(); ?></span>
                                </div>
                                <div class="date">
                                    <span class="icon-bg" >
                                        <i class="far fa-clock"></i>
                                    </span>
                                    <span class="span-style"><?php echo get_the_date('F j, Y');?></span>
                                </div>
                                <div class="comment" >
                                    <span class="icon-bg">
                                        <i class="fas fa-comment-dots"></i>
                                    </span>
                                    <span class="span-style"><?php esc_html_e( ' Comments ','hallwn')  ?><?php echo esc_html(get_comments_number()); ?></span>
                                </div> 
                            </div>
                            <div class="post-contents">
                            <p class="post-excerpt mt-55 ">
                                <?php the_excerpt(); ?>
                            </p>
                            </div>
                            <div class="post-contents">
                              <?php the_content(); wp_link_pages(); ?>
                            </div>
                            <div class="blog-comment mt-60">
                                <div class="heading mb-30">
                                    <h3><?php esc_html_e(' Comments ','hallwn')  ?> <?php echo esc_html(get_comments_number()); ?></h3>
                                </div>       
                                <?php
                               if(comments_open() && !post_password_required()){
                                   comments_template();
                               }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>