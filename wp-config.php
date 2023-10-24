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
define( 'WPCACHEHOME', '/var/www/vhosts/celinecg.fr/httpdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'celinecg24_' );

/** Database username */
define( 'DB_USER', 'Celine' );

/** Database password */
define( 'DB_PASSWORD', 'Klaus2601seven' );

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
define( 'AUTH_KEY',          '*0B?Mbpp@dL($ (a5ZG6Q>I+ OBgU@lv*K#ZRFNQ[sR<Rgb( A3mpo@e}K?KGFUq' );
define( 'SECURE_AUTH_KEY',   'q@i>oMeO:Z0`~!8ecQbCM7Wk^XM49IiF2C:OIhkftL-NNm|r>fnR|mNl@g+zNNM[' );
define( 'LOGGED_IN_KEY',     '.*iAgFXL@8j*JSB-bY=!1)I!Ky9y@/p._ IP:wF3?Z.s2t.BMy8v|(n!WZf?]tc}' );
define( 'NONCE_KEY',         'Se(6Q.dDX)97]@pejxR|UL(4Ji`#D_/ok]11P^dMzVfmF#Fxmphir%;K_A*OZ3OM' );
define( 'AUTH_SALT',         ':iPF4i/.L<DuICq_BP87?3|<ai[}ByNT}*@4+BnH+ghCk$-k>pf_P5P=E CzwRe&' );
define( 'SECURE_AUTH_SALT',  'mv`mx$R3V.J*<Hk@yld}w^g$Qvw=)(JZ#Wainq@UZ*$_t=-9fz43oGwbgZleOTa%' );
define( 'LOGGED_IN_SALT',    'kB=o>khsr4mOCT[Qaw8<qgq X|BY%U-x7BjBBCbjPrI8I{93x}nILp rH)_MEDS%' );
define( 'NONCE_SALT',        'b8LdD<Eax@udxy^C$!VEX4cb^4v*)$vOA(_+&ULK-y`N(R5are1(a2;)^{1c~%HC' );
define( 'WP_CACHE_KEY_SALT', '++.mG~p@crs_2!e$xKc^~%7%Mp>GKbf|iN!/W?H|-f(y)qIOxA$V#pV]Crt_AHdb' );


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
