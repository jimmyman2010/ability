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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\MANTRAN\ability\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ability');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'G4i-VEqS!-Q;Ov+bsR[AptN7;ki5}E2HV!TXW-4~|mwS.{I[ypn>wU8pyaD5Woq2');
define('SECURE_AUTH_KEY',  'uNHj6@A(SeO`:>Bs-f1F[(5v3X[Am:&B q?`6ru$M~pF8-gu+8BU8hTyIx2YtAEL');
define('LOGGED_IN_KEY',    'k)F-i$$Y<}RMamaZrZmfxT-BX87}qvM`%R<^pB^p;VMT,Ia<c3bN$(c_i n.vSnk');
define('NONCE_KEY',        'l&Ik~8K-QD*,_V[yLbt)D*zY:@xRaGN$,1*&Ut,=yd>i=>Vr+][m^]O/5Eq,oDd)');
define('AUTH_SALT',        'yC1g)l~2#T_3E=(-~rnh&3r+=tN@.NpSy*Kc #kPFO@F`#z-;j66GCVo+ZiC;jEU');
define('SECURE_AUTH_SALT', 'LcC2M(sJMFmhav?q>Z]eE&xbgi7aUG|79&rf@$8aaYEh]PV1fCV}X[3-%Ox9t>D!');
define('LOGGED_IN_SALT',   'R}a@]E!o5i_R>f[Ehbp`,-}KtKY)c&NP5T+OR}!N`k[:rgC.Q|ezNS-^NHo>C,vR');
define('NONCE_SALT',       'O8}ft|NM,-[){`E~F;~/R:(bP4<RgZh,?Lv5:5C`aw;OQ/,C8{B,Z%Uq8nuS1-?B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ab_';

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
