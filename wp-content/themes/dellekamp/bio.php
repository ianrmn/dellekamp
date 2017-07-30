<?php
/**
* Template name: bio
 */
?>

<?php get_header(); ?>


<div id="fixGeneral" class="container-fluid">
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h1 id="One" class="pageTitle selectedBio"><?php echo get_post_meta($post->ID, "titulo_empresa", true); ?></h1>
						<h1 id="Two" class="pageTitle"><?php echo get_post_meta($post->ID, "titulo_socio_uno", true); ?></h1>
						<h1 id="Three" class="pageTitle"><?php echo get_post_meta($post->ID, "titulo_socio_dos", true); ?></h1>
					</div><!-- col -->	
					
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<div class="contentPage">
							<ul class="contentDescription">
								<li id="ContentOne"><?php echo get_post_meta($post->ID, "texto_empresa", true); ?></li>
								<li id="ContentTwo"><?php echo get_post_meta($post->ID, "texto_socio_uno", true); ?></li>
								<li id="ContentThree"><?php echo get_post_meta($post->ID, "texto_socio_dos", true); ?></li>
							</ul>
						</div>
					</div>
					
				</div><!-- row -->
			</div><!-- container -->
	
		<?php endwhile; ?>
	<?php endif; ?>
	
</div><!-- fluid-container -->


<?php get_footer(); ?>