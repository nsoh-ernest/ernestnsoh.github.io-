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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ernestnsDBolrlz');

/** MySQL database username */
define( 'DB_USER', 'ernestnsDBolrlz');

/** MySQL database password */
define( 'DB_PASSWORD', 'ZldRG4uiXD');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '51wd#tKpVSCWG~$mjTmXTE{+E*mxiPmiTAe6_A6#tvN3RN4,3r>vrc$nEbIFU');
define( 'SECURE_AUTH_KEY', 'E6qX<uLePL24rcvgcJnF0J40^B}f$zfQbIEbI3_sZVsZ1VC:[C:k[wgc-g8cJF0J4');
define( 'LOGGED_IN_KEY', 'aH;]x+mSxheOiS]B}y0^$j>yQnUQ7b3.7<,r*XqbXIG0o|sdZ@kVZJ0!FB}z@oVz');
define( 'NONCE_KEY', 'ZO!~8wc-wdNYJ0NJ4!F@n!roYWH~2_*_~pWaK1WSC[G~l[|wd-SM2.<yfP*qXbI2;');
define( 'AUTH_SALT', 'tAA<.D+m*+mTeO5SP5#vfMjfM7I3^73,r$mT$nUEPA<EA<yF0!|sc}@kUYJ0UQB>F');
define( 'SECURE_AUTH_SALT', '^UQM7X^7,^n{iPmjTAe6<A{<yvg8RN8|J!r|vrc@nFYJF0Q>y}$zf#dKheO5G1~[');
define( 'LOGGED_IN_SALT', '{{ygN8VG0!RC}@0!sc!rJgRB}N7>,B}zk*XIfPA{PA<x;{+m]xiTqa2WH2_H2_YJ3');
define( 'NONCE_SALT', '#D]-l_teOWG1O9:~E3,uufQyjTEbM7A{PA{+3<yi<xiTqbA{}@oYvgVFkUFJ4RB');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
