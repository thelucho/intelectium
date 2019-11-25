<?php

/**

* Template Name: Enisa - Emprendedores

*

* @package Intelectium

*/

?>



<?php get_header(); ?>



    <div class="content-container">

      <h2 class="nosotros-conoce"><strong><?php the_field( 'titulo_pagina' ); ?></strong></h2>
      <?php the_field( 'descripcion' ); ?>

    </div>

    <!-- Logos -->

    <div class="content-container diaadia">

      <p class="manifiesto-guion negrita">-</p><p class="nosotros-conoce"><?php the_field( 'titulo_seccion' ); ?></p>

      <div class="logos-container">

        <div class="logo">

          <?php if ( get_field( 'icono_1') ) { ?>
            <img src="<?php the_field( 'icono_1' ); ?>" class="logo-imagen" />
          <?php } ?>

          <?php the_field( 'descripcion_bloque_1' ); ?>
          
        </div>

        <div class="logo">

          <?php if ( get_field( 'icono_2') ) { ?>
            <img src="<?php the_field( 'icono_2' ); ?>" class="logo-imagen" />
          <?php } ?>

          <?php the_field( 'descripcion_bloque_2' ); ?>

        </div>

        <div class="logo">

          <?php if ( get_field( 'icono_3') ) { ?>
            <img src="<?php the_field( 'icono_3' ); ?>" class="logo-imagen" />
          <?php } ?>

          <?php the_field( 'descripcion_bloque_3' ); ?>

        </div>

        <div class="logo">

          <?php if ( get_field( 'icono_4') ) { ?>
            <img src="<?php the_field( 'icono_4' ); ?>" class="logo-imagen" />
          <?php } ?>

          <?php the_field( 'descripcion_bloque_4' ); ?>

        </div>

        <div class="logo">

          <?php if ( get_field( 'icono_5') ) { ?>
            <img src="<?php the_field( 'icono_5' ); ?>" class="logo-imagen" />
          <?php } ?>

          <?php the_field( 'descripcion_bloque_5' ); ?>

        </div>

      </div>

    </div>





    <?php get_template_part( 'template-parts/content', 'cta' ); ?>





    <div class="content-container">

<h2 class="nosotros-conoce"><strong><?php the_field( 'titulo_mas_servicios' ); ?></strong></h2>
<p class="nosotros-conoce"><?php the_field( 'texto_linea' ); ?></p>

<div class="mas-servicios">

  <div class="servicio">

    <h2 class="servicio-titulo"><?php the_field( 'titulo_1_box' ); ?></h2>

    <p class="servicio-texto"><?php the_field( 'pregunta_1' ); ?></p>

    <a class="servicios-texto-boton" href="<?php the_field( 'link_url_1_box' ); ?>"><?php the_field( 'link_texto_1_box' ); ?> </a>

  </div>

  <div class="servicio">

    <h2 class="servicio-titulo"><?php the_field( 'titulo_2_box' ); ?></h2>

    <p class="servicio-texto"><?php the_field( 'pregunta_2' ); ?></p>

    <a class="servicios-texto-boton" href="<?php the_field( 'link_url_2_box' ); ?>"><?php the_field( 'link_texto_2_box' ); ?> </a>


  </div>

  <div class="servicio">

    <h2 class="servicio-titulo"><?php the_field( 'titulo_3_box' ); ?></h2>

    <p class="servicio-texto"><?php the_field( 'pregunta_3' ); ?></p>

    <a class="servicios-texto-boton" href="<?php the_field( 'link_url_3_box' ); ?>"><?php the_field( 'link_texto_3_box' ); ?> </a>

  </div>

</div>

</div>



<?php get_footer(); ?>