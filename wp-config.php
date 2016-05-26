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
define('DB_NAME', 'vantam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Y/#>ZzR3w<q6Kj%W+#I^le>$ivf,/TQ{e3hP??+O_WL~XP[9QQ%o.1fgEC0+ti{J');
define('SECURE_AUTH_KEY',  ' r<&}0KCRm`p}1s67wVdu)en+Bje%|w<a!v*qZ=xTQ7A_~`>-EpNi;ofqyFW#may');
define('LOGGED_IN_KEY',    'KlhT$!1Vjo?bVv+K@(gYEorm+n9|dp1dcGp8{^2aZ{&]ygDXUHRZ%N8>1?K1vbk+');
define('NONCE_KEY',        '3B~2is)}Nh>>}=Sr11$3e%{[nq}PC3,yhR/(v6+beNJT=nRUpPy])v,+}Xqr;5DG');
define('AUTH_SALT',        't JbY=#uh!I6bm6:|19wC?#BchRm1q-Do>N8Va2j4@hD.-`SQl~Em(GJRo,Z3Fd7');
define('SECURE_AUTH_SALT', ':1Huef|OaFS7)1MW =,(T-=z4,B`JIC/C3wphNnRBULw0f1W71omrw1&$?wTtK.P');
define('LOGGED_IN_SALT',   'n2P6`yS-1X~Ve2rZpL;NSs]hMKa`@W!=kf2gp>$fgM_Fcs&S%Mg5eQE&bKA2np#m');
define('NONCE_SALT',       'v#El-758(xx^|a.?:Z]Vp^31q/uIR* `:QS@)P3bQ/Zn(azgLfE<C$,nWtdL(hZP');

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
