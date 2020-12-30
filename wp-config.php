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
define( 'DB_NAME', 'carnews' );

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
define( 'AUTH_KEY',         '!zxd1hS4P0XMC`e3%Ly%p3l:C_>_Z^BfSr}j?A+=jR*vv48q{y?DA-$rWRA}f&em' );
define( 'SECURE_AUTH_KEY',  '~vE.)_Q~#ee[BEi.{s0Vq,M50ClJ+yF2. nOr6:3&:G7S=hrJHi,?l<#A?YzpI4(' );
define( 'LOGGED_IN_KEY',    '8f.-FZ#KU~N3>9d 1-Py`fB6z.x]&)U)yZoVSN$LvV2C|wOm&zwg_8v<tb*BM1Oi' );
define( 'NONCE_KEY',        ']iSLVZ3ZlFmHG=hjZ.Z2OP!x[w`;jv20d#K!My(9ZLafKp)dQdL0Z!G9mjTlSmto' );
define( 'AUTH_SALT',        '! BVNx#3f,j$f696<)6vw:9,a*Az5mqXSKx_2gA{l+:s6-S~OV<*}g}*#7I-WXDE' );
define( 'SECURE_AUTH_SALT', 'Aj;;>H]V*5|e-cyMN>[mjx T`  qP:}a0 =N-=5h4RqX~%dZO&kJ-tN+ak~083>x' );
define( 'LOGGED_IN_SALT',   'gbMD;}1F;BX}qJN5#}SW+.>3>NvxkaredAzW.e>~.c%|0-tI[c7?tV1@WkmB@*gx' );
define( 'NONCE_SALT',       '_iOTb{4)F|-LePTUvNI{$dA-}O2|vw`u!|~CvAotExLA&p>6zt`as_m}c$V=hbwx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
