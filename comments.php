

<?php 
// callback 
function mytheme_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment; ?>
	<div <?php comment_class('media'); ?> id="li-comment-<?php comment_ID() ?>">
		<div class="comment-author vcard media-left">
			<?php echo get_avatar( $comment, $size='48', $default='<path_to_url>' ); ?>
		</div>
		
		<div class="media-body" id="comment-<?php comment_ID(); ?>" >
			<span class="media-heading"><a href="#"><?php echo get_comment_author_link() ?></a></span>
			<div class="comment-meta">
            		<p><a href="#"><?php printf( '%1$s в %2$s', get_comment_date(),  get_comment_time()) ?></a> </p>
            </div>
            <?php comment_text() ?>

			<?php if ($comment->comment_approved == '0') : ?>
				<em>Ваш комментарий ожидает проверки.</em>
				<br />
		    <?php endif; ?>

			<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
	<?php
}
?>





<?php 
/** * The template for displaying comments. * * The area of the page that contains both current comments * and the comment form. * * @package NeoBlog */ 
/* * If the current post is protected by a password and * the visitor has not yet entered the password we will * return early without loading the comments. */ 

if ( post_password_required() ) { 
	return; 
} 

?>

<div id="comments" class="comments-area">
	<?php // You can start editing here -- including this comment! ?>
	<?php if ( have_comments() ) : ?>
		<div class="heading-side-bar">
			<h2 class="comments-title">
				<?php echo get_comments_number().' комментариев к '.get_the_title(); ?>
			</h2>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-above" class="comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_s' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_s' ) ); ?></div>
			</nav>
				<!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

    	  <div class="comments-list">

			<ol>
				<?php 
					wp_list_comments( array(/*'type'=>'comment',*/ 'callback' => 'mytheme_comment', 'style' => 'div') );
				?>
			</ol>

		  </div>

			<!-- .comment-list -->

		<?php 	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" class="comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_s' ) ); ?>
				</div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_s' ) ); ?></div>
			</nav>
		<!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>


	<div id="respond">
		<?php 
		// If comments are closed and there are comments, let's leave a little note, shall we? 
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<?php _e( 'Комментарии отключены.', '' ); ?>
		<?php endif; ?>
		
		<?php $fields = array( 'author' => ' '.'<input class="form-control" placeholder="Your Name.." id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
			',
			'email'  => ' '.'<input id="email" class="form-control" placeholder="Your Email.." name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
			'url'   => ' ' . '<input id="url" class="form-control" placeholder="Your Website.." name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />'
			);

			$comments_args = array(
				'fields' =>  $fields,
				'title_reply'=>'Оставьте комментарий',
				'title_reply_before' => '<div class="heading-side-bar"><h2>',
				'title_reply_after' => '<h2></div><p class="comment-notes"><small>Ваш email не будет опубликован. Обязательные поля отмечены</small><span class="required">*</span></p>',
				'class_submit' => 'btn btn-primary',
				'comment_field' => '<textarea id="comment" class="form-control" name="comment" rows="4" cols="100" aria-required="true" placeholder="Напишите свой комментарий здесь.."></textarea>',
				'comment_notes_after' => '',
				'id_submit' => 'submit-btn'
			);
		?>

		<div class="row">
			<?php comment_form($comments_args); ?>
		</div>
	</div>
</div>





<!-- #comments -->