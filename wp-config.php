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
define( 'DB_NAME', 'amirali' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'klN:;=qXn@ Q3%xe15&6xxS=QIRy=m8;fhKi5in|>$kR+uH2atqw 07ciWV}<Kz$' );
define( 'SECURE_AUTH_KEY',  'c6IP?N92fm6Q[ KF!.[2z![Zml`iW8Q!r#Yb(T]f:tIfU<JvUO]JWv<|Pn #4slo' );
define( 'LOGGED_IN_KEY',    ':0N0G7s}~VrBA4G{T`zU2^:Sb<TMUF`K Bp--!<eW;A]o5):bI}5t$t)0RkQ9eeN' );
define( 'NONCE_KEY',        'X;g@$GpZn1+Nt`;Y$=Mq{*.5pMVFe3<`j/ToBL>H5NuKwj$a@mY~d_EnHVwuGN:7' );
define( 'AUTH_SALT',        '4$)OX>A*E=2z%H+>%Seu+#q ]C7[SgZ$Z^DHD?8fsJ<}NuK=VG?p`Ia&XPK4IJ b' );
define( 'SECURE_AUTH_SALT', 'Q%yY`#?d{4W:!VtI)]wJxu~%G+d8f7mv($!wec=W$~j1qi#4c 4n!g?^~u)m{T&+' );
define( 'LOGGED_IN_SALT',   'ug%.jOf|11sAwE!3y5kVmjqz{~tXv8(?1N9*9W|+gk_*k]I%-wOpZ}qig(8~Gxo+' );
define( 'NONCE_SALT',       'q8E*Ax(%4h,%no+k UE#-*YD=gqsyqfWQ#RS?lao_DJoK6|2/*5B~fJox)7rAxP-' );

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
