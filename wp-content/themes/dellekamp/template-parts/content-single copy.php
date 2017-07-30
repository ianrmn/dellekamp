<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" style="display: none;">', '</h1>' ); ?>
	</header><!-- .entry-header -->	

	<div class="entry-content content-area-fixed">
		
		<!-- verificamos si existe galeria para mostrar -->

		
		<?php the_content(); ?>

	</div><!-- .entry-content -->
	
	<ul class="navFoot">
		<li><?php previous_post_link('%link', 'Previous'); ?></li>
		<li><?php next_post_link('%link', 'Next'); ?></li>
	</ul>

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
