<?php
// Referências
// https://developer.wordpress.org/reference/functions/comment_form/
// https://developer.wordpress.org/reference/functions/wp_list_comments/
?>

<?php if (have_comments()): ?>
	<?php $args = array(
		'title_reply'          => '',
		'comment_notes_before' => '',
		'label_submit'         => 'Comentar',
		'reply_text'           => 'Responder',
		'title_reply_to'       => 'Responder para %s',
		'format'               => 'html5',
		'avatar_size'          => 100,
	); ?>

	<div class="comments">
		<div class="container">
			<div class="comments-number">
				<h2 class="title"><?php comments_number('Comentários', '1 Comentário', '% Comentários'); ?></h2>
			</div>

			<div class="comments-form">
				<?php comment_form($args); ?>
			</div>

			<ul class="comments-list">
				<?php wp_list_comments($args); ?>
			</ul>
		</div>
	</div>
<?php endif; ?>