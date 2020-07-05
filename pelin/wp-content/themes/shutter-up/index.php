<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shutter_Up
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="archive-posts-wrapper ">
			<?php if ( have_posts() ) :
				

				if ( $blog_title ) : ?>
				<div class="section-heading-wrapper">
					<?php if ( $blog_title ) : ?>
						<div class="section-title-wrapper">
							<h2 class="section-title"><?php echo esc_html( $blog_title ); ?></h2>
						</div><!-- .section-title-wrapper -->
					<?php endif; ?>
				</div><!-- .section-heading-wrap -->
				<?php endif; ?>

				<div class="section-content-wrapper">
					<div id="infinite-post-wrap" class="archive-post-wrap">
						<div class="archive-grid">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content/content', get_post_format() );

							endwhile;
							?>
						</div><!-- .grid -->
					</div><!-- .archive-post-wrap -->
				</div><!-- .section-content-wrap -->

				<?php shutter_up_content_nav(); ?>

				<?php
				else :

					get_template_part( 'template-parts/content/content', 'none' );

				endif; ?>
			</div><!-- .archive-post-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php 
get_footer();
