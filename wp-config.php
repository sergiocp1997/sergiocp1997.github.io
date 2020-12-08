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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SergioCV' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y%P7i}@U2w-%c!6y8,[DP2Y*`m)uoi$T)7]Z`:lD66<MxHVd90RSh%eh!V>w=r?6' );
define( 'SECURE_AUTH_KEY',  '|1}RLF#6}`BFG>4]ab7~)Xfy*+Q9ea&d3.83&hq`*3LYe4w@I;e l5k<b/ugzjWk' );
define( 'LOGGED_IN_KEY',    'r`%s#$BNoX(k7lk5C&PWG4dE8VZ>tR!S[h);Rak(NRB^Sm[c`ckLX8sy[_4WTfQ:' );
define( 'NONCE_KEY',        '<?V35Oyb0R`+VnUBcnwhcz#`%9)%3b*{VSj|H-7`6gYi#Kwn&NV{7JEtmDM)@mBf' );
define( 'AUTH_SALT',        'H{IO1b_GpdH=DLu[!cR5m$8%f>qcb@,tD;=Is7d2C59A3_OXt)ePGO5&%VM$g16?' );
define( 'SECURE_AUTH_SALT', '$CT|6V[]iL8$3g34}|.pu3yO8v!%+JGO.a5O;TM%gJMu=2_qwbQQ<`3fr/uV#,=[' );
define( 'LOGGED_IN_SALT',   'oE5@@!x4SXZL=OKX)m#GorWpgOa8tx(%nB~)OdE%S+Id0T~L!;uQm,Ah_aV07vxM' );
define( 'NONCE_SALT',       'AFv_U+fu>N?V(^PP^z#QuYE`VSx!~`Wsj$lT%;lY7i}D+:}KR[|(Sb&tg@pn B*,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
