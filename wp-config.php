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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'S`#RzQ?jkg.yh)=8.crsOr@W3|3m^xg_=2/*ELh_/b5TvCly%|ZYgn6w+Nl4ztu-');
define('SECURE_AUTH_KEY',  '{9Y+iddiuF)Vg!u+c,&J?S~Sy}O6LYnl,CycrG`_eW9KN;-Ee|lhWsn#LQKo+~0E');
define('LOGGED_IN_KEY',    '6v(0BKuD#i|(_92`+k)Xc[ZYtVuhB0u:P{3A]W:v[^#:*GpG-H(S@-meb}0SNN=r');
define('NONCE_KEY',        '2~VHSUc31y&[S|m0l?eLXu<_1GX@!()|AgG1]BTVDwXv+Iyt{oo8%^$>C]Tv-r^!');
define('AUTH_SALT',        'Ci+a!7g)a!/mAe[Z+dGoGUmMJLz;0|P7N]^H)brJ^.`I5h+r%Z%:o].qPq=]A^ O');
define('SECURE_AUTH_SALT', ':CIKjRRuP9RA{PN1Y$ j.lO,t0^Re-rSC;l@^-lo>rG!l ^=<-/hd9IDy1rADR8z');
define('LOGGED_IN_SALT',   'YmLcOFu*|MBfKt277_DCiyji)30j4raPT+4r7I-e?IdppNjL#wTx9UHxc[j|?1S/');
define('NONCE_SALT',       'PB5Bdeix^D8&--:-4}-T*=4eU&%[5gISV*26}d&T=^ZWYa~Jw*X-UF*|JZE|br<r');

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
