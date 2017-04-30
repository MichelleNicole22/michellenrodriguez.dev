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
define('DB_NAME', 'michelleDBzgu12');

/** MySQL database username */
define('DB_USER', 'michelleDBzgu12');

/** MySQL database password */
define('DB_PASSWORD', 'gpSSY2053');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Rrt]Kal_CREPq*6x.9aMcn>ETf*o|g!}Uk^t~:KlCdo[fq{ITi.;!B@3Ffv^B:8V0');
define('SECURE_AUTH_KEY',  'X.TJYn${jy{7[KNoz4v|0_DSht_C~:$6APet;pYz>3I,ETjRs!0FU|Nc;Pap~9KlX');
define('LOGGED_IN_KEY',    's@0Qca5KZl|Rhbm+Xm#6HWIju,fy<6L4Vk!0r!}BSt~:OZo[x<HT;Pep#y3Efu*AP');
define('NONCE_KEY',        'I$3Tiu.!0FU0cn$-|5Kd4KZzmx#DSh_a-jy<ITu{6FUvMUu^A:o-4JYk,0_DS]KWl');
define('AUTH_SALT',        'mLiu.!}NQjBUjus!:KZo>kzt_;DStG3I.2IXmx#,0r}7Mbr{~:C@:8No@pt;l#11l');
define('SECURE_AUTH_SALT', 'Yj$3u,!Kgv}NYLa-#G~9KZTu.2HTi_aYj^IXn$kRds}BYnDa2Sit]KaMju6u{H');
define('LOGGED_IN_SALT',   'N!JUngw04N>8NcOdp~dp~8OIXm+et_2^BE^BETmyw|0s!BNcrdt:9-[GZobqt;e+5');
define('NONCE_SALT',       'X*.]Dx4Cz!>0YgrvJ:9Gpw~SZksu6DPW*#;5p-fnBIQbq{m+o@!7Nc7Y9Zo|4s:Li');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
