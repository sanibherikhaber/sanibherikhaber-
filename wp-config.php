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
define( 'DB_NAME', 'Sanibherikhaber' );

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
define( 'AUTH_KEY',         '64njSo<LlC&Jp7#<2v/P:pPy,z}pj-+FB{OI%}Pd6=X?]*jVok??NX0,={8~]:gU' );
define( 'SECURE_AUTH_KEY',  '62`W#]/nS=~^Yu]*&>f;2EnBI2Jj} |S8uo1J*m>#M21i1.ns!; dXgMV?o<euX3' );
define( 'LOGGED_IN_KEY',    '<o]3/NiEKe:2##(<ag8m_q.f17.UpYBx_o3:?4LmnLh14Q)#7>X}`H#]-!/ubbdC' );
define( 'NONCE_KEY',        '9U36QZy[WTODy~-,Ni|It-|>iChFD2#73-].Cl8}?:HE8o>Vx!HNT)Q8CMd^Ywzy' );
define( 'AUTH_SALT',        '&nCs8%Y(-21F^I6E_>qA+Dax{LG|7#!hxEUB?XI**iTDg3v7wSOuwcj##*`u+{JZ' );
define( 'SECURE_AUTH_SALT', ';wsyO`;]mtV$rLwz{%/[I6x:(Wmj#YJP/Th8O5+qyjFIb3mfU7UJatmz+yH!0&`j' );
define( 'LOGGED_IN_SALT',   '!-*{ghc(MAZ~VmH7Rhe*n&}5ETH{q{96sl5%q#x2]${dp0<W)su:1aNiXo<!gc!Y' );
define( 'NONCE_SALT',       'Ru)&}Eg8aAGS&]-l{;ng|U)JRrCqAP}i-]Zg*tFr/X}eZ$hO*g$gvTiyd jZ$=#5' );

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
