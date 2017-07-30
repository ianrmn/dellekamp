<?php
/**
* Template name: home
 */
?>

<?php get_header(); ?>


<div class="fixGeneralHome">
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container fixHomeContain">
				<div class="row">
					<div class="col-xs-6 sliderHome">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
				
			
		<?php endwhile; ?>
	<?php endif; ?>
	
</div><!-- fluid-container -->


<?php get_footer(); ?>