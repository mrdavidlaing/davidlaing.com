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

// ** Read MySQL service properties from _ENV['DATABASE_URL']
$database_url = getenv("DATABASE_URL");
if (""!=$database_url) {
	$url_parts = parse_url($database_url);
	$db_name = substr( $url_parts{'path'}, 1 );

	// ** MySQL settings from resource descriptor ** //
	define('DB_NAME', $db_name);
	define('DB_USER', $url_parts{'user'});
	define('DB_PASSWORD', $url_parts{'pass'});
	define('DB_HOST', $url_parts{'host'} . ':' . $url_parts{'port'});

} else {
	die("Cannot load environment variable DATABASE_URL");
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Override the site url stored in the DB */
define("WP_SITEURL", "http://" . $_SERVER['HTTP_HOST'] );
define("WP_HOME", "http://" . $_SERVER['HTTP_HOST'] );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D}P>`HoP +!5oQBU[62:sz>u/@2(un0z3bd<v&<j5ws&++?v1%=xi6{$A$%t(]aR');
define('SECURE_AUTH_KEY',  '!/1Ps%Fz3O4p+dP&BEZ$8U_O-DBJM,v5dU~,@SFCa<>E_3{M7%nXr[9,P;6Krl)h');
define('LOGGED_IN_KEY',    '+-GV$E98SuKK|in/H8WX|[J,B)h+W>X|d|Pc%`-!GpV`9Y]/z1-=ui>GZ7tCBzKG');
define('NONCE_KEY',        'E,[dnwE-f5[C8=(b%MjlVZQ2*>,6NY3?c^D_~jJs)SEA+Au*`9&mnx6YiJj-%unc');
define('AUTH_SALT',        'w,Q$4,{Qjc4PSowpYmF !PI*YtaGHd`n`o3|^>Y.6vMeB|4+Wi/Q[E*bT~Rys9iH');
define('SECURE_AUTH_SALT', 'b@jpZ)r]|_ fh-E1t@W>zc$nRt$TuX$`}v)MfZl(Pf@JaZ-ko[-?zCD8S-*up<50');
define('LOGGED_IN_SALT',   'h8oe|$W8=.)G5}r,NfS!WjT8H:iQ&R/S>^C:GD.YO-acnL)V!~B|RP4u|4yoH%<&');
define('NONCE_SALT',       '1&}=W(w:i/*ABu[|i[DD;o/m[UT~OYR[%UB&[H&4BJ4OFsvz+8<m<@<L?hI.h6r%');

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
