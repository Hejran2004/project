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
define( 'DB_NAME', 'onlinestore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'C(yn=lqrkug}=KdN}R)~-aQ22#K%EazJ{Qxg6_f9f`HZ$NoO^r=EJ4#+~/1P@#Qq' );
define( 'SECURE_AUTH_KEY',  'lM(7C%O(7X8AE!f<BNKhqJB-LS! _A>gjWZu@z(a{&!r:F![g30@d!qsrNy%0z0_' );
define( 'LOGGED_IN_KEY',    '];7O%k;RAY)JYh6B[0%Ks4>xRpOke8nj;KrxDwDkb4Hu7M:Y4W{5QW$JzfdjQWEF' );
define( 'NONCE_KEY',        '_INvNz^a{3N1D4J9)#jt+,kbqBABWVbGz]3YZ%TK<,3^+(Mi+R:GO<o|H&$ZYZR!' );
define( 'AUTH_SALT',        'AEECn~&ZA[jI`&D%XR~kb2jjY^;cy@v,uW `lS0{(%cE_x+/q0!jg>wwar4TS[uT' );
define( 'SECURE_AUTH_SALT', 'zNAH6-SF.D/}(~t;uhdcw|*}D2/))vGV!7HRnfH|,(;_uXM%Wl!EP35MD6a?G|Y+' );
define( 'LOGGED_IN_SALT',   'vw=,{dv0}[+-rV$$_a|.^^px<2eV|M$}wX5Pqk<~xd#>%7yW6P-rutXJrWz-[=89' );
define( 'NONCE_SALT',       '2 JEM~}-)_(eclKl]UF#(GhRe&p4I]3@RfcNkD$.deLiN+Wac&zWl--oDj7?NG5w' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
