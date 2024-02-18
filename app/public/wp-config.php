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
define( 'AUTH_KEY',          '~**]*H-F/Q;Mb;%P;;r m?1<nFYj|phb15(eD747QYSInmpLK.<^Ia`RE+WrdRpC' );
define( 'SECURE_AUTH_KEY',   '}}ck)Vz+!cRmSY?AX2~ll,[6d6,L`l((<]_au(K3bIZ>{e]e&ja8=n[hC/ QzY^d' );
define( 'LOGGED_IN_KEY',     '~kE%SLPe4i(.Mewbe_|5-4P[g ZBu:}2Rm{#Fo[D1/m#C<#R?3foF) ]OUB3Au><' );
define( 'NONCE_KEY',         'h>V]iih&[=!y?iU(Q6dJ0[?9#e~qm)D?][#u,XOz!l~w<0N=r!xP-5oq4dxvddPl' );
define( 'AUTH_SALT',         'B%#y}m8B=`oU9NGgeUESdLxlC3;8R3D~A~Zox10 _o>0wJG@bo);ByLK6:b eiB:' );
define( 'SECURE_AUTH_SALT',  '@8)n]D=]gstaa)MgXMa(&&vyv9;d/x}T}.4GBJk6~(H+{H,oF.bLnQxkX)g?gFEH' );
define( 'LOGGED_IN_SALT',    ',3E-n;<EcitJRU.QS}l @bQS~^/+-0)6tS /#;^y+i7nO^fk+(E}mDC;5le?esV@' );
define( 'NONCE_SALT',        '{Ka<s*S8LPZ]WJ%^mX|[i{<9Sm:NmQ-cA[gD~KP@f_ihXKuc##=}c9,`PCcsvpj_' );
define( 'WP_CACHE_KEY_SALT', 'Q1Ad*NT--hEo2I(2F^:)|P{,ew`)}5lLsft0=pa<$u>&B}S4m8x)N:[JIcvW:H3)' );


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
