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
define( 'AUTH_KEY',         'OgT%:lPZ?B+]bMhQ.g1^Yd?j@*p4|zhsO[[6tOa91_6Vr32.*9DO:Q:drYY4vm5z' );
define( 'SECURE_AUTH_KEY',  'BQ+Yg4@A)hbB(Fg>~6fOB#@6MLSAis8B&mx>Y,qRm}&vC]fcsY]0J6IoWk*S?(1W' );
define( 'LOGGED_IN_KEY',    ';;q|_iXz_3400fiK!SNztU`_nxj@^iI#;G;@[<D-:i9-(#TT0~!3DF;k:i)5^}]8' );
define( 'NONCE_KEY',        'pa]^8AjS*2x6%sxa3tc0h[@CQm=]sEIOV8~>DOwSaVpBm3q@h1;%GjLhm9(g=}yu' );
define( 'AUTH_SALT',        'f2{lC#yPx_^mD=|}?*7*UwnBn$ <#[PlMq~J:x8;2W?+DnPq_uB<63gAVlr>pU9o' );
define( 'SECURE_AUTH_SALT', '0-j@ovU[41 N#$9%XiEw nY%ClF)sO8@dQ@lG#A?mvAvl3g]J31jHtc`~Ft{Bpmk' );
define( 'LOGGED_IN_SALT',   '_?UemtP^Rz};+GbTKiNQ*E9!U5A(gt?1JQ_I%K:bzOhrS}-R^U^;z_>jEVSmuE2*' );
define( 'NONCE_SALT',       ' xol%b(L=lC@K}G@4h(_NVuu!q)dC2E)XpCHHOP_4.n}{>oVm7RWw`#.p|<@Kk4i' );

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
