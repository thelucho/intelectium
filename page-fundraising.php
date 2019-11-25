<?php
/**
* Template Name: Fundraising
*
* @package Intelectium
*/
?>

<?php get_header(); ?>



<div class="principal-service">

  <div class="container-service">

    <?php if ( get_field( 'fundraising_img_destacada_desktop') ) { ?>

      <img src="<?php the_field( 'fundraising_img_destacada_desktop' ); ?>" class="service-imagen" />

    <?php } ?>



    <?php if ( get_field( 'fundraising_img_destacada_mobile') ) { ?>

      <img src="<?php the_field( 'fundraising_img_destacada_mobile' ); ?>" class="service-imagen-mobile" />

    <?php } ?>

  </div>



  <div class="container-service">

    <h1 class="service-titulo-principal"><?php the_field( 'fundraising_hero_titulo' ); ?></h1>

    <p class="service-texto-principal"><?php the_field( 'fundraising_hero_descripcion' ); ?></p>

  </div>

</div>





<div class="content-container">

	<div class="service-medio">

		<?php the_field( 'fundraising_como_titulo' ); ?>

	</div>

	<div class="servicio-cajas-container">

		<div class="servicio-caja">

			<h1 class="inicio-numero">01</h1>

			<p class="servicio-texto-caja"><?php the_field( 'fundraising_como_descripcion_1' ); ?></p>

		</div>

		<div class="servicio-caja">

			<h1 class="inicio-numero">02</h1>

			<p class="servicio-texto-caja"><?php the_field( 'fundraising_como_descripcion_2' ); ?></p>

		</div>

		<div class="servicio-caja">

			<h1 class="inicio-numero">03</h1>

			<p class="servicio-texto-caja"><?php the_field( 'fundraising_como_descripcion_3' ); ?></p>

		</div>



		<div class="servicio-caja">

			<h1 class="inicio-numero">04</h1>

			<p class="servicio-texto-caja"><?php the_field( 'fundraising_como_descripcion_4' ); ?></p>

		</div>

	</div>

</div>





<div class="content-container diaadia">

	<div class="service-medio">

		<?php the_field( 'fundraising_como_trabajamos_titulo' ); ?>

	</div>

	<div class="servicio-texto-container">

    	<div class="servicio-texto-parte">

        	<?php the_field( 'fundraising_como_trabajamos_desc_izq' ); ?>

    	</div>

    	<div class="servicio-texto-parte">

        	<?php the_field( 'fundraising_como_trabajamos_desc_der' ); ?>

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
