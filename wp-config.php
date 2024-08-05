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
define( 'DB_NAME', 'anest_iwata_db' );

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
define( 'AUTH_KEY',         'u,K8N`W_Hk57W<?W^GW;Nfqc??+LbL[9GK$v<aI:2Y/:CsVod.*zbJcL`k@8c(l?' );
define( 'SECURE_AUTH_KEY',  'zw3 oEaLSE4RG[.+#tNlykMge00twx876}pgM^%F/qe`:hezoB=VcT0I7i37v#aQ' );
define( 'LOGGED_IN_KEY',    '2oc[&uBM@*Dr]~JsE/?_<CwfG>f^h.k%E^i#a0{2pS#|`)~BpPVo|U+b(r7.ZtX*' );
define( 'NONCE_KEY',        '2@hs7+<_]T[ktL .P|:~=ZA(S!rZT(#;!=d3Qcr8>NrDdWO%rfV`_JO,0SE;!s+b' );
define( 'AUTH_SALT',        '6gN]:XPtE6V/3fxc#sFxsv VBlo[;*-!Nz>fvToAt$CVP3Qe;=|}QfME_{[+B>A?' );
define( 'SECURE_AUTH_SALT', '0;V.0Ul3(P*YY4gudoz*!j+Tpv?!e&S5s0o^tjl98|VS3NYCQy<z-2Lm2Ukg[G7e' );
define( 'LOGGED_IN_SALT',   'JJgpI@T>]JA}sP*OKnO),YUjNKNi6JE|_*^CEMe{SHK}DAFo8z$;@?0o!1=KRc(,' );
define( 'NONCE_SALT',       ':W3UP)g[|E2TcT7NJzwvKeep`;THy^/)vE-4UODrF,03t>fEGcU>n.;?d9^T%0@`' );

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
