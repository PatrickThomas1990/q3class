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
define('DB_NAME', 'q3class');

/** MySQL database username */
define('DB_USER', 't7r7pd6igth8');

/** MySQL database password */
define('DB_PASSWORD', 'Deadpool1990@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7#jF_{<7-BD>eM^rIT.DJ4?X,tp^j{+*u_:uVi 8&RLnfu4y[*.eS}<TF(+l`QHT');
define('SECURE_AUTH_KEY',  'I>hB/8ep)K$#Vg&[N;it8wc>0XC :gObE*ixX;RWgkdzo.dBjD)akRCN|NS!^Q(8');
define('LOGGED_IN_KEY',    'f|Y1QwH:n6D=Ff^oaCG)9)ZCcFwbwoeIrU!9?nRS8PT0>ckeA5.C+wu./5c1fn7b');
define('NONCE_KEY',        '!TitMZ+&PQLa|HTa*:$*0h?hbA8 W@P,>(3?G/g`z!yU =9C0Lz/e$>dO_f8A&d>');
define('AUTH_SALT',        '>ir&1)^bjiQ>{ji2VM3!E51$WBO?UL%N] =,8]Ito)g:S^[NzG6)[1&ctz/f*?`&');
define('SECURE_AUTH_SALT', 'HW(C-~FcL?2X~(}pisAV`ZNqz{H~oqC$!mlF&4K^-i.A!`k1IszmBUw.3r>B#}G>');
define('LOGGED_IN_SALT',   'O`ty}na5i:7%LOSDd:;xUO:-,BPZ# %Jd14pu%)^>k2DD^E6Gx0i^mgl#G`hGFhn');
define('NONCE_SALT',       '3{ ~ONC4<p!Rr*Io8Db`ckq.+7GxI2^*%e|roCm)-OFl`|[Dt^r]`n:!~l8cpIVB');

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
