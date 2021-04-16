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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_equalityweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sd4?B+.yxrL{*|~2O$<++vEj[K@^?CZehvEaLiGj):NaGuI1z!hT2nkN]RbZtow_' );
define( 'SECURE_AUTH_KEY',  'xWlyBGr|X;>t|Ig=0x<nFb``=m>>azLpHhu/2XKVdWUzP%ZfBZr8(tegBozSitR<' );
define( 'LOGGED_IN_KEY',    'j8hrR)-W6C{I5nv+mt[g@cZ}bno89EN>uh}Fj{oALKSGT>Qucya(=ok}w&ORr|?9' );
define( 'NONCE_KEY',        'FuP@-?A87z^RZy?~*kUB}~dO6fKUH&ay*![YO(3{HBF)n_z!r:Z-|@yuU(_PI3*#' );
define( 'AUTH_SALT',        '7M-1DJk/tBZm=.OBJgt*jXqzLFA:<cq@Y`A-55.T)v+)>cmAr/bFfE[NBk`xg/o|' );
define( 'SECURE_AUTH_SALT', '@11~W,+as&)G1=JN n`@)iSq,B73]HM70E,y]=a?X8mngeJz6+j%cRC8I=<|N),1' );
define( 'LOGGED_IN_SALT',   '4gUpqEu_T%%OoKe.&q]&SSgcQ_h!4gTJxSvE]H$]HGfsJf=(-4{shzdMT[B?mYAv' );
define( 'NONCE_SALT',       'VYRHan[8bcKyIzVC p/z~45 %/~UXkx7-H`+F!_yZo!C#`QtL@qxo!-GNXM+NLV_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'equ2021_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
