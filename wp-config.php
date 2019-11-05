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
define( 'DB_NAME', 'blogCuatro' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '90efc356213f3a6a3e6d22c22d94b0ae733853ee0dfcdf04' );

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
define( 'AUTH_KEY',         'v?Y[<uWw%T<#=X}[(?q9K]*M,}c&Ae=[a>dJuh%%!,D!l68v $)8Qn z(0l`0LI,' );
define( 'SECURE_AUTH_KEY',  '`#/IdG yi(F|W%)@>dGH:jUO[<y~xTQFB2so2%^YL(8z+@8*3$WfL[@J0,H?7@@d' );
define( 'LOGGED_IN_KEY',    '}BS{z~a64qh{>I]*=N4+7O$~>7cKj%)[:sUv@4PP& y5c[#kyfAtTbN571I@U|ox' );
define( 'NONCE_KEY',        'UYU.)6a.]ne_2]%@K(4/1mk^/$)xVsxAALI@?a_!rFX7WIsuJ}$q/;o%4t@dh3k_' );
define( 'AUTH_SALT',        'C+h@OD}r>2/=-)L=4lvI2.TXxa4oQyT$.=_y$4?5R;J)xfNutsM4@RO1MiHa_!]G' );
define( 'SECURE_AUTH_SALT', ';@u@aRw:}--|5%{ttX]nZ%*$XipZ -/;l9[4P1[M<3>4(Q^m9t!>XBxC^_0no)E ' );
define( 'LOGGED_IN_SALT',   'bu4cjmt?<x_jQTcO06)@qmR c9W=:WMjv}bAvIQymI-xM|ZsJm=@)Sn3qwvx[;?#' );
define( 'NONCE_SALT',       '`+|`)LIM=A9;)!N*[ZN3nt*)VZVDc)3qikA?@&6TiC{ I5VvZrXc 9 u#SRLlq3r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
