<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I#;Fy)}.>0$K~l/7ML=c<<.i Vn)@ei(v:`58bo[;{@k+kR47D>[}& |cJGf[Bs|' );
define( 'SECURE_AUTH_KEY',  'ai<:OG`h|>( EI]H~JiKQ(aU1zQh9]G#k}i^CTS_X,-&^{!bo^F&WLA&(&mdK<_^' );
define( 'LOGGED_IN_KEY',    '{EM8r[)T+o$O]54%Eb&@J`Rsd0H88*o9sDp(e .U?pG{q%od;#OmMhv5m&aS:*OV' );
define( 'NONCE_KEY',        '$vB;0O!w:r]ky6)B_sw>`|c~[B?zdIQqWWye}SXL{v@6|{RyYc^;K[fL:^]i4Wn6' );
define( 'AUTH_SALT',        'lUi}[l-8,DBp7&YCg#a1b+B:`.qZ^x/`=yKI[U(ffw|Xi]s+kIP!P(~cbKZj:,}c' );
define( 'SECURE_AUTH_SALT', '=P`X:hk:z.4OvhVQ:<_qQ=M@`8i1G{&uHW!O|kj[A!el44Gia.Awl1p[>SPYU;4s' );
define( 'LOGGED_IN_SALT',   'CJ-z70a AkLKT<]`)f?,K|V.$%;f+Bf3A^>h [yC5 mzPF gvo5G>Xa+RX?2_GP}' );
define( 'NONCE_SALT',       '!ma&G8</4mMV!EbVcQps]I99m^33+^Pn||6]xXr=<x#QB~( @g%V?/!f[WowG,1?' );

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
