<?php
	wp_list_comments( array(
	    'style'      => 'ul',
	    'short_ping' => true,
      'callback' => 'hallwn_better_comments'
	) );
     ?>
</ul>
<div class="comments-pagination">
                <?php
                the_comments_pagination( array(
                    'screen_reader_text' => __( 'Pagination', 'hallwn' ),
                    'prev_text'          => '<' . __( 'Previous Comments', 'hallwn' ),
                    'next_text'          => '>' . __( 'Next Comments', 'hallwn' ),
                ) );
                ?>
  </div>

<div class="add-comment mt-60">
 <div class="heading mb-30">
   <h3 class="h3-typography text-right"><?php esc_html_e('Add your comment','hallwn')  ?></h3>
 </div>
<?php
$hallwn_comment_fields = array();
$hallwn_comment_field = '
<div class="row">
<div>
<label class="d-none" for="comment">'.esc_html__('Comment*', 'hallwn').'</label>
<textarea class="form-control" id="comment" name="comment" placeholder="'.esc_html__('Comment*', 'hallwn').'"></textarea>
<p class="comment-validation-message"></p>
</div>
';
$hallwn_comment_fields['author'] = '
<div class="comment-grid mt-30">
<div>
<label class="d-none" for="author">'.esc_html__('Name*', 'hallwn').'</label>
<input type="text" id="author" name="author" placeholder="'.esc_html__('Name*', 'hallwn').'">
<p class="comment-validation-author"></p>
</div>
';
$hallwn_comment_fields['email'] = '
<div>
<label class="d-none" for="email">'.esc_html__('Email*', 'hallwn').'</label>
<input type="email" id="email" name="email" placeholder="'.esc_html__('Email*', 'hallwn').'">
<p class="comment-validation-email"></p>
</div>
</div>
';
$hallwn_comment_submit_button = '
<div class="mt-30">
<button class="comment-btn light-bg" id="submit" type="submit">
'.esc_html__('Add Comment', 'hallwn').'
</button>
</div>
</div>
';
 
   $hallwn_comment_form_arguments = array(
    'fields'=>$hallwn_comment_fields,
    'comment_field'=> $hallwn_comment_field,
    'submit_button'=>$hallwn_comment_submit_button,
    'class_form'=> 'comment-form',
    'comment_notes_after'=>'',
    'comment_notes_before'=>'',
    'cookies'=>'',
    'title_reply'=>' ',
    'cancel_reply_link'=>'<p>'.esc_html__('Cancel Reply', 'hallwn').'</p>',
    'must_log_in'=>'<p>'.esc_html__('Log in to leave a comment', 'hallwn').'</p>',
    'label_submit'=>'',
    
   );
 
 comment_form($hallwn_comment_form_arguments);
?>
</div>