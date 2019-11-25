<?php
/**
* Template Name: Prueba Traduccion
*
* @package Intelectium
*/
?>

<?php get_header(); ?>


<div class="content-container">

    <p class="nosotros-conoce"><?php the_field( 'texto_prueba_1' ); ?></p>
    <p class="nosotros-conoce"><?php the_field( 'texto_prueba_2' ); ?></p>

    <?php get_template_part( 'template-parts/content', 'cta' ); ?>

</div>



<?php get_footer(); ?>