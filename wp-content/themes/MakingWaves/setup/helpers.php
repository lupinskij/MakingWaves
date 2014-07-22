<?php

	/* <<<< HELPERS >>>> */
	function mytheme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
	   <div class="comment-single comment-<?php comment_ID() ?>">
	      <p>"<?php echo get_comment_text() ?>"</p>

	      <div class="author">
	         <?php echo get_comment_author(); ?>
	      </div>

	      <?php if ($comment->comment_approved == '0') : ?>
	         <em><?php _e('Your comment is awaiting moderation.') ?></em>
	         <br />
	      <?php endif; ?>
	<?php }

	function new_excerpt_more( $excerpt ) {
		$cropped = str_replace( '[...]', '', $excerpt );
		return substr($cropped, 0, 369).' <a class="ellipse" href="'. get_permalink($post->ID) . '">...</a>';
	}

	function to_slug($string){
	    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
	}

?>