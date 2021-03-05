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
define( 'DB_NAME', 'arcbox' );

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
define( 'AUTH_KEY',         '3b?nV|NN-O_D:Fu34N&JIjeg<w]YYnu,XCl_A_J@O)%[fdZB~ROSNjbfTZa5q ve' );
define( 'SECURE_AUTH_KEY',  '+40:C_I>eIhL_x k5a,>Y55={uhkWr6gQq*<E)GXCe&~k.o!Bi,@3jMJj/0lku[s' );
define( 'LOGGED_IN_KEY',    'wlfv8lP:Zp@n,i[GRRU*[5D%DPv+(?&}#nIm`2s-~M!h(<%o{y(,;?T[ks?,va}e' );
define( 'NONCE_KEY',        'a<x 8E-}WN0@c q.N=hvos<QC*2`Af/nD e43%W!pk+7u*X/B#YDb-Uw=$z3dhBv' );
define( 'AUTH_SALT',        'Zo@QjZnDM0z,{#}&E-GaXY6Hp]|{vTqu&*#e Z(4E(sb,<MMsh0a!C{&Xd83+flO' );
define( 'SECURE_AUTH_SALT', '(1hAE<^x^GaM-V;=}~[`cHO[Hb}I@T$ax$/4&=!,rS`o` LL.Y3C/{P0b4cFTCVt' );
define( 'LOGGED_IN_SALT',   '>ZrhAQ=;]1`b)}r[:) c467*E]DR=PT$wy#;J2hCV=4MWyj0hzSfQF3U Z.5|Y)g' );
define( 'NONCE_SALT',       'W0#3D[4dqOY*Y-<f#2-A8~>5V6nR~{T$sZZQ{`@*qS5I?2@Eu4S&5tqbV%uxv) &' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_arcbox';

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
