<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'WPCACHEHOME', '/home/clients/88a2e967f5b1ad1108bd7ff6b6523484/sites/portfolio.nbaumann.fr/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'nr09h_WP777507');

/** MySQL database username */
define('DB_USER', 'nr09h_WP777507');

/** MySQL database password */
define('DB_PASSWORD', 'Gp0ZRyFasm');

/** MySQL hostname */
define('DB_HOST', 'nr09h.myd.infomaniak.com');

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
define('AUTH_KEY',         '+.kj*qqRUFLuVD1Slmc*Hy^g&7FtSitsXM8KEG@+|:f_TQ,*1jz.gb4cgeh`o0a#');
define('SECURE_AUTH_KEY',  '`EC%:|`}%R12oM<)S1moJ#>DVKYl`AAU`!_WEu,=4lGQ!,1qA{h.@K:m%%>-J^B)');
define('LOGGED_IN_KEY',    'ruzhNIu%bG7L>1S!xBg6#X^#%WinnZ#_wTBx+c@Voii}9k9XeK4`>i2+cO@k<f,5');
define('NONCE_KEY',        'R;>x!/WBpi;d{Rnzsr>WkQtiGX)3`u8w=4,j+t&?4}7M9t:T^TKI3N%nqr.>@_EM');
define('AUTH_SALT',        '`L?dJF*m;|=rE}t~CAaMwEPRvNwc*=Xb(N!&F1d=DJ&<u&&o1*)-dy.OYN-HkmJv');
define('SECURE_AUTH_SALT', 'Vc&/s)4)<i8J)3Z<c)D;K33cl+Ru)Hk5b*;&`KVKdoJk#=./=*CtTtH+@LHYB?>s');
define('LOGGED_IN_SALT',   'r*tn;U.DzfgBN|96B)nst/^<=,CPLp{kaOBt*E{vn@-9LFXUh}5Z(S.{r5MX3w4A');
define('NONCE_SALT',       'H{d0%2FBb^s6m#tZ+y@#`&`>{q0EgrR=8XI`ltZt>ja=+KcB{ToO#f;xan|5Ae~;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_777507_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');

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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
