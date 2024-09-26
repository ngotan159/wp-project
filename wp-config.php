<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'QwJO2<-+K1b~0`HW)|KwY?:UYzjaH9RJFaz4|hc/8Ua.E)K,n|SNC{6~r=0pY>Ui' );
define( 'SECURE_AUTH_KEY',  'p4?BcJ7Do#QltgLU>uU3/13&b;x}kOHNs7x1!Me1xm#:L9_ 2kal=2VyXjblVLYL' );
define( 'LOGGED_IN_KEY',    '<NVLuLko[O<trV|bNg:}3Q1B#^J<:2G|uQ5rGGntgT;W~d_Uvq9x 4}siAEC*<LF' );
define( 'NONCE_KEY',        'r=m`BwF)X^wP]`Ka>&1=%mrn4*`CbC||gs{2uHebV..R#lvr6xwI)9{`J:Q~X=9^' );
define( 'AUTH_SALT',        'Xn<rcTu-,[y( <gjkB:[0|kH@ a<G+Mw~#rf/r*y*j=VX[=HNT=sx0xUt>Q6rDyF' );
define( 'SECURE_AUTH_SALT', '0~!UR:-4UU.g?/SzjT#3b~..1EE/4t$dP&r-wwhXny-a3VJuPu]9i2;ZiXB?xPY|' );
define( 'LOGGED_IN_SALT',   '{CdZwb:Ls6EC_8B2gkT_GYB^]k6X@pdfQm@h72%~p,}YL/#8mKEr6OsR%@y37 so' );
define( 'NONCE_SALT',       'RFzbjsV*18Ea^o!r %v5xpf83~G(9Q(eC=dnY31_*t{H[ {BBzKOA])4$~|}GL;R' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
