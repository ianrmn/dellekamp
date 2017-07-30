<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	
<div id="page" class="site">
	
	<div id="subnavegacion">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 left noPadding hidden-xs hidden-sm hidden-md hidden-lg">
					<a href="/"><div class="logo"></div></a>
				</div><!-- col-xs-2 -->

				<div id="nav">
				    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				      <div class="fluid-container">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="navbar-header">
				          <a href="/"><div class="logo"></div></a>
				        </div>
				        
				        <a href="/" class="titleTop">Dellekamp Arquitectos</a>
				        <?php wp_nav_menu( array('menu' => 'header', 'container_class' => 'menu_class' )); ?>
				        
				      </div><!-- /.container-fluid -->
				    </nav>
				</div><!-- #nav -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- subnavegacion -->
	
	
	
