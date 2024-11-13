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
define( 'DB_NAME', 'gerak-jakarta' );

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
define( 'AUTH_KEY',         '5ico?/_zuxOHN H#@[$d;P5=R#$.ze#APsEJ6{|xUd1-ONlP5v:by5ljsxtPEdnM' );
define( 'SECURE_AUTH_KEY',  'K{!F-umQlb>=|u(so+;DVynFHYz(R5]Nk@dR*uCxExlcH*|.(%b_(cyp=y|&>mzz' );
define( 'LOGGED_IN_KEY',    '?,nnJ]dc?pT%cai0f2]Xr#101~f>N!M*tq~d^^K6+%WXkVLh k45!)xp75+ux+v9' );
define( 'NONCE_KEY',        'x[<kM-n3Ro;oyRE)G^idb2ynp*da}`I$*OeXHxe.m6?P:-Krqmq1{~Ja__As<+-W' );
define( 'AUTH_SALT',        'fIxPijiXJst`(K5ExK{*{UXE|ZvlS%L 4|.5A_#~ o3]-Lr4wTY[nxwbL2~3Hc4*' );
define( 'SECURE_AUTH_SALT', 'k`H{>OVt<p_&T;/yqJ?IOeEC/ ORf|52M0h@GrbXvicX&|X=?I#tl-vi^la67w>w' );
define( 'LOGGED_IN_SALT',   'AYSbsYi*Y[5=6hR?UFKYU)DkhOhGOF]6jOTvw0Fh6,nf#v4HrR~+9wKA_f~<QnWP' );
define( 'NONCE_SALT',       'Ok O`F><-C:OK0JnQjRRN@f%UA+Iz&=*+*w&O?!GOW#gTdMH-gL_P2:gCzx~>nY|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgj_';

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
