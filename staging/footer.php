<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propeller
 */

?>

  </main>

  <!-- #footer -->
	<footer class="site-footer" >
    <!-- .site-info -->
		<section class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'propeller' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'propeller' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'propeller' ), 'propeller', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</section>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
