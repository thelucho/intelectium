<?php
/**
* Template Name: Home
*
* @package Intelectium
*/
?>

<?php get_header(); ?>


<?php if( have_rows('home_hero_casos_de_exito') ) : ?>
<div class="container-fluid" style="margin:auto 15px;">
	<div class="row">
		<h3 class="inicio-titulo-slider"><?php the_field( 'home_hero_frase_imagen' ); ?></h3>
		<div class="home-slider carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<!-- <li data-target="#home-slider" data-slide-to="0" class="active"></li>
			    <li data-target="#home-slider" data-slide-to="1"></li>
			    <li data-target="#home-slider" data-slide-to="2"></li>
				<li data-target="#home-slider" data-slide-to="3"></li>
				<li data-target="#home-slider" data-slide-to="4"></li> -->

				<?php
					$active = 'active';
					$num = 0;
				?>
				<?php while ( have_rows('home_hero_casos_de_exito') ) : the_row(); ?>
					<li data-target="#home-slider" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
				<?php
					$active = '';
					$num += 1;
				?>
				<?php endwhile; ?>

			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<?php /*
					$active_aux = 'active';
					$num_aux = 0;
				?>
				<?php while ( have_rows('home_hero_casos_de_exito') ) : the_row(); ?>
					<div class="item <?php echo $active_aux ?>">

						<?php if( get_field('imagen_fondo_slider_desktop') ): ?>
							<img src="<?php the_field('imagen_fondo_slider_desktop'); class="hidden-xs hidden-sm" ?>" />
						<?php endif; ?>

						<?php if( get_field('imagen_fondo_slider_mobile') ): ?>
							<img src="<?php the_field('imagen_fondo_slider_mobile'); ?>" class="hidden-md hidden-lg" />
						<?php endif; ?>

						<!-- Static Header -->
						<div class="header-text">
							<div class="col-md-12 text-center">
								<a href="<?php the_sub_field('link_caso_exito'); ?>" target="_blank"><p><?php the_sub_field('home_hero_nombre_caso_de_exito'); ?></p></a>
							</div>
						</div><!-- /header-text -->
					</div>

				<?php
					$active_aux = '';
					$num_aux += 1;
				?>
				<?php endwhile; */?>

				<?php $active = 'active'; ?>
				<?php while ( have_rows('home_hero_casos_de_exito') ) : the_row(); ?>
					<div class="item  <?php echo $active ?>">
						<img src="<?php the_sub_field('imagen_fondo_slider_desktop'); ?>" class="hidden-xs hidden-sm">
						<img src="<?php the_sub_field('imagen_fondo_slider_mobile'); ?>" class="hidden-md hidden-lg">

						<!-- Static Header -->
						<div class="header-text">
							<div class="col-md-12 text-center">
								<a href="<?php the_sub_field('link_caso_exito'); ?>" target="_blank"><p><?php the_sub_field('home_hero_nombre_caso_de_exito'); ?></p></a>
							</div>
						</div><!-- /header-text -->
					</div>
				<?php $active = ''; ?>
				<?php endwhile; ?>






			</div>
			<a class="left carousel-control" href=".home-slider" data-slide="prev">
		    <!--span class="glyphicon glyphicon-chevron-left"></span-->
				<span class="chevron-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href=".home-slider" data-slide="next">
		    <!--span class="glyphicon glyphicon-chevron-right"></span-->
				<span class="chevron-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div><!-- /carousel -->
	</div>
</div>
<?php endif; ?>

<h3 class="inicio-titulo-secundario"><?php the_field( 'home_grilla_titulo' ); ?></h3>
<p class="intelectium-partners"><?php the_field( 'home_grilla_hashtag' ); ?></p>
<!-- 8 Cajas-->
<div class="container cajas">
  <div class="row">
		<div class="inicio-caja inicio-te-ayudamos col-md-3">
	  	<a href="<?php the_field( 'home_grilla_bloque_1_link' ); ?>">
	  		<?php the_field( 'home_grilla_bloque_1' ); ?>
	  	</a>
	  </div>

	  <div class="inicio-caja inicio-we-love col-md-3">
	  	<?php if ( get_field( 'home_grilla_bloque_2_imagen') ) { ?>
			<img src="<?php the_field( 'home_grilla_bloque_2_imagen' ); ?>" class="inicio-img-we-love" />
		<?php } ?>
	  </div>
		<div class="inicio-caja inicio-we-love col-md-3">
	    <?php the_field( 'home_grilla_bloque_2' ); ?>
	  </div>
	  <!--div class="inicio-caja vacia col-md-3 hidden-sm hidden-xs">

	  </div-->

	  	<div class="inicio-caja inicio-por-que col-md-3">
			<a href="<?php the_field( 'home_grilla_bloque_3_link' ); ?>">
				<?php the_field( 'home_grilla_bloque_3' ); ?>
			</a>
		</div>

  </div>

	<div class="row">
		<div class="inicio-caja inicio-quienes col-md-3">
				<a href="<?php the_field( 'home_grilla_bloque_4_link' ); ?>">
					<?php the_field( 'home_grilla_bloque_4' ); ?>
		  	</a>
		</div>

		<div class="inicio-caja vacia col-md-3 hidden-sm hidden-xs"></div>

	  	<div class="inicio-caja inicio-startups col-md-3">
				<?php the_field( 'home_grilla_bloque_5' ); ?>
			</div>

		<div class="inicio-caja inicio-team col-md-3">
			<a href="<?php the_field( 'home_grilla_bloque_6_link' ); ?>">
				<?php the_field( 'home_grilla_bloque_6' ); ?>
				<?php if ( get_field( 'home_grilla_bloque_6_imagen') ) { ?>
					<img src="<?php the_field( 'home_grilla_bloque_6_imagen' ); ?>" class="inicio-img-team" />
				<?php } ?>
			</a>
		</div>

	</div>

