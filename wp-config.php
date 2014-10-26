<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gpgproperty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3iVD+_$egw$L]-%`[itl:+f_P!j-?9a<L4$3P&UHu3,,4#yPZ`vkRITI383M4[Q1');
define('SECURE_AUTH_KEY',  '+bWhCY?z]V?]*4[R&/LsP(&XpP4z7#Vr%w+x1`7.+7|j[@^?p{*pF ]*8u-q8+WG');
define('LOGGED_IN_KEY',    '6K*L]$iRXbpR+l*xxyQ=6L`nI{kN}[T+cJT{@blo6Ev_-J#G m-jJq2SYb3@1ZN+');
define('NONCE_KEY',        '01zkALp55t>a#w/],fEOd*w7-EJ+/R+DLLJ>+{>JiZE$=~|rma #|0xIc-.+1;L)');
define('AUTH_SALT',        '=vkcIPIs01xG+pc=stP+|b={6J96T|*ypos>~!k4E,a_w4kL8n}k{=uRPM+73CTY');
define('SECURE_AUTH_SALT', ':J/#+RZ]]|qlA3j#?-Z+R-+`OP[!M9|te>x9-)_[G<ngh!+$Pnv)SJTS`y!~bdmk');
define('LOGGED_IN_SALT',   '[A-Mi@;Da;z<T4KC2kiUWQd8]P--;G~4zx@0IXZw1#QKII|!3Qg7<&Lmh *}o`:m');
define('NONCE_SALT',       '-]0G^fq&cSL5 7_S}afdM]aG[t>:j@sok:o6l1tt~H+bfxa2,5O!Q2R+_fcfeOhS');

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
