<?php
/**
* Template name: general vacio
 */
?>

<?php get_header(); ?>


<div id="fixGeneral" class="container-fluid">
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 fixGeneralEmpty">
						<div class="contentPage generalEmpty">
							<?php the_content(); ?>
						</div>
					</div>
					
				</div><!-- row -->
			</div><!-- container -->
	
		<?php endwhile; ?>
	<?php endif; ?>
	
</div><!-- fluid-container -->


<?php get_footer(); ?>