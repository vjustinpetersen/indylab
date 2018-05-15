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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inl_db' );

/** MySQL database username */
define( 'DB_USER', 'ODBC' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qKYfd-Sc-4GeV@N)F7M!W@!=e(wiEJAT+?C*:v0d&osM.6J3n 4z{w)|U~~=~6X ' );
define( 'SECURE_AUTH_KEY',  'Kkm02E3k=(i;k%x<k#P3%j%83<O}:65pAk>/{u!nNvQ^VKhs?Q^a>*:(xWB6Ht!c' );
define( 'LOGGED_IN_KEY',    '}oZY+)96IV+lkR4S)Ph)Cv0=O=5~Sx.+&,@]&^6JC2tK#dM}]iW^GJ{@vu#+j@hx' );
define( 'NONCE_KEY',        '7gylh.3[$PSukEO r%@/Wh3n,tM3qzF1aSO9[;8q=ChbP5R:vY0_!/}Yd{s*0U=<' );
define( 'AUTH_SALT',        'HE$|y!9lVWD?uc.cH/Fgw*V6lN_bTaKI4M gJr9W$<uMh]%z=Q{r_bszB?bk^-Aq' );
define( 'SECURE_AUTH_SALT', 'x./p.1(iNwN<4^VkA:3!4u]oL$YcrhC4ae2I3r|-`Tle&EW33h06D8@?%a2=qb~d' );
define( 'LOGGED_IN_SALT',   'C?`*B=c&&Yy2Vz6qExgdg+8HfW2h9iJ~!h3%(*:vMJTch7RvfM[+V-[VBPP+YMP2' );
define( 'NONCE_SALT',       'ssSg k-{8-RHEskO=NxP&u~t({24_PQ)_K}o!Q(4[>IIF6Z]}e{=dC<1;1J;D s+' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
