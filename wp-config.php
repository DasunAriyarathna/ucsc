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
define('DB_NAME', 'happy');

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
define('AUTH_KEY',         'NIxyd&rdLtU8bKS+rgLwk>:SY.MZ=4``spshX|u`VM{|RXA&MlyqmuB{+h&WycdO');
define('SECURE_AUTH_KEY',  '?3q;udxp*Pk48}G*/l3_7?--<z2J,zD,j!+l39pt*W4H$0XF:@O=?GPvBSeX*`al');
define('LOGGED_IN_KEY',    'T/a!|kj5&Zw1Bm#[D2sbtN(&1T-D~4(DTzqCho^-~-_!X}vu/@oZ/^@+VWRTgj @');
define('NONCE_KEY',        '7j!t@LV#CGg|ojmFPc^8Eerjxa:mk|iD,ChZ$s%/8iua@w+3]NR:sUfHyI,9s5|2');
define('AUTH_SALT',        '0KK|$Cz1FT[ksv~I7}L312MDFPhGzsDM U=<NDTmKNdC5vqzlE-g2?UpbJnsY0j^');
define('SECURE_AUTH_SALT', ':m.6+C9K|5D5@Al(.Bf?lD*6=35[>(sb+.=8&+q +)V$:j#}I7#Oe#K+c`/|jNR}');
define('LOGGED_IN_SALT',   '`:dI(CA|PDHO+8nTr(wP qo^z75DN~wPH^Y|sO*7z{-G{+<Zjy(3Yy0c9!>6UQ#x');
define('NONCE_SALT',       '8x_p!!-yoj+D)C-t>zM]j?)xd|c*d{>u<b++*bU:|S-+zkAdQE-aTI=vH;<9kmi%');

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
