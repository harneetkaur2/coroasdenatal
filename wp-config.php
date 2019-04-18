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
define('DB_NAME', 'almamat2_coroa');

/** MySQL database username */
define('DB_USER', 'almamat2_coroa');

/** MySQL database password */
define('DB_PASSWORD', 'Coroa@123456789');

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
define('AUTH_KEY',         's:?BGJZMBdLqyYk}v)>Ss5CY`33}RwLn5_Qmk_$v2zo5*HHf5GWd`GUOW^A}V?vy');
define('SECURE_AUTH_KEY',  'CLz[#vEJz2 L6x~^b.XXE#;h2/6.>rqW2P#9{Byx|[&9/W$l%bZV]uX<{@z%Magf');
define('LOGGED_IN_KEY',    'Q{F9s&_sf7R|v pi3<}sd(!7(KP&^v FL2caoAah[4~J:ieBJHo^8Zd-G5?*Rsj:');
define('NONCE_KEY',        'spjH,ocf0B6V^Om/Q-Io+4{tagQqvveH)$R2z~ h6l$B>ByX1}5P.#8B ~6elM;s');
define('AUTH_SALT',        'v<Ds4@n89E[oBIZwqb{,J1~ynxfXQ>Jjy*U_$RA~7HNn|^]UNL-e|kfM7S:ul&]>');
define('SECURE_AUTH_SALT', 'uj(cd_&}cSbgek`nNW$gnt}asmVa4gV20CNTEVr28M[o=n9IgJ9-6J q5F6>kwv1');
define('LOGGED_IN_SALT',   'F;S#IABs!Vs]1G1SinDG/~nG)d3f{@{,i-rBI>UT4q<%&F!NW7[9)I.2KZ;8ZOit');
define('NONCE_SALT',       'Fj[P=#}GP/V`L8B]i6D#@[KPv$,z;3{,gPhr`r$-*pO$7(![Jy gr7iHrp_iT#K.');

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
