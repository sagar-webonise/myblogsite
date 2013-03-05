<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'myblogsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'webonise6186');

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
define('AUTH_KEY',         '[sYx`*)oys6jeEvM]<Ya{/,#LQYdnS!;h#U!E;kdU`Vb}k,#k?6QILBNiEU20}#|');
define('SECURE_AUTH_KEY',  '#Gb~3$!cD2YtN+o-l3Z--+r1KpE|DX,ch!5(I2QGJXADiFm3xhJ}Dnnb-CjwndN ');
define('LOGGED_IN_KEY',    '~c^=gB;9hd;F/8u{K+2%7[xPm^.1phA}jsgPe#L.+LtFsB<Ep/|0c{&q`dc?>mE.');
define('NONCE_KEY',        'hWy-a`@V8lCObKWjGZBLFC=WAxcW0c-`?/4sG0k3Fq.5M%+,Pj$W+~b1]|$<1lM]');
define('AUTH_SALT',        'g7:M]HR>zMTHxCnwp;6f6XVz(/5>~$]1KQXo;)m!c`kd^-)Xg@O!aNZsp,LKp4lO');
define('SECURE_AUTH_SALT', 'C1H!)(!,rk=EWi_@FvvHGuWsYANi(Ygyiq99Ywie7ze8~q#!c{L t_)<EBs|+L[l');
define('LOGGED_IN_SALT',   'bz,-+a>qGN]{|)=woX:0g3(*s:z#a<vn|>F|4g5O/-67VeIJ&ldj|B2 9gk]x2}q');
define('NONCE_SALT',       '+sh:v+!;vOD=-T%uR4]Mu>_?&Ks&7u!<#D:*{5a&=+_P@xmm(5sTzT4JO{J>:$-!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
