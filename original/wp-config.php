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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elabasy4_wp876' );

/** MySQL database username */
define( 'DB_USER', 'elabasy4_wp876' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wcc1M%qnwS$zP!3C0-yAdtfByhlXdg8n' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '7sgvfva9mnqkxa3jlrjnbvy4nxszw6k3eqojyyufmy1vdc5yp0dlojgzny2mpb8g' );
define( 'SECURE_AUTH_KEY',  'rzcuawgq7b720hozar3d5fq3qxgost1zuyyjp4broyosrfs97elhdzhzit5h65aa' );
define( 'LOGGED_IN_KEY',    'w0kjuhr3fgiekrlnboddmf6fo81olonemup8lmwjxaunev8vts4omxd5731gkh9p' );
define( 'NONCE_KEY',        'pu1ul3it4luc7y1joo6fohy2nbgc5beyjj3m2ereszc4yjljvieqjkrsqv1ri6no' );
define( 'AUTH_SALT',        'iur5uiawyick6kw2yo9dgupulpr3hp96n0drkbfn0b0yxbbvvkdgtlkc4x2e0t8h' );
define( 'SECURE_AUTH_SALT', 'nn4ot32ogic4ipb59bkjejaj0cmqmrluqsi4x8zpxn1muptvjd7etjfrjs0aifej' );
define( 'LOGGED_IN_SALT',   'p42acsuj3xsvpriq9hi2n4aoeimai23pqs1kv6zn7zfobww3s3voj4v9jaf972nw' );
define( 'NONCE_SALT',       'othvcukfr3auasxefyhdnbaomerfsh4gggldxpjnmixnk7gakhsr1uexwdbkrmnm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portal_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
