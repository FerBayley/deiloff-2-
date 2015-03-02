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
						<h2>Trabajos realizos</h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

					<?php include (TEMPLATEPATH . '/buscador.php'); ?>				

				<section class="Galeria-productos">
				<!-- GALERIA 1 -->
					<div class="Gal1">	
						<?php query_posts("category_name=trabajos-col1"); ?>
						<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

						<div class="Imagenes-trabajos">
							<div class="thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
								</a>
							</div> <!-- End of thumb -->
						</div> <!-- End of Imagenes-trabajos -->		 	

						<?php endwhile; else: ?>

						<h6>No se encontado articulos</h6>
						<?php endif; ?>						
					</div> <!-- End of Gal1 -->
				<!-- GALERIA 1 -->


				<!-- GALERIA 2 -->
				<div class="Gal2">
					<?php query_posts("category_name=trabajos-col2"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="Imagenes-trabajos">
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->
					</div> <!-- End of Imagenes-trabajos -->			

					<?php endwhile; else: ?>

					<h6>No se encontado materiales</h6>
					<?php endif; ?>					
				</div> <!-- End of Gal2 -->
				<!-- GALERIA 2 -->


				<!-- GALERIA 3 -->
				<div class="Gal3">
					<?php query_posts("category_name=trabajos-col3"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="Imagenes-trabajos">
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->
					</div> <!-- End of Imagenes-trabajos -->					

					<?php endwhile; else: ?>

					<h6>No se encontado materiales</h6>
					<?php endif; ?>					
				</div> <!-- End of Gal3 -->
				<!-- GALERIA 3 -->


				<!-- GALERIA 4 -->
				<div class="Gal4">
					<?php query_posts("category_name=trabajos-col4"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="Imagenes-trabajos">
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->
					</div> <!-- End of Imagenes-trabajos -->					

					<?php endwhile; else: ?>

					<h6>No se encontado materiales</h6>
					<?php endif; ?>
				</div> <!-- End of Gal4 -->
				<!-- GALERIA 4 -->


				<!-- GALERIA 5 -->
				<div class="Gal5">
					<?php query_posts("category_name=trabajos-col5"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="Imagenes-trabajos">
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->
					</div> <!-- End of Imagenes-trabajos -->					

					<?php endwhile; else: ?>

					<h6>No se encontado materiales</h6>
					<?php endif; ?>
				</div> <!-- End of Gal5 -->
				<!-- GALERIA 5 -->

			</section> <!-- End of Galeria-productos -->
			</section> <!-- End of Central -->
		<?php get_footer(); ?>
	</section> <!-- End of Main -->
	
</body>
</html>