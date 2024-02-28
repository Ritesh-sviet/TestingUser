
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


	define( 'DB_NAME', 'Netflix' );
	/** Database username */
	define( 'DB_USER', 'root' );

	/** Database password */
	define( 'DB_PASSWORD', 'Ritesh@1033860' );	

	/** Database hostname */
	define( 'DB_HOST', 'localhost' );

	// define( 'DB_NAME', 'SoftWrite' );
	// /** Database username */
	// define( 'DB_USER', 'SoftWrite' );

	// /** Database password */
	// define( 'DB_PASSWORD', 'SoftWrite' );	

	// /** Database hostname */
	// define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u:,a]pe$;LbJlTj4PcG@3{4:pGH9Rl?^U|/t}3 [tIg-6I$}#dOV>$e7RM,E+_&w' );
define( 'SECURE_AUTH_KEY',  '-*h,PGB.c?p4P u.m!^d96,d0BDC.+(PK}2@F{^zz_mH3wT1[L/?e_Q6LxFq~0)b' );
define( 'LOGGED_IN_KEY',    'hxkPMmdK()6$C-51Y6qYx;e3?&W}=$c+cAh{Y/T_ksEk$h/%g4j./YE{6YP>+zPo' );
define( 'NONCE_KEY',        'BQKDSQol%#6a0Kigg7Pw-xc~&hN5$u3de?_a7zlfLmeOm4ChAX|Ykro${0[QhQ7~' );
define( 'AUTH_SALT',        'A(/5O<~1H#.|{I4<uP7sQQYlH.^{H2rb#F!I7D`z$5Xuto*]b~wqQv!`1 vzY>Vx' );
define( 'SECURE_AUTH_SALT', '?QRR}QYy}49uf/5OfC+v1q{ccog 5[sZxE*QJotCT|[;!!Uw!;>J9Yoy*/~^T(fw' );
define( 'LOGGED_IN_SALT',   'Ee3LuK`F]<!0D6GxexTv^v5eZ~B7Rbx5X6@se1C^jOm+8:9lZA6$%Zeft1LE?PVQ' );
define( 'NONCE_SALT',       '<5 G2LIE@H:]w*d>0ze.@iCxR%i@7YsEY{_x(X2PJre~d3[%>_P>#t& kLhwP, B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
define( "FS_METHOD", "direct");
//echo "hello";
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
