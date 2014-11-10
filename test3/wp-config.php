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
define('DB_NAME', 'test3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=IahlMFLF-;&U`*`q^)bBzl3$.<I}6yUS]kwNJhfhPA:v|MiLx8?W]H0% vAVVZ)');
define('SECURE_AUTH_KEY',  'B>nXbHG8n9l|#0H+P^2_N&4S%;j6B!^}?=BiHL)!Jt~$miiqc`~ulV!AG-*.EKu`');
define('LOGGED_IN_KEY',    'H/-tJ#jldjJYlQ=EU$,EK$ep1oGRq#.m3<{Zc5F7w5xrYn&;_lpRG5cZKaZ:_vib');
define('NONCE_KEY',        '3bjVWhiQdm|IG;eszj [2!) LRu:${#2K2OdO MUS#nu17![wtyJGr?%ExaTT?]]');
define('AUTH_SALT',        'B8[?XMp@u4difU^Z@3m52vjBN?u(UXi9Ot5_p$jgw25WN}m`]rlBo$e9/*l`bp%u');
define('SECURE_AUTH_SALT', '?qS8n(_S*7CE+?g:@}|5%8a/sx@6>|+a#q=!.:D.{s.OW5N~k%I]BSkx,<1hsMf4');
define('LOGGED_IN_SALT',   '|n0qqoV!S*f)Noj(~y7c`bM4@d=f/p-#n0ji`>wF#36FSombmQ%A`<K8* {J?|*?');
define('NONCE_SALT',       '1TNO#h+s#l&>@<!XM-Yf)ONRq,cN-DVp+;+a{r~G@PnX8ZgO~%M-kBaH`Gu }<!s');

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
