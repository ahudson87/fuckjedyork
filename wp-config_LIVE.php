<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'fuc1505912034293');

/** MySQL database username */
define('DB_USER', 'fuc1505912034293');

/** MySQL database password */
define('DB_PASSWORD', 'FYJonWP#3');

/** MySQL hostname */
define('DB_HOST', 'fuc1505912034293.db.6062134.hostedresource.com');

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
define('AUTH_KEY',         'Z+jvY*=LK/faD!Yw3SaI');
define('SECURE_AUTH_KEY',  'bcnRngvGbk#6F7PmXP4C');
define('LOGGED_IN_KEY',    'HDThXDX&MA(wgFKBUXLm');
define('NONCE_KEY',        '*m9nVjPj48ER)y1OQvO5');
define('AUTH_SALT',        'XKItT1380n5C @-qNDSt');
define('SECURE_AUTH_SALT', 'OxC)cnzC=CPY$XxE6NjR');
define('LOGGED_IN_SALT',   'Ef*/aIq@&ahJ5QrcHVZB');
define('NONCE_SALT',       '%0qH9!fS@qptY6jsDs@W');

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
