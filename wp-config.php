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
define( 'DB_NAME', 'esame_wordpress' );

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
define( 'AUTH_KEY',         'kXOT.rFSLT[[ %QBlKk;-=qa}M6~u9=a^FDv#}xJ {hskz`aP^iPQZ<IipWl4o#5' );
define( 'SECURE_AUTH_KEY',  'zv(Wu`axOKE-^MLOeHN[qLHH=`:KneSE:Z}i5l>aJ[UkaT(;L;7ml0XfOJSM*H6z' );
define( 'LOGGED_IN_KEY',    ']s6-Tntl2ME*9$ke{J8R3j 7~-`FM m]lGJV~#msoqRDWe#&tS9j9V|)DX={-uMx' );
define( 'NONCE_KEY',        'Pmopz2.v$majth+P_S1+1#s6]M_wf0JiNF+PHAQWsdD![AG-z~{J!)Z[/A^kP{)&' );
define( 'AUTH_SALT',        'PV&E.|Y>e|cJ@roIzZY}Ds]}QH<R`<wz]:HKvzQLh(5sti!& JbS4#EFL&.M@l?e' );
define( 'SECURE_AUTH_SALT', 'Q+AT$rH`/kAT9p?d*h#O1$..VCfF2/!shb^o{4r4cg,@kZ>J{1,SgZj?d)m$^0cj' );
define( 'LOGGED_IN_SALT',   'S4S<tA-b`2z.w?pxEDuG828D$Y;D3=_YIU/<:L1fJ/F>0w|EyGj1[Vvl.kQ19Y^z' );
define( 'NONCE_SALT',       'BOMuKjF8j|/W=wa,gFm:~gOV3kcRP]^Gkl==JBKSx6G!Zq%fI%KG}d)6Cj$tc`#d' );

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
