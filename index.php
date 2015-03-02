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
						<p>(0343) 499-9231 <a href="mailto:info@deiloffmarmoleria.com">info@deiloffmarmoleria.com</a></p>
						<?php include (TEMPLATEPATH . '/menu.php'); ?>						
					</div> <!-- End of Data -->
				</section> <!-- End of Centro -->
			
				<div class="Contenido-delPie">
					<?php get_footer(); ?>
				</div> <!-- End of Contenido-delPie -->

			</section> <!-- End of Contenido-central -->
	</section> <!-- End of Main -->
</body>
</html>