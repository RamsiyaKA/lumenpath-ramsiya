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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lumenpath' );

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
define( 'AUTH_KEY',         '1U.in;ighQXq?D0RxJfnrU^5r}K} EtF6k6$X3((Q&-V5K$6J%]r?GDvz]K,5T}M' );
define( 'SECURE_AUTH_KEY',  '7rxts%#tN!cTtxh=4V l@,X?~~@DY=db|Tuyzp4q<cioVur>pa$q~9*_8:s^]:XA' );
define( 'LOGGED_IN_KEY',    'GX?eEjf4?VH!Z<#_*[YoRgK4L+U{yxNTQ&IUGa_^MWeoW?Vwy+x&f13HbB-ji?;w' );
define( 'NONCE_KEY',        '8R}=Q[nY*g=!9Jd:S9OIs*nY*vc30v:&X}SWISwu8BvPJH?UEV%n9K3G7Kovryx&' );
define( 'AUTH_SALT',        'FW(&L6A1CY^ceqxDs;w7^t! rQ6r0Kt!zAwJ&T;09y[%@&p.$Tf*`3<rk#[%z_B}' );
define( 'SECURE_AUTH_SALT', '0Zf-#5-)/oaZ@saQEeXp_4^}8A[yPb~KB^7k<?o tKUeB.XoJW==hWYLTFA,-f+f' );
define( 'LOGGED_IN_SALT',   'l-`v#.<FzR[!@_;yaVZ/[r1[VdW)rUJ!_;N^0NrOpXL9$O!KhGFvH S?ji2L&XW5' );
define( 'NONCE_SALT',       '4]mT8&{)w(yzng[1VBU1++Mza~!no0oWg|/o7/tvu7~f;.b?E`uC_:7Blfg<,.&m' );

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
