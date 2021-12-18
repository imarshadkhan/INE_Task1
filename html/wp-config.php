
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
define( 'DB_USER', 'arshad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Akwapapp77' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '}|h~l[JM1ox#(8@LGsDWs5Q=|lyu|dk(p[>r,pdQ)SlKD%>6`zw2tu/^(m|t*{h(');
define('SECURE_AUTH_KEY',  'QZEtmv{a%Vul8ABaH(;0d?A+p<U( 0mC> ,~@a&odgO.O4fc]hPt8we<umMOaJQV');
define('LOGGED_IN_KEY',    'x^SkM]llowL.-Oft|M^/od==8tX+H|RF+h 9e#uV|>O7RfvJA+mn)0-[4Onb%]Gi');
define('NONCE_KEY',        'PGTeB^Ir>cdkWU@fsps.`5-11d[IX49;+ylz6Vv]MWz>_L|W}J3N1?Ry%jUCBp/j');
define('AUTH_SALT',        '+*fH~534O%}-etd~%UYpB]_m>z4l@vVW1_sn(]:a_R3<xOhd-h=|`s-hfFUh&+fw');
define('SECURE_AUTH_SALT', 'G]Hp4WX2JL|o^e_Ja#j!fL6 tLwbI%=|p02A4Plw+NonUTB]y=Q|r5iD;=M?-7>/');
define('LOGGED_IN_SALT',   'u9RW|776W|IxLP~.A0<u0<<OT!0*,$uoC1.^5+}^oc1!ld|GkA$1uPEM+/];u!n|');
define('NONCE_SALT',       '+iui11SR!LLr$.7Vh?bjg3#bl*X]lM0|f~vvP<;Kho|ge1 XFOtd}%wxB}4*)QSD');
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
