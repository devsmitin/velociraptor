<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velociraptor
 */

?>

<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; 2018 |
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'velociraptor' ), 'velociraptor', '<a href="http://underscores.me/">Smit Modi</a>' );
			?>
		</p>
	</div>
	<!-- /.container -->
</footer>

<?php wp_footer(); ?>

</body>

</html>