<?php

/**

 * Intelectium functions and definitions

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}





/*

* Enqueue Scripts & Styles

*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {



	// Enqueue CSS

    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '4.3.1' );

	wp_enqueue_style('fonts-google', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap', array(), null );
	
	wp_enqueue_style('flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css', array(), null );

	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/styles.css', array(), null );

	wp_enqueue_style('provisorio-css', get_stylesheet_directory_uri() . '/css/main.css', array(), null );

	wp_enqueue_style('fonts-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array(), '4.7.0' );




	// Enqueue JS

	wp_enqueue_script( 'jquery-slim-js', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), NULL, true );

    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), NULL, true );

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), NULL, true );

	wp_enqueue_script( 'jquery-touch-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js', array(), NULL, true );

	wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), NULL, true );

	wp_enqueue_script( 'resize-js', get_stylesheet_directory_uri() . '/js/ResizeSensor.js', array(), NULL, true );

	wp_enqueue_script( 'sticky-js', get_stylesheet_directory_uri() . '/js/sticky-sidebar.js', array(), NULL, true );

	wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js', array(), NULL , true );



}





/*

* Disable Gutenberg Editor

*/

add_filter('use_block_editor_for_post', '__return_false');





/*

* Enable support for Post Thumbnails on posts and pages.

*/

add_theme_support( 'post-thumbnails' );



add_image_size( 'post', 333, 402, true );  // Post - Loop (x4)

add_image_size( 'post-novedades', 309, 482, true );  // Post - Novedades (x4)

add_image_size( 'post-single-desktop', 1920, 705, true );  // Single Post - Desktop

add_image_size( 'post-single-mobile', 427, 427, true );  // Single Post - Mobile



add_image_size( 'fundraising-desktop', 952, 691, true );  // Fundraising Hero - Desktop

add_image_size( 'fundraising-mobile', 364, 464, true );  // Fundraising Hero - Mobile



add_image_size( 'casos-exito-small', 371, 371, true );  // Casos Exito - Small

add_image_size( 'casos-exito-large', 655, 371, true );  // Casos Exito - Large


add_image_size( 'popular-thumbnail', 78, 78, true );  // Popuplar Post (sidebar)





/*

* Register Menues

*/

function register_my_menus() {

	register_nav_menus(

		array(

			'header-menu' => __( 'Header Menu' )

		)

	);

}

add_action( 'init', 'register_my_menus' );







// Function to handle the thumbnail request

function get_the_post_thumbnail_src($img)

{

  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';

}

function wpvkp_social_buttons($content) {

    global $post;

    if(is_singular()){



        // Get current page URL

        $sb_url = urlencode(get_permalink());



        // Get current page title

        $sb_title = str_replace( ' ', '%20', get_the_title());



        // Get Post Thumbnail for pinterest

        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());



        // Construct sharing URL without using any script

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';

		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;

		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

		/*

		$bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;

        $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;





       if(!empty($sb_thumb)) {

            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;

        }

        else {

            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;

        }



        // Based on popular demand added Pinterest too

        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;

		$gplusURL ='https://plus.google.com/share?url='.$sb_title.'';

		*/



		// Add sharing button at the end of page/page content





		$content .= '<div class="content-container social-share-bar"><hr class="redes-sociales-linea">';

        $content .= '<div class="redes-sociales-container">';

        $content .= '<div class="red-social-mitad megusta-compartir">';

        $content .= '<div class="me-gusta novedad-misma-linea" onclick=""><img src="https://intelectium.com/wp-content/themes/intelectium/img/icon-facebook.png" /><div class="fb-like" data-href="https://www.facebook.com/Intelectium/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div></div>';

        $content .= '</div>';

        $content .= '<div class="red-social red-social-mitad">';

        $content .= '<p class="compartir novedad-tamaño-texto">COMPARTIR</p>';



		$content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><strong class="novedad-tamaño-texto">Twitter</strong></a>';

		$content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><strong class="novedad-tamaño-texto">LinkedIn</strong></a>';

        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><strong class="novedad-tamaño-texto">Facebook</strong></a>';

        // $content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span>WhatsApp</span></a>';

        // $content .= '<a class="col-2 sbtn s-googleplus" href="'.$googleURL.'" target="_blank" rel="nofollow"><span>Google+</span></a>';

        // $content .= '<a class="col-2 sbtn s-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank" rel="nofollow"><span>Pin It</span></a>';

        //$content .= '<a class="col-2 sbtn s-buffer" href="'.$bufferURL.'" target="_blank" rel="nofollow"><span>Buffer</span></a>';



		$content .= '</div>';

        $content .= '</div>';

        $content .= '<hr class="redes-sociales-linea">';

    	$content .= '</div>';



        return $content;

    }else{

        // if not a post/page then don't include sharing button

        return $content;

    }

};

