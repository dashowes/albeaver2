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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         'IggJe3#IwC;hgt cq%+zg?,*}e`r;a#qAsR}Ce6QVqjPmndY+c+mgZ?Dk)1`e $Z');
define('SECURE_AUTH_KEY',  'c48jPzGpGv+FcK2L!L)d&k~S:WJ=.u|W1||._P[Cba<8(W8|d-uKH=;SASnV}aUd');
define('LOGGED_IN_KEY',    'sU]resXU&A56)-MEW]yUZNALNZEJO5Fof&!QRw/],F16c[|[Ye,+Nf}?21Z1VG%3');
define('NONCE_KEY',        'lHL nS?UVbL,oY8u$Tm8+xV9}5Cr[l*:n@Q[{:AxvOy2W]z,33gg`3r[0Yw5%OLZ');
define('AUTH_SALT',        'R4Az0|vC#b>q1puCmBj.xd*k@$[nJbbRe2U.,ysQ49PS3zWz%<F``hCa<9oN@/T<');
define('SECURE_AUTH_SALT', '&UkPP?/^BdwNO);s1 g&GgZj(.*i0uo`ijih:!qAKmEv4Mdq ~Q&ESP|kk/M45f&');
define('LOGGED_IN_SALT',   '92,7LRlml3Ov7{#eQHm!/eYR[uYJ+sGmL Mb+Qy;n.@1pu1/2|o9S&p>-Z@YftjX');
define('NONCE_SALT',       'zAZc4#{Gnv*54O_?PKu>GrD#[:}[%).5Nmblax3u<jmqNNGX)$Y2KQ,0ScnssY0}');

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
