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
define('DB_NAME', 'word1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         'G,6/}4cyRnpyX?4pll.[xe0=Uuv1Ah//-DjZAl?,s)?5y2xCK,LcmJF#ytm-Y,#y');
define('SECURE_AUTH_KEY',  '~M~@OSWQRUr1{+*uWU`|99NlT$7+$dMtbXY[c34HnE#7:l&9.hs5LjeoMSUVxB>|');
define('LOGGED_IN_KEY',    'Q0HIDK/ #&s_N?v/bj?t5JevQ_EZtX#I<w~e4bbK]/d>DZb>an7sq9==B6f_+L* ');
define('NONCE_KEY',        '%^3$J%e%;cRchQmVKR^x#NWuUI&Y.=2}4)npS/>>Fv2tbSG=`B1WAQ]WL@0)MLUw');
define('AUTH_SALT',        'c!6EI(!`O_D%2QW3@C`=|bC7JWw@no<[d0kF~!c3^NKNm-XUPHf]R)fZjRD>q$|.');
define('SECURE_AUTH_SALT', 'SlS+lrj5[_R~mKqG0e@M1tT}zR}|vGz$/0OZVSAl2f~eMEJ; `e}l6tu:JiYTg=K');
define('LOGGED_IN_SALT',   's31B6rGwS@0tv8rN Cs||gC2fy?bLZm^qruj<n]3Sv+I9!6QoEc]>*j.!C.Si|}+');
define('NONCE_SALT',       'gYh2fU}o#l38yf@`o^,duNyGbEGwj@Jds.yp~lNkTuix1)anXP$Z,.dY}ZWT5Ue6');

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
