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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wiki' );

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
define( 'AUTH_KEY',         '4(,?*dt%[,r Fn,Dp?gX^.]3P4a8]M-CPIEaneC/#C[ch?}Y;l+-pk[{=VUUMxij' );
define( 'SECURE_AUTH_KEY',  '$yH)aY!MlGnC8K^MI0G|c#}@nJ1P?.:qo7:eQE(>-K?Xsgu*8f++`&yu9WVXgGI^' );
define( 'LOGGED_IN_KEY',    'C$4cUJrQp_Q:BMBUj,Gv9Qv6aK+veOQ[68@RfEA<>78wxJjskMA1O?0nD}4`[1:@' );
define( 'NONCE_KEY',        'V}Q%+K]dv&_D9y;4{krxJC C=>+A@PW_&-Z92k}c2x2ZoL}I~Sdvhg/fTs3(<WGj' );
define( 'AUTH_SALT',        'Q#vbSQcOn Z+#4n)+oB>e&_L(B/+hO,b Dp()aI;~R}E`3.N^EP=nb-9YB($wRpW' );
define( 'SECURE_AUTH_SALT', 'l^$,liWe0NBKdhIP@Ul_5<hUV>GBt5Uih+ss}@-IBV]*3_#yw6I,e3f~aI=#Uzp]' );
define( 'LOGGED_IN_SALT',   'w`D?I=<gHWw.x<km^sY]87 Gkmf)OXE@uAjAgVq#g8c>{snI=HY4Ok$|AX+zCBxD' );
define( 'NONCE_SALT',       ',ebAIIy%u)]_wHbFh=d^>NZS7]P)ir=?}M:n*Q^l?,M_pW@MTac/Y k&Oe78?jI(' );

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
