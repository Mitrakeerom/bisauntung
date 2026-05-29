<?php
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define( 'DB_NAME', 'u601462495_T8VEQ' );

/** Database username */
define( 'DB_USER', 'u601462495_ZoWu1' );

/** Database password */
define( 'DB_PASSWORD', 'nMpN75Qsb0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '3,c.5-@4.;p0f*-Y,~Ve9~&A]$>kS@QTS#pX?:wsaOb8|yGxy__)?}c<vMfSJkP=' );
define( 'SECURE_AUTH_KEY',   'sIA}eHJoa>UuwCRG*Jqm$Mh8l%x2[E9bB?&@PyJ&=8!bLSZ;-R7s0gl4+ZOj6k=y' );
define( 'LOGGED_IN_KEY',     'u,`i[4CtsEQ~q.A_N~gn-FdzWpR>f,}}5Ff=8/n6!AkZXRV4%:_t;?#<zCSQNMs.' );
define( 'NONCE_KEY',         '7r0}]{bovOl<dAtxN= 6[7)|; 8A4Fgu].9VB8j#GJi6mC,SWr1x6S__{n]{n_3y' );
define( 'AUTH_SALT',         '_zVS}.bp,%M`3Q9w~EtHY,FVv+lwY2bnK{y>!H1bG?gK3H,E>-H$q$PK)xg@V|Uu' );
define( 'SECURE_AUTH_SALT',  'vGVHOyx*}?Uh)PCart K_MW)G|q#b[^r!q@Zm~a2qcoVhgu0i(}E)x+$$sx~^2Ze' );
define( 'LOGGED_IN_SALT',    'O89C!vml5VjJ,SltLEti{UYi.B7Xlgf$NbSA Jk !eClH5ct:uF@?b<ak17^V;Ug' );
define( 'NONCE_SALT',        'b*omulhS0!06j&xO,vy9}w/Og%ZigPm]7=0z/Q%kfQ4R=?78t`Tv9p8GjFl(:Px[' );
define( 'WP_CACHE_KEY_SALT', '>;N|VYX?6xDZ9]%+ZG.+c9;%mL-O|W@*#@qNw@1rhE#gb$}_A.AAzYuV^XhUN74d' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'dd05acbb0b83e21de5ccd47ab7bfc6e9' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';