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
define('DB_NAME', 'dellekamp');

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
define('AUTH_KEY',         'w,b-[aS1RBYS$`:,xK/`xjag:19mO6,ws}y(Ma@j39`!LH1L([q(<w?0l>Ds(u5D');
define('SECURE_AUTH_KEY',  '-jyLICTelo3l%O0j0B,m=}On[&5x?Bf4!DSum9+St:>D.hEw}%~>HQGMZc6~>%oz');
define('LOGGED_IN_KEY',    '(:O39I?!SqcWb g4kC_$kNSWi8l21fKQ-YQAsD/#KLkT*cjI(@6=JWQ.E}$|3Y+V');
define('NONCE_KEY',        ',`$G` qQ;q]Ki+< eSO$GmeKO}4PdWVx/H-`NCt=.0|`w~gJOhM*)NRW`(4ssRmo');
define('AUTH_SALT',        '$lNW0|J2,]3L(jXpr_Cn#_ut n;MP#hEIDK%5J.C@c8Z:K!j&at_#o|Z>@?%LlcU');
define('SECURE_AUTH_SALT', 'Hoi3/eH9jXV$+MA]x~r.:<e7cSJLj?P}N/Md#,U#tYmHW5[nL06(xn.olg;I/MFa');
define('LOGGED_IN_SALT',   'cC~SQ]A%RvhJg|b)E UNO1]Nk%tq@x_+j7msITUiZW^foMO!:3nqq$2b+&HQmp`b');
define('NONCE_SALT',       'hA=?=9:d(Wz_V-J>8;2^V_GjWLd}WJDc:,*K3m0[H#>e,(36Pe$LS81`iw)zb_j4');

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
