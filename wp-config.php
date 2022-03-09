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
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Vm`2=Y|Ne :n_,#-gf `vFzO1Uh?=I_+f>qU04@[p`,xx8r b[N]d,k~cW:7a{n ' );
define( 'SECURE_AUTH_KEY',  '!v+FcMk?Gj&&,4BJjQ~.O)dY8!l2d;&pOz1e@j=lCKd3V.@TB>I<7E=D5/Eh+9-a' );
define( 'LOGGED_IN_KEY',    'dXEmfmV()xL/w8fs|.U/Xjqlm5=+:]~wu;}l>kZSs7?V~fwp:;? [a>FB~?aF&Jp' );
define( 'NONCE_KEY',        '`0t+y4,}v5.5%zM{0&ich?IV41 Q$9}Rg;]!<3k<l,$/~z^`%ZM%d73(=,?{1CBa' );
define( 'AUTH_SALT',        'ZmC aEC9s/*#v}yCbN]<1IVsvozESyFGr3,#LqS2a?$?22#S;Q]%u,a( *V@ivwX' );
define( 'SECURE_AUTH_SALT', 'SSLkW j<~]uno.09fC/|C^A(6<whR;EYy%;BVGzoseFsF;s8sG,YL$&AkCdyGbJI' );
define( 'LOGGED_IN_SALT',   'xoY$UA~RP|mAZZA_~.&Xp@;#kTl8)TAqBE,lUG_)eX2|fZvq|tFZy?c{1B6<;sW{' );
define( 'NONCE_SALT',       'jR /EFcl-/h,jgACk&*C^]80wv<VV1~4sdUfSm>ch)+xUL^Xa@?Pucfz@&x(u0k6' );

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
