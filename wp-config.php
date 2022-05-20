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
define( 'DB_NAME', 'Personal portfolio' );

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
define( 'AUTH_KEY',         '!f$Q8(e9Bwryu3=<yziwr9m8At_ti5~~NVHN9FSE;&*]c5Rgsv#?X{2T67pfiF)@' );
define( 'SECURE_AUTH_KEY',  'o4`f!`{TBF{@*e6!l:*{<kV}BwDxohUY{hKuW^?gQ/Kw]N}N2E!!S,5ZD=6V/(G;' );
define( 'LOGGED_IN_KEY',    'o4A/LtJ:S6)H:j!A7(u(|rXekKB$|$)-%bsq2YS*<bsCt~y`RXh1mx$ZVT5id-*2' );
define( 'NONCE_KEY',        'Ng=RAn9IZ`obIs> zjmC/4%MZM;wW(^]_0L|A#gNqk(99L{%cO*j)/!LuJ B%oF^' );
define( 'AUTH_SALT',        'W@@{,+{i0<u&_H2 *a#3pZewwjvr7A|tlWF!{(4#BKK1&cPop7:k]m9)V;n7X_Y0' );
define( 'SECURE_AUTH_SALT', '8{f}?9)o*CV{X^jW;ZLUrUl$VkM:q~v[N%OqNTA<H?-dLDC9q0@<r8{_ArlPXf2b' );
define( 'LOGGED_IN_SALT',   '$<_a[>prC!.w]`LUJsh$VZC+#XC#F/#+m=#a$=**(L[d?&?77R[RH_W+ n:YdA3=' );
define( 'NONCE_SALT',       'Y-@=8%c3H83A)hJx9Wm$>Z-T`NzTmb+aA_El-Ig!1Gy=N&!R3MYB/C`58hhvER}P' );

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
