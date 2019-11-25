<?php
/**
* Template Name: Casos de Exito
*
* @package Intelectium
*/
?>

<?php get_header(); ?>

<div class="casos container">


    <?php
    if(ICL_LANGUAGE_CODE=='es'){ ?>
        <h2 class="nosotros-conoce"><strong>Casos de éxito</strong></h2>
    <p class="nosotros-conoce">Más de 15 años ayudando a empresas</p>
    <?php }

    if(ICL_LANGUAGE_CODE=='en'){ ?>
        <h2 class="nosotros-conoce"><strong>Success Cases</strong></h2>
        <p class="nosotros-conoce">More than 15 years helping companies</p>
    <?php } ?>

        <div class="grid-gallery">
          <?php /*
            for ($i=1; $i <= 191 ; $i++) {
              $file = "logo" . substr("000" . $i, -3);
              ?>
              <a href="#" class="grid-gallery__item">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/casos/<?php echo $file; ?>.jpg" class="grid-gallery__image">
              </a>
              <?php
            } */
          ?>

            <?php


            $args = array(
                'post_type'       => array( 'casos_exito' ),
                'order'           => 'ASC',
                'posts_per_page'  => '300'
            );

            $casos = new WP_Query( $args );

            if ( $casos->have_posts() ) {
              while ( $casos->have_posts() ) {
                $casos->the_post();
                if( get_field('tamano_imagen') == 'Small' ){ ?>
                  <a href="<?php the_field( 'link' ); ?>" target="_blank" class="grid-gallery__item" rel="nofollow">
                    <?php the_post_thumbnail('casos-exito-small', ['class' => 'exito-imagen grid-gallery__image']); ?>
                  </a>
                <?php } else { ?>
                  <a href="<?php the_field( 'link' ); ?>" target="_blank" class="grid-gallery__item" rel="nofollow">
                    <?php the_post_thumbnail('casos-exito-large', ['class' => 'exito-imagen-larga grid-gallery__image']); ?>
                  </a>
                <?php }
              }
            } else {
                echo 'No hay casos de éxito cargados';
            }

            wp_reset_postdata();



            ?>

        </div>
    </div>

    <?php get_template_part( 'template-parts/content', 'cta' ); ?>

</div>

<?php get_footer(); ?>
