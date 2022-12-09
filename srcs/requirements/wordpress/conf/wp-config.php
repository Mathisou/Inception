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
define( 'DB_NAME', $WP_DATABASE_NAME );

/** Database username */
define( 'DB_USER', $WP_DATABASE_USER );

/** Database password */
define( 'DB_PASSWORD', $WP_DATABASE_PASSWORD );

/** Database hostname */
define( 'DB_HOST', $MARIADB_ROOT_HOST );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', $MARIADB_CHARSET );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', $MARIADB_COLLATION );

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
define('AUTH_KEY',         'fHNc~llw.XAU08uVr?)t r=Vjm><@FuF}BAx>jDvJC+=E]*^O;=XTG$Xfp(9YqsB');
define('SECURE_AUTH_KEY',  'p;[a{`b0,[A1[DU|Veyg,,!Q_%jl30^OU]k/%x<s2V5aBiFJ(=@}u&>qem(M.<ir');
define('LOGGED_IN_KEY',    'yM|W-1qW_3zR`57IB?x{MfXT`|9eL$:g?PGg{F.- zW=zeinyV~s&h[T)X|J~Q|d');
define('NONCE_KEY',        'Fc(>Q0}M2c-x%81gpC2|^V9wj$W}eNtAv+GS#^LI-d3^R-]ejJ-!v{l(# OQy2||');
define('AUTH_SALT',        '+}h5mlvjlOh%vB?>Jx]#t_[^W|EO*+-:2oTF;T>nYjh3&W.g)Vy~n);]02<hV<jd');
define('SECURE_AUTH_SALT', 'W/sb6f`dN37C-gX4(GVT<1*Bl(C<,+dw[zuR-k~65v6,>!VLQ0QV-0g]k|zZZ}|u');
define('LOGGED_IN_SALT',   '3+8Wp^)qF.fdvK=NpWa;#ffLMhz$X<-W)aNSUVQI)Gpy{5{8f`i@iV 1[1|V~?|Q');
define('NONCE_SALT',       'h{-c,rlo`ZhjD!f7aFnV|_RFkW?|V4{[?RT~bP9W5IDsa6+s/F#+}pJ8-?.<[U2S');

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
	define( 'ABSPATH', '/var/www/html' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
