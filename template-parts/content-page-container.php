<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package velociraptor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="site-header">
		<div class="container">
			<?php the_title( '<h1 class="site-title">', '</h1>' ); ?>
		</div>
	</header><!-- .site-header -->

	<?php velociraptor_post_thumbnail(); ?>

	<div class="site-content">
		<div class="container">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'velociraptor' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- container-fluid -->
	</div><!-- .site-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="site-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'velociraptor' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .site-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
