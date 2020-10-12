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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cafenir1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SQ|?rA]4n8sd09I)5$b;A0%zbkD&x[U*mc9dk1&tOoLI@lX@->^# -v8SR(3uHl=' );
define( 'SECURE_AUTH_KEY',  '+,|7q.aQo mcahSE5K+RE`6,J1guIr-@xCllV^ut?}8D$?<:}Yw9{P7#Yr{z^3gi' );
define( 'LOGGED_IN_KEY',    ' S%VI^c4?fF4--ns.qh/A 6gU^G9R7t^q[]!VI-Y9[kcI,/F+XCzl%94 CrqX;^~' );
define( 'NONCE_KEY',        '4QHvKW@]T=3R-rP0XHpu:eae;iPKO>KN].,d&il(S>D$ttu%NF]:NC]R%I|D M*H' );
define( 'AUTH_SALT',        '<Su<fJn.x_3fpMmUo?CZ_L}Yjpuqrk@s,Dq7TG0cMB0?|k3s,qB=<:XqHd?(9UO}' );
define( 'SECURE_AUTH_SALT', 'hK!~BP02^%T#UHAJTUSe,Wvw#5@QCh)fl:{ptW.EClo5w,U9a1wOQAAhl1yCUPd+' );
define( 'LOGGED_IN_SALT',   'SJAL*Z5r.,jXjhbRa]wfmS8RMjqggSvz7>FQ!CD@n]I9BoL3qp<`[xj_1PAt[S}L' );
define( 'NONCE_SALT',       'o6Mf)Ug?Px)DB<h-1ZlE7z~OB6;Q(or7byM2Fo%Pf,]CaQZw$qSdnUN6hw${n)m1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
