<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
<?php if (has_post_thumbnail()) {
	$thumb = get_the_post_thumbnail_url(get_the_ID(), 'kai-large'); 
} else {
	$thumb = get_template_directory_uri() .'/img/default.png';

} ?>
<a href="<?php the_permalink();?>">
<div class="post-thumb" style="background-image:url('<?php echo esc_attr($thumb); ?>')"></div></a>
	<header class="entry-header">
		<a href="<?php the_permalink();?>">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</a>			

		<?php echo esc_html(kai_post_category()); 
		echo esc_html(do_action('pro-portfolio-type'));
		
		?>			
	</header><!-- .entry-header -->
</article>