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
define('DB_NAME', 'outlawswDBeyxvp');

/** MySQL database username */
define('DB_USER', 'outlawswDBeyxvp');

/** MySQL database password */
define('DB_PASSWORD', 'mGD8ida4');

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
define('AUTH_KEY',         'wdZo4KCV!||Gs!-|Rh!0gvcs8NNc}B4JNz}}BcrkzFUUnr7Q7QYz}3>BIjr,ry}MU');
define('SECURE_AUTH_KEY',  '8vz@NUYgcgn7BJMUY$7,7Ffn^7Euy^$^>Yfjmuy^QTbXfj3AE6PXy{2*3Abj$qx');
define('LOGGED_IN_KEY',    ';x~dw59SDGa~_]:19ow-w~_[Zdlow-KRVGZh!5C0KRsz:-!4ZdwoszJNVRVc}08ck');
define('NONCE_KEY',        'kB3J^}>,Fnjuyr$UfcXyA7UMYQ<3{Muq$$y.bnjf*IEPTfb.EA6H+x.+6;bytq+T');
define('AUTH_SALT',        '_ohds5VRNZ1C8:C-|!@8gcog!JGR@>|Rcgso0RNJU}B0}8v!@z>frnc@FUQMn{7B');
define('SECURE_AUTH_SALT', 'W1]#5d~-w_ZodZlCOKh!KGRVh:[4GRNv0|!:kzvs@VgcRs40CNYU^}0B8g!$z>Qrg');
define('LOGGED_IN_SALT',   'Q^3Fr^,3Ujbr7Qq^MXn3MLb<{.6iyxXmeyETTi;D+m*9POe]92Lx##l-x#ShWl1KD');
define('NONCE_SALT',       ':w_ZoVG|44N|!:Zoo@zFRVNY0C84RNv0,!}kcnz>QMYQr30BMFU^{}>7f^^{<Qqfb');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
