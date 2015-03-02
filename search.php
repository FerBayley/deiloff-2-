
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
            <h2>B&uacute;squedas</h2>
          </section> <!-- End of Contenedor-materiales -->
        </section> <!--End of Materiales -->

        <?php include (TEMPLATEPATH . '/buscador.php'); ?>  

        <section class="Nosotros">            
          <div id="bd" class="yui-navset">
          <?php if (have_posts()) : ?>
            <h2 class="pagetitle">
              Los resultados para su b&uacute;squeda &#34;<?php the_search_query(); ?>&#34;
            </h2>
          <?php while (have_posts()) : the_post(); ?>

          <div class="item entry" id="post-<?php the_ID(); ?>">
          <div class="itemhead">
            <h3>
              <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </h3>
          <div class="chronodata"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></div>
          </div>

          <?php the_excerpt(); ?>

         <!-- Solo para poder obtener la linea separadora -->
          <div class="Category">
            <small>
              <p></p>
            </small>
          </div> <!-- End of Category -->
          <!-- Solo para poder obtener la linea separadora -->

          <?php endwhile; ?>

          <!-- Ver post anteriores o post nuevos -->
          <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Ir a materiales cargados anteriormente') ?></div>
            <div class="alignright"><?php previous_posts_link('Nuevos materiales') ?></div>
            <p></p>
          </div>
          <!-- Ver post anteriores o post nuevos -->

           
          <?php else : ?>
          <div class="item entry">
            <h2 class="pagetitle">No se encontraron resultados para su b&uacute;squeda...</h2>
              <p class="center">No hemos encontrado ningún resultado que contengan la palabra &#34;<?php the_search_query(); ?>&#34;.
              </p>
          </div>
           
          <?php endif; ?>
          </div>
          </div>
          </div>
          </div>

        </section> <!-- End of Nosotros -->       
      </section> <!-- End of Central -->
          <?php get_footer(); ?>      
  </section> <!-- End of Main -->  
</body>
</html>