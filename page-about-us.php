<?php
/**
* Template Name: About Us
*
* @package Intelectium
*/
?>

<?php get_header(); ?>

<div class="body-container">

        <?php if ( get_field( 'nosotros_fondo_hero_desktop') ) { ?>
            <img src="<?php the_field( 'nosotros_fondo_hero_desktop' ); ?>" class="slider-img" />
        <?php } ?>

        <?php if ( get_field( 'nosotros_fondo_hero_mobile') ) { ?>
            <img src="<?php the_field( 'nosotros_fondo_hero_mobile' ); ?>" class="slider-mobile-img" />
        <?php } ?>

        <h1 class="manifiesto-titulo-principal"><?php the_field( 'nosotros_titulo_hero' ); ?></h1>

</div>


    <?php if( have_rows('nosotros_carousel') ) : ?>
      <div class="container-fluid">
        <div class="content-container">
          <!--h2 class="nosotros-medio"><?php the_field( 'nosotros_titulo_de_seccion' ); ?></h2-->
          <h2 class="nosotros-medio">¿Qué nos <span>mueve?</span></h2>
        </div>
        <div id="carNosotros" class="carousel slide multi-item-carousel hidden-sm hidden-xs" data-ride="carousel">

          <ol class="carousel-indicators">
            <?php $active = "active"; ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('nosotros_carousel') ) : the_row(); ?>
              <li data-target="#carNosotros" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
              <?php $i++; ?>
              <?php $active = "" ?>
            <?php endwhile; ?>
          </ol>
          <div class="carousel-inner" role="listbox">
            <?php $active = "active"; ?>
            <?php while ( have_rows('nosotros_carousel') ) : the_row(); ?>
              <div class="item <?php echo $active; ?>">
                <div class="item__third">
                  <h3>
                    <?php the_sub_field('nosotros_carousel_titulo_de_slide'); ?>
                  </h3>
                  <?php the_sub_field('nosotros_carousel_texto_de_slide'); ?>
                </div>
              </div>
              <?php $active = "" ?>
            <?php endwhile; ?>
          </div>
          <!--a href="#carNosotros" class="left carousel-control" role="button" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
          <a href="#carNosotros" class="right carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a-->
        </div>

        <div id="carNosotrosMobile" class="carousel slide hidden-md hidden-lg" data-ride="carousel">

          <ol class="carousel-indicators">
            <?php $active = "active"; ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('nosotros_carousel') ) : the_row(); ?>
              <li data-target="#carNosotrosMobile" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
              <?php $i++; ?>
              <?php $active = "" ?>
            <?php endwhile; ?>
          </ol>
          <div class="carousel-inner" role="listbox">
            <?php $active = "active"; ?>
            <?php while ( have_rows('nosotros_carousel') ) : the_row(); ?>
              <div class="item <?php echo $active; ?>">
                <h3>
                  <?php the_sub_field('nosotros_carousel_titulo_de_slide'); ?>
                </h3>
                <?php the_sub_field('nosotros_carousel_texto_de_slide'); ?>
              </div>
              <?php $active = "" ?>
            <?php endwhile; ?>
          </div>
          <!--a href="#carNosotrosMobile" class="left carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
          <a href="#carNosotrosMobile" class="right carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a-->
        </div>

      </div>
    <?php endif; ?>



    <div class="content-container diaadia">
        <!--div class="nosotros-medio">
            <?php the_field( 'nosotros_dia_a_dia_titulo' ); ?>
        </div-->
        <h2 class="nosotros-medio">¿Cuál es nuestro <br class="hidden-md hidden-lg"> <span>día a día?</span></h2>
        <?php the_field( 'nosotros_dia_a_dia_descripcion' ); ?>
    </div>


    <div class="content-container">
        <h2 class="nosotros-conoce"><?php the_field( 'nosotros_equipo_titulo' ); ?></h2><p class="nosotros-conoce">Conocé más <br class="hidden-md hidden-lg">sobre nosotros <?php //the_field( 'nosotros_equipo_subtitulo' ); ?></p>
        <section class="nosotros-perfiles">

			<?php if( have_rows('nosotros_repeater_equipo') ): ?>
				<?php while ( have_rows('nosotros_repeater_equipo') ) : the_row(); ?>

					<article class="nosotros-perfil">
						<img src="<?php the_sub_field('nosotros_repeater_equipo_foto'); ?>" class="imagen-perfil">
						<h3 class="nombre-perfil"><?php the_sub_field('nosotros_repeater_equipo_nombre'); ?></h3>
						<h4 class="puesto-perfil"><?php the_sub_field('nosotros_repeater_equipo_cargo'); ?></h4>
						<p><?php the_sub_field('nosotros_repeater_equipo_descripcion'); ?></p>
					</article>

				<?php endwhile; ?>
			<?php endif; ?>

        </section>
    </div>


    <div class="nosotros-historia">
        <h2 class="nosotros-conoce"><?php the_field( 'nosotros_historia_titulo' ); ?></h2> <p class="nosotros-conoce"><?php the_field( 'nosotros_historia_subtitulo' ); ?></p>

        <div class="nosotros-fondo-lineadetiempo">
            <?php if ( get_field( 'nosotros_historia_linea_tiempo_desktop') ) { ?>
	            <img src="<?php the_field( 'nosotros_historia_linea_tiempo_desktop' ); ?>" class="nosotros-lineadetiempo" />
            <?php } ?>
        </div>

        <?php if ( get_field( 'nosotros_historia_linea_tiempo_mobile') ) { ?>
            <img src="<?php the_field( 'nosotros_historia_linea_tiempo_mobile' ); ?>" class="nosotros-lineadetiempo-mobile" />
        <?php } ?>
    </div>

<?php get_footer(); ?>
