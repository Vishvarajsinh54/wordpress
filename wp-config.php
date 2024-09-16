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
define( 'DB_NAME', 'demowebsite' );

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
define( 'AUTH_KEY',         'IoG#vOLGLY)9^+W?&x+5E~,#I#;kL% $3za6J5W:7)Z[/1V?{xN~;?J|R C3_+v<' );
define( 'SECURE_AUTH_KEY',  'I}I-e1+-$1=)>j-u58ETU5@pRp&><C]4+5~S`yxL+Rx]NT6:rm;t(Xe2prto=MD=' );
define( 'LOGGED_IN_KEY',    'EVrindv`zRzCW3%,-LOUm^eWickG2lgd8S9HaNX+9{lzA&B?Eag=&H3vV=YG_}GX' );
define( 'NONCE_KEY',        ':,p&f]%?MP>F<UActMQ+#+{t<M^HUPK.4rIaG>k7/xdf$bZ DHzIUp9?pTbg<D2}' );
define( 'AUTH_SALT',        'hO]a?f+QZk[}umd$Vb_5o#TSl~`L+1GDkjQMvR(B<JuFOs6_b]?j!rs_J+l.igrG' );
define( 'SECURE_AUTH_SALT', 'Rn7nr{o-UQ0UN+|q0{)NWx4YeQq92/g&`3g{w]K7VH0p!-20t[EG[bpkGA w6rcV' );
define( 'LOGGED_IN_SALT',   '+7-%MbX_6iCJHs=)LOD#[q3[CL;sUifA3t4r%`Pn6y.Bs,DM/oet;.Qr!6J`1d*2' );
define( 'NONCE_SALT',       'ri=55z%;*If7R %D_m?iCoTNzCd*KFF4*OFYG/sS]otQU~G+IvoqQ22(_eP ?c%c' );

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
