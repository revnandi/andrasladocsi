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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andrasladocsi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'LV~8Z@Lx@#eTwb|wr[t)#p{d,B/Cbr5OwQV0Ery%t+|Q0w=ySG[,VfO;@Bj]Cc_%' );
define( 'SECURE_AUTH_KEY',  'ikQr2FT {u{8CVk;0EfYM0Om71Sw1)[K(PMs+inkdUX$m?N,q<g(rpep}H<g[JBS' );
define( 'LOGGED_IN_KEY',    'G^Z_XUi{w?q6T_^+N$ESd0n3k6#xxkn9&164rGHSu|1$n(QnO&J.xi+>9yw~ h};' );
define( 'NONCE_KEY',        '[Em[irL._>Pw]0(sfpOC<c#xfd8YVoA|74Ke#RYFo;L/n<(XnGX2;GOjXTpqn&xi' );
define( 'AUTH_SALT',        'E-.ZA <IZ;wn|[hp+!^cgva%Uw.QrFdpMl<SuOVM=CQ5&_j^h64b(MycQ?b aigP' );
define( 'SECURE_AUTH_SALT', 'H$*[(.pU&Mf|2w)O895QDxp&a-Ojzy:O&I$%h=[pX8rJ.^.VC+*9D-1m;O=)2j2.' );
define( 'LOGGED_IN_SALT',   '~bdwqr=&Q|s*.k<$Y_&2xwHwxi*v@tCiMxq9voWwClX#{>.USGQv5ii0G-pJJR$]' );
define( 'NONCE_SALT',       'RyR2PC=ll(k`T2=xs=Ufoi3I2G*gPFk{]oUhrEfJ8]U}##Bl}oqR1G.PVEHC+JPD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
