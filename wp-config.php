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
define( 'DB_NAME', 'dinero_express_bd' );

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
define( 'AUTH_KEY',         '+JM3l-gJf$Q}9ahu73tI)Bi]:nb#%!,aVDTP3At)!rg5mJ?Rp.lf;37]Y&=9uYbq' );
define( 'SECURE_AUTH_KEY',  'P{=Dh;*^v~knvg 0Zs9WI/[7S8D }0wG!>mJcB*&2~2pdU{7*Glo21Un@?rfas1j' );
define( 'LOGGED_IN_KEY',    'q^D#?|*djJ)W8^T@ret~odfU~(@n4MQ-p_1D@IOMBhm]x/28]]uN;%je5i|)#*hf' );
define( 'NONCE_KEY',        '>;YE5y&Aq4(:.BPfT;,.GMI&&/33#GP=%|0mz `@xd= ,b $Fovb_Wzi>7;^np1a' );
define( 'AUTH_SALT',        '!zD {pV^ztiG38C5QGT4sI=a<I-Vm&jY%xuSKLB72.{5j`_;l}n .f3O>tL8`=Z5' );
define( 'SECURE_AUTH_SALT', '&FRjfUQ3KDFV;WG/I%DS@_PQ$AuUm-qi(iV0^r8KWk=xUw>Ui>hfL ,V Vm.gL=v' );
define( 'LOGGED_IN_SALT',   '~yjd//gXJe?kRkKm*,NJ]@<Wv_c/)lnqU6FP{}s@>C)_[vBZ#*:%!x[ek43^a.,_' );
define( 'NONCE_SALT',       'osz3l6Hob eD^pki0g/L}gc*U[j]XS5a)Df[yi|c#^z:jV{D$t.mlF|.p#3_[h0X' );

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
