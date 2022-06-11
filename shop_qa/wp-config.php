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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anhduong123' );

/** Database username */
define( 'DB_USER', 'anhduong123' );

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
define( 'AUTH_KEY',         'L7wrL#4~[(VN-5pGx!oZSJUnGDcFW[y&SP y9:reKw$:S/uB5r!4-$fD_gZa[cyp' );
define( 'SECURE_AUTH_KEY',  'D5Z!ych5L<`,puX%l:XCY;vd)c|7o:;k?3mq;9^QFog3eR%Vf<]X~j;1}VS:Ezum' );
define( 'LOGGED_IN_KEY',    'h8_D-sD>LwerBbJ <2I-AXO&1M2JK./$Euc]5t%,CPWriiCPIh;TqEg;yH>9%eP@' );
define( 'NONCE_KEY',        '-1Q2Y9!@e92fDk|s;LKE8Z>uU@xF&u4a$cGBhS:9^[Zj2b o_G,6wuRpF(G~8#Ia' );
define( 'AUTH_SALT',        'KQ1aUqJ-.}PMgg?Wh ^E7gwK;!1CPW?4N x?dSj|`Z#$~E.S-@psvpK<m^pR,#?^' );
define( 'SECURE_AUTH_SALT', 'mG9txnJ7!ef*7*kOaM0>T05=b#Q$:97F-bFh=9l<yptThng6QNqUDC-le=.D@(}e' );
define( 'LOGGED_IN_SALT',   '0G! >e sd:H=Y9aE8~v<-](.@uyA=E]>3Dc,L{~SCiJ1hD,u@2l*d0%xQU;vK@-5' );
define( 'NONCE_SALT',       'OWUKG8bs*fc&H*)[i}:DE{@z~H%|zTY2mFx/?LyU@%v!XD/WhP-JHdtS$k b0E`c' );

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
