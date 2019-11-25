<?php get_header(); ?>

<div class="container">
    <h2 class="nosotros-conoce"><strong>Novedades</strong></h2>
    <p class="nosotros-conoce">Enterate de todo lo que está pasando.</p>
    <br><br>
    <div class="novedades">

    <?php

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    $args = array(
        'post_type'  => array( 'post' ),
        'posts_per_page' => 12,
        'paged' => $paged
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="novedad col-xs-12 col-sm-6 col-md-4">
            <a href="<?php the_permalink(); ?>">

				<?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-novedades', ['class' => 'inicio-noticia-imagen']);
				} else {
                    echo '.';
                }?>

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
                <p class="inicio-noticia-texto"><mark><strong><?php the_title(); ?></strong></mark></p>
            </a>
        </div>

        <?php endwhile; ?>

        <?php wp_pagenavi( array( 'query' => $query ) ); ?>

    <?php
    else :
        _e( 'No hay noticias para mostrar', 'intelectium' );
    endif;
    ?>


    </div>
</div>


<?php get_footer(); ?>
