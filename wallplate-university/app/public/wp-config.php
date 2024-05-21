<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'j-m4o`:X49wSln?W9w|j{a8eXwgT9Wjg>7X(jZODPsvWeygaUP_#u@CvzD:/@B~p' );
define( 'SECURE_AUTH_KEY',   'b693!8}6XA%kHAm+X${=7,UR.2f.o.q0mI~os9c]1Fjs&%%usl;F%Y~3PD.cRvMN' );
define( 'LOGGED_IN_KEY',     'wA}F+I3@; .TzYj5<hh$CN4=65(^_uTZFh^YwTD&/z/T|,);-HnIa?6JBz*R :<W' );
define( 'NONCE_KEY',         'kZ4dz}]B?/nfO;}=@FGRm_$d/34_(1r*:Q{=haqCpfh(|xJ#wz]4-A)L<|&b!)w?' );
define( 'AUTH_SALT',         '3N<R/N7)La|-|1>o/gEtH!#%-c$t=k*G1^<3O6Z!v/G}PV~s><4G-_e}o|J:?= t' );
define( 'SECURE_AUTH_SALT',  'T[jRw(FZ#C,CZe(SG[Os}M/`Q]pR?M?4C]x@*zje4Sv<*Pke@:Bdu39Kye.gC9A$' );
define( 'LOGGED_IN_SALT',    'k*(R<1KWG6G6oNm>nl;E?Zh]*Mv*q_KpO%,K4PJx7vjFZH 0t!O;M9a5/-3Iwe9F' );
define( 'NONCE_SALT',        '.mX%f3$_xBt,&`U,N_HC2!U:*rz?x>?@p1VP0B=Gkhm7VZbYmegvFK.9fR*a#Wta' );
define( 'WP_CACHE_KEY_SALT', 'a^FZ%U<%,[^rt&-A&?{Tt!vFMq`Ui3D1 tHwHlD8}0xlhta~4t]v Y^4Y2;v+GWZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
