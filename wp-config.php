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
define( 'DB_NAME', 'basexx' );

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
define( 'AUTH_KEY',         '@-*NnRoVr)LiWfP6h9X44Fa`L;6RmhPi,fhPR4D|U0xM-`x#}x`y-jS;A;]0z107' );
define( 'SECURE_AUTH_KEY',  '9AfKypzvjbl|Ll6+SACuHDWnlg3Z{McR Kc_3}!A*4Y}J`+A=5WS8D%Qz25R_n(2' );
define( 'LOGGED_IN_KEY',    '`96I}i6rB[(/MD_UHL*zG9Gsfa4R(8c,D9u9ai9GL!DkFP`$_u@H]XZ5w*Wv=ZWK' );
define( 'NONCE_KEY',        'SYuKh|4wd!aFVB0L+/Z-Ul~z @S(c&2U%)GE|)QS]n;<;=qB g}lY&^|nD;QcLXo' );
define( 'AUTH_SALT',        '@fQQFJ){8wWu%riPfe#G2A1mRHLP@3~:a:{f5^jk/1MAs%UPqGc^crbLRhRt$XNh' );
define( 'SECURE_AUTH_SALT', 'f,/[(gM>_vpAhU~HIvQr1y}A4[sD((W&=vxi$O06R8xp/Atz54}{nc*b*;Z&4IM<' );
define( 'LOGGED_IN_SALT',   '|66mD*s_[Di?I>gu2bb+NzQiInx8b`=E5P-|U=f,z1 xfsjE&B#2x!G7M;EgF!a~' );
define( 'NONCE_SALT',       'cr+9RKKb$8=810l  RY#o:E{EPIPf% YvM,=uYPqZd$$hCc&~NT?vzZ2d-rG&bk-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3_';

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
