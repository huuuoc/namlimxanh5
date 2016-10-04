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
define('DB_NAME', 'namlimxanh5');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{{x+tT*[Dz7 ^:,-FZ.:K<Ec@Uj>VekF<TH-eexHHQjAv2uC4/q /[H,1EEs<@^t');
define('SECURE_AUTH_KEY',  'x~}W91k|ZVLY}7[!OMTu/}F#Q`=,V # ^4bg{#hRT;7UWr+`Fr2zcq|9hAvDed_F');
define('LOGGED_IN_KEY',    'QU6(<&-1~|QC9;8H<Q^U-4iz]^U`?9!pi~e aJa]3`3K?n$w*FMN%M}:<fd[JV11');
define('NONCE_KEY',        ')U:`Zv:Oh.*>u,lTM@ljJ%BZq=_qdhk-6@%p$i~6,;IvEqOVr0|KX@ef9|a2HMRb');
define('AUTH_SALT',        '/U=s&oMdlx$c:MNo=LR^hG8Qx~36bm0Ce-]S<.nWRi9C[A8 PpN?7l$I[0?5G`Dc');
define('SECURE_AUTH_SALT', 'r9PG<0.(Kou><YjA%T92SC]n_m,Sx2^(Ik,I<c2Ta-r2Zw^roYvUsa%ctgff`3gd');
define('LOGGED_IN_SALT',   'eXAZ$QIPq?QL9xU&`KmyQ~ZY9c0d[^(wX]MI5(bM!TI0@YOtKxvvp3.+_[4<^{hO');
define('NONCE_SALT',       '6^6SCZJ/Q@UxIFBMH8g<.pDy1MyM;CV>C.h.S>3<>?<1dZA!5d4|K~ VgS{*5gs5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