</div>

<div class="content-container inicio-conseguido">
  <p class="cultura-intelectium"><?php the_field( 'home_indicadores_hashtag' ); ?></p>
  <div class="inicio-datos-container">
  <h3 class="inicio-conseguido"><?php the_field( 'home_indicadores_titulo' ); ?></h3>
  <div class="inicio-datos">
    <div class="inicio-dato">
      <h1 class="inicio-numero"><?php the_field( 'home_indicadores_valor_1' ); ?></h1>
      <p><strong><?php the_field( 'home_indicadores_texto_1' ); ?></strong></p>
    </div>
    <div class="inicio-dato">
      <h1 class="inicio-numero"><?php the_field( 'home_indicadores_valor_2' ); ?></h1>
      <p><strong><?php the_field( 'home_indicadores_texto_2' ); ?></strong></p>
    </div>
    <div class="inicio-dato">
      <h1 class="inicio-numero"><?php the_field( 'home_indicadores_valor_3' ); ?></h1>
      <p><strong><?php the_field( 'home_indicadores_texto_3' ); ?></strong></p>
    </div>
    </div>
  </div>
</div>



<?php
if(ICL_LANGUAGE_CODE=='es'){ ?>


<div class="container">

<h2 class="inicio-titulo"><strong><?php the_field( 'home_noticias_titulo' ); ?></strong></h2>
<div class="inicio-noticias">

  <?php

    $args = array(
      'post_type'              => array( 'post' ),
      'post_status'            => array( 'publish' ),
      'posts_per_page'         => '3'
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>

        <div class="inicio-noticia col-xs-12 col-md-4">
        	<a href="<?php the_permalink(); ?>">

				<?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post', ['class' => 'inicio-noticia-imagen']);
                    } else { ?>
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/default-post.jpg" class="inicio-noticia-imagen">
				<?php } ?>

        		<p class="inicio-noticia-fecha">
					<mark class="inicio-resaltado-fecha">
						<strong>
							<?php
								setlocale(LC_ALL,"es_ES");
								echo the_date("d F Y");
							?>
						</strong>
					</mark>
				</p>
        		<p class="inicio-noticia-texto">
					<mark>
						<strong><?php the_title(); ?></strong>
					</mark>
				</p>
        	</a>
        </div>

     <?php }
    } else {
      echo '¡Disculpas! No hay noticias cargadas aún';
    }

    // Restore original Post Data
    wp_reset_postdata();

  ?>


</div>
<div class="inicio-boton-ver-mas">
  <a href="<?php echo esc_url( home_url( 'novedades' ) ); ?>">
<strong><?php the_field( 'home_noticias_link_texto' ); ?></strong>
  </a>
</div>
</div>

<?php } ?>



<div class="container">
  	<h2 class="no-seas-timido">
		<a target="_blank" href="https://intelectium1.typeform.com/to/SUiJBA" style="text-decoration:none;"><mark class="resaltado-no-seas-timido"><?php the_field( 'home_prefooter_frase' ); ?></mark></a>
	</h2>
  <div class="direcciones-container">
    <div class="direccion barcelona">
      <p class="inicio-ciudad"><?php the_field( 'home_prefooter_oficina_1' ); ?></p>
      <p class="inicio-calle"><?php the_field( 'home_prefooter_oficina_1_dire' ); ?></p>
    </div>
    <div class="direccion mail">
      <p class="inicio-empezamos"><?php the_field( 'home_prefooter_col_centro_texto' ); ?></p>
      <a href="mailto:<?php the_field( 'home_prefooter_col_centro_email' ); ?>"><p class="inicio-mail"><?php the_field( 'home_prefooter_col_centro_email' ); ?></p></a>
    </div>
    <div class="direccion redes-sociales">
      <div class="redes-sociales-container">
		<p class="inicio-redes-sociales"><a href="<?php the_field( 'home_prefooter_red_1_link' ); ?>" target="_blank"><?php the_field( 'home_prefooter_red_1_texto' ); ?></a></p>
		<p class="inicio-redes-sociales"><a href="<?php the_field( 'home_prefooter_red_2_link' ); ?>" target="_blank"><?php the_field( 'home_prefooter_red_2_texto' ); ?></a></p>
		<p class="inicio-redes-sociales"><a href="<?php the_field( 'home_prefooter_red_3_link' ); ?>" target="_blank"><?php the_field( 'home_prefooter_red_3_texto' ); ?></a></p>
      </div>
    </div>
    <div class="direccion madrid">
      <p class="inicio-ciudad"><?php the_field( 'home_prefooter_oficina_2' ); ?></p>
      <p class="inicio-calle"><?php the_field( 'home_prefooter_oficina_2_dire' ); ?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
