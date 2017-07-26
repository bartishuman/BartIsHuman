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
define('DB_NAME', 'BartIsHuman');

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
define('AUTH_KEY',         '5oC_*O>CkSw%F1b@#|>Qd8*Qef+cs(g]}g#1wZ?.`,-JMDFTa$=}Nz&yxUjS~fnC');
define('SECURE_AUTH_KEY',  'J~-<vPQ0zu^8?/F;9dVN^Lnd21]QY}g)XG6Fb1q +$`R{=,%DW|z]&TsS|kC9b~D');
define('LOGGED_IN_KEY',    '.dW{g@5@<w@~3qxA1xhIitLhkylN;?oJib*MP,.7spT[G*r<Bf,_$vZM7#-A;4~q');
define('NONCE_KEY',        'NooJ`q_W#J(6w x0ziZEHq&gS~rqtMzh,1JdX:HDQ)3YxMXqFL4DG`<Hn^j|}o/:');
define('AUTH_SALT',        'Pr/G:;.E`Q7Evj>Pze?Lh.rt0 %y]Rvm@e<E6q=V?1&_]m2v(v(?Tg{b1PvW+<Fa');
define('SECURE_AUTH_SALT', ':+a::]2Ea;Q& 7|[:~n?}o QW,?AsJ&(F<ir7mi1l@0{Bj^h{9o[!@:Yqp=/QD&h');
define('LOGGED_IN_SALT',   '4v?O5$anJkDg$qs,n9T*TWy:o*<1x eX9;0d#fjO|8q@WJbm}13t(2Zm?s#PeO74');
define('NONCE_SALT',       'SUbc8?0[E]YT{h}ULG+X0R)1JB<|%w{hg_+Z!U822OGX^,7GI2k@T:X+;_lJ,=Q3');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
