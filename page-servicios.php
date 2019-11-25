<?php
/**
* Template Name: Servicios
*
* @package Intelectium
*/
?>

<?php get_header(); ?>


<div class="content-container">

          <?php
          if(ICL_LANGUAGE_CODE=='es'){ ?>
            <h2 class="nosotros-conoce"><strong>Servicios</strong></h2>
            <p class="nosotros-conoce">Te ayudamos a financiar tu startup</p>
          <?php }

          if(ICL_LANGUAGE_CODE=='en'){ ?>
            <h2 class="nosotros-conoce"><strong>Services</strong></h2>
          <p class="nosotros-conoce">We help you to fund your technology startup</p>
          <?php } ?>

          <div class="servicios-container">

            <div class="servicios-fundraising servicios-div">

              <h2 class="nosotros-conoce"><?php the_field( 'servicios_bloque_titulo_1' ); ?></h2>

              <p><?php the_field( 'servicios_bloque_descripcion_1' ); ?></p>

              <a href="<?php the_field( 'servicios_bloque_link_button_1' ); ?>" class="servicios-texto-boton">
                <?php the_field( 'servicios_bloque_texto_button_1' ); ?>
              </a>

            </div>

            <div class="servicios-coinversion servicios-div">

              <h2 class="nosotros-conoce"><?php the_field( 'servicios_bloque_titulo_2' ); ?></h2>

              <p><?php the_field( 'servicios_bloque_descripcion_2' ); ?></p>


              <a href="<?php the_field( 'servicios_bloque_link_button_2' ); ?>" class="servicios-texto-boton">
                  <?php the_field( 'servicios_bloque_texto_button_2' ); ?>
              </a>


            </div>

            <div class="servicios-idi servicios-div">

              <h2 class="nosotros-conoce"><?php the_field( 'servicios_bloque_titulo_3' ); ?></h2>

              <p><?php the_field( 'servicios_bloque_descripcion_3' ); ?></p>

              <a href="<?php the_field( 'servicios_bloque_link_button_3' ); ?>" class="servicios-texto-boton">
                <?php the_field( 'servicios_bloque_texto_button_3' ); ?>
              </a>

            </div>

            <div class="servicios-landing servicios-div">

              <h2 class="nosotros-conoce"><?php the_field( 'servicios_bloque_titulo_4' ); ?></h2>

              <p><?php the_field( 'servicios_bloque_descripcion_4' ); ?></p>

              <a href="<?php the_field( 'servicios_bloque_link_button_4' ); ?>" class="servicios-texto-boton">
                <?php the_field( 'servicios_bloque_texto_button_4' ); ?>
              </a>

            </div>

          </div>

        </div>

        

        <?php get_template_part( 'template-parts/content', 'cta' ); ?>



        </div>



<?php get_footer(); ?>