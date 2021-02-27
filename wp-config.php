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
define( 'DB_NAME', 'target_db' );

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
define( 'AUTH_KEY',         'I|Ht0<N~c=A4Jc}2%}zTuM}weo:2ffeL<h4eG}C~4%1eRTU>gUQzvmT-)#Iwu8Ef' );
define( 'SECURE_AUTH_KEY',  'h1T_5eff&b?Uu5OXKHL,G0rw``FgD&$^.aW|jaS.%&/HLaf`yZ.6p_]I8I8p${2;' );
define( 'LOGGED_IN_KEY',    '5X @@ft(K=SL!#3W0TNUxJKqbmEcz!qS}pT}Hq;Fv99Y1ngg8([H8npuIOoC6/#T' );
define( 'NONCE_KEY',        'aHH$B+>]r;Mkv[5Z NH6th4gDgj4ao(hzsK;ERl5{rTrGU`f#|}$%Wa8$5^J(aK3' );
define( 'AUTH_SALT',        '~CLys2}P6qt2>vE;SATNLrEI_laI>,Wn{ XsP-z]?pk[Tse4#-bIaty/_e>B-#rS' );
define( 'SECURE_AUTH_SALT', ',Uc?Pn,-#d]sHi!U@tdT05k)+/#KP+,il$-P7<{b*tF6p1*G;/xCu)RBk,2/:bAy' );
define( 'LOGGED_IN_SALT',   'B-ngIvbp$ZEz.ISH~?13:$(|zMFCQ;@7/Q@)IJe!x<3ukv}3LVnPzG[WKZrtlL=O' );
define( 'NONCE_SALT',       ']7URMj7j0xH8^]NP6e|ox1aE^SFL-aQ!lA?-2XxW!0r<ppE6U<H~<,O=IceQpt%G' );

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
