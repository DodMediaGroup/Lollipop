<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bd_lillipop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gUxj~WhlQ(*$m=1jKq!gIR3}=G>a!<zk&BblJsTN_.#|88B}M=mmB+5?sP4xS@Q1');
define('SECURE_AUTH_KEY',  'Q@*^(AwIk_>M|uZw~bpn-j0,KyqLXQE_*J*F6v~|UfQ?k(_ls9_ls#=017&+E[:-');
define('LOGGED_IN_KEY',    '301W|K3K#ys6,G%vQ-gaP>N;TD8)]EDZ1 lx^j~Cgm1MR?21S-NA(-F= tL@-;;]');
define('NONCE_KEY',        'v6kl[U1-xuIzx+e)PJ&Q^JZ&#(4{Z>}?XI>vf}wI:T^9oNTtdxq-q+OeOs;vpJsC');
define('AUTH_SALT',        'O:xZ^(epx:`>z9iNgh+gRGSY+/ito}:b_|lwbs`iphuxHGq _xWAr/|;hvDBTsz`');
define('SECURE_AUTH_SALT', '^2pF=_|1c#=~k/$7VsW5mBQK<xsn1DVM0tyO/_:vlo-;w_eAvcfMY2|a=XN5Ct,H');
define('LOGGED_IN_SALT',   ')+Ic7d]|PLyISgAmXAw&pt7p%S&*Q /@RzB%AI?Q5idja$t+9jg.;<v@E0~X,xrK');
define('NONCE_SALT',       '(d0o-_~faTAcf?Xi*nY-%=.+<oU|!uS$J?gof%Fso-ys8T(Zi~7L~N,0]}RiE)io');

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

define('FS_METHOD','direct');