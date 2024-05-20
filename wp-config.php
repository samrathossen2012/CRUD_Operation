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
define( 'DB_NAME', 'sql_test' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'Ti&O6%zvQ7CHEnae[oB>m/hTZ7:V>zp|E*HG(h)mnWs{(*LpH&S~+}ecLz)DZ%e9' );
define( 'SECURE_AUTH_KEY',  ':RCYU>Y5t^Q9dsIKbRc#;gRC-6Y,N( 4X<,#W-,joGO7X=n :26SFfEy<BgOG/Ip' );
define( 'LOGGED_IN_KEY',    'j5lIv9i2NQO`?aJ[5U}@ADC2tbUM)iIB08%uHTKt5ep,QA|nb(S]Qfa;dW[h,.q-' );
define( 'NONCE_KEY',        'h=xHJwSF#u5Z#o*I7iI>c4r`705Drz|**? fG|)lmn6{F{1$!TpO+XQYcjG3-gCt' );
define( 'AUTH_SALT',        'QN&RTs9;A_}p0D^~@>^Z<x cjYdqZ+<Cc;Q/K1[[bPR+;w},cRvEeU|Zd-}P;O7s' );
define( 'SECURE_AUTH_SALT', '}$Y?:E+btrXp,4j6%RO!Cx2Sc3zRCu7V`6FRg6e)Z1K0(}I5m;5cGu9}H F,Q!w0' );
define( 'LOGGED_IN_SALT',   'rM8Sws,61c5*h+j/b4}}=Z_%9L1d(v(6KV_?|z9Aon:F)i%i_;5lk.SPNmY-#_W1' );
define( 'NONCE_SALT',       '/TAP7I>.hO+}7mnj8)M@+{P1J0 c]W,%9bOuK>d37j8mz93awTBaqT~IGf2pfFX$' );

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
