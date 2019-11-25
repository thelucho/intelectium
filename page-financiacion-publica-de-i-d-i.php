<?php
/**
* Template Name: Financiamiento IDI
*
* @package Intelectium
*/
?>

<?php get_header(); ?>

<div class="principal-service">
  <div class="container-service">
    <?php if ( get_field( 'idi_img_destacada_desktop') ) { ?>
      <img src="<?php the_field( 'idi_img_destacada_desktop' ); ?>" class="service-imagen" />
    <?php } else { ?>
      <img src="img/imgp-idi.jpg" class="fundraising-imagen">
    <?php } ?>

    <?php if ( get_field( 'idi_img_destacada_mobile') ) { ?>
      <img src="<?php the_field( 'idi_img_destacada_mobile' ); ?>" class="service-imagen-mobile" />
    <?php } else { ?>
      <img src="img/imgp-idi-mobile.png" class="service-imagen-mobile">
    <?php } ?>
  </div>

  <div class="container-service">
    <h1 class="service-titulo-principal"><?php the_field( 'idi_hero_titulo' ); ?></h1>
    <p class="service-texto-principal"><?php the_field( 'idi_hero_descripcion' ); ?></p>
  </div>
</div>

  <div class="container p-t-35 p-b-35">
    <div class="service-medio"><?php the_field( 'idi_como_titulo' ); ?></div>
    <p><?php the_field( 'idi_como_descripcion' ); ?></p>
  </div>

  <div class="container-fluid diaadia p-t-35 p-b-35">
    <div class="container">
      <div class="service-medio"><?php the_field( 'idi_quien_titulo' ); ?></div>
      <p><?php the_field( 'idi_quien_descripcion' ); ?></p>
    </div>
  </div>

  <div class="container p-t-35 p-b-35">
    <div class="service-medio"><?php the_field( 'idi_ratio_titulo' ); ?></div>
    <p><?php the_field( 'idi_ratio_descripcion' ); ?></p>
  </div>

  <div class="container-fluid lineas diaadia">
    <div class="container">
      <h2><?php the_field( 'idi_financiancion_startups_titulo' ); ?></h2>
      <br>
      <br>
      <ul class="nav nav-pills nav-justified">
        <li class="active"><a data-toggle="tab" href="#cdti">CDTI</a></li>
        <li><a data-toggle="tab" href="#minetur">MINETUR</a></li>
        <li><a data-toggle="tab" href="#mineco">MINECO</a></li>
      </ul>
      <div class="tab-content">


        <div id="cdti" class="tab-pane fade in active">
          <div class="row">
          <?php
          if( have_rows('idi_cdti_bloques') ){
            while ( have_rows('idi_cdti_bloques') ) : the_row(); ?>

                <div class="col-md-3">
                  <div class="caja-programa">
                    <h2 class="programa-titulo" id="caja-1-titulo"><?php the_sub_field('sub_cdti_titulo'); ?></h2>
                    <p class="programa-texto" id="caja-1-texto"><?php the_sub_field('sub_cdti_descripcion'); ?></p>
                    <a class="servicios-texto-boton boton-caja" href="<?php the_sub_field('sub_cdti_link'); ?>" id="caja-1-link"><?php the_sub_field('sub_cdti_link_texto'); ?></a>
                  </div>
                </div>

            <?php endwhile;
          }
          ?>
          </div>
        </div>


        <div id="minetur" class="tab-pane fade">
          <div class="row">
          <?php
            if( have_rows('idi_minetur_bloques') ){
            $num = 1;
            while ( have_rows('idi_minetur_bloques') ) : the_row(); ?>

                <div class="col-md-4  <?php if($num==1){echo 'col-md-offset-2';} ?>">
                  <div class="caja-programa">
                    <h2 class="programa-titulo" id="caja-1-titulo"><?php the_sub_field('titulo'); ?></h2>
                    <p class="programa-texto" id="caja-1-texto"><?php the_sub_field('descripcion'); ?></p>
                    <a class="servicios-texto-boton boton-caja" href="<?php the_sub_field('link'); ?>" id="caja-1-link"><?php the_sub_field('link_texto'); ?></a>
                  </div>
                </div>

            <?php
            $num++;
            endwhile;
            }
          ?>
          </div>
        </div>



        <div id="mineco" class="tab-pane fade">
          <div class="row">

            <?php
              if( have_rows('bloques_mineco') ){

              while ( have_rows('bloques_mineco') ) : the_row(); ?>

                  <div class="col-md-4 ">
                    <div class="caja-programa">
                      <h2 class="programa-titulo" id="caja-1-titulo"><?php the_sub_field('titulo'); ?></h2>
                      <p class="programa-texto" id="caja-1-texto"><?php the_sub_field('descripcion'); ?></p>
                      <a class="servicios-texto-boton boton-caja" href="<?php the_sub_field('link'); ?>" id="caja-1-link"><?php the_sub_field('link_texto'); ?></a>
                    </div>
                  </div>

              <?php
              endwhile;
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid lineas">
    <div class="container">
      <div>
        <h2><strong><?php the_field( 'idi_europea_titulo' ); ?></strong></h2>
        <br>
        <p><?php the_field( 'idi_europea_descripcion' ); ?></p>
      </div>
      <br>
      <br>
      <ul class="nav nav-pills nav-justified euro">
        <li class="active">
          <a data-toggle="tab" href="#horizonte">
            <?php if(ICL_LANGUAGE_CODE=='es'){ ?>
              HORIZONTE 2020
            <?php } ?>
            <?php if(ICL_LANGUAGE_CODE=='en'){ ?>
              HORIZON 2020
            <?php } ?>
          </a>
        </li>
        <li><a data-toggle="tab" href="#eurostars">EUROSTARS</a></li>
      </ul>
      <div class="tab-content">


        <div id="horizonte" class="tab-pane fade in active">
          <div class="row">
            <?php
              if( have_rows('programas_horizonte_2020') ){
              while ( have_rows('programas_horizonte_2020') ) : the_row(); ?>

                  <div class="col-md-4">
                    <div class="caja-programa">
                      <h2 class="programa-titulo" id="caja-1-titulo"><?php the_sub_field('idi_europea_horizonte_titulo'); ?></h2>
                      <p class="programa-texto" id="caja-1-texto"><?php the_sub_field('idi_europea_horizonte_descripcion'); ?></p>
                      <a class="servicios-texto-boton boton-caja" href="<?php the_sub_field('idi_europea_horizonte_link'); ?>" id="caja-1-link"><?php the_sub_field('idi_europea_horizonte_link_texto'); ?></a>
                    </div>
                  </div>

              <?php
              endwhile;
              }
            ?>
          </div>
        </div>


        <div id="eurostars" class="tab-pane fade">
          <div class="row">

            <?php
              if( have_rows('programas_eurostars') ){
              while ( have_rows('programas_eurostars') ) : the_row(); ?>

                <div class="col-md-4 col-md-offset-4">
                  <div class="caja-programa">
                    <h2 class="programa-titulo" id="caja-1-titulo"><?php the_sub_field('idi_europea_eurostars_titulo'); ?></h2>
                    <p class="programa-texto" id="caja-1-texto"><?php the_sub_field('idi_europea_eurostars_descripcion'); ?></p>
                    <a class="servicios-texto-boton boton-caja" href="<?php the_sub_field('idi_europea_eurostars_link'); ?>" id="caja-1-link"><?php the_sub_field('idi_europea_eurostars_link_texto'); ?></a>
                  </div>
                </div>

              <?php
              endwhile;
              }
            ?>

          </div>
        </div>


      </div>
    </div>
  </div>

  <br>

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
