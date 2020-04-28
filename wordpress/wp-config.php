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
define( 'DB_NAME', 'wordpress_tables' );

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
define( 'AUTH_KEY',         'w,l-l#v<E%!5<(#pf7Sij[cQ;aL}l,2DdzFv9kn_:|5NZ-nh70{4,+Zmk6p^nSn7' );
define( 'SECURE_AUTH_KEY',  'T94D;u*65/bw;[XXd3}N$+?~1.&#$c~0$}_$;7Mqidpt42Q!3^p-Q*ti,^0}<_M,' );
define( 'LOGGED_IN_KEY',    'V7~.3qUC Pe4FTo&fTIu-62}<vg%5t,og`=3V%G{0OEB)J+wZM>y)IxPID4^)xq3' );
define( 'NONCE_KEY',        'pxj`39|xK8~{dfmv^/87L17Z4$TG-csc64J?A*MpW*|uMZdiEbLey<5l$cCZyZ{v' );
define( 'AUTH_SALT',        '~Qw2-A3%(hMmHw@LpiaJjRJO$}o~e1iM+^U]$h7kXkLaSxlSf?}(WLaP bmHan(8' );
define( 'SECURE_AUTH_SALT', 'hu qf)/DWAH1Na.?p>0#u:0&drgg0@= !UZ/:uXNES&U1jiNznR-2U&:|9@Gy U{' );
define( 'LOGGED_IN_SALT',   'p$8GDw1s0_8fHco8DC!la WMj%tGi{{XA4N|e.fe 4OnWt4=kPlYM,ks9Se3ed`]' );
define( 'NONCE_SALT',       'p^dxA2M*>:+lPz N%<n:BGk<Wy(HnrIq7LW1.f %/SO1*.3R0-U{WSi#qJS=Z=`L' );

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
