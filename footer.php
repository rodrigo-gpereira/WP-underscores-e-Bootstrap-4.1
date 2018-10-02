<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bs41Base
 */

?>
			</div>
		</div>
	</div><!-- #content -->

	<footer id="footer" class="site-footer text-muted blog-footer">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootstrap-base-4-1' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bootstrap-base-4-1' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootstrap-base-4-1' ), 'bootstrap-base-4-1', '<a href="https://dev-frontend.oiweb.com.br/">Rodrigo Gomes</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>
