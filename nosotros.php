<?php
/*
Template Name: nosotros
*/
?>

<?php get_header(); ?>
<body>

	<section class="Main">
		<section class="Preheader"></section> <!-- End of Preheader -->
			
			<section class="Header-interno">
				<section class="Contenedor-paginaInterna">
					<div class="Logo-interno">
						<a href="http://www.deiloffmarmoleria.com/">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo-interno.jpg" alt="Deiloff Marmolria">
						</a>
					</div> <!-- End of Logo-interno -->

					<div class="Menu-interno">
						<p>(0343) 499-9231 info@deiloffmarmoleria.com</p>

							<nav>
								<?php wp_nav_menu(
								array(
								'container' => false,
								'items_wrap' => '<ul id="menu-top">%3$s</ul>',
								'theme_location' =>'menu'
								));	?>
							</nav>
					</div> <!-- End of Menu-interno -->
				</section> <!-- End of Contenedor-paginaInterna -->
			</section> <!-- End of Header-interno -->


			<section class="Central">

				<section class="Materiales">
					<section class="Contenedor-materiales">
						<h2>Nosotros</h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

				<section class="Nosotros">					
					<article>
							<?php query_posts("category_name=nosotros"); ?>
							<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

							<p><?php the_content(); ?></p>
							

							<?php endwhile; else: ?>

							<h1>No se encontraron articulos</h1>
							<?php endif; ?>
					</article>
				</section> <!-- End of Nosotros -->				
			</section> <!-- End of Central -->

	<?php get_footer(); ?>
			
	</section> <!-- End of Main -->
	
</body>
</html>