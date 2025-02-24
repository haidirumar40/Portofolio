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
define( 'DB_NAME', 'Haidir Umar' );

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
define( 'AUTH_KEY',         '+]7}T89zA/:@ucR9GKO#_~wR<&,i2Y]Jm8H#zi9`=GbC~;QCHFyZE*?@Yh^p^ejE' );
define( 'SECURE_AUTH_KEY',  '9C}`<<a>Xs,99?Bj~oATQY>W:Xljp6l]`BWa1e}^.ql_p@v$bfQP!o[*s|;,X}HY' );
define( 'LOGGED_IN_KEY',    'wm:[I~xhA%pTuCk%zFW]SCobV)C6##/VN!)uOg-c@0FSF$}YeK#&JL*x2Eh^-1U;' );
define( 'NONCE_KEY',        '^dH4Kku*49G:s; *2n`Ypw#`aV-E?W_DZjkj}e,9QRqsI@_-O9VQF2/HyA!lH1i,' );
define( 'AUTH_SALT',        'hW.lR)iF&Kso0vWDS2`Al=*d/ql|ZA}8}=0~_ubPF574bu$0w5$_g*ds_6h]NY,m' );
define( 'SECURE_AUTH_SALT', 'rQ|M98;[KobWwhGP`p@_b%c;1L,MYWnXOQ|xcag]Ij(VQI6}(,F8)RK?K6YC{F&E' );
define( 'LOGGED_IN_SALT',   ',$r@ 2VqUJ<]B)2994adq (j*q$,pBF>ohR[YHvx$kdLbGO>|tn(5_P-z{e|l$^g' );
define( 'NONCE_SALT',       '1kHx4(P##PgB&<-*]WDSA1_/|VrD2OqM<*HXksXtA43r{d>0T-hokbrG#UV=1GfT' );

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
