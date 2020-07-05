<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shutter_Up
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-grid-item'); ?>>
	<div class="post-wrapper hentry-inner">
		<?php shutter_up_archive_image(); ?>

		<div class="entry-container">
			<header class="entry-header">
				<?php if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
				
				<?php if ( is_sticky() ) { ?>
					<span class="sticky-post">
						<span class="screen-reader-text"><?php esc_html_e( 'Featured', 'shutter-up' ); ?></span>
					</span>
				<?php } ?>

				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
			</header><!-- .entry-header -->


		</div><!-- .entry-container -->
	</div><!-- .hentry-inner -->
</article><!-- #post-<?php the_ID(); ?> -->
