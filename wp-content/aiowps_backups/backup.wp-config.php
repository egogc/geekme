<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home1/webear84/geekme.co/aios-bootstrap.php')) {
	include_once('/home1/webear84/geekme.co/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
define( 'DB_NAME', 'webear84_geekme' );

/** Database username */
define( 'DB_USER', 'webear84_geekme' );

/** Database password */
define( 'DB_PASSWORD', 'dC+ov5*!g?*l' );

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
define( 'AUTH_KEY',         'Zu#n3-<:q~zMl~*?.?fxb^#uoV=PevFQ6W9-X/2SiwHU18H#S>0BA}#*GLL31p8*' );
define( 'SECURE_AUTH_KEY',  '~@OL%Zn,/X$j[a gPJNjzG$kUOth[B=tzyywjSowG}W{$`iU6q;Ox=bM-!aLqS%{' );
define( 'LOGGED_IN_KEY',    'OyHDC_hq}fiOrvxhP_h4&>,|VXe&bK75uU9-4)tm^v4Oje !qufhkp)Qa@B#,jxG' );
define( 'NONCE_KEY',        'eqs/4IgjNeTp]X`vJM~U:/Pz7?HHm3HQe6tnu]{ni2cgLb(GQNm-Sh/=Xu;0|Ou~' );
define( 'AUTH_SALT',        'Y _J9~)w#AVP*^/=Zx )gW`ZCNx2a*Gic% [K+<b<XMg;%f#DlRC/3yV&L.7pQ{S' );
define( 'SECURE_AUTH_SALT', 'xaa5F,oXyYNSPUEhY=n1k;}y)xD:MeJ&OD0=/T@JZsCQzW31;;V[f?V @[X+L]cX' );
define( 'LOGGED_IN_SALT',   'e^Fd&CM~oB<&ND3eUEcfC*-TYh$Pw2&Hk=egkNo,$?d_Cfwm]|3I;E3^|dm>g!M;' );
define( 'NONCE_SALT',       'r<zpEiF_2|5Egx1:e[V0^1^_t7NPOG-m<&V3hbJmcT_RIPJqplxG#&g Fg;uqDy}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'em_';

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