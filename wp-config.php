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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c`pNRr 3]6M9)3$U|A``;SDMEhg?@T`mqNley`9S8OF:l{4bH8iw,v]LKL{R/rxF' );
define( 'SECURE_AUTH_KEY',  '<kT-Xg6Wup5wyWt?0%j)nGz-oi|LMcaPzI37.Qq5aKJu6xBS))}P!Bh:m<z>7x}I' );
define( 'LOGGED_IN_KEY',    'IMA~TpWyV-@C3`BVjRg~E9sP!nU=!|gErx|C^_zHb+}P)2CMO-Y5OZNBv41%eT}L' );
define( 'NONCE_KEY',        'grJpTa0n{?wzd6O/jL`^QTj+YykYF&P0Gz;UW-=Ygu%rGdT(i,),&_5Dkv@.;ZNp' );
define( 'AUTH_SALT',        't<v*PxB*vZ@PV-Dc;p86zkdjxjhn:@v_;QO=4IICM?eM:Gy(JRK(.:$yncY9n)Cp' );
define( 'SECURE_AUTH_SALT', 'Emo6M0}7^(YsJ+7;0!vf{FcOm`l[T:7Dd(784KRfEAC)ybVNo=(+lowwt,`|Gv/+' );
define( 'LOGGED_IN_SALT',   'Wf}e3lr*VBL`!!d9.|1-KQUdKpiM(K[VHt>zku3R_8sbE9wpCaUT<S51oh^N7_tB' );
define( 'NONCE_SALT',       '#K/iz1_:$5]NK$4s9kZ<u2h.S[3PsA0fjUT+znK&0La~csZ8>:J,xcaSb/H=?&2p' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
