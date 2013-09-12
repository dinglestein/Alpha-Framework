<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Starter
 */
?>

	<footer class="footer">
		<div class="site-info">
		
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'starter' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'starter' ), 'WordPress' ); ?></a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>