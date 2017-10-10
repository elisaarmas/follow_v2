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
define('FS_METHOD', 'direct');
define('DB_NAME', 'follow_v2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'stgCA^SnCe@25MRffP|KbzeRz%9Nxd%jbb2Fes?L5eA;dOKsVv[igj_5||>hQ|<<');
define('SECURE_AUTH_KEY',  '1tc;GIS3C6`#+rw:Kga0P.v[,!VOwCZ&Xux)R.FD=1qpe1T=B6d *:KKyq~fc?=J');
define('LOGGED_IN_KEY',    'b`=jv4uw]U~L5Ph,$];lYnlc;PN>i;7l:|baHFsCzkE??cfuV9kY?#0L/W0mP,E}');
define('NONCE_KEY',        'gF0BuNwFMsQs]zJ9TOi[Qz?XrvrH[^2<^ol~Ee:mu:}/E7KhA#vHa9yX`}ztnSdQ');
define('AUTH_SALT',        'G%YaJ=B;qAVJfF}-yMm bCGPg{NEb,m==UrTEGQsa[.Z^Q>MZ5W+;;Z?*:g;I2B;');
define('SECURE_AUTH_SALT', '3pj92M}%|t]f<(jv.cqIMwbB~$]r<[$99t7>C>xn50+1^J!^q{oh6SmuEh;2MpJ?');
define('LOGGED_IN_SALT',   'rOgxCD}gQnvo5?lZZi]FirgdGeGD<]2^kTBy%RQ-]S-=|^6s]McAo8u.g8i%}SH{');
define('NONCE_SALT',       '!]n5O(kpJ-[+~dg)Dq}[%;)eEx*|fR{YyIw4nh%}O@.evRV?W1R8Ulw[tic)tf(+');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

