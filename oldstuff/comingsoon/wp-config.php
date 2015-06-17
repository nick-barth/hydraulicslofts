<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hydrauli_comingsoon');

/** MySQL database username */
define('DB_USER', 'hydrauli_cs');

/** MySQL database password */
define('DB_PASSWORD', 'comingsoon');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F&(%!ES-nQ!(9C`WB)u%6(V+g 9/#U<&w*7&MzLP&R;UOj0S?b%|3sR@>IW>= c*');
define('SECURE_AUTH_KEY',  'PG_NW*6mT1I%pyx9eq6dJ2Wi_`5Pq%]ii~f|@T&SWWg#y$-X9f-sJ6-Gq5 c[3k0');
define('LOGGED_IN_KEY',    'M5!&.5gH(IMXRd:rZ>$%..$_4F?$(MuE!^8gUiELEUnv}K!n#Za:l:tiQ(M$L[J,');
define('NONCE_KEY',        ']CbTI^+yW-Wse8yWu#Qlqx>a~_y$oM16@S]W{#kz&n:SG5noBPg}Y[7CJXbm0NP2');
define('AUTH_SALT',        'Pn2V5,i]RogDI||ScYq6}#E|lCcuqZhOm 1j`>:MV{0EWaG%TFjEf1x(ENgriRk}');
define('SECURE_AUTH_SALT', 'fz`C4FGPER(D&?=+_<n0_!LvM!}-L+T3U J{|X/^H[A-VIDb)4ysi8xn8Z`+*p4^');
define('LOGGED_IN_SALT',   'Orcm[=7- h>x:-,i_:-A@M=fIgDD#||rk078nwn?G]l5-x8(eH_lGXE+;NFV#v+~');
define('NONCE_SALT',       'bW].TTjP%2<WI`BVzpDC-CPd|-aEkz+bBiD-0nk%#`P, x{Lpcbgu-`M=YUJ lw&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
