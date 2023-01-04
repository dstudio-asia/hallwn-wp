
    <div class="card-inner">
         <?php if ( is_active_sidebar( 'hallwn-1' ) ) : ?>
                <?php esc_html(dynamic_sidebar( 'hallwn-1' )); ?>
          <?php endif; ?>
    </div>


<div class="card-inner">
<?php if ( is_active_sidebar( 'hallwn-2' ) ) : ?>
<?php dynamic_sidebar( 'hallwn-2' ); ?>
<?php endif; ?>
</div>