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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '.5J%H=C7>/^HHO`$B&/E:_b}1%:28*>=7]r6mKT.fwG?4$w>(HdEOqt<Vn`YCct3');
define('SECURE_AUTH_KEY',  '6G+>%65Gfii`^[XL7Ki73!bX.wzIGU_wTY}gDkf7s1ujug}rH%.v6-m;OvKQ+o3?');
define('LOGGED_IN_KEY',    ' :O[Ag|rTeMaQ5IRjn)Ub|e{]`2wWp|;HAwprUH!9,,.&2I60MQ@qsFV|/67j*RK');
define('NONCE_KEY',        '=@5n+Q|!-r#``bd`~w^o9%:g}ZZP@Ucq{rj7=epaT;Hdj3LAgR`f3zOw-/|iAKk=');
define('AUTH_SALT',        'WTi0}0_&M+JSa.n|[|~^K<;LY|fsFvpo08)4inncAnjPWa)3-2Mj5a%:=v}rB.`5');
define('SECURE_AUTH_SALT', '-OSM7` $_!.UW8F6tq@[zJ^>Q>ZlT#dO#k(-}BFj+W-Y-Q-N*|AKmxLC,D+!-B-M');
define('LOGGED_IN_SALT',   'Sb$i{ rm#//lk(|F7j~KIS8/my!T[5#{O9l|w;zo:ax(_-2N[E~ibpvwL=ZyB3s6');
define('NONCE_SALT',       '+@0*eqUX6eDBBm{}8_h]7|2$Ed%{+$4|d}V?DxCKd-&c$@|ZdF-jz_O_|Xc[@OpX');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
