<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '.U|{jSJ=Z[L-G@^lw;4`c3?8rb`sox;5vIDW~=?!I<q{nx`80$RXtLL1*Jp_%(k*' );
define( 'SECURE_AUTH_KEY',  '`|Ny#w0.7m>9Q>z{95n~35f2cn&VWJIA&vl8_*oax78`zOJX<(/7,2E_c)@7B;Xk' );
define( 'LOGGED_IN_KEY',    'FeNs{4~Pha5}{jqWPFs~=kP0$P[b?/!8V%t>1*J>}~?NaSDlH??h3[@T[?O-X5*4' );
define( 'NONCE_KEY',        '?C$n5C2`F(:DDITA9,57n|f3Z/JRW,lQj )SfMSu5NGCmo5cnC50~G]ul|(){z0q' );
define( 'AUTH_SALT',        '*cx*&P*-cCin/)B_x^T-ry-iVlvkYD(w?AoQw2A-8M~rVI1E(F[`{f&<;zCRn)h2' );
define( 'SECURE_AUTH_SALT', '3M{}~utF^3a2.Cj[hgph%M>C?7$[X_3_QB@=R|hyZ`!FiR|9^%caYWVf>~H3,4`D' );
define( 'LOGGED_IN_SALT',   'n23LN)w&M[(@oT*S:2TkFu2U}Un_[.Pf4Z2Mx&n1Br,,{xI@l~pd0K%aBT_3q?O2' );
define( 'NONCE_SALT',       ' (#:uvDzGS?ib*{[4$bp,Nx6ape|n!5`RZlXhLlP(vYN5^:<[{h1{uUQO`Rny9G<' );

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
