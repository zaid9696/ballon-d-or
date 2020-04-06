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
define( 'DB_NAME', 'ballon2-db' );

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
define( 'AUTH_KEY',         'FfzU4=9-ESu|30%Y-d(m1nRCVL~i7,ZdR:{xl?{x&u8lc( ,N:;,^QusOdBH2+!t' );
define( 'SECURE_AUTH_KEY',  'F0xfy+9gIvV?57SB&th~eW>5c&n {>eI_*D[ekc>~WhjJ?B7/p_2?dR)]82#RK~.' );
define( 'LOGGED_IN_KEY',    'C%>KcK2* zCIYy.g5%Cq0$p:<QShDt5TJNop*3EfM*L.Sa3W.>b$uV)b>#(Q.-2z' );
define( 'NONCE_KEY',        'Dh!%SOBsB$u^Zd=Z tb.diDr3={)N0*o+u3VT|9sjg4Qjh[2jWC1K8+)q%r0oC_[' );
define( 'AUTH_SALT',        'MP|;JEXe3`^+DvH9sdHHY[[}]K: sN7Z3{(WskN`pSPW`bOAgCY6)A86q)Q(en=w' );
define( 'SECURE_AUTH_SALT', 'q9$[<O9K%m_fXFg(+/^o@6[(-u{S8MH<{<<BL%1^I=Du7SaqH)_5}<S4KJR!F-oM' );
define( 'LOGGED_IN_SALT',   'L(!<M,eJ>)dsZHj0 (81h1dr4XAEBU0n[b=CJ6H(,64Hj<&lN()qXCP4H5;l=MCP' );
define( 'NONCE_SALT',       'xd=xPS{ermVpM>q@!Pd}nv778l#Hk!8!Y^eWU13Koc9KsYvoSCr4i)^n23Lxm@G]' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
