<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_lloyddobler');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3-<2RiL_iP>dG/4[eyYh&v_nX6`LN2b%<9.VfEJIzfOk-![7Tjqji])?z,W#%aX-');
define('SECURE_AUTH_KEY',  '[VqtrhI^U]EkQ!X|joG#e|+J6/r XP*NC2j&^hJKB!%|.=+GUbP|qw+4Vhvk]21]');
define('LOGGED_IN_KEY',    'H&d?D#Ic;n/%]Tf+NL>kZj51KDg0+Tkttp68[:k[&zq pMWMj[jZ+*;sRy5$@}_q');
define('NONCE_KEY',        ' zUL+O~Cu6CJ.5V-|-cTT%[pm,DcISX%mI>tL5z fo;6-Lx0-R|t%L4$,+p|1pVJ');
define('AUTH_SALT',        '-lq)7ASvVtTo-z{cCqo.pq1%n%!=nTx+X@QT59S-S1_~/KX[j5w7K; K|mw+:ZpK');
define('SECURE_AUTH_SALT', 'FJaln>|w<KA|/+q>+fDc(JnNLs+E420sI_hADL-?X#$mp^Q}+R9P4RtvY78c}l_@');
define('LOGGED_IN_SALT',   'a|]8(<WIh1/41;XIl(Iwstx[<2?q,06tZ~PV7xIl-9bh-S8lDm+gi>!g6rt0-SL:');
define('NONCE_SALT',       'PFEiO5)b.xe4jMi4PJhS<th#m2zQC7L-;=|`fiVZ)(1nGOGIFz?s{1=SOhLL([q@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
