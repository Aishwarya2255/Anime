
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
define('FS_METHOD','direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Anime' );

/** Database username */
define( 'DB_USER', 'demo_user' );

/** Database password */
define( 'DB_PASSWORD', 'demo-password' );

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
define( 'AUTH_KEY',         '{m5Car&[h$N@*@M[!1AIF;K& fE[ds-EX[n16XGpc40k}PW@n(!$/WZ_Ju,I^I-v' );
define( 'SECURE_AUTH_KEY',  '{1)j%46M=R@l,fnyWkq62p62=&.6}9l<>bB]?[CgFyV;c{Ig]@{>qHN(otTNi6X~' );
define( 'LOGGED_IN_KEY',    'IZzrYUtX(X%c2,%ZZoma1g4[nEL(-^.TvAK w7FxT=`|PJ1Q/~z~i**77Z<_dh09' );
define( 'NONCE_KEY',        'dMwo}+4j~S9]k, _PI!-J>DV}O>-uE$8g$K J1#EM bX4|+HAA{<.`(-.G0EMa[y' );
define( 'AUTH_SALT',        '-ycPOHl%|3jBy?<UVO9Lmu`@;prcF`7Tw)PRp)|]s*AcA^D~n8x>zg&^[dV0Dusb' );
define( 'SECURE_AUTH_SALT', 'NyV|h /}]QnU5G Rpd++]%YZhb0a/S#QYld pP?XYW;l@]r1]KpM3S@#[/VY:T3c' );
define( 'LOGGED_IN_SALT',   'LM!. U7Pp67tCO j#-K%3Ce[Q;5r7Rjj4TXG/(/9!Pml/<>LntmH5}(+HfqXH`;_' );
define( 'NONCE_SALT',       '7mpHJ}(qjcr!/7A|X)Rcb=@S c+eXi;$/$.Yb1yIztPB%+_X?-txE5B6)1+=uZ.s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
