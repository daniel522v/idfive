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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'eZS&`Z?VX(OLWP+d`h|t$!#[aE?V#K?4,.{Rb:b8d^W)R:vEO:WrYL[f$=Q&-n=}');
define('SECURE_AUTH_KEY', 'UMok1ytD:AM2MERY7V bC!aD@R4?$gN4r_=Q#V+[]_xe17i1`#(`eELg`.sm+;2x');
define('LOGGED_IN_KEY', 'M>,spexgLK1;f>|2vr2O#wV8b&SE,txVh+H_6i2(}mt:-]&J3odFuvd1%7T]oHU7');
define('NONCE_KEY', 'p,QK]=b$G,POYIf?S|~io5#KTjLi]yC_L*PUE{_`cETXtrFlL5k!!U3.N;Q3g2?@');
define('AUTH_SALT', ')+`Vkz;M~_U:W4Gy){?[2DH&{HPP)_~7,4eeqa5SSOL<N>L[M K<2#hSlq,(3BFs');
define('SECURE_AUTH_SALT', 'C}8t5:TuLt;*9#3{.q}.fhb3?$+8DP?}Ywnh_8 -/T8u>@/o6(RoLN`R?.>5m^aL');
define('LOGGED_IN_SALT', '}9|!IJ]qr{~GW8 !1{Vz-kR=2{djoP5E3bD[53`?4WRPsgMRh(u.qET^7U{l=/-A');
define('NONCE_SALT', '%XmS%2b}pWe&_x/2}49Sk)X-:{AkZ0f:#Wk`-IgwuNl3h3IeroiBdTUP8C!pTyO/');

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

