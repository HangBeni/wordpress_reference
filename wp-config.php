<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'melindak' );

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
define( 'AUTH_KEY',         'c!mE#T/R5WghU1eaNy W1N 1j[JdGRHOl.hJE$ &GSVoVn~HVk%gf!khNs^9w>X5' );
define( 'SECURE_AUTH_KEY',  'Gq@}/$kx==rLZ^6]u1_j!q#MOMv{Hl?GZuN^Ox5Ig%~%sZ,z1w-zw_=gs0I+mu.#' );
define( 'LOGGED_IN_KEY',    '#~%:32=e*Al<14AvZMElwOO@KbEPvlRt% b+n[VdqwPS$9is#g6EJlBPwv:yAzkq' );
define( 'NONCE_KEY',        'D{5sHCYk_+Sit.NsAx5bW`JA4UcU3bx^v31glVI<wfJB>x]kFCL@V_1<Wxk-n##~' );
define( 'AUTH_SALT',        ']bUz`vOd S+4*%Y(;IMgH5^u@=o$<z_55}~@l}r]xt1rMu3UpgSoC8hab2Sc05Xw' );
define( 'SECURE_AUTH_SALT', ',nug=p=6UKqX*.*k}6EkP?MXDwZU]8}NxrN,+aWU*SwA5^Ne9W>P>x^gGNxBV6)h' );
define( 'LOGGED_IN_SALT',   '7%E}MSK4&7m?Q$_RFPo#2Y={5*$XLaKBKMu_6c2}p/gs4Dt+,:@8;mNp-ih%7GB%' );
define( 'NONCE_SALT',       'p0NTlE9_?IyJ[Z~z5{WZW<0x)_H(E8r7T}}][Q<eG#v[2D^J#9Xj(WkY6hc5ljaU' );

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
