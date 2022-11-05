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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'createsites' );

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
define( 'AUTH_KEY',         ']7Op<a!uIURRv= Y8$_:1<lCcH<WuJw_;QS*~G?g-Od9?7BXskfXox18&@+0%n>A' );
define( 'SECURE_AUTH_KEY',  '}-&qO^TD|u%on%x?A|[r:ZRHv8;QVqPRmh^Jwxj?9!v|byVCK;x4c}..%=YQ18][' );
define( 'LOGGED_IN_KEY',    '8bbzc6klS`:X-CJlk|bLR_[DQ3-F,n5dc[;G+M[Oq8:M/Dej<=-5ujWH@,86:+&`' );
define( 'NONCE_KEY',        'vM;caOQKA^%/6|c_O02rO#UEJIgxQ)60tfKUkaT%B4+3mCv?wK+JODzG4EV4lD7.' );
define( 'AUTH_SALT',        'oT{?2KT7s~*fpJE>@&Q&_LeW6Ifcp&[.d)1}8DB*Chr@)`vz-D@l1)qfOjmm_)e^' );
define( 'SECURE_AUTH_SALT', '+Gm&0F**IxG-x>r=]7E%sL;Y@7c>tf>Cd9TMYk}I1LqF4c4yfW~iMua9`T=X7>e{' );
define( 'LOGGED_IN_SALT',   'A(31P){{&9a[*[%i3Y,Bf~c:8G#c[~?wg|dlSX%M~g%(wv/B5rr_ KxI3;CymO<S' );
define( 'NONCE_SALT',       'uVrt.gYe|i**x~yd5<gAEyc(GQ`]!1{4uHzU 0:vM8J]j!/7:$I+B+6XuCsLAu@8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_03';

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
