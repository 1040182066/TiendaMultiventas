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
define( 'DB_NAME', 'tiendaecommerce' );

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
define( 'AUTH_KEY',         'W}Pn1yx-w4>ss-z;-VaIe#`}HtKKBR5QuFJ:Kwm0+VzzF]GT=4a:l/2MFaJ8qye~' );
define( 'SECURE_AUTH_KEY',  '94xGMNC;o2*!!~CvaJomrZx)l,CP0/Bg_K^vcn3@eT61a?M*hKA!%gGBN@x}hK*:' );
define( 'LOGGED_IN_KEY',    '8a^J]*nGN28MlpRv}3&=y%~:k`Zp@v_[Cv|qOr``D2H6dP%!QNEHeCs:(%L)V`f.' );
define( 'NONCE_KEY',        'd?AIFCP@llfyUI*BX/#1y9]t)ZfG8}8:9DP-1>XwYV5LT:Z|THxCR0VF!.s<}*rn' );
define( 'AUTH_SALT',        '(9/)R4$wqniVlyPV`$T)8<l-Um*xx1gzueZUV)jsIcle:o]^6)3Ng?X<~sW8:b];' );
define( 'SECURE_AUTH_SALT', '>jLaV^a)k]#u|ZO<e0d7+Q$@peYNliY`omh_+xx}hY~Shvrg/}HjQ/m.XdMK2XfZ' );
define( 'LOGGED_IN_SALT',   'VGWB)*Q{gp1#E236yb4^p*93b%InMST,r6_H}J2T`& |!Lfl(kV}gUjFp=JP}.}/' );
define( 'NONCE_SALT',       'gFn,GR}@n(nV.PkNiG^/ZZ%Bv[s1Y*%yj*<35<t78rLspW:;g%9}FsJUY[RLUdh9' );

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
