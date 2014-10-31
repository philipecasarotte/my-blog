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
define('DB_NAME', 'casarotte');

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
define('AUTH_KEY',         'hZo}zjAe+/tr^ZLGkw|.i>Xp9:%|cNG([vC{pGK$(MfCy7XLGS6 A+P.67n|7z58');
define('SECURE_AUTH_KEY',  'dF|-yI3Mi>*_sM&8[,wAXs.7[BVvW)T?_@K3%zK;fH/Kcv4: DV{mO^f:A&E&vm4');
define('LOGGED_IN_KEY',    'k-g 9*+ LBB NH[#0qsH;mEDAk;/}9BH:>9BCqsL2Baa|MtYZR7JXgT*I_#Ye{(V');
define('NONCE_KEY',        'y1-qq7K-hd= HR-;,;LJuJ*+d!j32$bYecYS(D<)Zu3-Fmv D^B|GG*WHhs5umT%');
define('AUTH_SALT',        'K]xX|ib&aXf.Qer0keLL]M3*[)Tga]E~YR~rV+:$-$}^^%9?$ouE@>C-a^!xBXTd');
define('SECURE_AUTH_SALT', 'm+1;0U%1W#3q=3nn-Ddf]RQ=/(pSIZ6gOFk<.W`BIN6Y8`c`5S~P%,Fw*h|J=B&u');
define('LOGGED_IN_SALT',   'm-FwE8R!d)7$aRj{v~:qN@+[7>,a.h8K)]i-zKU*R:A/?^H w:_ABl({r+KO&Qp%');
define('NONCE_SALT',       '3`l4nC.eZ5onv3=2 l]3L|[6)8t%0LsxO-O8*2|%y{$+&;q1O)!p.Xj5!8#YH~_F');

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
