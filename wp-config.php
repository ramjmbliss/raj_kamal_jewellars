<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jewellars_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'kZSp61)~^_tRL8haWtAB}K[3y#ad@A1]^uI85Nj8l0?$#6KG|1P4N<?0UwNKk_|{');
define('SECURE_AUTH_KEY',  'N7N$-cRl[0qtlmoUUv%o 6HRJcY8]fI2@_5RB!IxG9x~e#1fN]syJVAY%[H<S&Wl');
define('LOGGED_IN_KEY',    'EA<+Gypsrr29)ZFS{}UIt#Bzb1I/-wkf`nCa,hJ8M91qQ:s@A)(a{q4_([fIoIG5');
define('NONCE_KEY',        'vOxZR/WkP1o(8Ypp9S`x;(Sz5 NY8Syo`RR)vIV[e:b2N*k(_Q=*%sM*f==VQbUf');
define('AUTH_SALT',        'x=4eEfW~6l{QPw/zw+qp{YY[IoZU4.UkF&IyK^3X|k#c#~ToCa5V&FNF5aVc),8~');
define('SECURE_AUTH_SALT', 'xl7Ga!4~8~T$K6QjB)xJ9&yA%s$3M^1E]:l_J>p;a_o:.Ek~KwZ`!M2SUD)t=3Cp');
define('LOGGED_IN_SALT',   'Vun:X}>Qdor}r)F qw@;COA$:9Yw%@Hz=/tb[:v3gxR,7j?wM[Oy=qf_BdnM)Zw!');
define('NONCE_SALT',       '@hN*jV5x|wU2}5SlmnHktoc.L]>T%8t059l)`P3[::m_66Q8?B:7%pv48 o[ yw1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
