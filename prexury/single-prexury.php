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
						<h2>Materiales > <span>Colección Prexury</span></h2>
					</section> <!-- End of Contenedor-materiales -->
				</section> <!--End of Materiales -->

					<section class="Buscador">
						<input type="search" name="busqueda" id="buscador" placeholder="Realice su b&uacute;squeda ac&aacute;">
					</section> <!-- End of Buscador -->
				

				<section class="Galeria-productos">
				<!-- GALERIA 1 -->
					<div class="Gal1">	
						<?php query_posts("category_name=prexury-col1"); ?>
						<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->

						<h2><?php the_title(); ?></h2>

						<a href="<?php the_permalink(); ?>">
							<div class="Boton">
								ver mas
							</div> <!-- End of Boton -->
						</a>						

						<?php endwhile; else: ?>
						<h6>No se encontado articulos</h6>
						<?php endif; ?>
					</div> <!-- End of Gal1 -->
				<!-- GALERIA 1 -->


				<!-- GALERIA 2 -->
				<div class="Gal2">
					<?php query_posts("category_name=prexury-col2"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
						</a>
					</div> <!-- End of thumb -->

					<h2><?php the_title(); ?></h2>

					<a href="<?php the_permalink(); ?>">
						<div class="Boton">
							ver mas
						</div> <!-- End of Boton -->
					</a>						

					<?php endwhile; else: ?>
					<h6>No se encontado materiales</h6>
					<?php endif; ?>
				</div> <!-- End of Gal2 -->
				<!-- GALERIA 2 -->


				<!-- GALERIA 3 -->
				<div class="Gal3">
					<?php query_posts("category_name=prexury-col3"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
						</a>
					</div> <!-- End of thumb -->

					<h2><?php the_title(); ?></h2>

					<a href="<?php the_permalink(); ?>">
						<div class="Boton">
							ver mas
						</div> <!-- End of Boton -->
					</a>						

					<?php endwhile; else: ?>
					<h6>No se encontado materiales</h6>
					<?php endif; ?>
				</div> <!-- End of Gal3 -->
				<!-- GALERIA 3 -->


				<!-- GALERIA 4 -->
				<div class="Gal4">
					<?php query_posts("category_name=prexury-col4"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
						</a>
					</div> <!-- End of thumb -->

					<h2><?php the_title(); ?></h2>

					<a href="<?php the_permalink(); ?>">
						<div class="Boton">
							ver mas
						</div> <!-- End of Boton -->
					</a>						

					<?php endwhile; else: ?>
					<h6>No se encontado materiales</h6>
					<?php endif; ?>
				</div> <!-- End of Gal4 -->
				<!-- GALERIA 4 -->


				<!-- GALERIA 5 -->
				<div class="Gal5">
					<?php query_posts("category_name=prexury-col5"); ?>
					<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					<div class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
						</a>
					</div> <!-- End of thumb -->

					<h2><?php the_title(); ?></h2>	

					<a href="<?php the_permalink(); ?>">
						<div class="Boton">
							ver mas
						</div> <!-- End of Boton -->
					</a>						

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