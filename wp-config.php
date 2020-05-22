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
define( 'DB_NAME', 'movies_db' );

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
define( 'AUTH_KEY',         'Q@Ja#l4yO-o<6;!PO]{I_i;*E{Q=B}w`>0*2vDT=2hx,j6bo-XKp&Z?v4>VJNw+}' );
define( 'SECURE_AUTH_KEY',  'WvbsRQ^35$&!qwr@CIl00>HSZn73mrD)5@RO+}<f(i#(~,[P:Kuc1*)^g)+y}U2{' );
define( 'LOGGED_IN_KEY',    'Bk5wq.y9%dNV3P2Iu8O:w;p>XWjA3xq}`K7xI!josXa{+GFMV30u$a;@:d,T.GqQ' );
define( 'NONCE_KEY',        ']}MD3L{{/}3eAyz=med#T? E8NSVqyfmxhvr0P<hRnZJ/JiA; czsyg4F^Hg}S_c' );
define( 'AUTH_SALT',        '[feDu@HXIF%xbMN;CeLxpF#V~W<L]z`1p?MYgC)u..+<DS&aM)v3[kfT6cV)bX@B' );
define( 'SECURE_AUTH_SALT', '>R+UrQh>>t!9~c{wu>ULV4Gn5M//A}hE~xDo2&=m0&VZ={;lSBrgsLCykjf(e>o7' );
define( 'LOGGED_IN_SALT',   'yC#3b+5]=mKceP63,P1+ekrE$M(V!Nh8F/V./l![IaI0&aKQ!p{!p22;N6A)+$uE' );
define( 'NONCE_SALT',       'JO5{0lB`49$1AX>,4TZVNwJj~;[NqLj]S+w4 X9e,?AH9I.Nj?[>]@|lz YM|E&6' );

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
