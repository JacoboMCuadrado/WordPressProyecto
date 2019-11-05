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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'uo?:kH8`>731xiIRY{w3D<6)JD%unIoH[/CM*0h+6`xEwAIoPUR*%%Ip(F>Nz+}&' );
define( 'SECURE_AUTH_KEY',  '<n/5}_C@!^6zQzK4Y#cM4fITem]PJE3WVX #}hh[BJZ7J!(~tK;F.6RB:p=L&.+Z' );
define( 'LOGGED_IN_KEY',    ';Jy1F+Yu<]G)kaN&l_227~s0tiT;G_|yo{(HxRxklaZ>Si0A*?S{)qJ`]o^Ii^M:' );
define( 'NONCE_KEY',        'P*J^VtY37np&6Nv@X#!e:_E]:nf9:-gS8B:FfvO6kRneRH9P)>1:6@>od(oV0tKl' );
define( 'AUTH_SALT',        'M=eWB/9~[X`SN`Bds:Oly=Q$v0Jd_0;S!yp7}2Ok=) Dt|a:=0`^40X*j{|h6ShT' );
define( 'SECURE_AUTH_SALT', '2Xkk4}fJi+3}1xVq 9+40t:fWrB*y_dKQupVK4]9MEBu7:v5U@6}ylA^r`vheDGN' );
define( 'LOGGED_IN_SALT',   'qW(P([!/auZ90fY3vFDL0j(wd4 pG87S0L;0Nr06I0]^T=r(l>={I~1NQsgp4`53' );
define( 'NONCE_SALT',       '3:u=oegO|lhS4=rcgKXx^_ETI|3< BC/)lVe6yyV 3g8hDFqW,AAqz<3xvi@O)(j' );

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