// Enable the_content if you want to automatically show social buttons below your post.



 add_filter( 'the_content', 'wpvkp_social_buttons');



// This will create a wordpress shortcode [social].







// Register Custom Post Type

function casos_exito_CPT() {



	$labels = array(

		'name'                  => _x( 'Clientes', 'Post Type General Name', 'intelectium' ),

		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'intelectium' ),

		'menu_name'             => __( 'Casos de Exito', 'intelectium' ),

		'name_admin_bar'        => __( 'Cliente', 'intelectium' ),

		'archives'              => __( 'Archivo de Clientes', 'intelectium' ),

		'attributes'            => __( 'Atributos de Cliente', 'intelectium' ),

		'parent_item_colon'     => __( 'Cliente padre:', 'intelectium' ),

		'all_items'             => __( 'Todos los Clientes', 'intelectium' ),

		'add_new_item'          => __( 'Agregar Nuevo Cliente', 'intelectium' ),

		'add_new'               => __( 'Agregar Nuevo', 'intelectium' ),

		'new_item'              => __( 'Nuevo Cliente', 'intelectium' ),

		'edit_item'             => __( 'Editar Cliente', 'intelectium' ),

		'update_item'           => __( 'Actualizar Cliente', 'intelectium' ),

		'view_item'             => __( 'Ver Cliente', 'intelectium' ),

		'view_items'            => __( 'Ver Clientes', 'intelectium' ),

		'search_items'          => __( 'Buscar Cliente', 'intelectium' ),

		'not_found'             => __( 'No encontrado', 'intelectium' ),

		'not_found_in_trash'    => __( 'No encontrado en papelera', 'intelectium' ),

		'featured_image'        => __( 'Imagen Destacada', 'intelectium' ),

		'set_featured_image'    => __( 'Agregar Imagen Destacada', 'intelectium' ),

		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'intelectium' ),

		'use_featured_image'    => __( 'Usar como Imagen destacada', 'intelectium' ),

		'insert_into_item'      => __( 'Insertar en Cliente', 'intelectium' ),

		'uploaded_to_this_item' => __( 'Actualizar en este cliente', 'intelectium' ),

		'items_list'            => __( 'Lista de Clientes', 'intelectium' ),

		'items_list_navigation' => __( 'Lista Navegacion Clientes', 'intelectium' ),

		'filter_items_list'     => __( 'Filtro clientes', 'intelectium' ),

	);

	$args = array(

		'label'                 => __( 'Cliente', 'intelectium' ),

		'description'           => __( 'Post type para casos de éxito', 'intelectium' ),

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor', 'thumbnail' ),

		'hierarchical'          => false,

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'menu_icon'             => 'dashicons-schedule',

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'can_export'            => true,

		'has_archive'           => true,

		'exclude_from_search'   => true,

		'publicly_queryable'    => true,

		'capability_type'       => 'post',

	);

	register_post_type( 'casos_exito', $args );



}

add_action( 'init', 'casos_exito_CPT', 0 );




// OPTIONS THEME
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Configuracion General',
		'menu_title'	=> 'General',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Call To Action',
		'menu_title'	=> 'Call To Action',
		'parent_slug'	=> 'theme-general-settings',
	));

}



/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


// Muestra total de comentarios
function bld_total_comentarios() {
	$numero_comentarios = wp_count_comments();
	return $numero_comentarios->approved;
}
add_shortcode('total_comentarios','bld_total_comentarios');



// change comment form fields order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
	$comment_field = $fields['comment'];
	$author_field = $fields['author'];
	$email_field = $fields['email'];
	$url_field = $fields['url'];
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	// the order of fields is the order below, change it as needed:
	$fields['author'] = $author_field;
	$fields['email'] = $email_field;
	$fields['comment'] = $comment_field;
	
	// done ordering, now return the fields:
	return $fields;
}
