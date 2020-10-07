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
define( 'DB_NAME', 'multisite_web' );

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
define( 'AUTH_KEY',         's`[YD|q^jW1YB$x8gtQ]CD#Tz5i[/o+jxmGY8kM!57}28&xNF-s;.w*C:=BRW_r5' );
define( 'SECURE_AUTH_KEY',  'a2Ut8%~{3)sw;x*OcH Je58GVi_}h,2]f49~VSSxEz&)DFm<eW$zoJ4:L+!upibr' );
define( 'LOGGED_IN_KEY',    ']9sW]wMl64eWp8zx7;13i%x<PdrKs8|hYLH@ykEJ*^>tq_h!/NVl| :AogQ[hzBE' );
define( 'NONCE_KEY',        ':Au=G5})JL_G7$4p)1!:)m#iuqs&tZjSv_Wzo[`svi?+Hp+x{/zER#52(=1LNKL]' );
define( 'AUTH_SALT',        'Q3cEQ*FyfV^4IPk&GMkZg[<UO9YOUi:!Gor/u;rc2X.`EH2>^AtFm(32ZA(}%N+x' );
define( 'SECURE_AUTH_SALT', 'azuxM&)yB.sJzR-@v6DI.F{TH4oE>}h6X.iAo[P!0*zK>?pZ 0vmx`uk[ZP~u1)s' );
define( 'LOGGED_IN_SALT',   'FS%2F.T3&;rorbl-IPxXx>DAa3e8vBy{B&Yiv`h,x$7{=Qy3?lCA5?7s:FbB;8#2' );
define( 'NONCE_SALT',       '@&SA!NX)Ut|WQbDI[bS3 H9[FSlY^Vf&Las)+43Lz<V@4^ynTMoNVXX5T-?A?9S_' );

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
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/multisite_web/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
