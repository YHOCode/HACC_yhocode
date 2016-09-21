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
define('DB_NAME', 'i2856081_wp1');

/** MySQL database username */
define('DB_USER', 'i2856081_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'X.M9QV@ok(z6e#508o[79].0');

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
define('AUTH_KEY',         'QW4mxlCLkmGng957jx45V5bshwfVflxfR5dZUynd1cb5rcK4H17xFIASb1IZplmd');
define('SECURE_AUTH_KEY',  'qXZoAl8LpuCmIEMxZv59GC5da7ADV8pca5quNPpHg8fCgsn5b55ZM2W0zZv0A9qf');
define('LOGGED_IN_KEY',    'XCPRZ30j9grTRk5aBhENLiVM8or61O6V7NCbGUyAsqEnRJQql9wof1wlxlXBk2SO');
define('NONCE_KEY',        'S7xRV3MjUdK15iC6MeSm5eXDh7Ifb3L4NSVDVVgUVYzELcoHoprXzFCYl3IFqLPZ');
define('AUTH_SALT',        'esiLSxSkgMeb23O1clh2SAewneb0FQVyAVgf3CGKmp8mcOdeodNPKnC3PeR5TqJr');
define('SECURE_AUTH_SALT', 'H9S68sZJQkHsc40YU3SW7UmQ4fnYhLkf4lCAvQ2jykwHg2EAizGJFKfPzcFaUulx');
define('LOGGED_IN_SALT',   'RYFzVVNOGcEOgxPLBm6IDTh4bMHslWLj3SvG7SqxuGPI7JXjrj6P6ns2MRxLO2KK');
define('NONCE_SALT',       'OXXSezIe8HyGUMlgO5og7kRp0waX9wpKE96F0v9x2I5tA8WvlvhM29ySZEgbWgId');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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