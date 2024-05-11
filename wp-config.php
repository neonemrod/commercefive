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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '0#xxBTAX&Ph MCO=bY##19lW`@L_PEl,n#MA&Q^R}v@Oa2Q!yzzkWs<@n9S|FgG[' );
define( 'SECURE_AUTH_KEY',  '^qFY2STz*]<fqoGYM9PM<s Nk=%s@2?R^#N[8GDk-PH)FT?;:e3`YC$.2:q9d$8 ' );
define( 'LOGGED_IN_KEY',    ':}xK$=pZ!=-t1MwiPe.BrxX!v #!=[|n)=]J`.U8&tvlU3^58gPT*6UQq zAhBvm' );
define( 'NONCE_KEY',        ')<uWAfajPK:Dp+g6L<O?ylSN>x)5~(Mx;vSVAX3}|}C[v0S.OaEz?S.N+.9,kDA.' );
define( 'AUTH_SALT',        'cQZ 5bEi&nVnVbBb[3az!T%o(`0y=8DorT{aUvG>9VMl,;pe$KaZkiq5:{XGuh->' );
define( 'SECURE_AUTH_SALT', 'wJF(%j9Q#FPr/5qYF;I#EI}rRv M0dW6nrs&l,w;pR&? BD,0RK]liDjtood@4r_' );
define( 'LOGGED_IN_SALT',   '``$@?&X/]>Lg%`@^$-165dQSlLzlf ~:w~.(d&w#Mzu}=$hTTd~Qvu4kPlXib/gX' );
define( 'NONCE_SALT',       '87F;}g,HOY9eTlicu gVZ* Z/g{Din,:HA!Uit`.r6`rr`k:&f]<*vanx/PFGRX2' );

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
