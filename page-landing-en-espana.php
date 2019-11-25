<?php
/**
* Template Name: Landing en España
*
* @package Intelectium
*/
?>


<?php get_header(); ?>



<div class="principal-service">

<div class="container-service">


  <?php if ( get_field( 'idi_img_destacada_desktop') ) { ?>
	  <img src="<?php the_field( 'idi_img_destacada_desktop' ); ?>" class="service-imagen" />
  <?php } ?>


  <?php if ( get_field( 'idi_img_destacada_mobile') ) { ?>
	  <img src="<?php the_field( 'idi_img_destacada_mobile' ); ?>" class="service-imagen-mobile" />
  <?php } ?>


</div>

<div class="container-service">

  <h1 class="service-titulo-principal">
    <?php the_field( 'idi_hero_titulo' ); ?>
  </h1>

  <p class="service-texto-principal">
    <?php the_field( 'idi_hero_descripcion' ); ?>
  </p>

</div>

</div>

<div class="content-container">

    <div class="service-medio">
      <?php the_field( 'landing_enclave_titulo' ); ?>
    </div>
    <p>
      <?php the_field( 'landing_enclave_desc' ); ?>
    </p>

</div>



<div class="container-fluid diaadia">

    <div class="container espana">
      <div class="service-medio">
        <?php the_field( 'landing_rol_titulo' ); ?>
      </div>
      <p>
        <?php the_field( 'landing_rol_desc' ); ?>
      </p>
    </div>

</div>



<div class="content-container caja">

<div class="service-medio"><?php the_field( 'landing_colab_titulo' ); ?></div>

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="landing-caja">

        <?php the_field( 'landing_colab_card_1' ); ?>

      </div>
      <br><br>
        <div class="landing-caja">

        <?php the_field( 'landing_colab_card_3' ); ?>

        </div>
    </div>
    <div class="col-md-6 medio">
      <div class="landing-caja">

        <?php the_field( 'landing_colab_card_2' ); ?>
        
      </div>
    </div>
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
