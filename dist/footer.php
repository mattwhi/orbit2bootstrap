<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #container div and all content after
 *
 * @package o2theme
 */

?>

	</div><!-- #container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'o2theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'o2theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'o2theme' ), 'o2theme', '<a href="http://www.orbit2.co.uk" rel="designer">Matthew White</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
