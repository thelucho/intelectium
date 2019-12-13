<?php get_header(); ?>


<?php
	while ( have_posts() ) :
        the_post(); ?>

    <?php setPostViews(get_the_ID()); // Guarda la cantidad de vistas del post ?>

    <?php /*
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
    */ ?>

    <div class="container single-post">
        <div class="row main-content">
            <div id="sidebar" class="sidebar">
                <div class="sidebar__inner">
                    <h4>Quisque eleifend aliquet bibendum. Vestibulum quis commodo nulla.</h4>
                    <p class="date">31 OCTUBRE 2019</p>
                    <hr>
                    <p><?php if( function_exists('wp_applaud') ) wp_applaud(); ?></p>
                    <p class="printer">
                        <a href="#">
                            <img src="<?php bloginfo( 'template_url' ); ?>/img/icon-printer.png" />
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-content">
                <div class="category">
                    <span>
                    <?php
                        $category = get_the_category();
                        if ( $category[0] ) :
                            echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                        endif;
                    ?>
                    </span>
                </div>
                
                <h1><?php the_title(); ?></h1>
                <div class="extract">
                    Learn Startup Incubation es un postgrado con título de la UPC. Surge a raíz de querer dar solución a las necesidades de emprendimiento e innovación, en todas sus fases para poder lanzar una empresa con éxito.
                </div>
                <div class="date">31 OCTUBRE 2019</div><span class="dot">·</span><div class="reading-time">5 MIN LEERLA</div>

                <div class="featured-img">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/featured01.jpg">
                </div>

                <div class="body-content">
                    <?php the_content(); ?>
                    <!-- <p>El programa estará impartido por emprendedores de alto reconocimiento y pretende ayudar a otros a desarrollar sus proyectos empresariales con garantías de éxito. Además, contará con Bcombinator, hub de la innovación y crecimiento del 22@ del cual se han desarrollado con éxito unas 50 startups. Gracias a esta ayuda, podrán apoyar a nuevas empresas a acelerar su negocio y a expandirse de manera internacional.</p>
                    <p>Learn Startup Incubation se adapta a los nuevos modelos de negocio para poder crear éxito en las empresas actuales, combinando la enseñanza de conocimientos, el mentoring, y la práctica. Además, está dirigido a todas aquellas personas emprendedoras que pretenden liderar un equipo y crear un nuevo negocio único, con la innovación como punto principal.</p>
                    <h3>El postgrado está divido en dos fases principales:</h3>
                    <p>La fase de formación. Impartida por profesionales emprendedores del mundo empresarial, tiene el objetivo de poder crear el mínimo producto viable (MVP). Se realizará en paralelo a las clases y en combinación al programa de incubación en Bcombinator, utilizando diferentes metodologías y herramientas.</p>
                    <p>Periodo de incubación en Bcombinator. Los estudiantes conviven con otros expertos, emprendedores, y mentores del sector. Estos les ayudarán durante todo el proceso de iteración y pivotage hasta que encuentren el encaje perfecto de su producto en el mercado (market fit).</p> -->
                </div>
            </div>
        </div>

        <div class="row footer-content">
            <div class="col-footer">

                <div class="tags">
                    <ul>
                        <li>Sleep</li>
                        <li>Psychology</li>
                        <li>Health</li>
                        <li>Self Improvement</li>
                        <li>Life</li>
                    </ul>
                </div>

                <div class="share">
                    <div class="claps">
                        <?php if( function_exists('wp_applaud') ) wp_applaud(); ?>
                    </div>
                    <div class="social">
                        <div class="item">
                            <a href="#">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/social-printer.png" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/social-twitter.png" />
                            </a>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="comments">
                    <div class="top">
                        <p>Comentarios <span>(<?php echo do_shortcode('[total_comentarios]'); ?>)</span></p>
                    </div>

                    <?php 
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template( '', true );
                    endif;
                    ?> 


                    
                </div>

            </div>
        </div>


    </div>

    <?php endwhile; // End of the loop. ?>


    <div class="section-heading more-post-title">
        <div class="container">
            <div class="row">
                <h1>Más Noticias</h1>
                <hr>
            </div>
        </div>
    </div>


    <div class="section-posts more-posts-grid">
        <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="post">
                            <div class="date"><span>31 de Octubre de 2019</span></div>
                            <div class="title"><a href="#"><h2>Cras scelerisque gravida vestibulum. Ut vitae suscipit lectus.</h2></a></div>
                            <div class="category"><span></span>Industria</div>
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/post-normal.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="post">
                            <div class="date"><span>31 de Octubre de 2019</span></div>
                            <div class="title"><a href="#"><h2>Cras scelerisque gravida vestibulum. Ut vitae suscipit lectus.</h2></a></div>
                            <div class="category"><span></span>Vida Digital</div>
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/post-normal.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="post">
                            <div class="date"><span>31 de Octubre de 2019</span></div>
                            <div class="title"><a href="#"><h2>Cras scelerisque gravida vestibulum. Ut vitae suscipit lectus.</h2></a></div>
                            <div class="category"><span></span>Industria</div>
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/post-normal.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="post">
                            <div class="date"><span>31 de Octubre de 2019</span></div>
                            <div class="title"><a href="#"><h2>Cras scelerisque gravida vestibulum. Ut vitae suscipit lectus.</h2></a></div>
                            <div class="category"><span></span>Industria</div>
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/post-normal.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>




        <?php
        /*
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
        */

        ?>



<?php get_footer(); ?>
