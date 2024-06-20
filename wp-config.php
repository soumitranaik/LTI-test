<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lti' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ps?8%<Zt%U.c<D (-jwVFUb[CboJpNS~VLSBkb&[J(yT/N0VBOUlbEloe+0 yy;v' );
define( 'SECURE_AUTH_KEY',  'B,,DD^jN?h/m|~y9E,uGEb_[0?VP_c3kD -^5SJ^w&TMaasm-R>@B&-A?Sa4xwsv' );
define( 'LOGGED_IN_KEY',    'XHU{mdr./gIJ.q@:sDf^zLvuA-}p.06#d03AO:{^#!,i`*mQTC7<7KQlO1(Ba[e5' );
define( 'NONCE_KEY',        'XS?pO<~a(C8Seq/Hml8jPD?_XpW16fuK@TzXu)-v-9YvCsIukIXvM$r$>uID2.y ' );
define( 'AUTH_SALT',        'A%i&PlO/B_=F!w*&l= [L*./|3uRd+~iZ3.>WQI@32p%ubl8H-8W$pH`q~Mz91V)' );
define( 'SECURE_AUTH_SALT', '9cnSAc94kVR%2_F>n`aV%Kc6=pnY,t:0D>U0DqKs;$GsDy2tt,E&*!~=y%];%116' );
define( 'LOGGED_IN_SALT',   'Dkt/3qt2%ZaI)sx%O=[-;[b2w2lE@/%]LCcc>?owyq]~k#OH+{;r*AxCkA@35-@+' );
define( 'NONCE_SALT',       'F}i>?5/b[6%#/Ko[@KTXH&9S~I=}50n3da6^3b3&4Ve{q+Ih_H]Z<v{Ir5p2$B{-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
