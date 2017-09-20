<?php 
if (have_comments()) {
	foreach($comments as $comment) {
		echo "<div class='comment-avatar'>" . get_avatar($comment->comment_author_email, $size='40') . "</div>";
		echo "<div class='comment-author'>";
		comment_author();
		echo "</div>";
		echo "<div class='comment-date'>";
		comment_date(); 
		echo "</div>";
		echo "<div class='comment-content'>" . $comment->comment_content . "</div>";
	}
}

comment_form(); 
?>