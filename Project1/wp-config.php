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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '4Pum$whh6hkFsFw9uHP<~Cti! k`iXRg}19+-B_V;LGFM;u-I`g>*GAr{ezd=igl' );
define( 'SECURE_AUTH_KEY',  'BG;ZZS~jA9?[vqeUv;T0~2HI h-)A5>p6Lc/J0R98+!m-M#^vQ?U.KYaltRG9}?z' );
define( 'LOGGED_IN_KEY',    'T:O~}D,;wt|E3]Zy{GtiRnXD..Z6cV ZP~b82s,T71-43!9ueWP?3ld:;+0r`;)6' );
define( 'NONCE_KEY',        '+Li=pI0:9]pA>9}pp)u*+rs@h`=Q}K/eq_V<`>y.k[KG`~JNeEY!1C0+l:#El7FK' );
define( 'AUTH_SALT',        'jIU9MXfKz~n]0Pv#o+/WvkUu(g8S#i[953}ttF#@Jl/b>*sJKfbgGBq{:fo=q3g6' );
define( 'SECURE_AUTH_SALT', 'R1Wh0Gf?~X:A#B8p$ehKeJbJLpC13G$6((F8>UVdXAB6CXjwHPa>[Wg|UxPe:ib3' );
define( 'LOGGED_IN_SALT',   'H]Y?k$|{&nG]?ud#N<-zg gu@*6Wdvn7z`7CkWGVUGog^s:,Y~f*&r24[,3=np@;' );
define( 'NONCE_SALT',       'BJa,q}^?* }P1>Y_h,.$|<v9aSikd[Mf_vt{p0I#DWWn~!,:WPM4*Qt1E`k La<)' );

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
