<?php
$hallwn_homedir = home_url("/");
?>
<form action="<?php echo esc_url($hallwn_homedir); ?>">
	<input type="text" id="search-input" placeholder="<?php echo esc_attr__('Search Post...','hallwn'); ?>" name="s">
	<button type="submit"> <i class="fas fa-search "> </i> <?php esc_html_e('Search','hallwn'); ?></button>
</form>