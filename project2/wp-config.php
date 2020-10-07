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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         '9/oqI%kLfD<uPI__~Wc9ytjbdMl44#ADbS!WHs.D<H!84Kv^3%vV&:Ot$ocrVEd7' );
define( 'SECURE_AUTH_KEY',  'LiZuX#tfJ%tsy=LwjKG_Bl/V2sWD9m3)Qp;QRZQpG|pzRRvr3IS%mAx=^:yEa}5>' );
define( 'LOGGED_IN_KEY',    'K<kAIK[Hfb4bFvF}v$DgxP^aMRcpa@*eka9IozXtkUr_yuyl&LrR8/C<D0>&=3Z(' );
define( 'NONCE_KEY',        '-UZ.[t5uC yuk4ed8hfy`v`7Zz1&w;hW$Y~8fx]{79oOPb{$?1=[oG[PD3?b4/+>' );
define( 'AUTH_SALT',        ';Q)Og7 E|[+}iXXUBcN&F`8*3EzWi$c%lb-kt#uR?my/}TgXXMr~&2.~eK67R8aI' );
define( 'SECURE_AUTH_SALT', 'X`$,Rk:?b0?IGp[gENRh{48|1PiKqqjUgKT;L8ZWImH9fDE$&-7W;HW%c:tvcW:s' );
define( 'LOGGED_IN_SALT',   'K>U9n31pgL?CE5fqhN ;-psu[<(!mtjbK7erj&2?4|(pYOXNlN>!TN}P1YsO7Xnu' );
define( 'NONCE_SALT',       'vAK e/I!K%.W U* kn9.Lw{LM`Lg@8r?erXe.WM$xGdIt5-ob=iS#QMk+;vC5LG9' );

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
