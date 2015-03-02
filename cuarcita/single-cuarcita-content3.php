<?php get_header(); ?>

<body>
	<section class="Main">
		<section class="Preheader"></section> <!-- End of Preheader -->
			
			<section class="Header-interno">
				<section class="Contenedor-paginaInterna">
					<?php include (TEMPLATEPATH . '/logo-interno.php'); ?>
					<div class="Menu-interno">
						<p>(0343) 499-9231 info@deiloffmarmoleria.com</p>
						<?php include (TEMPLATEPATH . '/menu.php'); ?>	
					</div> <!-- End of Menu-interno -->
				</section> <!-- End of Contenedor-paginaInterna -->
			</section> <!-- End of Header-interno -->

			<section class="Central">
				
				<section class="Materiales">
					<section class="Contenedor-materiales">
						<h2>Materiales > <span>Cuarcita</span></h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

					<?php include (TEMPLATEPATH . '/buscador.php'); ?>

				<section class="Galeria-descripcion">
					<div class="Imagen">
						<div class="thumb">							
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'description_thumb' ); } ?>						
						</div> <!-- End of thumb -->
					</div> <!-- End of Imagen -->

					<div class="descripcion">
						<h2><?php the_title(); ?></h2>							
						<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

						<p><?php the_content(); ?></p>

						<?php endwhile; else: ?>
						<h6>No se encontran materiales</h6>
						<?php endif; ?>

					</div> <!-- End of Descripcion -->
				</section> <!-- End of Galeria-descripcion -->			
			</section> <!-- End of Central -->
			
	<?php get_footer(); ?>	
</body>
</html>