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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/cglu/public_html/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'cglu_wrdp1');

/** MySQL database username */
define('DB_USER', 'cglu_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'zKQjvPJJPWXjpwO');

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
define('AUTH_KEY',         'lkQ^eZ9!cK7>#>k1C0;l>Vhnrx@S;22*G@ja3O(wzT^E)nXcta=hPRR<WQD:|h;CdLc-j$6;V:op8kY');
define('SECURE_AUTH_KEY',  'Pz3X-AuDJPW6)/YRYm670IaM-=U00GpML)~VjdA~w1QIc/cjxu6<_9?_yphtD^Czwe');
define('LOGGED_IN_KEY',    'H/M17l0/)nc9dFR\`K$!mY=njNw:@0$KYc1Tfcs0f-r)S0h7vyHYU:lUqJIp@');
define('NONCE_KEY',        'wH~6nB3zaKXQWptAw$qD3GrcdvAQVg6VV;0!;qFLTbIYi99aGKLKQ:9l9coY:R4S15oMxpDK');
define('AUTH_SALT',        'tF(@ZP#BCE\`1)oKENh=Fz|a2Itw0__@|6@bg>q4ZC(B-2>*a3=xU;qtm6K^Aij(~f;XWJJ(sHZJzQf');
define('SECURE_AUTH_SALT', 'OqFHlTBJGjmaUD2G^b;P!XH9PZ$j4J9;_71sx*@TTx)bVH0yfRhZbwq=2mk:4Bj0S#>n|x#');
define('LOGGED_IN_SALT',   'OkfOwT8j>pm6=j!t6Let~-wQ:HJZ8UB0;q6W;=qBSvCR^B3QEwSmB5?X|K#v^IZS');
define('NONCE_SALT',       'v1GF2JBh5H>hP2\`n#>vX6Rwh1dUQtVaXm00AE$Yyf8AMnmE0IhejtT\`N-~k:A8:y>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
