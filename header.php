<?php
/**
 * The header for our theme.
 *
 * @package intelectium
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6612319-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-6612319-1');
	</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body>

<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=147922918587546&autoLogAppEvents=1"></script>

    <header class="header container-fluid">
        <nav class="navbar">
            <?php do_action('wpml_add_language_selector'); ?>
            <a href ="<?php echo esc_url( home_url( '/' ) ); ?>" class="redirect-home">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" class="logo">
            </a>
            <div id="mySidenav" class="sidenav">
                <div class="fondo-navbar">
                    <a href="javascript:void(0)" class="closebtn" onclick="mediaQueryClose()">
						<div class="close-menu">
							<div class="line"></div>
							<div class="line"></div>
						</div>
                    </a>


                    <?php
                    if(ICL_LANGUAGE_CODE=='es'){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-contenido">Inicio</a>
                        <a href="<?php echo esc_url( home_url( 'consultora-financiera-startups' ) ); ?>" class="navbar-contenido">Nosotros</a>
                        <a href="<?php echo esc_url( home_url( 'financiacion-para-startups' ) ); ?>" class="navbar-contenido">Servicios</a>
                        <a href="<?php echo esc_url( home_url( 'casos-de-exito' ) ); ?>" class="navbar-contenido">Casos de éxito</a>
                        <a href="<?php echo esc_url( home_url( 'novedades' ) ); ?>" class="navbar-contenido">Novedades</a>
                        <a href="<?php echo esc_url( home_url( 'contacto-aceleradora-startup' ) ); ?>" class="navbar-contenido">Contacto</a>
                    <?php }


                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-contenido">Home</a>
                        <a href="<?php echo esc_url( home_url( 'about-us' ) ); ?>" class="navbar-contenido">About Us</a>
                        <a href="<?php echo esc_url( home_url( 'services' ) ); ?>" class="navbar-contenido">Services</a>
                        <a href="<?php echo esc_url( home_url( 'success-cases' ) ); ?>" class="navbar-contenido">Success Cases</a>
                        <a href="<?php echo esc_url( home_url( 'contact-us' ) ); ?>" class="navbar-contenido">Contact Us</a>
                    <?php } ?>




                    <hr class="navbar-contenido">
										<h2 style="color:#FFF !important;" class="bold">Venture Capital</h2>
                    <a href="https://intelectium.com/ventures/" class="bold navbar-contenido">Intelectium Ventures</a>
										<a href="http://www.smartechcapital.com/" class="bold navbar-contenido">Smartech Capital</a>
                </div>
            </div>
            <img src="<?php bloginfo( 'template_url' ); ?>/img/menu.png" style="cursor:pointer" onclick="mediaQuery()" class="menu pull-right">
        </nav>
    </header>
