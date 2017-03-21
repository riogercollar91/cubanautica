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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wp\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'cubanautica');


/** Tu nombre de usuario de MySQL */
// define('DB_USER', 'cubanautica_usr');
 define('DB_USER', 'root');

/** Tu contraseña de MySQL */
// define('DB_PASSWORD', 'JqhXenzRZ5FAuATh');
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
define('AUTH_KEY', 'D6t#v4X*YuUglR]z+LMFoHr$d^:Gexaex%L<i>r|i}/zfbM!9W|1IJK)y!}a_=!R');

define('SECURE_AUTH_KEY', ').]=@7.[_p-CU|lj<V?&iX6b{:&5>FI5:MzIn|oFaO6mINic!+G@=Gu~jtSy2ipW');

define('LOGGED_IN_KEY', 'K%mg^[8=lnMM,og$v`m%7)^oJ1M=v)g,MJEu1,9p( xzDn@i;{}ZG|$efex)na4u');

define('NONCE_KEY', 'D/53)pzUC&oU2[E_=kZpD,q@D%yOy[?iz(n)e_}PR^*2Y*}BvLifdC 35;dUFma^');

define('AUTH_SALT', 'Xo_.`6W/)NFdjF^OVmU6Q 5te4A4Q-_Zepx0xH3LsIMGW@KD10Y3r.4WHN74S3Z[');

define('SECURE_AUTH_SALT', 'W4}mQNq>%2&a!3&y{y74`/y@DCS2F?Qe49fKz#^rB*HC^akzPl*F@sk)^+9[QPlN');

define('LOGGED_IN_SALT', 'W}vktx3>(G14#^l#NhaV4d^*tAgi`P/Fr8g8+a):!=FarmM9;,TV~.m9fc{(4RUb');

define('NONCE_SALT', '0@[ 7uLcb5*&HEC`8]K`9q}Pg+q/#$8EvPlKE8qb/TH&4XN(bA:z{no]j)t3ot)i');


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

