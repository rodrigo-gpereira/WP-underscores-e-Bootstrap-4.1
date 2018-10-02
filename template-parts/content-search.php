<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs41Base
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>

<?php bootstrap_base_4_1_post_thumbnail(); ?>

<div class="card-body">
	<header>
		<?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="card-subtitle mb-2 text-muted">
			<?php
			bootstrap_base_4_1_posted_on();
			bootstrap_base_4_1_posted_by();
			?>
		</div><!-- .card-subtitle mb-2 text-muted -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="card-text">
		<?php the_excerpt(); ?>
	</div><!-- .card-text -->


	</div>

	<footer class="card-footer">
		<?php bootstrap_base_4_1_entry_footer(); ?>
		<?php bootstrap_base_4_1_entry_footer_tags(); ?>
	</footer><!-- .card-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
