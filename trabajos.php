<?php
/*
Template Name: trabajos
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
						<h2>Trabajos realizados</h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

					<section class="Buscador">
						<input type="search" name="busqueda" id="buscador" placeholder="Realice su b&uacute;squeda ac&aacute;">
					</section> <!-- End of Buscador -->
				
				<section class="Galeria-productos">

					<div class="Gal1">					
							<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo1.jpg" width="158" height="158" alt="Trabajos realizados">
							<h2>Nombre el trabajo</h2>
								<a href="#">
									<div class="Boton">
										ver mas
									</div> <!-- End of Boton -->
								</a>

								<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo2.jpg" width="158" height="158" alt="Marmol Amarello">
									<h2>Nombre del trabajo</h2>
										<a href="#">
											<div class="Boton">
												ver mas
											</div> <!-- End of Boton -->
										</a>
					</div> <!-- End of Gal1 -->

				<div class="Gal2">
					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo3.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>


					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo3.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal2 -->


				<div class="Gal3">
					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo1.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo2.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal3 -->


				<div class="Gal4">
					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo3.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo1.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>
				</div> <!-- End of Gal4 -->


				<div class="Gal5">
					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo2.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
							<a href="#">
								<div class="Boton">
									ver mas
								</div> <!-- End of Boton -->
							</a>

					<img src="<?php bloginfo('template_directory'); ?>/img/trabajos/trabajo1.jpg" width="158" height="158" alt="Marmol Amarillo">
						<h2>Nombre del trabajo</h2>
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