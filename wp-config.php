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
define( 'DB_NAME', 'kanadvisory_wp' );

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
define( 'AUTH_KEY',         'D92P?dD~)6SyaSsG_82Q!Jd-dm!b1gQ`f.8NWQ^q1 Jv+c2+XU0nx>t](G.`zJEg' );
define( 'SECURE_AUTH_KEY',  '9J165?AQ8JWIeQ`GvYE~^MI :zGhi3lM6H OEK)f^y=i[WdL*_ryNdqDgjgX2:W~' );
define( 'LOGGED_IN_KEY',    '.s&[HK)QY4w1478?O:s;k^5n|U8>|B@|qo#~Q_e[V)Oo%`!f7R7)1xtj<B[6,=3L' );
define( 'NONCE_KEY',        'R!Rn#Z1re`#9FLx%V__T|0u4/Byn+}&-s`AJOVBXhGuS_gA,&nyO&pRj3BU0SL(|' );
define( 'AUTH_SALT',        'DkT#u]>bs0oZ$1{B30o1c$&(`;tCd)*efFeLxW2x*5OflV&/- hWW*O@>e(i/Cyb' );
define( 'SECURE_AUTH_SALT', 'MFCex(~{jC :gu78Y`cMvHG?z B;.lbEV-NJ+2/#}VI{WyskI,V6dv iINoONs;~' );
define( 'LOGGED_IN_SALT',   'H.j)a-6l#zeRBujxk5SGM5V6`s{%O46L9)KOrw)33~]VMngNjO{oXNgY<x3ECB+L' );
define( 'NONCE_SALT',       'j,ldC5cKN$^37B!ykiGpc}oG5HBxS-o#@[S9 k+X7^eh}yR+?AB5lf2iJ,CT1D4*' );

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
