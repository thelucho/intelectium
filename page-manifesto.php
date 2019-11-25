<?php
/**
* Template Name: Manifiesto
*
* @package Intelectium
*/
?>

<?php get_header(); ?>

    <div class="body-container">

        <?php if ( get_field( 'manifiesto_fondo_hero_desktop') ) { ?>
            <img src="<?php the_field( 'manifiesto_fondo_hero_desktop' ); ?>" class="slider-img" />
        <?php } ?>

        <?php if ( get_field( 'manifiesto_fondo_hero_mobile') ) { ?>
            <img src="<?php the_field( 'manifiesto_fondo_hero_mobile' ); ?>" class="slider-mobile-img" />
        <?php } ?>

        <h1 class="manifiesto-titulo-principal"><?php the_field( 'manifiesto_titulo_hero' ); ?></h1>

    </div>
      <div class="content-container">
        <h2 class="manifiesto-titulo-secundario"> <?php the_field( 'manifiesto_sections_insight_titulo' ); ?></h2>
        <p><?php the_field( 'manifiesto_sections_insight_texto' ); ?></p>
      </div>
      <div class="content-container experience">
        <h2  class="manifiesto-par manifiesto-titulo-secundario"> <?php the_field( 'manifiesto_sections_experience_titulo' ); ?></h2>
        <p class="manifiesto-par"><?php the_field( 'manifiesto_sections_experience_texto' ); ?></p>
      </div>
      <div class="content-container">
        <h2 class="manifiesto-titulo-secundario"> <?php the_field( 'manifiesto_sections_partnership_titulo' ); ?></h2>
        <p><?php the_field( 'manifiesto_sections_partnership_texto' ); ?></p>
      </div>
      <div class="content-container network">
        <h2 class="manifiesto-par manifiesto-titulo-secundario"> <?php the_field( 'manifiesto_sections_network_titulo' ); ?></h2>
        <p class="manifiesto-par"><?php the_field( 'manifiesto_sections_network_texto' ); ?></p>
      </div>
      <div class="content-container manifiesto-conoce">
      
      <?php
      if(ICL_LANGUAGE_CODE=='es'){ ?>
        <a href="<?php echo esc_url( home_url( 'sobre-nosotros' ) ); ?>"><p class="manifiesto-conoce">CONOCÉ MÁS SOBRE NOSOTROS</p></a>
      <?php }

      if(ICL_LANGUAGE_CODE=='en'){ ?>
        <a href="<?php echo esc_url( home_url( 'about-us' ) ); ?>"><p class="manifiesto-conoce">MORE ABOUT US</p></a>
      <?php } ?>
        
      </div>


      <?php get_template_part( 'template-parts/content', 'cta' ); ?>


<?php get_footer(); ?>
