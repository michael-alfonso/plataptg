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
define('DB_NAME', 'plantaptg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vc38/lv;C&pM]Yx=kK0QSt4hyM`UHns;T!v.?HFZE9{blvQ44Sr7jjy-.jvc]5cI');
define('SECURE_AUTH_KEY',  'T1mW~B$qO^Xda~Z).-bF2,_98-<9>R*v{G:j__o^)>(Vaz<ds%UMI71=d+DoI<Ws');
define('LOGGED_IN_KEY',    'Y5O&$UN<a75+ewhSgzp vb!*`LC&o@9HMp>B.na>rwYF7k,2Zg< >2(;(epE1)E?');
define('NONCE_KEY',        '[,Q,->H3{e2HX,rE)ii@B[EMHRd}7ls_uu[9`^1GlckIj6#mVqsL1adUv&oKLOK/');
define('AUTH_SALT',        'fHLlF!J>(&,PR[K]5B#OxZt6la/n=}&+&KXhd%BVj GZoOte{-7<TsBYY//>tm3V');
define('SECURE_AUTH_SALT', 'ZK%ojlBdu8!mk!?O&9#^yDQ-|PQ^l0Q9sM9#7)~p(n4{]o<7$t7kY2.4F/p3;QW[');
define('LOGGED_IN_SALT',   'Ble; |(x?qQ[FH|hcrr42QqOkdb|Tvu6Y?*BYC%8EpS$x3tC@!ZO*}q8=BcCeSo8');
define('NONCE_SALT',       'OKEZh@&gA^oc>G|mXtI5yz.ZG|=qK`a$AUKPKU@G/2pY )9}{A6DzNZ[5.0v9I;Z');

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
