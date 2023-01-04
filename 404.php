<?php
get_header();
?>
<div class="home-demo four-zero-four bg-gray">
<div class="posts container home-blog content-wrapper-404">
<h2 class="heading-two-typography heading-404"><?php esc_html_e( '404','hallwn' ); ?></h2>
<h6 class="heading-six-404" ><?php esc_html_e( 'Page not found', 'hallwn' ); ?></h6>
<p class="paragraph-404 pt-35">
<?php esc_html_e( 'The page you are looking for doesn’t exist or an other error occurred, go back to home page.', 'hallwn' ); ?>
</p>
<a href="<?php echo esc_url( home_url() ); ?>"> <button class="primary-btn subscribe-btn btn-404" type="button" ><?php  esc_html_e( 'Back To Home', 'hallwn' ); ?> </button> </a>
</div>
</div>
<?php
get_footer();?>