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
define('DB_NAME', 'kembarmayang_wp');

/** MySQL database username */
define('DB_USER', 'kembarmayang');

/** MySQL database password */
define('DB_PASSWORD', 'lalala');

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
define('AUTH_KEY',         'Vh3DKJWX*Xx6<&|~lB9(vx ,UHZ +%v(r1]rQZ&E1qs<v+(a4R39D2}5?1#7FfTI');
define('SECURE_AUTH_KEY',  '}=9_*s(P:H&ELu_$Kw2VCB[s-ueM[9C~[krQfb=/%`C&}Y5hk1=YT@Tm&MUy>{Xf');
define('LOGGED_IN_KEY',    ']}cqmJjWug%Lt:j=H,yyxVMXT$X4zo~MvlW850f&i<}ygV!^[R&7ZcReUI,js~n6');
define('NONCE_KEY',        'vb0<|x]J()IYXIBe]=n:v.ju2*&)iV)O<:*ea&iE.E#=JmY]pwsIL4{8P6iDe+PC');
define('AUTH_SALT',        'qNVw!$%S1m?}P*o]>=Lz._;gM5}Mv,Ay>%=Z_Z;L6^7|V NamKNA#A%?`{;<>o!x');
define('SECURE_AUTH_SALT', '2QOW`1XAgu8U?/7A2!  I6Rrlmp17/R4/T5$Hn*#ObF-rE$mEw,1s.klb!LT&5eL');
define('LOGGED_IN_SALT',   'nruZR>a@XyROm7%2V)1eT!MH9N|E[(!{Z0!~!sf3)BR%6=lVKtM4LTdozOaZcn5g');
define('NONCE_SALT',       '%:;_k= #OM~AS90FniJ$uaupde|jfq< ;O:eP# q1tbb>/:H7Y#R~UND7P0#m%E*');

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
