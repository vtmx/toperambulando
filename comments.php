<?php 
    comment_form(array(
		'comment_notes_after'=>'',
		'title_reply'=>__( 'Deixe um comentário' ) 
    ));
?>

<?php if ( have_comments() ) : ?>

	<?php $args = array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ol',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => 75,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', //or xhtml if no HTML5 theme support
		'short_ping'        => false, // @since 3.6,
	    'echo'              => true // boolean, default is true
	); ?>

	<ol class="commentlist">
		 <?php wp_list_comments( $args, $comments ); ?>
	</ol>

<?php endif; ?>