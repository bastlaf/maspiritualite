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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maspira507' );

/** MySQL database username */
define( 'DB_USER', 'maspira507' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gqi6Sdp5bR3HQUr' );

/** MySQL hostname */
define( 'DB_HOST', 'maspira507.mysql.db' );

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
define( 'AUTH_KEY',         'o2s4;`0q^;$M_3]xMEb=I&9L%!2Ce^w,Dz-B$4[O3eht%yznjm-7wHz8_TJo8h*U' );
define( 'SECURE_AUTH_KEY',  'I#W56lVX=:zkc)&({-8fm[czvcf0%>ZvEI=IyQ,$B- 5Ro3K(yHx|7;,k/_92Tr{' );
define( 'LOGGED_IN_KEY',    '$ln,~Up@kR6$i!RpriDJ&7nAv9U}JRr1yd($~.8;OY=S-i7DYTvaKnTsN[X8j<m5' );
define( 'NONCE_KEY',        ',[LI/:/aj|<rP_hadOu~*&9Q=J:PVlr`+*k<?DWrpB|Yk_fke/N6Bl.^C=<Vw_Hs' );
define( 'AUTH_SALT',        '*s^R~:4*(DUoL:++:_G])d8[}euV4V5BvY8|04O#rO]O=ckmJj1T41w6-d!hOXFi' );
define( 'SECURE_AUTH_SALT', '%Kk478K1Y(B8-]I5><iCz-0TkF1xS4w?b><H,xFIGdCzU63Wod2~Emo5w$Od#!v)' );
define( 'LOGGED_IN_SALT',   'RA[#o.PbSJ|-Q`m*VMk5nD}!|c:BJycfU7{/)Esu8V@o^zr-0q?Gcdo)I{ts=T:a' );
define( 'NONCE_SALT',       'Gq*6$j&BjRB4=(I<0{K#<+.]LYK(B]gCw UY*tSE32i4X`)W)4<y;3(ghEMrD?<0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
