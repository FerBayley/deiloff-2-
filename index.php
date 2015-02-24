<?php get_header(); ?>
<body>

	<section class="Main">
		<section class="Preheader"></section> <!-- End of Preheader -->
			<section class="Contenido-central">

				<section class="Centro">
					<div class="Logo">
						<h1>
							<a href="http://www.deiloffmarmoleria.com/">
								<img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" width="178" height="178" alt="Deiloff Marmoleria">
							</a>
						</h1>
					</div> <!-- End of Logo -->

					<div class="Data">
						<p>
							(0343) 499-9231 <a href="mailto:info@deiloffmarmoleria.com">info@deiloffmarmoleria.com</a>

						<nav>
							<?php wp_nav_menu(
							array(
							'container' => false,
							'items_wrap' => '<ul id="menu-top">%3$s</ul>',
							'theme_location' =>'menu'
							));	?>
						</nav> <!-- End of nav -->
						
					</div> <!-- End of Data -->
				</section> <!-- End of Centro -->

			
			<footer>
				<div class="Contenedor-pie">
					<div class="Data-pie">
						<p>
							Todos los derechos reservados 2014 - Ruta 11, km 24 Aldea Spatzenkutter Entre R&iacute;os 3101 (0343) 499-9231 
								<a href="mailto:info@deiloffmarmoleria.com">
							info@deiloffmarmoleria.com
								</a>
						</p>
					</div> <!-- End of Data-pie -->
				<div class="Redes">
					<ul>
						<li>
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Facebook">
									</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="Instagram">
							</a>
						</li>
					</ul>
				</div> <!-- End of Redes -->
				</div> <!-- End of Contenedor-pie -->
			</footer> <!-- End of footer -->

			</section> <!-- End of Contenido-central -->
	</section> <!-- End of Main -->

	<?php wp_footer(); ?>	
</body>
</html>