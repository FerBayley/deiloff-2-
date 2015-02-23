<?php
/*
Template Name: materiales
*/
?>

<?php get_header(); ?>

<body>

	<section class="Main">
		<section class="Preheader"></section> <!-- End of Preheader -->
			
			<section class="Header-interno">
				<section class="Contenedor-paginaInterna">
					<div class="Logo-interno">
						<a href="index.html">
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
						<h2>Materiales</h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

					<section class="Buscador">
						<input type="search" name="busqueda" id="buscador" placeholder="Realice su b&uacute;squeda ac&aacute;">
					</section> <!-- End of Buscador -->
				
				<section class="Galeria-productos">

					<div class="Gal1">					
							<img src="<?php bloginfo('template_directory'); ?>/materiales/arenisca/arenisca1.jpg" width="158" height="158" alt="Arenisca">
							<h2><?php the_title(); ?></h2>

							<?php query_posts("category_name=materiales-col1"); ?>
							<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
							<p><?php the_content(); ?></p>							

							<?php endwhile; else: ?>

							<h6>No se an encontado articulos</h6>
							<?php endif; ?>
								<a href="arenisca.html">
									<div class="Boton">
										ver mas
									</div> <!-- End of Boton -->
								</a>

							<img src="<?php bloginfo('template_directory'); ?>/materiales/marmol/marmol.jpg" width="158" height="158" alt="Marmol">
							<h2>Marmol</h2>
								<a href="marmoles.html">
									<div class="Boton">
										ver mas
									</div> <!-- End of Boton -->
								</a>

							<img src="<?php bloginfo('template_directory'); ?>/materiales/silestone/silestone.jpg" width="158" height="158" alt="Silestone">
							<h2>Silestone</h2>
								<a href="#">
									<div class="Boton">
										ver mas
									</div> <!-- End of Boton -->
								</a>
					</div> <!-- End of Gal1 -->

				<div class="Gal2">
					<img src="<?php bloginfo('template_directory'); ?>/materiales/calizas/calizas1.jpg" width="158" height="158" alt="Caliza">
						<h2>Calizas</h2>
							<a href="calizas.html">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

						<img src="<?php bloginfo('template_directory'); ?>/materiales/neolith/neolith.jpg" width="158" height="158" alt="Neolith">
						<h2>Neolith</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

						<img src="<?php bloginfo('template_directory'); ?>/materiales/travertino/travertino.jpg" width="158" height="158" alt="Travertino">
						<h2>Travertino</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal2 -->


				<div class="Gal3">
					<img src="<?php bloginfo('template_directory'); ?>/materiales/prexury/amethyst.jpg" width="158" height="158" alt="Amethyst">
						<h2>Colecci&oacute;n Prexury</h2>
							<a href="prexury.html">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

						<img src="<?php bloginfo('template_directory'); ?>/materiales/onix/onix.jpg" width="158" height="158" alt="Onix">
						<h2>Onix</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal3 -->


				<div class="Gal4">
					<img src="<?php bloginfo('template_directory'); ?>/materiales/cuarcita/cuarcita.jpg" width="158" height="158" alt="Cuarcita">
						<h2>Cuarcita</h2>
							<a href="cuarcita.html">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

					<img src="<?php bloginfo('template_directory'); ?>/materiales/pizarra/pizarra.jpg" width="158" height="158" alt="Pizarra">
						<h2>Pizarra</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal4 -->


				<div class="Gal5">
					<img src="<?php bloginfo('template_directory'); ?>/materiales/granito/granito.jpg" width="158" height="158" alt="Granito">
						<h2>Granito</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

					<img src="<?php bloginfo('template_directory'); ?>/materiales/porfido/porfido.jpg" width="158" height="158" alt="Porfido">
						<h2>Porfido</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal5 -->
			</section> <!-- End of Galeria-productos -->
			</section> <!-- End of Central -->


		<?php get_footer(); ?>
	</section> <!-- End of Main -->
	
</body>
</html>