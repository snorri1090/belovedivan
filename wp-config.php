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
define('DB_NAME', 'belovedi_wrdp2');

/** MySQL database username */
define('DB_USER', 'belovedi_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', '!van@2012');

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
define('AUTH_KEY',         ' ]oc}{U}Fn]:fjc5Hg&PC>@^NbJ$Q WvVrR^K+(^VA@m(v4?Dr^e[`I8E8jcMUXB');
define('SECURE_AUTH_KEY',  'B}/#paKQu6@7]AZ[FV$.Alk8yB^$$#?PGM8kRKu6NhdzTk^7PmSM#iW4{IbmOd#>');
define('LOGGED_IN_KEY',    'zQa#srfWKs=/Z,hT;7#o/qM]&r?B8RTaU}lzt qHl%HA)-Bt|nE dQULfS~8p(0r');
define('NONCE_KEY',        'ky15x{FyITdGTwX9AfE(yoPF;<>jr+eOXv<%+C%{Dp]gaIM7><;H;xCT5@``9k~7');
define('AUTH_SALT',        '1h+ugqN_=Xk;Iim{ T..e/Sd^3M@9K^dxNL%Pf_zc<HQa_f;J]Ic1I$,LQ_;_`Ar');
define('SECURE_AUTH_SALT', '*?^C})8rYGT0C}(Fm-!1JY.y,%rSP/sK`M!GNYl+D}&Gmyk<HO:Z+I1m|&gKKBDO');
define('LOGGED_IN_SALT',   '?m&LhS#]WSmVa?Qg:P[4bod.#Z(]AQk|!Ou]xRcB#&z^gEu{:Q%&^yy!7Lz<W[ C');
define('NONCE_SALT',       'SRFYjGha)duROj]]|C-Xi:m6A6]ZFnR=PT&9VMSZ0jFYB2AiF;l |zc c@dl?lLT');

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
