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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Pelu3713..jg');

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

define('AUTH_KEY',         '?HC-~E_Is;|%ov?i=30eT[QA-r oJ]oIf0Xl0]AA,r3dW@#Y0l*rU&@JZ=1b|c2}');
define('SECURE_AUTH_KEY',  'whC8[k8>,Wr+h- h13uA;~?8gGT_>O:?w5Q^bVP:4MD.hX}F|n@D*JbTjokXW^==');
define('LOGGED_IN_KEY',    'f!^;hDL>1Ed4bMhoL^&PiQd![)1#.5:fbF^hMxA3kU:E]J8`f-duq2z([@-y=_xy');
define('NONCE_KEY',        '#Tr|PmWnXnn5L5&R+ds]l+Ce($Q2Ws@5P`|h:e1UA~uF45{tz,}Y9=Ge7*V~5dF4');
define('AUTH_SALT',        '+fdVQX^w(p-^%|Tg%QwH}|se}vM{^J}Lz),]{+oEOQ%geEO$+Vn1/Bd>oA PxoQc');
define('SECURE_AUTH_SALT', '`/.Rr+FvFy 5Ms9iN hV1pM]}~qU%-0ObHbQq+v_ 8a1|}TGONbBL6ex+rMZrPdX');
define('LOGGED_IN_SALT',   '6z8yZcxdFVB^`jKC(6+_,oSFZ>+SnDLSrBUVf$/@B]hH5,BR}-.^eLoY4/ixI7{}');
define('NONCE_SALT',       'WM@{A%vA(VF/kaE^y6PE|keC3nmm(I86*CnLdp?i?Gl?zxKGb<_3E,gZ/+E ?&Z<');

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


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
