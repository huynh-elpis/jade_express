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
define('DB_NAME', 'wp_screenshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mPTE-t!GU9A}|y#i-+Z~T+#6:|)sGh>OlPT{QpVMBUOi`>aQ+@i~dF$+_UUeL?H<');
define('SECURE_AUTH_KEY',  '3MnE[d7ljGcI-J:f8.IY9<IE@CchnV]g3`pW ^Vik~>!PIsc8X/U~hGuD(UNPO$:');
define('LOGGED_IN_KEY',    'r/KgQz5-X23*pa]+.DLa9&.4J$KAvjf3x@-w[9SqB()$ef;?YnG5:XTU-msz|Sv,');
define('NONCE_KEY',        '5sQ-aivKu@gO_ot~f{|4VkjaMdgzffn7ijU}nhCKvqOjz]%6q]]Of-ONhu+M,mvo');
define('AUTH_SALT',        '!pBJk1b:2Rd&_?k;ye*im5+pDt4xC/e5 }E+M2[$j1hl;dS&0Q.8#5a1}E7*q>:0');
define('SECURE_AUTH_SALT', 'P_ej|-G{+@W/|y+/lO3>c8uW.se#6N6&DsHK+.5?$9mAi0m/n&5w>FQ*)ck*7-Ao');
define('LOGGED_IN_SALT',   'jn+7/-YzsZ7]q@(j74~o>R-#ycE*.btd8[2_!oR-Xmob5s[?V_E|0_X$AYh9]eHe');
define('NONCE_SALT',       'b3w 5pHJ5qVS]d?n?fAU*2ds-$o|M9CtQLB,G|U p2OxVb$f[mrbo6Nd!7mGDXRB');

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
