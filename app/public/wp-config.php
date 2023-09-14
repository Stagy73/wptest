<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'JhpjU02p8w6bUXfNdiBdpc684zX21/ASGZzPJtfUrwS2DZwfRcxzVkS1AIiMSJDKpWzy+at269wAo6AjYdXj3Q==');
define('SECURE_AUTH_KEY',  'mc/iUiXLlJW4KAiy7vWDjAW8GGDDSlV6rZfUKPlLDlwinrXAnd9tnDznfzUAlbGtWRUvtIp2yQb2xrodCOHDNg==');
define('LOGGED_IN_KEY',    'jwN1rAduTwLZl1shIC659urfVRT5hOwDyXmJ9p4/CYEzIn8UZ+RpgFmHpsXu0Rc6wOetWHTL19QynpjIe+cOzg==');
define('NONCE_KEY',        'RkUVtJth5G5gTH7NsrlFkGRkYh4RRj/U8ldqDNb/Rwj1quSdQFVMRJu3aRbBSYPAU5A+/IhzOxXnS2Mt0NU9Xw==');
define('AUTH_SALT',        'WNn47orH4hmNPnbMOV2cbwPFa2VHVX55zI05j0HfRF81HuunORg2rAKFCMgtTmUQ4f4TIAvhcWKb+iOxpeAaSg==');
define('SECURE_AUTH_SALT', 'nDckpwldW1SvXmSnIdLpP5KkG8XAuMF6uSblHU7eZTWv2sEj4ekDRmsE1LdAzr6niSomeR87f+I3HOqynVDPkg==');
define('LOGGED_IN_SALT',   'gTD29YOuntz736KHl3PKf6c3g0fJOEXUMh14vQWu/q3CHhrGsLq5q/JlFCOvbF28fcAElv0lASP8Vh0zTGubJQ==');
define('NONCE_SALT',       'V9zfDzrLeB+idY9uuuuaZ789cMFWxxEZjgCFtTxyC1nY9Nrveh/CgId9FElGFDAiP+N2WcNxAjjly6shQTN1Hw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
