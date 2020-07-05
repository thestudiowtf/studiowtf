<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shutter_Up
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$header_image = shutter_up_featured_overall_image();

		if ( 'disable' === $header_image || is_front_page() ) : ?>

		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title section-title">', '</h2>' ); ?>
		</header><!-- .entry-header -->

	<?php endif; ?>
	<?php shutter_up_single_image(); ?>

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shutter-up' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
