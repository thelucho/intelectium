<?php
/**
* Template Name: Financiamiento Co-Inversion
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
    <h1 class="service-titulo-principal"><?php the_field( 'idi_hero_titulo' ); ?></h1>
    <p class="service-texto-principal"><?php the_field( 'idi_hero_descripcion' ); ?></p>
  </div>

</div>

<div class="content-container">


<div class="service-medio">
  <?php the_field( 'idi_como_titulo' ); ?>
</div>
<?php the_field( 'idi_como_descripcion' ); ?>

<p class="line-left"><?php the_field( 'texto_con_linea_01' ); ?></p>


<div class="co-inversion-container">

  <div class="co-inversion-caja">

    <h2 class="co-inversion-caja-titulo">
      <?php the_field( 'titulo_1' ); ?>
    </h2>

    <p class="co-inversion-caja-texto">
      <?php the_field( 'descripcion_1' ); ?>
    </p>

    <a class="servicios-texto-boton" href="<?php the_field( 'link_url_1' ); ?>"><?php the_field( 'link_texto_1' ); ?> </a>

  </div>

    <div class="co-inversion-caja">

        <h2 class="co-inversion-caja-titulo"><?php the_field( 'titulo_2' ); ?></h2>

        <p class="co-inversion-caja-texto"><?php the_field( 'descripcion_2' ); ?></p>

        <a class="servicios-texto-boton" href="<?php the_field( 'link_url_2' ); ?>"><?php the_field( 'link_texto_2' ); ?> </a>
    </div>

</div>



<br><br>

<p class="line-left"><?php the_field( 'texto_con_linea_2' ); ?></p>

</div>

<!-- CARRUSEL -->
<?php if( have_rows('carrusel_coinversion') ) { ?>
<div class="container-fluid">
  <div id="carNosotros" class="carousel slide multi-item-carousel hidden-xs" data-ride="carousel">


    <ol class="carousel-indicators">
      <?php
        $active = 'active';
			  $num = 0;
			?>
			<?php while ( have_rows('carrusel_coinversion') ) : the_row(); ?>
				<li data-target="#carNosotros" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
			<?php
        $active = '';
			  $num += 1;
			?>
      <?php endwhile; ?>
    </ol>


    <div class="carousel-inner" role="listbox">

      <?php $active = 'active'; ?>
      <?php while ( have_rows('carrusel_coinversion') ) : the_row(); ?>
        <div class="item <?php echo $active ?>">
          <div class="item__third item_carrusel">
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p class="d-block w-100"><?php the_sub_field('descripcion'); ?></p>
            <a class="ver-mas-carrusel" href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_texto' ); ?></a>
          </div>
        </div>
      <?php $active = ''; ?>
      <?php endwhile; ?>

    </div>
    <a href="#carNosotros" class="left carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
    <a href="#carNosotros" class="right carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
<?php } ?>


<?php if( have_rows('carrusel_coinversion') ) { ?>
  <div id="carNosotrosMobile" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">


    <ol class="carousel-indicators">
      <?php
        $active = 'active';
			  $num = 0;
			?>
			<?php while ( have_rows('carrusel_coinversion') ) : the_row(); ?>
				<li data-target="#carNosotrosMobile" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
			<?php
        $active = '';
			  $num += 1;
			?>
      <?php endwhile; ?>
    </ol>


    <div class="carousel-inner" role="listbox">
      <?php $active = 'active'; ?>
      <?php while ( have_rows('carrusel_coinversion') ) : the_row(); ?>
        <div class="item <?php echo $active ?>">
          <div class="item__third">
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p class="d-block w-100"><?php the_sub_field('descripcion'); ?></p>
          </div>
        </div>
      <?php $active = ''; ?>
      <?php endwhile; ?>
    </div>

    <!--a href="#carNosotrosMobile" class="left carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a href="#carNosotrosMobile" class="right carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a-->
  </div>
<?php } ?>

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
