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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
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
define('AUTH_KEY',         ']Cn#H6X *21-fjyJV!X]`X5:%_w05SqC?l`5Y!t}qi?IuC/Y7Ji`)HixyJ6:k90J');
define('SECURE_AUTH_KEY',  '~]!+i$-BZ-6rIe}Wo%+?5V]FI2L1/+h(}N[*-xpuKVRMwH:jFbHUxyw1)bDh7j%f');
define('LOGGED_IN_KEY',    '}|.1`a%vo1+h7` |R!~{Cb4Vi066a3I@Y1Nt!KC_KZTI|?/zX;o%D)/}OrY8P.`w');
define('NONCE_KEY',        '=%l)_dQ[2O2;cLz|aACb)Y]){+!RL]siI_^2XMuI0-qdj5=zKWJnE|?/CMG{2$OK');
define('AUTH_SALT',        '!]Y4ojqNrt0,uA4s@|`0aHt,zYfIwyq?iowLsB#g@Q{qbcF&t?9alF3tGFiK,=aj');
define('SECURE_AUTH_SALT', '=|F#eZ>$qKu<`|LRt1Q]^)ja-pNm|zvYqa1yH[+|7dX_9qw|4[3;KQ#~Y}G|LFLV');
define('LOGGED_IN_SALT',   ':dj0+<<dL=l0)feeL-g<tNYm=JX03+)XoF{PnMEi@Z/6ik)k_mvF0L}xYYc6Be$S');
define('NONCE_SALT',       'N$3wqU*B#yo*DS(V|D[ey(EVb?4zkMQZF93u?q(]t_xQYT;R_i9*n3fmaWXh,oK|');
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
