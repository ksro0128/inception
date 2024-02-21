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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         '4|h}^BhzD+lcz^{,Xr0Y4&xx)tMvWG@]mj<}Vk-hTADkjmMl4W+tA `3S6jM|TIH');
define('SECURE_AUTH_KEY',  'eU@1,~D9d=[AZCwpDLWl+keR+UL<9B4%Zs&@%+#U=uJ|[*^7[FjE|wwG-1g1C{*h');
define('LOGGED_IN_KEY',    '3}8u/]YoXl}LSbdx}|nP3_7Xv*9-rw||+ |y/!@peL$.p^WEj^aN-M-v W5m{DUE');
define('NONCE_KEY',        '*-&>M(2Ef{<nu}A |X-w]<B+!h=Un~;Bc7v-.+Md8<L8[^3X@sYlgJu[*YB*;8_&');
define('AUTH_SALT',        '^!fIk_O]d7MTt%m3|B+EJI99!:iB7!(Ux`g4RFsuN1C$gy,8oFS?77LT%6O`#v7w');
define('SECURE_AUTH_SALT', 'j_e&%00XRBN1F-KhGDMxY7$G(P9<`id<&_V&iRIgBEjHW<JI+1*6rx^wj-:iT6Cb');
define('LOGGED_IN_SALT',   '#eg8W+;=(-+Z.a+GsP@|v/=v+7zGTOp{U {-fe7rXNqM}^=/2]Jak0EJ~^0l},y;');
define('NONCE_SALT',       '-;Jpw6C-{Bi{+6sKKy4n<V)I7i1blvmAo$?r6,%_[.yScy&>66Dj]Lv},klw~yG|');

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
