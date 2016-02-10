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
define('DB_NAME', 'tr-fdt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '0-5JJgu1alV9D*9ss{` Z7oI-Pk5xx)~9!|z$F$U%33CuJ2~KXkLF5p!vA-+Cb`H');
define('SECURE_AUTH_KEY',  '-fuAk;|-u-n7}Zh3d(O=Pub!Q+*}Jd~O!1n#nDC<eFk+.:RC6g,22)mul8%2<j3c');
define('LOGGED_IN_KEY',    'X/GNKOgpJ`/mAXH+%B3b-tTrkTiZ<?)JUvc44$t3CumeSr)}Qf|_~O6sW+-$F7@O');
define('NONCE_KEY',        '^*sb|d0`KCk2+tW[hj.ryM%zL,e0Q;j@4-egh OU82;`7hOqv>(*5D|P{eg<oBZB');
define('AUTH_SALT',        '(!0t=3D-|KqY8ue:ZT$1Dq8t/r$<LI}UgL]-Q,OMX5jeP`_D6YfHtOXEC=NvT]Og');
define('SECURE_AUTH_SALT', 'GFIQ]RQ!Im:&5{?ByWHad`)EV!+SA>oeQ?aQxjER)66i+(I`5`NZ+STh_3^v+<Sf');
define('LOGGED_IN_SALT',   ']B~Fi}<Ry1?}fwm2z3CnZ1Zh;?@ A,mZQgLZ4=K[@<lEW*5a|r1X.~A?uJF;?.`E');
define('NONCE_SALT',       'B(+-hE9DIWs{4f |AxgS`2io>jj}Fv@nF7aE+}.f`9gr|y+8K-rWGVmo;Z9BYNR|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'FDT_';

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
