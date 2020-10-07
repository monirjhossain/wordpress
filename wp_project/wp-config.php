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
define( 'DB_NAME', 'wp_project' );

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
define( 'AUTH_KEY',         'xP76#DQw`d6:`25e+sHz$NN!cXzuHA;4jIJB!u*FXUd$A$DS/B9`7Rd}J}|C)/T8' );
define( 'SECURE_AUTH_KEY',  'z8/?!u$ .8?1gVb1Z&Pj$6&n}_(zFqbvmf}a7@Q)WJk#BEQ{qI  asUF+lW$NGAS' );
define( 'LOGGED_IN_KEY',    'Ss>A]L9T<[UR#CVHDo>a[J6FJu*Hq~J*%]RjMV?1P-h?<lJRai!,}x`butJH2cP^' );
define( 'NONCE_KEY',        '5xg//V9a`tGvEDa0}`*zmOIwtjEskog:kAqo&{2Lr7G6x%.i=quJ%0,n!jv1kS}^' );
define( 'AUTH_SALT',        'k`RBHjJ+Kke*RzPd8JphE3uif)Cr?M^,X}r{xd7G=hs=U2WlmR#;QT.dD}!9<>G6' );
define( 'SECURE_AUTH_SALT', '66<0D3G>%0x~?}kX_;GY|jjh%=?o4?&eu3WSXlgpeAyZT?+a7G(TerqCVF9@aE{G' );
define( 'LOGGED_IN_SALT',   'ax?F /_Bg;<P#aE`v0]S&ty ]t^vh:NyP-}Eq&a%P:Myfjz}2L7uA`91ta&s!RX5' );
define( 'NONCE_SALT',       'nf%3TNp03RE[xwFJ[<b9|-[5noTPRY@#j>7?-M^^#Cx]?k?<o}rhr?aMJ`5F48n5' );

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
