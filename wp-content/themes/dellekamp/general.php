<?php
/**
* Template name: general
 */
?>

<?php get_header(); ?>


<div id="fixGeneral" class="container-fluid">
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						
						<!-- <h1 class="pageTitle"><?php the_title() ?></h1> -->
						<?php wp_nav_menu( array('menu' => 'subcategorias', 'container_class' => 'sub_class' )); ?>
						
					</div><!-- col -->	
					
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<div class="contentPage">
							<?php the_content(); ?>
						</div>
					</div>
					
				</div><!-- row -->
			</div><!-- container -->
	
		<?php endwhile; ?>
	<?php endif; ?>
	
</div><!-- fluid-container -->


<?php get_footer(); ?>