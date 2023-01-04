<?php
if( ! function_exists( 'hallwn_better_comments' ) ):
function hallwn_better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <div class="authors comment-list">
    <div class="comment-author">
        <div class="author-img">
        <?php  echo get_avatar($comment, $size='80', $default= ''); ?>
        </div>
        <div class="comment-body">
            <div class="author-name">
                <p> <?php echo get_comment_author() ?></p>
                <div class="time">
                    <i class="fas fa-clock"></i> <?php echo human_time_diff( strtotime( $comment->comment_date ), current_time( 'timestamp', 1 ) )." ago"; ?>
                </div>
            </div>
            <div class="author-comment mt-15 mb-30">
            <?php if ($comment->comment_approved == '0') : ?>
            <em><?php echo esc_html('Your comment is awaiting moderation.','hallwn') ?></em>
            <br />
            <?php endif; ?>
            <?php comment_text() ?>
            </div>
            <div class="reply">
                        <a href="#"> <i class="fas fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
            </div>
        </div>
    </div>
</div>

<?php
 }
endif;
