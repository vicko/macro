<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'macromer_macrodb2016');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'macromer_admindb');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admindb2016.-');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '),cx!D#6):,u]9zJ#yN`J!MQ<kZ;Nd_(AyZwo303^V/g,lVn9&)A6A(PH]M&zUdj');
define('SECURE_AUTH_KEY', ']iqxX!H#H]^S,+PRw5d&|@&;Hi.EVo?@v;uvc~Co,@6r6#+4OsY[wn4rP,w2h5;4');
define('LOGGED_IN_KEY', '&Tx71(_gu5gY^J?_._5g^)c S*1%>iKM- S]F?uRj0hqo90Y&<UERV3!w)qLFc.i');
define('NONCE_KEY', 'wbu=RQ)xL^Y_=A$x@yk6dU</zaJbeaat+@7}L?|Aw7X/P}a2e.W<{E~^N[b>x*04');
define('AUTH_SALT', 'P?1vzi<exEn27R@=bD5[hc2U5Q3E`Z)$jnt>f?+hFeUBC&zG`0sG+ud%JdZ,.sMt');
define('SECURE_AUTH_SALT', '2U%0g2}^QXb1wLwm?68jC4);BG2X>UJQ!)QdIUH?5zh*k6Y&!jqOZ_[2lS#_P__&');
define('LOGGED_IN_SALT', 'uJ?sil.aLu~.nnHb_/U|Rz`ggu,z7$uB=i@s&;=AZeo7WP:VjyTu$v4n.%>[Xc+O');
define('NONCE_SALT', 'C$sOeX<eHwyj8qD#B@vcgNO!#FIKEo.q0LmzW_8KSB*^| me&suzB5lkFww=P2tI');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
