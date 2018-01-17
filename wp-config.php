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
define('DB_NAME', 'AdelaideWP');

/** MySQL database username */
define('DB_USER', 'zthomson');

/** MySQL database password */
define('DB_PASSWORD', 'Smackking32!');

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
define('AUTH_KEY',         '(af*1fXryql#GTQs~^N$O8q|s$;]?bc9Ba}g=vM~NO4&I~pK6aLq#XtS57]1ZEy:');
define('SECURE_AUTH_KEY',  'w0a5J+ik>[(3/D!M{x5B0M$}2[>phCF)JGAWyR3:@4{0I4C0Wz@3Fs;Q}0cgQS*N');
define('LOGGED_IN_KEY',    '46Z2Kt`vGSkjZ`,! MqqS^3](FaW$IE$a3)&Z47POs%^.]#4]qLX},=C+O|BK}e;');
define('NONCE_KEY',        '*ZjMAO&/g6?;Kc2.~89E]c](1/E6dYof)[z,zsabbQ7,i(p[G6?G4M.6T~`W>~XL');
define('AUTH_SALT',        '2^54NF+l_y_&z GyX*G0K*LeL/E Wq, - KaI$X5wSLWsygJ}KcCxS3s56c.zP99');
define('SECURE_AUTH_SALT', 'Rwsj{OwVk!!@|C5pk fhHr(]gs%rw)!~Q9}9_&T<Mf{[P+fDR*,)9_hpO_e<}Wav');
define('LOGGED_IN_SALT',   'E)iG2%VKb_u-?-_*]gHxWQ!L=^e`azK&U!L;1Hq_eYRjocfQq*2sue}!@$p>#RK%');
define('NONCE_SALT',       'r<W+6`z$7zueCE%|R++GOaLufy&t-WE#~qhY#DHAA6P )p#:8U9:ByH5s9_d^YjD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ddbs_';

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
