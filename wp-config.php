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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '`M,ff;0j19Qls1huUo(w7nr%1j&JLf*>m/^WKFRt<7EWs*ns;j8p p+;wU1-3%#]');
define('SECURE_AUTH_KEY',  '6*qDVtL(#2a/r$[tTL@:W8s+k%E|TiU1Vd|c5nH6$eis8Ay|.VYKDYrW_aV32Htv');
define('LOGGED_IN_KEY',    '+0xwn:x>E-`]*|]u/q$8F,c[qk3]{y_A9YZ5i>Y5sVNe+F_jTRCMe>~@F0<m:y=r');
define('NONCE_KEY',        'yD*ok[nJhy`r$gC((`KKRM!)skB?{>HsyGLkq4>,ePvrT:x<,Y$6-UK^#YDfcSVx');
define('AUTH_SALT',        '-k)aY<i%I[~nk54:g52up8T+V9w`Pf=in_6Qm#p@=Kq>Ei]GYjjdD~<{TNek!M0_');
define('SECURE_AUTH_SALT', 'd-pMUw{x~ec9nL<MK.#(C<oV)T#AI7nNJ]RBp6Ws2X)~/^!UvClf.!`Qa=MJl(Gy');
define('LOGGED_IN_SALT',   'i<t J5z+v23s1ko=9>A$WzV-MZs.hzQ-@]W.M64qeh@qz.K<Y=MCJ0YNFP2j0o^p');
define('NONCE_SALT',       '+5#AW`=Q3 9R;mx~8XTW#:Diq#x14{4n#XA5Y$AG[(uuPx2yw6>J#o[}FjK}mEgv');

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
