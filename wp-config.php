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
define('DB_NAME', 'newdb2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'gSrNT! WBi+A**([gdmnTa.k);_PzY6 =tuv4ADBT6fnRvTk#*}kHtpA-{;A/(3h');
define('SECURE_AUTH_KEY',  '#U9}gEY-feL3fEnnA<h,t=d5f$?W:*B2J3F9TtAd>wI?Ym5V9/|eSPQ0i]lr`0eI');
define('LOGGED_IN_KEY',    'E7#:xJo,p,C]mp[#8]VW9qijR4r,+8k@:!bk.6r46x`PGeT/1~T RDi7vmk+T:FC');
define('NONCE_KEY',        '?}*U5m+Zk]1zv;SY2<CA+f^bCtpi#V!]?o,$QZ/`.q.>{+!*|c3~k*p<UJb%P#sV');
define('AUTH_SALT',        'at7<I9d[{WbQL{Tjy:VBZ)7oxfx;VC$0Nr7XjOrmkYGe#eX#U:Xn-)y$KR:vK2w.');
define('SECURE_AUTH_SALT', '^))Aq)U%S  #arjr4fw#_TMv1@X~m[#!2{8FTU#v9_zXw=y08vwoV6v&4ogLgep;');
define('LOGGED_IN_SALT',   'Iw3]i@Q)hi&J|EXop6Uc0Un0xEa0-[&9QwAn&j57aG0m#hg^y*)0,HXWuIB))FS=');
define('NONCE_SALT',       'wjw$-_,;T/tg Gokq9DVqM%dPB_Q_Z;3PZR).l|mJgs!)dI?+xw0]=-xUhq_vk?s');

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
