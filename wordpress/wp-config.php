<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tri');

/** MySQL database username */
define('DB_USER', 'beyllos');

/** MySQL database password */
define('DB_PASSWORD', '279aplgsd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[|F;r$Ge{)O{`=`aoesfwXevVwHuV?l.IGk/{4]6Mb`pNX+{9F06r{TT.}#i1mA`');
define('SECURE_AUTH_KEY',  '8V9R4pruiJA[]>R_?$-^j)CUl3x6pRF(^6b3sgf*]XrF;UdqI7z|e2d0x2+s_AAA');
define('LOGGED_IN_KEY',    'E.w&=}xObV05eHvAHYWkyx#n$2M>gv0/nekyBY8_A0nPA1H_QRx}yx}z5XN1.V;:');
define('NONCE_KEY',        'WUtw@5r?odC#Xu-C!}Wd%quWy|<u@)P.&d[a5Uk1`hddYs7+T61T$xWsz7(E^`oz');
define('AUTH_SALT',        '<qA*1/eZ`ab5mO1#MRh>(g#w/Vdz7[?^&O#bT6C$i6Hr2sN8R#@?Cc;gI2hl+E^A');
define('SECURE_AUTH_SALT', 'MGoR]L8[Co3)#<lND)DWU5zX`R{%SQx@)Gw?c9~%25A+o I<@<e23%*2S5qcgMc$');
define('LOGGED_IN_SALT',   'at:iE>GoRH:]>c5>X,/ovH0V)wrtk{ZMPtm2G/cJx^F}bjw1-^E$MKn @$0i_f|f');
define('NONCE_SALT',       '&G`r`^+!|4e@jjZA-Z)I&G85T20il~,vvR57.hzCrC|;*#8PX+y`,~xBi=B--wZ#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tri_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
