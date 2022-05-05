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
define( 'DB_NAME', 'Inn' );

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
define( 'AUTH_KEY',         'Rr{0X#1H}suNjd*7m~Sq`6oo-ob|fa/@]99[:j08?68qaW}3mS=2$!i0jXW)uEZt' );
define( 'SECURE_AUTH_KEY',  '%4A3&8!{(p{5ss[.>|piCc7]hf$Z=/rSo>nOAu&e-cy48YTsk!4w@+6Sk8(WgLm+' );
define( 'LOGGED_IN_KEY',    'n0Q6]OWvonubNXAcM{T|=Ukh2R Wow<J@tB>Ui;(}5E|/b`@Ttk2I6|UH5|YQ|?H' );
define( 'NONCE_KEY',        'PLaP^cDF:XUGWV|#isr>dy&eb4dWjGi)Jj1%/i~ezqWuvlR8[:WyTgdnb3nLi0@3' );
define( 'AUTH_SALT',        '^#><.x>uM?ny}:I<X_0P(@o]6nJIy${d[5S[F69A4R(VC^HMEcCrv%e7<vnd8aY4' );
define( 'SECURE_AUTH_SALT', '%CkECT<}jH|htN,EASm1P,U%Wb:Z3VHELQ#K3>rY@Fs4Z:IW2H@nu/ 4KO{QhP)y' );
define( 'LOGGED_IN_SALT',   'w~Dc55aM5:,zbd0en{64RWa={/1}AQ{kV&#5E~geq}c#%[t4AWjt8M>N>q<=MBpo' );
define( 'NONCE_SALT',       'HmKnwbOWYL0biP5VYhrVn3W32bM5Kb9G`yRUYjh[uGDm,ppn9a-{ovsee6J O :M' );

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
