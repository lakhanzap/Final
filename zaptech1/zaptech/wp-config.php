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
define('DB_NAME', 'zaptech');

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
define('AUTH_KEY',         '|+<_O8_E4Scb^C9(?_lEc->Mt}$QV%cwi8NW+j-+9kbl8f}pF|sCb>bv14rC_XP`');
define('SECURE_AUTH_KEY',  '*.},T 2*O9#N#?0n(Nt+i|-PxWXogktRUyMwwY|-e,QrD@e(`G1![&z21@+;G}W@');
define('LOGGED_IN_KEY',    'c2uFl`o<kvvnwq(OQe2I`GKG$d3F0K%=yCqE!YR!5Bf66Z3GAUe>5f^aDk1k@A}u');
define('NONCE_KEY',        '61a-p+{!nr!sOQ+;=,]6@JWVp5K9IcaJ+[!c8<7%P~YO0*nE%<qV-t8T/Pf9m|b!');
define('AUTH_SALT',        '`KqS=V|kBED|{<fT2bHd0,h-i,_PUPP=6HMhJcj>>U8?c?[8.#dd081TvuoFw&rd');
define('SECURE_AUTH_SALT', '-2 C?CnhHGzh<Op@$H|s6CnW<ow+0SZ`+VU2gUy+x`j4}qaOy<K:.]Z,GS<]_GWW');
define('LOGGED_IN_SALT',   'X%9m)==|0)+!cx$LKhrrN;vo`uPpXD|0zkc7!v|O]UU^]v{4f?Nd={;9Z~S[{n+A');
define('NONCE_SALT',       '1UdP+T}tFjxWDPA?[>E~l4)/x@a-jR{&rlZ0Mow5N0kIUAsyfmD+c:ngN-hB0RE$');

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
