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
define('DB_NAME', 'patrycja');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:/var/run/mysqld/mysqld.sock');

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
define('AUTH_KEY',         'e<H35FmH.i[_:mft#-yyCU`L@|#YmD0|+H!!^#~IWBDx..d=02>qGe?I~>7r4&%4');
define('SECURE_AUTH_KEY',  '2<E1=6&]G_bnTEt=2|*V)hUk{i g:8LD-0/rbj0gKS<<80qa#Hn:+]Cr{?hZ@aJ&');
define('LOGGED_IN_KEY',    'gbWnk1YXJG_Ni`S#]unLhX+Jn/wK,vOTy&yZoYlRLY&/5-7n$tM2,TK:x376%ZY`');
define('NONCE_KEY',        'U=V, ):IcIF*r8rz]OGer?z!zu+l>=3b)sJvEAo9WMhzt=$@/F<Tm*#<fS:IY`/c');
define('AUTH_SALT',        'AcujBj(|.H&,6+=u2S]G[TEQz!dqgN]45DLLQ>n^n<xZ?+,FcU<1b|[E{*m&[fs/');
define('SECURE_AUTH_SALT', 'c3Q>!/2Fp)I!eKZU_afDD/,(gKo<c#)s1JpaL~y-.S<oSA4%Q(2eSJEJ6h^IHHh=');
define('LOGGED_IN_SALT',   '0!Oc^c!NS_jw{ja!61,K935:,<zA=o^-U`3Aj&),&t5q;Vv,,,d=c0dSw@qZ?+x^');
define('NONCE_SALT',       '&F}a_-BCHSR?Fa~5l^Fme&.()kFwcfeunN0D3?4q6WS1~l}MWY r8k5A^6X&n*dz');

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
