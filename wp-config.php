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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '88n2;2CcZN-^2V.FOhPFQbn~NptpIU5uma!A3|[GUH sla3`INmm.|0TBrCUQ,~`' );
define( 'SECURE_AUTH_KEY',   '0koicm-ypzXZ}MYYnBT>2H2.euUPdl6;sxNTFd3<)pcr.z[NJUtS[?eL0ErUy:@_' );
define( 'LOGGED_IN_KEY',     'nI>5N,Ir1L{*dmDUU.}372G8m@P94-bHN?C$$ZqSWU0T<BE d|/1bgs9XP&}l>XO' );
define( 'NONCE_KEY',         '+d`:Mo~HlyzDzMvTHKZl~f#(7DJZsV1s.:mHvoeRVH-N2?Qb#=].j;`d,kXETdO ' );
define( 'AUTH_SALT',         'v5Dc!R`$Lo_Gxaww,Kxu8(n}Q@T%qS2u(GnBX_Pr}2e,]+MmVK){m!/dtZN{H/Y|' );
define( 'SECURE_AUTH_SALT',  '?mgbQ>2U|gKhNZSq5?jAg-IJ64~AZmq;K@%pyCKhOZG+IQ8l4sFOUv81o*A.X9`t' );
define( 'LOGGED_IN_SALT',    'x824K%3w-^iKex_@f3@d:$A&4*OZL7cHwvgEAN#ngZz%/pqh|&To&Sfg,C]2CUP%' );
define( 'NONCE_SALT',        'vy*SG#X:Q8P?3CfP{@%?sEuHehG{A}rvQ/*451+5a>xm84ttjj?<OyIl@a#E=z.Y' );
define( 'WP_CACHE_KEY_SALT', '}^PLsh<i=0R29rCvcOmX4>9nGv1P3N:gjB5QGLf%0Z$&sdmt(T6(:0n+|;f2a:E?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
