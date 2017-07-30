<?php
/**
* Template name: work
 */
?>

<?php get_header(); ?>


	<div id="fixGeneral" class="container-fluid" style="margin-top: 150px;">
		
				<div class="container">
					<div class="row">
						<?php
							$query = new WP_Query(array(
							    'post_type' => 'noticias',
							    'post_status' => 'publish',
							    'posts_per_page' => 100,
							));

							while ($query->have_posts()) {
							    $query->the_post();
							    $post_id = get_the_ID();
									$queried_post = get_post($post_id);
									$title = $queried_post->post_title;
									$content = $queried_post->post_content;
							?>
							
								
								<?php if(has_post_thumbnail()) :?>
									<a href="<?php the_permalink(); ?>" class="col-xs-4 col-sm-4 col-md-3 col-lg-2 thumbnail thumber" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>');">
								<?php else :?>
									<a href="<?php the_permalink(); ?>" class="col-xs-4 col-sm-4 col-md-3 col-lg-2 thumbnail thumber" style="background-image: url("<?php bloginfo('template_directory'); ?>/img/header.jpg");">
								<?php endif;?>

										<div class="titulo">
											<h1><?php the_title(); ?> <!-- echo $title; --> </h1>
										</div>
										<p class="more"><?php echo get_the_date('Y'); ?></p>

								</a>
							<?php
							}
							wp_reset_query();
							?>
							
						
					</div><!-- row -->
				</div><!-- container -->
		
	</div><!-- fluid-container -->


<?php get_footer(); ?>