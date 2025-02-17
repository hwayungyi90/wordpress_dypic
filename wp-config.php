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
define( 'DB_NAME', 'wordpress_dypic' );

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
define( 'AUTH_KEY',         'wUis~c}A8Ew<Ir]cd14hh>Vm}?v$G[i]p#Eh Y$XYX>B<-+~PH68C2] #p8&G?$c' );
define( 'SECURE_AUTH_KEY',  'GcPDWpGC8|HJA3;|@oW%t1,w) ;GoQWhzQYq;IKb~Lrd BXHr{oe9kcMZr6v-Qj]' );
define( 'LOGGED_IN_KEY',    '/,F7QiJkJZeV9}0C0_`lA3f)sK_P@UPbZ>NJ})sc(Q8:u;-$^/,P,.dnmX#ufc6n' );
define( 'NONCE_KEY',        'bl[Ly3EWA#AU^f->?ruN@Aj~PO}HM~-|p6AM{bB(kaz!bC01`mn#63E9_8G57a*/' );
define( 'AUTH_SALT',        '7<T0s2Yi}?+7CLUWY`iIYnRann[XGJNCq/*Kn,@mALt,hdC+$%RIN78UvqDEy^8W' );
define( 'SECURE_AUTH_SALT', '78c3F@f2II9Wi$i&@y)<mW0KvHRqAN1H?T,V<K2eux,&S7uBj6;TAq&M+):32C-k' );
define( 'LOGGED_IN_SALT',   'e0u6R/dz%CLhR@4a<)/64`lk,?uK/59g $R<Hi{LERyL`m?o&{4O78n|[uO$Gk l' );
define( 'NONCE_SALT',       'rEPAlV@gNzYLo)pC/V78OpG23M9ABiYva`ZxVN _o=O*c2m|f(]asS=q~#sKCCT$' );

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
