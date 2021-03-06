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

define( 'DB_NAME', "bready" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '0y0qK?Jc*iKX0|:kT]Woe}GEQF,]]9ZUF4S pX6ee6x#BBhUa|=nQ9#W|2Qm C4%' );

define( 'SECURE_AUTH_KEY',  ' G&J?$6[[rD2-BEum!WD(@@jC= ZZ(g&,88MJBIeH|_~7EFvP*<supORSd+oJqp~' );

define( 'LOGGED_IN_KEY',    'DxpaX6&:$|R&`;L4jcbG`Qc9B3{tC|q_?wTH9(}:Ec=l/Bw8uzBu6iIiX;]U|J{m' );

define( 'NONCE_KEY',        '^xtE=ia;zsaE yhdr!4M93#D_!5:wEj6OS?1P8JWb:G&<9N|Gby]zJ4)1c_AA)o=' );

define( 'AUTH_SALT',        'KDuOPPnR1o#,4@D+7`hd&);LBN}OJbiCgOeKiPsPzn (+T4+SXQWB&-|3kthZg.V' );

define( 'SECURE_AUTH_SALT', 'jpA?OQfq(da;ZXM73~^WOaw!b`@@Awi|$*JwC5|I)OX}GqJ^-?5xuwHuhb; 2BMj' );

define( 'LOGGED_IN_SALT',   'uuo=q3aspwIR[PE(6M#b:!QaZnK<ZRXaL{6J[y=qEG@ II!1f/d;jslfrvneyR[1' );

define( 'NONCE_SALT',       'SoxN)E#S&!tQeU9x::HXj+nEKwD[u;ONUQ(~kF3C#g=F/)E`i2i?UtC/<5GG{VGM' );


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

