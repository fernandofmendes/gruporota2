<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gruporota2');

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
define('AUTH_KEY',         '_Oq{7l*mP}#=-S%9H$|WC.~T{5T<^P@w0l$.M)a?uT*-oxx3c$t5:e-|y=FT;;Ik');
define('SECURE_AUTH_KEY',  'NZ*r-.?9+4r%FT#V@&c:/VR/jfTKkG|[EI)TF|9}f-|RFM;6@B2(v?nqdvHWI+r-');
define('LOGGED_IN_KEY',    'w>aEiaU05461*NZ9Z{5p]Gvz>wC$p<7jY-+KcL|Tm=YCk`+#s{Z1r9x,yGpU0tv{');
define('NONCE_KEY',        ' x4bQymjyAv3*ZFl)xgYmim3yt~C|AX !cGf&u,EK3]SeK?b8o0wCa#~&Xoi|`|)');
define('AUTH_SALT',        'FAL|d!9xCiZ+hDZd$Q(]i{!Mk*HwI+^ph*F3tT@2aVZ~fEkaArtJ.L2^205q3ooS');
define('SECURE_AUTH_SALT', 'DBmhoVq%W.J*NvPV&+hP(}RQ-[?dzoO+tcS]6=.LWWJdjSm| WrCwQlba7{mA|-f');
define('LOGGED_IN_SALT',   ',~}:-F|*+xrYe+_BN#NDTyid11P( 3J2$^Jyn_`TyQ?(DCpNqtNS{T@]CdW{T@nk');
define('NONCE_SALT',       'bmpdN1P/XUctg:7t0@e>IgxiU{[rQ{N&{5tg>#;M=N o/@0-/;=3SC-vLc6|T!VA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
