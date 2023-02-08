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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'olgaandr_WPHOL');

/** MySQL database username */
define('DB_USER', 'olgaandr_WPHOL');

/** MySQL database password */
define('DB_PASSWORD', 'pJa6Lv6C0s]uipeBO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'cd83b7b584e6800f06e79f1c92680a5e8de3fca2af0dafb6977602ca4b09e353');
define('SECURE_AUTH_KEY', '628fe89874dd3c87b9ba16962c48b7b4132820fc1306c675ebfc96045c980f2f');
define('LOGGED_IN_KEY', 'e310093636d0eb66bf8265f468e1b0405d2f6621495b1ca9c3a44a76de95c9e6');
define('NONCE_KEY', 'd2169dfd254ec94964043a651a0e51989d75ee7bcda85bb04204594d278fe027');
define('AUTH_SALT', '44f2836632b435d6bcfd45d25b7852bb3a7a0fadb93eb59c14887bd21b69e3a9');
define('SECURE_AUTH_SALT', '27a5ec1be5b5c5a4375819383e4b321c45777fd12c32411e05f03fe0d11a8927');
define('LOGGED_IN_SALT', '8742cc03f0f287d5160bf7e68d95eab0b616c236c633512ae13b563117de1ab3');
define('NONCE_SALT', '95752fd7b813f52cd63ceca630e346e6d964ac3a36bae3f68b75a5f7ee1cc641');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Cmu_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
