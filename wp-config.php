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
define('DB_NAME', 'hcqc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[-`jv)*{8Gw2o3$57QUa%6/woEcCrP2+OrhK Mt|nGh(-dn5ozZ3+?COsUK&:@I#');
define('SECURE_AUTH_KEY',  '(0BFSxIA_uGB0FqrJD!!H[qA/?_(Khn*(t8;:|p)}lShPZ2ZDGbGUTb-% {/,PV7');
define('LOGGED_IN_KEY',    'inQGJoqw4%edLl*,lTVr;bfjeZ<*:]T%,.KXdX08,7!7!1fZyNoIU-rP@*8{(n]X');
define('NONCE_KEY',        'x _U9O4k3?wn:M|~a^<dYGolIo^,X{F)+}! /Dtsh7lTO7qYv7#ACSM@$*;%~L6E');
define('AUTH_SALT',        '4YU!aQ_ud1v^Mt&B#Q<R77YCl@J)#R,!vPU7^1l>CP/K%|l/j~0t6%6GPDR}T+K&');
define('SECURE_AUTH_SALT', 'rgC@NzvwJEA]nv-+z>s4OzDC4GMxdg6>9f#|g`GxOU^e5?}O[^_$%UlsS^M*f`@4');
define('LOGGED_IN_SALT',   'j+&_m]h1`89=XH]hOci2HGhvTu~=5tPKb^2_k@)f>u/i9gYYS?5Uwuod/7+`|IJ)');
define('NONCE_SALT',       ':J.&3n DP4i5qvFJ~{}7Tz;bhMAt_&MK+Wlw#^=OKX`5M`aW^R ]Ih0e8FIWD!M.');

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
