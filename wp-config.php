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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '&JpG[X4,Rh>WBbs] ftye:_`!ir@|%cN?os#-ZC.DhyLY%p[s@-gj@hGKE/?Hz5O' );
define( 'SECURE_AUTH_KEY',  ',Vq] IyU6#}@MALl6skz9Q1G!d!L8%L:Ludk:%U.}OdI)h72JD?|4$d} 2Kvd3Jz' );
define( 'LOGGED_IN_KEY',    '9_I~_tR=)ny.a$xF6HnE l]BgEQ2yuqFn]67[qaF_{J=NEA=jZO?vMJN1@]R*Gsa' );
define( 'NONCE_KEY',        '_)$z-xrk0?CaIaFx!U:YZ/8xzUrusP@cIw~enOmA<]S[|]5>`Nnhm1C4~aON7DX%' );
define( 'AUTH_SALT',        'iZLB8{M0(_1Dx^`ZAPHv9riQy;z]>sz!C:ME(=<e61(5ayeEWjy|8lhy[&?H-o>+' );
define( 'SECURE_AUTH_SALT', '-R<WQm>c,v+i.{gX}MP|;yG=t~xVSV(s%xOZA`rs@e2t-cL7^ECYbQ]?S$Q7bUHS' );
define( 'LOGGED_IN_SALT',   'ZLdxJI[2;X7R$xg)5]W0KfAur@fGJI$CEiN&*%^dgPX0)X9h&QKEzUg_you#Dl;D' );
define( 'NONCE_SALT',       'qVsUK6?:x27v_>%X>40>F;M;4Ped${N[>eu6yzwU-=#r<Rm!0oh+2PxEGEf]gb(U' );

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
