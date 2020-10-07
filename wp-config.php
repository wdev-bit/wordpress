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
define( 'DB_NAME', 'summer_direct' );

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
define( 'AUTH_KEY',         'wj^haCrcu~N0nh|?h2L^Tyw=.UsN{3@`5r {e]+bPQ-lF,]M]b;PVSA>ui_>Lh5t' );
define( 'SECURE_AUTH_KEY',  'mle4m9ZeG[TXaw<=A@H<BM|tqKa6zr)N2](HYg(C9gEJTjT)&] ,b|&|t#&(s<yI' );
define( 'LOGGED_IN_KEY',    'GN^pNeM@dR+4MEP;{~%ts^g.SW3}ayp(=EyaWA7scq+[9VgsA-?,9br_I.A0?JaX' );
define( 'NONCE_KEY',        'hD=s4&jDVu1H/n+-n:5hULD:/bH1%V&#Z<XfJ=<]B0iwZ+_aT?Q-p<t*.X%>,}=n' );
define( 'AUTH_SALT',        '/7vY~Ji~DBq:eqM-LEPam|X|7Cc~AR_Ytxspw8dSS7#1]V,W=XX&`AmDuAk`RdbT' );
define( 'SECURE_AUTH_SALT', 'CJ(3svrQC _sF~K.s1)n/OC>/|];R6w~DCreq@9g1@JI77l$;Z4zvSs}Z]_#o(qN' );
define( 'LOGGED_IN_SALT',   '6KlH/F2U_(f7No9 ;48ghSnGE7QLi36x`vw?paS,z:{$=K5k(Vayp2JC%ROR<_+P' );
define( 'NONCE_SALT',       'l1_<Z>OecUjL=J7+xcqtkC2FXVPz<gV/JYgM@6Yt4nw2w<tQ>u?%#pZkL Fx2DZ[' );

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
