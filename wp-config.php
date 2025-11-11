<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'g[GPVyB<Fz,i$lWrMtq>C?qy_acirZXarYF x!UfE+f&c9DtGO-kn>@z{7j`$NAU' );
define( 'SECURE_AUTH_KEY',  'p7KcD_@ex>dO-#[.SSY,=O ynx|Ap]l4C@jR=Kp,e;HIH4e6fvEyGS!EhR&Zp]he' );
define( 'LOGGED_IN_KEY',    '5[c$K@(p^CwMh5A]V_c2mH{h}m~9OX=[TWQec~sdIpT$;y(us!Gu=Gyqo xcibqZ' );
define( 'NONCE_KEY',        '&A!1%=I^,yi.eTXW.KPvHz0X;tNbe1{|dX1Sb$5NO<~O/Er~=D:(iGiMY=bf!fuR' );
define( 'AUTH_SALT',        'L# Z.X@c~jZPG76,B@=U[Ly>Ib4L!oy9(,%LF^4L-pf<Jj8dTa5_aUuA{Rg,LVtc' );
define( 'SECURE_AUTH_SALT', 'vW*O6f{^>Y>=UW||qnGab+(Q<@02mmqVzN/O>&v52gj!Vm,:XU@XTq/0N_u4=52h' );
define( 'LOGGED_IN_SALT',   '8P1um93/b~w5B]G{9~.a}jP:%{P1zz0OH}=/x3_-HB/AO=eVtl>=CaER<@es)h$$' );
define( 'NONCE_SALT',       'qjW}W3ogN3`ox3:$bxIuNS0-oC,a*yqN~j-PpR-}r[^m<V~xNd*?znVi%o^FF9h[' );

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
$table_prefix = 'blog_';

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
