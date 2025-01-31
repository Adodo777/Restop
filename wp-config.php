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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restop_db' );

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
define( 'AUTH_KEY',         '5_v=QvHLnihZlcA# kA6I4FZ^=Pw|bPn ;^6a8 e#y#Jg.m=W/Ba~`x%E3x,?e2~' );
define( 'SECURE_AUTH_KEY',  '|1s#$tb[WdHB3FxXc1yDH8YcE6k?HC(vSHS=v]&!-52rN+>x-L*L7.Wh*Z4h|Be#' );
define( 'LOGGED_IN_KEY',    ':j^VA)Qzv_[+|o(lL&xx]`4KM!&IrpF4HC:im.$NaiSIkq!sC4El|#(PapQ>}Z)A' );
define( 'NONCE_KEY',        '{7Iet.mu_x @L/QrnV`QOFR)j}SE4*tN*nf$XUlj59lfCST<jwV9VG$-_@WRjKU2' );
define( 'AUTH_SALT',        '.sE6V3PfPm*r,b+YKzc[:HL?D}vPa ?Cp1cj7)eP.x.h.Mcv:Fckl4/7ap3@-.cz' );
define( 'SECURE_AUTH_SALT', 'q5q!n)x%|(?IfHqi{Tj4@|TKby.d[c`!_jNz6v!pd1m(1A8u74G!MSHQ1z!M~M_+' );
define( 'LOGGED_IN_SALT',   'UqM/bK}afxP&t{@W4;s}6jnhK%hE?fCQRmtV .PavyivXSa/n-1_8F(h3g80:5W0' );
define( 'NONCE_SALT',       '8Cc:{=0bdHNgb7_iS..vX~~?7d{?qG-IT<8/c!Re)Q@:>^B(Nr~~pHdNI|$8bM-Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'restop_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
