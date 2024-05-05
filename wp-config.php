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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eduplus_db' );

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
define( 'AUTH_KEY',         'Lv:=iA7v+~yHb)nw8TQZa{[`R!@or]gZ9b&*jC+3WB]:|gfzZ3tFFurcICNd%y_,' );
define( 'SECURE_AUTH_KEY',  '}x-Q[v^b>|w.ix`/(|c;B@W(}]Fn3x?b*j=pM[r]Aj@$=nrW1Oh~c@A8&)bhg.eL' );
define( 'LOGGED_IN_KEY',    'ez23!fmDO!a}?!3HDocSq}TikL)r(x@B+h=n%std6xc>5s^rae-6k|.NoP~}(RzS' );
define( 'NONCE_KEY',        '$~PtX52WXD8-5Po([~J$Mg& u@R6QC!WpEYA]&7;-,j41qikv<iP^qB_a&&UZA7z' );
define( 'AUTH_SALT',        'i<1K#wB82+gu/ ~J,JuMD(%QmCbI&Z)y<)PUI ZKAsDm::pN|#7EIgY7`hl/>mGL' );
define( 'SECURE_AUTH_SALT', '5_G9$|f^25p/H!pb|e 1bGClmV6z=EPljPC)pXl7N}zELsQbwM&TZj#*U^((|f@6' );
define( 'LOGGED_IN_SALT',   'bC1N+lUP1.:D8elB)g~9HI~P(|cSGL*^;[bGO=FL3[$`]R*0=sx*c{r|~Dt1dC/ ' );
define( 'NONCE_SALT',       '}ukvJ4gUPaRRk`53g)H@I}J}`(D)! kDtfZcf~n8gz8X[[GhUn]8O;6gkm]Vq_w>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
