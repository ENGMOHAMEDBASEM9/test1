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
define( 'DB_NAME', 'test1_db' );

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
define( 'AUTH_KEY',         'v2k1D>+PMJkMCo?TNE4*LMc+h0}#%EJ>2h1QmTUwn@iL7f2`838 A#oC~i`a0r3H' );
define( 'SECURE_AUTH_KEY',  'f3=@#oNwGXNo=Yw0~?Aq`~NQ0+PU]YRA8D},0}8-1)O!5/#:5Kgm^^Z7zX`_NG# ' );
define( 'LOGGED_IN_KEY',    'V>O?y+e|@XmaW8P7`mrxX-FhpPgNJsi(`RFGc@ZlQl]Y$%5vJqFNz=t6oOh>J{J1' );
define( 'NONCE_KEY',        'e4&j9+~[?k(lB1`r;oyl^Ve:=0IBFnj[UQ-wBY6o-0s[t}!AdL4)~DKp<IdTRmow' );
define( 'AUTH_SALT',        '8/zs*dime,l-X5J5+s03EoK*{?8=~!:4n)?WR$p*?uztoI!8R5Xik;2#6E`[$O_P' );
define( 'SECURE_AUTH_SALT', 'ch5LIDT7$AYCD]aG!$8& owAo`Ou.Y6JWGV42+u@h#Dazk`omOP1qe.Y.}6QE1th' );
define( 'LOGGED_IN_SALT',   'CXi<5mI1g1X:&KbsS%KZHR@Cs{bX9uFJ!%Rn>3Cj$/|HaN$&@pP_qI6@RQV1=B_&' );
define( 'NONCE_SALT',       'i Mlg?tu-aC~CFOFZsvkQF&[!Cz^IPNcQ+wyCF7~#=ICy{d/}Y:bm3MjD1)J}K|F' );

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
