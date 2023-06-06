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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         '5H?5D2S%ePs7w~?:Qk=4mti2w|Q`3L@UR/=rq.:uWml0rxbgnH6- bsmTq!Gf8iH' );
define( 'SECURE_AUTH_KEY',  '&!Z)1o~_lQzUIr>$[ao>48%Y,9YDx#<]}YElybwps73`W7OSk~^!(jekz4ldAtXd' );
define( 'LOGGED_IN_KEY',    'UFrcQrlQ68HY Ln30sZ1-OOI%3MsXL&C.D}l}TS+5}36v&?6VnT WO0-`G*.jYE>' );
define( 'NONCE_KEY',        'gWlMTQd+n6(n):CK<n~4/MaIOh@~<$Udy@GRs3aC{v=`#o N0Hi9HB`DA@I1MgD!' );
define( 'AUTH_SALT',        'A+,1aygF+ra0n=<<c=N}!T_xaG^46C~k=JQeF,J7+yKcv,~#4urS*k^FD^aJ#O~)' );
define( 'SECURE_AUTH_SALT', '/:H:=eQ8GuCq0fxJ9quJqE*YS6B6u<+u_mx/,,Kg*K^u$i8YA#t(b0SE)!fjs -&' );
define( 'LOGGED_IN_SALT',   'ps;H@HuG{IqX2cZ&^h9QT=a{}eb#tV4x2havp$UH0WUHs^>qOQ_}1+=+pebBAkC]' );
define( 'NONCE_SALT',       'j#fLU]x|dP1F^Kj6IsjXB#sxNHih_)ChIMmMsmwL(56N?6#mn!xwzR~sA#T=bihE' );

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
