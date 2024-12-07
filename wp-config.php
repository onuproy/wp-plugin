<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'mwsyyzpV0diejt5eovHtg4wkgVq6E40M6i9klZszsZOESOZXyJKcHngvSZEGJkdZ' );
define( 'SECURE_AUTH_KEY',  'VVQgTOCUjonKidSDAvkKTGye0sz7pqEloLIbZjNNXFF3YE81wgiugabyam9PcqYi' );
define( 'LOGGED_IN_KEY',    'kavCeNCPdhvhrRxVvucbLVDRbjOdTNNhDNhtEWarsyVzZGRsNxBpg9EQezw3eUNt' );
define( 'NONCE_KEY',        'M6R7n6ibeuq28XEtkhamXWUbyqDuhyiEINeM7rVjYaefPel9Wvbg6PvPNE9ODQpT' );
define( 'AUTH_SALT',        'p0VWvCcAvYiIE9V9p7UnRj8NLelFWk8FQedFxDFNuy9NKCeqMJ2vslNAzSRxtnVs' );
define( 'SECURE_AUTH_SALT', 'db3d220f7px1NDCxcnXBEVQyYRKjjkW2szqEltx1260KbAmqf4LAj2etPHi2qgMN' );
define( 'LOGGED_IN_SALT',   'f2yXlX1o5qwslEWj9uTqsFIhmrB2RJrsXj4fUTM4z8PIwUCggk21yftQNy52bclx' );
define( 'NONCE_SALT',       'GEuDQjOgJYBFTxicWT14bLd0UNCfjMCjPnkyCvwF0Oh7hahFuDJADbFOX3UiSxUr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
