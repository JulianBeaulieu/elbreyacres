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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/julianbeaulieu/Workplace/elbreyacres/app/public/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n_Mc3{MmesOw:0YXYrwhVNO2P}+-.S/!zs79!1dO|Go<#p$vjZjuOIKTcn)!ag>x' );
define( 'SECURE_AUTH_KEY',   '0ji@P5/hq}t~xhQ9iDRF^Wk`*QvZy AFL:~ J 8(;bzS0L-!6r7e%gan^<)&, YL' );
define( 'LOGGED_IN_KEY',     'hf77v_)b_=NHOPTCE+P. _ayrV(eg|DCG;Ge-eQMW(v4_BYRSa9yGsFMIR!_0|=X' );
define( 'NONCE_KEY',         'TF7+Nc5Jy:V{c[lq(3NsQ#w-sr6uw)oi4K0J<k6SX%|J1&~|FmK>1q4AknB=2:mj' );
define( 'AUTH_SALT',         'XStfqYU`*ShjvfeKV!w6j.i4{]_Pv[vWX$H6-QLN>zLE]eoOH3B$XB>}& b&bO},' );
define( 'SECURE_AUTH_SALT',  '/-LE/X+]]<{ xrfQgzdXw~3p8F-g9r:C<uL-{LtI]I.fK&VX:jT|heSE@0?z|6RD' );
define( 'LOGGED_IN_SALT',    'aeb_<JEpZcm/?vo&z5c30t?VIB|&}`L-&0:Pkk!4jM)Ni :bH=1v2x(MQfK#XH)]' );
define( 'NONCE_SALT',        '4n}X:H%Yx+vT|rll#qHRQdoZjh69F*vO?KmctgQHjUk*9d;vH7~`%)Cy4R]8.*Tg' );
define( 'WP_CACHE_KEY_SALT', '1Tv$K=T#QbwnFOk fM8)*y1:3 pVo6njDMV{qbDL71.(|kf qI/V@C{?e+vUz{ui' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
