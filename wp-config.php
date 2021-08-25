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
define( 'DB_NAME', 'kelas_wp' );

/** MySQL database username */
define( 'DB_USER', 'admin_kelas_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin_kelas_w' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'iF~B{/!c,hHAv-Mo|JRTb_MGvEzNy-9e^QH.S-[n&Z?a[SV:q?HP!kni80Ahi1Hs' );
define( 'SECURE_AUTH_KEY',  'JJaLO^?UpuO7z5`m9$G_qdf,hI}F$C)z* zYNcR.z,W!d!8i)89%@pjt3lWZgWGR' );
define( 'LOGGED_IN_KEY',    '=%JI.;hem1)4dyRfDm56GH%opyW;,:sjep^f0sTN3jP%SjHH1zXgOv73JNV3[4-4' );
define( 'NONCE_KEY',        'VNz[U10X{P4,.!lx_h-,:{K6vpWi4;zoY`VZKz0%BmqqRnL6iNX^y.k%Vz^3.H*`' );
define( 'AUTH_SALT',        'AGbnDO#)qx[#0*y8K9Sk^cq<S0BxT1]E4duR8%&V(TgP8ExP>(3|>|y;4w 3Nish' );
define( 'SECURE_AUTH_SALT', '7T-Bl[W_8!VvaKr;5BVF`Bz`R+>)6zFt#EjqDZZoc`>iSv~K5%_1VFd.&=$osoQe' );
define( 'LOGGED_IN_SALT',   'W}5R+5|JnET2_/#DA[pib}bu)!?7)Nx5`~%oD;uv?8nGq0go]*{1^6=Zy]61__1o' );
define( 'NONCE_SALT',       'dO<.7KxZ7*=X_DsT`jH{xq?c=v]8r!x@!N*Ca?xw3lk)`_@NwWg30XMwgok:v4Ww' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
