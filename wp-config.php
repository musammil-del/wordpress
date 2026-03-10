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
define( 'AUTH_KEY',         '.>;DK61M<7QtOrK:?fO|_#w<t@k9Irx}t/,jDnZ2bj4<KA)tBYE!gZPrV!y:=sRC' );
define( 'SECURE_AUTH_KEY',  '`p7VS2Ld+/f<Ol>I1F*?&}f<Egmg11)+^;1J $N(9CJL]^+oh((7%rF1DZ|JPv>l' );
define( 'LOGGED_IN_KEY',    'Uq-*NT)E/B$kczo(BAppkv|$LP@gTk=ETvs`_KXTgBqAFfvp>Uye!`9TZ#K!|N}G' );
define( 'NONCE_KEY',        '$4h0*;hqbA[6r/:Sh9Q6-1uZj(6]Iq@w/}|iEzIH:,4Vj@Qqyqey+T9AH(FagEds' );
define( 'AUTH_SALT',        'b)il!eO]jrBo`RneGtr&Bv)M8TCcz&Y5c3l8CoLHDHmz) uF7_rAW>^GlaCJ xi3' );
define( 'SECURE_AUTH_SALT', '8]vh{9pCHWnaPodo`Jv+eT38k&^wJIH}=q7k]s*e?dnoe25?!fLb:p#F?3A/-zkX' );
define( 'LOGGED_IN_SALT',   '2M$tk,U@yKvp.l?Bt%a01E(:eOL!Z_E$RbrhH>=(n&CE4JE.XLgg[L55|>*WD1P)' );
define( 'NONCE_SALT',       'L49l#xL!gXivud:,Vd7tNw,/>THKnGf%Yqz^Y1S08qf1#]Q,P0<T!].qa<UN$y;+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
