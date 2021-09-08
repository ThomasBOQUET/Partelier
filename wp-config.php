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
define( 'DB_NAME', 'parcours' );

/** MySQL database username */
define( 'DB_USER', 'parcours' );

/** MySQL database password */
define( 'DB_PASSWORD', 'parcours' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'MiK~X])oBX5V_ubJvyd4p03/%Je=}Ed>!3q|{>+rsu^%;3FUciwP^H%rh_yoQm;5' );
define( 'SECURE_AUTH_KEY',  '}s4|=OXXm.$&ME7m!txXVz*1]={U2n^=Q%|,A[4Vjeu,)Y^*?%cmr}l/Z=.}?V>?' );
define( 'LOGGED_IN_KEY',    '[aW[h({ts_]#$-UYIRo%[/DS;OUELmM^WavZ>>Eu:|+,69RSbcTK`@#s`:O:iJ5&' );
define( 'NONCE_KEY',        'j@M,KP16dDZ94{I wQ@(=/4&ez7WyqFvrP7;a%G7L6nu[rROWQ1vp/lYKaX7xHn>' );
define( 'AUTH_SALT',        'ArX>THD|c#$0D8c@p`|41|,F{VBn8UZx{c*fHD~&ecn)jq]QE{D+l.%~7:*EIUJr' );
define( 'SECURE_AUTH_SALT', ':YB[%jN]r v65!)Q.io8E2-$]:dBDN2;RjTGRJ%W0iK3sDL<p2=y`wxi8@O7`kk8' );
define( 'LOGGED_IN_SALT',   'd[!?I5cuEc@Jl#U.}jsM,>{X!(Z7,$UO_G :4eF8B|jaF!?.E2-frd?rUnh2Lj{1' );
define( 'NONCE_SALT',       '}qSVe,$[K?h$d}+32b$#rR8%RV7L:W09K7nI;qMk|Hzsnb/$o!xwL*$a+*abdKf#' );

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
define ('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
