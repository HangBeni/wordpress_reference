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
define( 'DB_NAME', 'melindak-wp' );

/** Database username */
define( 'DB_USER', 'app' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ')n(A4|-UtSbPFt)qE.E3yL)gCAf{9i OS`TWo_Op:6IZ5B`ta=QMw.oAj.:oul!+' );
define( 'SECURE_AUTH_KEY',  '8db^]6^j/n~W`=AD!oIb@zv*E:Tt)zkb,8@CG7w,+rXw3Jl,N0Zvry4%`C)DzXY=' );
define( 'LOGGED_IN_KEY',    'h#Vo*my3oF=3EW|qE4miumcI3&!Z)|mDlt2C~@]d_Waw$v*p`a<[cj7NUt5<X+ 6' );
define( 'NONCE_KEY',        'y<pyfwq+Ml[vqKp}>;A+[BiJQN| MjF[KI7=VlNL4T^p{zgG3Kd/^z[|mW*OYvKL' );
define( 'AUTH_SALT',        'F,E{Dz[4fuZPo/zAHec(!Crs]Yu.<ARX|.}N8J27/bXx5[4a`=cHRQt!qNaT>No*' );
define( 'SECURE_AUTH_SALT', 'a`*J(5|A0cH!:St.MFd}}Y7GCwnI3`c>DW*dYUk!0_VKZ&W$]PWJ9?P~6J%m^e><' );
define( 'LOGGED_IN_SALT',   'Ll*_1sG$B$ISyTiHBt:LiWKWZJP3NVTWC1bRkLKq,l^U^iu/f}@`+<w@5QxWwjw2' );
define( 'NONCE_SALT',       '=8{P**%[c8?g.R<@!{p,> Q;M(qN 8}8fYR_a}ehT@0e!9fMMK^!uOFo^~o]} VK' );

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
