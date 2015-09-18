<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '1794942_9771');

/** MySQL database username */
define('DB_USER', '1794942_9771');

/** MySQL database password */
define('DB_PASSWORD', 'yFiKS79C');

/** MySQL hostname */
define('DB_HOST', 'fdb5.runhosting.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g+%.>%oU[n9vwDbvHAPXQ:qw/bH13:ck^m}Qknp68k>pCoT-GT|0@Rto!V-@Qkr$');
define('SECURE_AUTH_KEY',  'Qq`o;;dYY>8,X3p$eAfYs$$M0 V=#FSG 2G|9^d7FEE$sEnaOLM-645t;(y}#w`t');
define('LOGGED_IN_KEY',    '8*?:fvqzCw4qG~9`Z;w-(` {$~|`N#[$6u:JdC!f/q:rozD32~Eb}b<JQGqG{_U|');
define('NONCE_KEY',        '0_f*a2K*vQqCj1_^tM35=Y0<p>bsc?G+|+S!S,}c>Nu>,*il dUq0jxlAzpx;-F-');
define('AUTH_SALT',        ']?nB!+Z(Wn[aD?>OW/.Ca0uo].P6hQ4rLTb*`ATO`V[q7$s#iWg;R*DM7|0o7fsU');
define('SECURE_AUTH_SALT', '9Yb4^>{$m=pid*iNGHhYp{N5|)wSeb3YVD(},]^]#NtY;~&7Dj+.?:>3F5C3l:Hy');
define('LOGGED_IN_SALT',   'x[z?UFKJd8C-[C_s)|^+*j_?m<GTcCtswoG,`1Nh|;%^5FXE5Aj`dcX/)nRs#e&=');
define('NONCE_SALT',       'p*Lc=9h:qlgu%z^[%#@!!/+~i29#G[(PdO0WyUul|I6I>upb $q` Sn#I8ge7|^g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
