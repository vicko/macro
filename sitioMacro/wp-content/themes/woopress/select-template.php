
<?php
// Obtiene información de cual es el curso que se está cargando
global $post;

// Obtiene el valor de la plantilla que se haya seleccionado para este curso
$plantilla = get_post_meta($post->ID, 'plantilla', true);

// Si la opción es notariado
if( $plantilla == 'notariado' ) {

	require_once('./notariado.php');

// Si la opción es sucursales
} elseif( $plantilla == 'sucursales' ) {


	wp_enqueue_style('email-style', get_stylesheet_directory_uri() . '/template-cursoemail/style.css');
	require_once('./sucursales.php');


}
?>
