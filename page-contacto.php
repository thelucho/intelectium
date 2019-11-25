<?php
/**
* Template Name: Contacto
*
* @package Intelectium
*/
?>

<?php get_header(); ?>



<div class="content-container">

      


      <?php
      if(ICL_LANGUAGE_CODE=='es'){ ?>
        <h2 class="nosotros-conoce"><strong>Contactanos</strong></h2>
        <p class="nosotros-conoce">¡Queremos saber más de ti!</p>
      <?php }

      if(ICL_LANGUAGE_CODE=='en'){ ?>
        <h2 class="nosotros-conoce"><strong>Contact Us</strong></h2>
        <p class="nosotros-conoce">We want to know more about you!</p>
      <?php } ?>

    </div>

    <div class="content-container">

      

      <?php
      if(ICL_LANGUAGE_CODE=='es'){ ?>
        <h2 class="contacto-principal">Queremos entender mejor tu <strong>Startup.</strong><br>
        Rellenando el siguiente formulario proporcionarás la información necesaria para poder valorar tu proyecto. ¡Muchas gracias!</h2>
        <div class="empezar">
          <a href="https://intelectium1.typeform.com/to/SUiJBA" class="btn btn-default btn-empezar"><strong>Empezar</strong></a> <span class="intro">pulsa INTRO</span>
        </div>
      <?php }

      if(ICL_LANGUAGE_CODE=='en'){ ?>
        <h2 class="contacto-principal">We want to better understand your <strong>Startup.</strong><br>
        Filling out the form below you will provide the necessary information to be able to evaluate your project. Thank you!
        <div class="empezar">
          <a href="https://intelectium1.typeform.com/to/SUiJBA" class="btn btn-default btn-empezar"><strong>Start</strong></a> <span class="intro">press ENTER</span>
        </div>
      <?php } ?>

      

    </div>

    <div class="content-container">

      

      <?php
      if(ICL_LANGUAGE_CODE=='es'){ ?>
        <h2 class="nosotros-conoce"><strong>Oficinas</strong></h2>
      <?php }

      if(ICL_LANGUAGE_CODE=='en'){ ?>
        <h2 class="nosotros-conoce"><strong>Offices</strong></h2>
      <?php } ?>

      <div class="contacto-ciudades">



      <div class="contacto-ciudad">

        <img src="<?php bloginfo( 'template_url' ); ?>/img/barcelona.png" alt="" class="imagen-ciudad">

        <p class="nombre-ciudad" onclick="mapaBarcelona()" id="Barcelona">Barcelona</p>

        <ul>

          <li>Av. Diagonal, 403 – 2a 4a</li>

          <li>08008</li>

          <li>T. +34 932 724 640</li>

        </ul>

      </div>

      <div class="contacto-ciudad">

        <img src="<?php bloginfo( 'template_url' ); ?>/img/madrid.png" alt="" class="imagen-ciudad">

        <p class="nombre-ciudad" onclick="mapaMadrid()" id="Madrid">Madrid</p>

        <ul>

          <li>Av. Príncipe de Vergara, 57</li>

          <li>Esc. A, 1B - 28006</li>

          <li>T. +34 915 629 841</li>

        </ul>

      </div>

      </div>

    </div>

    <div class="content-container">

      <div class="contacto-ciudades">



      <div class="contacto-ciudad">

        <ul>

          <li>We start!</li>

          <li class="mail-intelectium">comunicacion@intelectium.com</li>

        </ul>

      </div>

      <div class="contacto-ciudad">

        <ul>

          <li>Follow us!</li>

          <li>
            <a href="https://twitter.com/intelectium" target="_blank"><strong>Twitter</strong></a>
            <a href="https://www.linkedin.com/company/intelectium-consulting" target="_blank"><strong>Linkedin</strong></a>
            <a href="https://www.facebook.com/Intelectium/?fref=ts" target="_blank"><strong>Facebook</strong></a></li>

        </ul>

      </div>

      </div>

    </div>



    <a href="https://www.google.com/maps/d/embed?mid=1U0Tpxe2jzq9u_rm80u6qhmxHl0AE2BP_" class="mapa-barcelona" id="mapa-barcelona">

    <iframe src="https://www.google.com/maps/d/embed?mid=1U0Tpxe2jzq9u_rm80u6qhmxHl0AE2BP_" width="100%" height="420"></iframe></a>



    <a href="https://www.google.com/maps/d/embed?mid=16D9ifLypK6g2UO-FtkSwO3t6SgyQ89Va" class="mapa-madrid" id="mapa-madrid">

    <iframe src="https://www.google.com/maps/d/embed?mid=16D9ifLypK6g2UO-FtkSwO3t6SgyQ89Va" width="100%" height="420"></iframe></a>





<?php get_footer(); ?>
