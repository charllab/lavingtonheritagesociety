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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T)zR0 f)E+TT9xr4c%-h?P;v5 Ub-ix;Ru5qB_3$!?l+vh2dE@AU;*-=v$ gV;nl');
define('SECURE_AUTH_KEY',  'c%Mhj>7:,=3sxk^~GHB66W^FF;s;W}@.jQIwb]#whd:F{C.K]D/ggzaUP>ag*Y>Z');
define('LOGGED_IN_KEY',    ' {WRf|8~^1UY!#Wl-sD4eU!v5@->+hCH=u~XyFImfz(6J^!:y(|9UXv30<oDACf ');
define('NONCE_KEY',        'E^(L$)H#J;],f.E4K#c6,WimQ^{N`]2;}V8fz d_zC!)_z JhR_.{//G<LE$?NE0');
define('AUTH_SALT',        ';d2Qq-=2&=<d!9N8[e+R=jW!,[=+kL:-b_L_n!tNYziKAd972Yz($2Nv8B^-T!v+');
define('SECURE_AUTH_SALT', '5/?/6_^5q4-L&PucH*2CDef}I7]4`~.d_uxK2X`KH:39=+H-e|`#1qS6V3(WAd{_');
define('LOGGED_IN_SALT',   'ydzr&j/dZdh|:y]{CnZLm@j{I%8>aY~;eDU,%+tSz2PGv.~:@&l+:|;Bv/.{PK3p');
define('NONCE_SALT',       'M}^cd7r?Xhi/bXO@Dv:cS$,JT5]r9XXJ+r5/Rmc1@+`<Ye>|lKd3!DWniVQ>`cb1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
