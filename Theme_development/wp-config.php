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
define( 'DB_NAME', 'theme_development' );

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
define( 'AUTH_KEY',         'mCk&3po)d}lFd%{rmHB/k*5%ro?Y8[CJWiz_S^j(ti0>t`g:q@D.tpIa|V`&&Xn&' );
define( 'SECURE_AUTH_KEY',  'vV[-v~sf0k6]3$ n Msz_zVyA-90T<[2wR?-AIrMLRZu#>Ve6#2<}2VdG@x5}-x{' );
define( 'LOGGED_IN_KEY',    'tw6f5| PCb$Lh?5e{JBOTTx]Zn^>fRn@h;; ;UTz-_^k&`+X&F~Il>Mx=AHX$r/v' );
define( 'NONCE_KEY',        'z6&oZ!Fg$TR(afY! dLrys|W`-d>(Xr55 (_$?;0`f{<-t)7jqA8T(mP999@svPh' );
define( 'AUTH_SALT',        '.a1R+%4-!|?Z&bC(FUSXvRkK9t8j[<U+0+/v9G}rSihZ>;cB}9q]#r=S0%i$!(pm' );
define( 'SECURE_AUTH_SALT', '3G+31tq;2#a<I3H01S1*O?cdQvXG;R0ldVGgfO<e-x880]7Q~2`HS?u263m SpQ,' );
define( 'LOGGED_IN_SALT',   'm{@L<!*k{#o42%EPC?pA:1ptV$r(g8-q)YdG7|YeZdUnFZ>0BDc:nX%A0P4!U;)7' );
define( 'NONCE_SALT',       'ee#a@xIHr<3GSCQ4`%UES5*R@YX,MT-LS-NdLn8GE*3x&di//*O63Ly`XS;Ay4C[' );

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
