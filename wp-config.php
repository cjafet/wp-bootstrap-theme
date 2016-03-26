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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         '9FBc($m|/*Ch(DR9VW|.oL0YzwG25 -1Mr+nO$+RvA++k?51]+^hS`^(F}Yd*Hy!');
define('SECURE_AUTH_KEY',  'z1pkEbk_Dnz%h^=, i.&RZfHz+jLQaX$KQ>K%l,|V5[<GI)J1ZR6k8OzD^n$ZGnF');
define('LOGGED_IN_KEY',    'lf*h[7SdoW|,J4_EXP<y8:/~Y|rtbT`f*qg]I8n#(*|+<*3BJim$T-h|,h.hOp^%');
define('NONCE_KEY',        'eX-6_Xsn}K$p;Dut|8Rr9->PtCN=n$I[AcK+ku*jXbC^I{-/OkkK7W)[x5l9a;B]');
define('AUTH_SALT',        'obj4x2dBtqW$m=_.X?grI$gh;kL7[4:y[S;~ |HWl-Dm2;8<*e8si39U.jZ)(SL;');
define('SECURE_AUTH_SALT', 'LO~cDvQ7;[DHuC7&;?;$a 9W5e.vQ,$5+RDI<2K|$e(Jb.4z*upp3@lrj/e_X&LF');
define('LOGGED_IN_SALT',   'v:CM ;ODR0X|i1<2uue-UJ+o@UX|B7oIeB]1pW5cGT_x]V-5_z*4.^Yg=Gq|Us14');
define('NONCE_SALT',       'A>Oj7+3|tYJJu}c/BXV~,|WHx(22%)kBeDP|!&Z(s)-Lhg/80x$twZ>wf7P9%9Rs');

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
