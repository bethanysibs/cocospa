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
define( 'DB_NAME', 'sydney' );

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
define( 'AUTH_KEY',         'X8u;$TxXCDuefalZOEN*^-oi=+d$*#:&E8KC{2PY06LZaoPUo$g$nB.@Bq[k;aa1' );
define( 'SECURE_AUTH_KEY',  'gZ3=)0FE,n]:Cn41J.R&EAbm+#K=n7Hrav[^k5p%mmSwvv,_yGZM8uHz.e|6&d6e' );
define( 'LOGGED_IN_KEY',    '8f$,GQO(9bg6<!F#O`n}0{6+.]VO`*[q:[u>o&A,LYsYaB+1.V%mv}W]:gG_%+Rl' );
define( 'NONCE_KEY',        '*0VdET:Ez]&*jj|X<lsDNz-r2G#pT~=@3b_3.s]vNDEHLHzgd10/roV!/%v0B8k#' );
define( 'AUTH_SALT',        '4s@?.7W>bheLDB?2xExMp@KV:%m:<vCU9Lm&D,qM5$Hie$- .R,2bh #R6ea}L1 ' );
define( 'SECURE_AUTH_SALT', '`w=.8<bO`FqH9$u${^.*kHE^%7B,!p`#e]q@.oYD{DPvN/|>no1r{>MR`b{&q4I^' );
define( 'LOGGED_IN_SALT',   'b_LQ`>QV;``AoRuCKd@NLdXSFqHyS-O%H)!&wVJsM+t$[!3!#:eo6|!7qiigW8^u' );
define( 'NONCE_SALT',       'p_EmbVS;or?)^4ZIL#DOL!nv[/`ReAjWKJ:hRiWUemc~YRsZ#%8)*q^7k0P=j@<<' );

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
