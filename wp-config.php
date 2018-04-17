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
define('DB_NAME', 'project_hospital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'd74dbdad52b2dfe8');

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
define('AUTH_KEY',         'AF!0Dd2[;3<h!na2Ic;wPc~|;F,MC1+,~GZ)m5k6L0cNp<6MRFVXPb=6+}x/Sni(');
define('SECURE_AUTH_KEY',  '1t(=2(4EvmPm80X{`6$S.*+0h~=a,#)R=GrbJ@Kql72GC_@a6%6wJ{uGi8~=T@-3');
define('LOGGED_IN_KEY',    '=<;TXVTee*8/Kx]U1!RRbY-]Bt4uBKXP2PUio3]PK|El!7>I)#uWRXOpQP0S*RCd');
define('NONCE_KEY',        '-HPt*a)E06pA{lEYK4WMSBJ;ZmVsb[)J1{)(m<kRETt3$tC$O dEay$Q7BH{%XgB');
define('AUTH_SALT',        'gC:-+3XNF9QUhY<A8Q 40Y3OVc, xL`3D&B}=bA|*S3-wP}RY!S*qn+&[_2xT8&t');
define('SECURE_AUTH_SALT', '!t5^M-N[aUxf,)2J8a=ioF_T;-@!LR[7smH@4|?avSB3m!fvxMrb1[ r]HCwHn3a');
define('LOGGED_IN_SALT',   'R5Ea:igRy?.GFXq$w/=Gz3>T+>#[p2WbO: WFYM3}q|PG~oUPmHb?@KwqKoA3j[8');
define('NONCE_SALT',       '.%1R7q,,b.ErSgLTHP-FdxnC-u}JY,otSA Ul[;k[O286[D:ahf+Gg$+nx]g,KNd');

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
