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
define( 'DB_NAME', 'nexuu_db' );

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
define( 'AUTH_KEY',         'hH)rP/h_E|urz=,&kAakOK(ZGuAU]CG{?u<^>.m23N/G jx>SexHgj?x=/<@=^:[' );
define( 'SECURE_AUTH_KEY',  'K>B5tfJ-^UbBhYM3aMA>:JzRIt?n^!6YC1>a,.%g1B4 .qDu_d:t&ihOaSx4f7?2' );
define( 'LOGGED_IN_KEY',    ',4i9gDUJs>aLcP[CB;{(</e:1[cj2B})UCbg::,O,1T[+#xgkN6T-9j.(F^/s5n+' );
define( 'NONCE_KEY',        'tPwa7Q!:tp;%MgFqjgeo#BVx<MkqirHD9-c-#NNxHL,Q1G}EZoGmnAsXG[N6RyYw' );
define( 'AUTH_SALT',        'wuj8iOh,5kGQ;m^x/;P@ZR-[Z|X1Lw#f$-nhdPQPUywR:3x#3kdz)WA3U3IWv<iD' );
define( 'SECURE_AUTH_SALT', 'c=$9329*yR3uGHBDuy|uc(#G%1^C$}(y#On6Lu1|Oz*ki1sAAQ+-m*IDIFed^t1Z' );
define( 'LOGGED_IN_SALT',   'D{JRulK[UsPuTnjx/B&k{Q2gf}x!t%,+4lsRNib&(aJH?t[F9Hr_X LRgeGOZoGr' );
define( 'NONCE_SALT',       'h7O q9e*2h;J]d3Zs+mTE>KP3*jcTstRduGW2R[sVM!$`vRZLWe]bfz`T?wFDYk(' );

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
