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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'n@6:,o,LTrUpqO.EHRJ(J}8f]G*2lRB8vj8[W~mq(.aIE-AOu!?DxtmbSJ8c8cr+' );
define( 'SECURE_AUTH_KEY',  '$K&_yHxNC%TWrC=a>/)1u*D@U>e:wz.T-@$Gj#y*9Jp*jq`LaC]D57~40%loI-C>' );
define( 'LOGGED_IN_KEY',    'yK}R,:>4cyMCU&^PQ8MmP>C8;5c_u@(NQ [~e]>G:O3&P]?yV!OL(P^EBUBo4c_R' );
define( 'NONCE_KEY',        'MF8jpJ%(N;HQ9vK|k!a2b1w>(DinC W>)anviW~Mh2s ?e*X4T>E8Su7>^)`]AEG' );
define( 'AUTH_SALT',        'XEppgZT}B7|^-$^HRgao|)D#[S4F9J!#jO)($EK@A=*h&va+JigLz63@r!BH@BGa' );
define( 'SECURE_AUTH_SALT', 'g{^`3c`Cq!})9h{T%fEy+HJ~z#!rebktUIT[1.pX015%<+<ne/A4(@Y{,BkyaQ *' );
define( 'LOGGED_IN_SALT',   'ck}{S@DySa7HK6m]~M8xLY= 0]2xyX`%_Xpn(=YR(9D#^2lFoJ0f:z}[QiD`t7{,' );
define( 'NONCE_SALT',       'ehSd_MX*<_O*Hptic.+B5bjEg]&]G_}HD-E4_U T9#w<9Sd#rj>d3KF/@n*x#hJk' );

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
