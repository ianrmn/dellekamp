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

	<!--
	<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
	-->
	
	<div class="entry-content content-area-fixed">
	
		<div class="row">
		
			<div class="hidden-xs hidden-sm col-xs-offset-1 col-xs-1 elementChange elementLeft"><?php previous_post_link('%link', 'Anterior'); ?></div>

			<div class="col-xs-8 col-sm-12 col-md-8 col-lg-8"><?php the_content(); ?></div>

			<div class="hidden-xs hidden-sm col-xs-offset-right-1 col-xs-1 elementChange elementRight"><?php next_post_link('%link', 'Siguiente'); ?></div>
		
		</div>

	</div><!-- .entry-content -->
	
	<ul class="navFoot">
		<li></li>
		<li></li>
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


<script type="text/javascript">
	var slideIndex = 1;
	showDivs(slideIndex);
	
	function plusDivs(n) {
	    showDivs(slideIndex += n);
	}
	
	function showDivs(n) {
	    var i;
	    var x = document.getElementsByClassName("element");
	    if (n > x.length) {slideIndex = 1} 
	    if (n < 1) {slideIndex = x.length} ;
	    for (i = 0; i < x.length; i++) {
	        x[i].style.display = "none"; 
	    }
	    x[slideIndex-1].style.display = "block";
	}
	
	$(document).keydown(function(e){
	    if (e.keyCode == 37) { 
	       plusDivs(-1);
	       return false;
	    } else if (e.keyCode == 39) {
		   plusDivs(+1);
	       return false; 
	    }
	});
	
	
	  $(".element").on("swipeleft",function(){
	    console.log('hola');
	  });                       
	
	
</script>