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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ']Nn:UE+)k;*ucR1px-?U2!M3tX>8^#]BB@k,sNc[v*0(_M.Q=;W?WoZhut^obMtn' );
define( 'SECURE_AUTH_KEY',  '6^^?QlABRA2 C]J{z&o_z)Gt}J^T@TXk+h<KP}MXbYD]OtNZ?@Rv^iIn%#FIW~|=' );
define( 'LOGGED_IN_KEY',    'E@2_Iea] >~TUE1?sI1)lTb34B!4Kv7d [!H1vGzI3a5lG2zjarC.SRCDzrZ!cMS' );
define( 'NONCE_KEY',        ']6M+I7Etb6BS9,;{$*LXuG0t4I2G7A1eW-bJ78K=&7#f11;NPP}qopeux__`r#IT' );
define( 'AUTH_SALT',        '<@]Ay#O^s65qb=55FXLY{(,%45AJcu`)s<aM|1@`,Kfh*GuH]g8_,l:B&XGN_*:K' );
define( 'SECURE_AUTH_SALT', 'J(y{F(kPms:*lyV7j)|{K)ZYT`QMPm}XG~wLC6NF(S|d*_1a>r3mjoQ%U,>gn]w1' );
define( 'LOGGED_IN_SALT',   '4upiA=.~Y2}z>vi~H{=L5(_vWrCF}g,#XtQc|eetyM3N4tI=A/AVQGiitJ.laOx]' );
define( 'NONCE_SALT',       'K9$kL[66}tP%gAG,:Z7DMTGhv|Lz;PR{i:y|gV~9eGO6U^G9vqRZ&vv5l$b,b1tU' );

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
