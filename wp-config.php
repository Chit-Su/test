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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

define('WP_HOME', 'http://47.129.246.130');

define('WP_SITEURL', 'http://47.129.246.130');

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
define('AUTH_KEY',         'l -q8Sq!;U_Dl~sW3Txp1caLgPcGnA4{R{RxqqFX=mWnRla|*bAK-v-~*C$yl1fl');
define('SECURE_AUTH_KEY',  '>YuX|+k7R-Ygz#.qN|v:?6~u[)5;0bi1|w]*wvk^}KMNyrI-w%Exma//LZv:ztX7');
define('LOGGED_IN_KEY',    '$dN,**)(>.,}3:,A9lH-y#,[ny)9 P>-4dN]t-,o*TS}dc5ie;-3cXhsZy9Dsk@m');
define('NONCE_KEY',        '}iI~aPu*UfuJ|x;5@.1Ft7~;W+O7H5Z&T(`a?_AUp3}*^y.vDMc<RP=gypBbW]&J');
define('AUTH_SALT',        '[J.2MxJlyp8Hp6Z9f5@e9u>F${Wpq/|1|%q7_~oWeI<uIa]@8O|Z7pRw-S+eVf?`');
define('SECURE_AUTH_SALT', '|S4{*33ue8[RExKGU>5O 4-RNv,|w5ySr|k}|TP6n]T:]`KSWQ .M)Uo:FlLB#(G');
define('LOGGED_IN_SALT',   '++450dr*]~#M5#,K;wRPt-H=c6Y-DId XaT|t^i-;&l,be5(pyJ>HUi7~}32gESZ');
define('NONCE_SALT',       '8iLCPbu/WH|grU1fc9q-ysVO_oprPA-%K+Q(>`CD-]!<iZ=|#1hqj7IkZ]{|7/Fi');

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
