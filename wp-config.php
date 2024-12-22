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
define( 'DB_NAME', 'hasan_portfolio' );

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
define( 'AUTH_KEY',         ')7EZrI2ttp1BV~Of/Q[.j>Si<@%0{!W!BF/8wcjH@fr}nPO*S_~+gs7?~0TMJ%T=' );
define( 'SECURE_AUTH_KEY',  'EL$Y`1|P28UR;MZkO{W%_28kN,L%H4Ado-KIb4/T/s1n(YEp8+Tf_]/O.MsUeSg/' );
define( 'LOGGED_IN_KEY',    't#PHD_U4?Jg=n&ie#$u2Ma;!T5i6jUk)].-cFIS[bTtEP7<M`~7~EF6(PLl^9Jne' );
define( 'NONCE_KEY',        'a)pQLiOdSb=-~>{M& $x|rz`(+Z8sp#AQ@D[g`*5ry<;S(Z!^Hu=Lfr;WdhuSeLq' );
define( 'AUTH_SALT',        ':j_{0Ii]S5k.o{uAQ8@|]4V!RfCT<:wUyF}x9-i&[L6gjCg_kG4uOT4qv)((eq3|' );
define( 'SECURE_AUTH_SALT', '%v4{2=p]jvLu6s|WU,8.jQNMr=!-!a@2Gf%lwFLr4QgWGI-fmGywX^`Xc0N,3?6n' );
define( 'LOGGED_IN_SALT',   'fVd6dPl_? *vpu5!2JUj^I+jcLx#S:c)9?+^7nGPex*q~EUF^Ev7]xmT%(h:VQ,q' );
define( 'NONCE_SALT',       ';}+1ny&_M_psrCVK;=jFnt(G$6w3N+7@c)F[mU}xCErfL@/)lHtT!HEl37lrVFJA' );

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
