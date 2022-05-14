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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_hunganhjsc' );

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
define( 'AUTH_KEY',         'h1q&9zB$wRtc+Y-BrF=VXjk~AK`/M$b&a.|9)q@TfJj@Lm7Y>djon1t2RoSj}&eY' );
define( 'SECURE_AUTH_KEY',  'y8|{iqR-VwSg5*IK/^57T)bMY;z(&EzYIKxmtc!m`ZGuJZA)RORn0h5|%7E#Iy/M' );
define( 'LOGGED_IN_KEY',    '>%NPtOt2(&]U0$/.yf}Bf`H(A;KrCTp*YMOkadXTRos-6H[^d`sRI7=!6En4/yQj' );
define( 'NONCE_KEY',        '-O&}U^w}K}xg][_QmFzm=kg$K#~CMp>|N]~LdMz4s[U3h!&T#KG2zB`z0FXy?/+f' );
define( 'AUTH_SALT',        '2X81S4^%<66b5K?@j}N{tlY,d&1|V(kXj2c-ii`p5&mFUDqpF][W7}d#0I+jC2]@' );
define( 'SECURE_AUTH_SALT', '|NJy;968$)c<xS2;H6#NJ)SyaZZuqpuZ=s=v+N$ ]]e5!B<041rE/>XP%C73/QC$' );
define( 'LOGGED_IN_SALT',   '<5oWpZ,.p[(y$6|Wz.oY:#NJ0q5FuHwL$_W3brtJ#<.f2fv-f_}rL%vG&kc$0$XA' );
define( 'NONCE_SALT',       '$y0Sw9V<X(hiay>s71SL;A&N;-yuN* 1@d%z]/|QKE;i^_pN&za1YvU4Wv/R%/CS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ha_jsc_';

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
