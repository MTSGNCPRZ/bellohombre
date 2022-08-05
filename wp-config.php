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
define( 'DB_NAME', 'bellohombretk' );

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
define( 'AUTH_KEY',         '8yjqX(}i~nD^/Y4X8Ou4kAB1;X.NW|C/lR(PPvg086 4m1>of?R@b6.}b)2f/^|(' );
define( 'SECURE_AUTH_KEY',  '0W<+07nfTHR9wn#ea7d*&=Co$6L!+<}>3lk<QLKk0NxdPpw(tgUsp2RL`p?oe4D~' );
define( 'LOGGED_IN_KEY',    'l9Moxqw<B@+4h#gY;6}^Tq|?| BJ?vhlk_YmeSMR49^hB.as4LNS[2qlG6zV}Uvh' );
define( 'NONCE_KEY',        '$@8!@72p2%x32C<1k@H$fy`Z%}]nWP kc5#?(Q*$f;h)84czEG*voZ_wS+YlD!)`' );
define( 'AUTH_SALT',        '90j3L3~:Cyr:>JdhtEq57KqILHGLIQI/tl1Y1=dToeZ#H6${]P8Ml4rlgIzSdj#G' );
define( 'SECURE_AUTH_SALT', '?nZog34!rvyPZc)`lJn^.>3c]}#oUF-fy&=s6,8g+r36waXKnI!jKu)KdI1F@A!:' );
define( 'LOGGED_IN_SALT',   'G/~x|lAlugbl:%FvXwBw/ $[QJIK|C3C%.G8(*h</KvD9F.n_18Z8>hm!aZ>XCb6' );
define( 'NONCE_SALT',       '{ru~e!!ruf7la|wAf,R4x28Sh@aZB[2&w}t:0VUk_g0bN2hnb<gXqk5{(DXz]/)U' );

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
