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
define('DB_NAME', 'win2888net_data');

/** MySQL database username */
define('DB_USER', 'win2888net_data');

/** MySQL database password */
define('DB_PASSWORD', 'gL6MRCq9MH');

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
define('AUTH_KEY',         '-q-T],PX_LY-aH3Cb*xB(A%w4~juTj3Z<R>^gDS*T?zw/3(>cWdEH2,W<jnay~}L');
define('SECURE_AUTH_KEY',  '7i05}]d[.]XB]KRqav1,@=8^T:sY[fdn4mvfO-Q3H.E?I&zh4Q<Oe_cSi]D3Cr_<');
define('LOGGED_IN_KEY',    '9>%Y;_1f7@PNiNNaDPDQkA$?>Nm$s^xo(K}s%#OBq8S-A`SMJ|lp&/w4xe(m^* +');
define('NONCE_KEY',        'S~`-ni)k cgF8_)OaVHTvbz5Ul[cVIubV><wB@ g!5[y:hTF;c+Ik5?sIOUzu0tW');
define('AUTH_SALT',        '/}eO^@+R,u@;:nk}tB`)gNQ~v3t/K+yVL).*jia98|W`#U(mg=rBfW~%6qp{7J)R');
define('SECURE_AUTH_SALT', 'V{jKG#k<?xi,7%V]<P}zY/lU=E|tOouO-a@p9Exu$8T]4JRn&(5fi#Kld,Yg?a[M');
define('LOGGED_IN_SALT',   'ly5.bj#59Updbr]8U]cKRcKP:?5O4r8uCF0e5A]^N849~U;_Yeys?$:LGb{@57A*');
define('NONCE_SALT',       ';@7yS+n-<s/Me]d*W?LZPt3wi`M0zpMe>H8=1v1.VIW:Ni,(bHznP|aa^C^8r7+?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lode_';

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
