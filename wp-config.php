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
define('DB_NAME', 'angular-wordpress-spa');

/** MySQL database username */
define('DB_USER', 'griffin');

/** MySQL database password */
define('DB_PASSWORD', 'griffin');

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
define('AUTH_KEY',         'B1Ud6g}Ov,}|V3nSPl-(?ZFCB!SA_[7:B~bL~.n7y{PMN0+3mvqB9|};JVnT0UX/');
define('SECURE_AUTH_KEY',  'DT1c*]T46[+*`tm]^UHQiM;5tph_=^ Pmk*)zrYN~x)uz)>v_9{cn2wmdUL]406|');
define('LOGGED_IN_KEY',    'UiD4JW8nYbNy+IF::.x(G#.RWF!bAc}mo3f4d)NV-ZI;`AH7D7m;lVBg6Y4^p<6s');
define('NONCE_KEY',        'K^?tES~!rw;b0=h]h}W1T`l;uVKl>_+Lq*jEF50d4=.8rIG{V4FT3]Q46vBp6sI8');
define('AUTH_SALT',        '-X<)amrnP^#+AiR7fN2hT w:l!}BVkR2}p.BPjm{0xn9E=2x~yF|}_z_Bdwt|].E');
define('SECURE_AUTH_SALT', 'lP[q6#XB/-lNaHC~U^ZS+MmOueOMZ{fN0=@DI-yEd/{&#Ln}=}88I}Ab0pK[>4+5');
define('LOGGED_IN_SALT',   'mWk}XpL7I4Ze)Fhy@c;GY}x@yc?b28?&}.bJ}1&KT`G4.naA91^:z4c!dWh}fK~z');
define('NONCE_SALT',       '!SP2@O^W]Tv^MdxB8PP`H5Go4EJOUIUH#!(3Ze_60Tm_BRbY1SGc7IN:}|EUkDqE');

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
