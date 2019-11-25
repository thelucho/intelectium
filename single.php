<?php get_header(); ?>

<?php
	while ( have_posts() ) :
        the_post(); ?>

    <div class="novedad-encabezado">

        <?php if ( get_field( 'post_img_hero_desktop') ) { ?>
	        <img src="<?php the_field( 'post_img_hero_desktop' ); ?>" class="novedad-imagen-principal" />
        <?php } else { ?>
            <img src="<?php bloginfo( 'template_url' ); ?>/img/img-novedad-default.jpg" class="novedad-imagen-principal" />
        <?php } ?>

        <?php if ( get_field( 'post_img_hero_mobile') ) { ?>
            <img src="<?php the_field( 'post_img_hero_mobile' ); ?>" class="novedad-imagen-principal-mobile" />
        <?php } else { ?>
            <img src="<?php bloginfo( 'template_url' ); ?>/img/img-novedad-mobile-default.jpg" class="novedad-imagen-principal-mobile" />
        <?php } ?>

        <p class="novedad-fecha">
            <?php
                setlocale(LC_ALL,"es_ES");
                echo strftime("%d de %B de %Y");
            ?>
        </p>
        <h1 class="novedad-titulo"><?php the_title(); ?></h1>
    </div>

    <div class="content-container content-single">
        <?php the_content(); ?>
    </div>

    <?php endwhile; // End of the loop.
?>


    <div class="content-container">
        <h2 class="inicio-titulo"><strong>Otras Noticias</strong></h2>
        <div class="inicio-noticias">

        <?php

        $related = new WP_Query(
            array(
                'category__in'   => wp_get_post_categories( $post->ID ),
                'posts_per_page' => 3,
                'post__not_in'   => array( $post->ID )
            )
        );

        if( $related->have_posts() ) {
            while( $related->have_posts() ) {
                $related->the_post();?>

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
                                        echo strftime("%d de %B %Y");
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
            wp_reset_postdata();
        }

        ?>


        </div>
    </div>

    <style>

    .content-single p {
        margin-bottom: 27px;
    }

    .content-single h2 {
        padding-top: 5vh;
        padding-bottom: 5vh;
    }

    .content-single h3 {
        font-size: 1rem;
        margin-bottom: 50px;
        margin-top: 100px;
        font-weight: 600;
    }

    .content-single blockquote {
        width: 75%;
        position: relative;
        box-shadow: 4px 4px 2px #EDEDED;
        margin-left: 12.5%;
        margin-right: 12.5%;
        margin-top: 60px !important;
        margin-bottom: 70px !important;
        padding-top: 2vh;
        padding-bottom: 4vh;
        padding-left: 10%;
        padding-right: 10%;
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2;
        font-size: 1.75rem;
    }

    .content-single blockquote:after {
        content: '';
        width: 10%;
        height: 5px;
        background-color: #00DEEB;
        left: 0;
        right: 0;
        bottom: 0;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .social-share-bar {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .social-share-bar .novedad-tamaño-texto {
        margin-bottom: 0px;
    }

		.sbtn{
			margin: auto 5px !important;
		}

    </style>

<?php get_footer(); ?>
