<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs41Base
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area card bg-light">

<div class="card-body">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$bootstrap_base_4_1_comment_count = get_comments_number();
			if ( '1' === $bootstrap_base_4_1_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bootstrap-base-4-1' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bootstrap_base_4_1_comment_count, 'comments title', 'bootstrap-base-4-1' ) ),
					number_format_i18n( $bootstrap_base_4_1_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bootstrap-base-4-1' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

		$fields =  array(

		'author' =>
		  '<div class="col-md-4"><div class="form-group"><label for="author">' . __( 'Name', 'bootstrap-base-4-1' ) .
		  ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
		  '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		  '" size="30"' . $aria_req . ' /></div></div>',
	  
		'email' =>
		  '<div class="col-md-4"><div class="form-group"><label for="email">' . __( 'Email', 'bootstrap-base-4-1' ) .
		  ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
		  '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		  '" size="30"' . $aria_req . ' /></div></div>',
	  
		'url' =>
		  '<div class="col-md-4"><div class="form-group"><label for="url">' . __( 'Website', 'bootstrap-base-4-1' ) . '</label>' .
		  '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		  '" size="30" /></div></div>',
	  );

	$args = array(
		'class_submit'      => 'btn btn-primary',
		'comment_field'        => '<div class="col-12"><div class="form-group"><label for="comment">' . _x( 'Comment', 'bootstrap-base-4-1' ) . '</label> <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></div></div>',
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	  );


	comment_form($args);
	?>
</div><!-- .card-body -->
</div><!-- #comments -->
