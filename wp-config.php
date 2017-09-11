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
define('DB_NAME', 'legowp');

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
define('AUTH_KEY',         '){:g#sbqxH(Gr3fqr+)5G3M^#}qvodU$./dYe%~$fZIv>.+V5@.syJ]eRoD}rv<P');
define('SECURE_AUTH_KEY',  'PbNC!RN/ ?/c>s#L2M9[}~K|Q943/t(GM0bu{iMS^ZJ:tG7dEqiWU2Y%0!3Xa32k');
define('LOGGED_IN_KEY',    'O@_% )jOm6{bxEy,2@(N!=ZMyBkdZ)i5:c|tdru[?R;FZjO;7(m).9EU]ZCuf;Z.');
define('NONCE_KEY',        '6;|oKBdeZ{beY#(VT:Pmb|sixEc$,9S&T,m;/HesM?_$GUqX7dT5q[OO|Qm0>t9l');
define('AUTH_SALT',        '%.5ydcH`A QXTwQy6LY~hb(8i<eH5}Vp@UNo4UfV&7y7PBZ(t-qauRJ{2Ft<Sycq');
define('SECURE_AUTH_SALT', 'ej>YvNC6m@h#e^$ypFLse4N,Dr9x>m9`CeO&1v_l[7uw;&SW[3eF<z3mA,=W8hx]');
define('LOGGED_IN_SALT',   '}6z)sE3)]&f;%}sbFy78yi/wi{eT}${~24cD?^<v=[7NEH}D^N_H@q@?j*oi#{3h');
define('NONCE_SALT',       'g&@KCu-!Z|x+)1q>S^B2F~5&X#4z~]F]=]9T|ox3$[U0FH+nE`r!,af4f{$wqt,K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'legowp';

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
