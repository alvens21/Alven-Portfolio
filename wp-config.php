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
define( 'DB_NAME', 'alven-portfolio' );

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
define( 'AUTH_KEY',         'dL9LkkUm1PtZOXfuwbvOMXr3suhiiUo2weYtqbGm7SaeW8HErB4zv7wlj1Haof9c' );
define( 'SECURE_AUTH_KEY',  'TX7apJwnAZ0G1nBzzw2bYYgQSDEdsO2ZmmgXaFF07eB1i8F5eK4uQAIusHZpIkf3' );
define( 'LOGGED_IN_KEY',    'vtpsHPsY5Q4bEmvqJ3rPRfUXXwsZHjkvnwaq9hgH6RZFOzTeadLsnmxV8v35FXAB' );
define( 'NONCE_KEY',        'tGoK9LDCQUQirLr6f3Dm47RSdhQErwkb9xO56i0raRMSfVNyoclR8IXAkVJH8Fxb' );
define( 'AUTH_SALT',        'y7SPESeDqB4FZ2mkKEDIsvuqsQozZAhn9reLjWsV8qjNGo8Hnd3L0k51OofVo1i5' );
define( 'SECURE_AUTH_SALT', 'kMSsVdniaJV0v7qi0cOc505Onp7ev7Vvc20Nff257QjjiFJtZVY7eUkdGnoxMfzM' );
define( 'LOGGED_IN_SALT',   'iqVvBrzceN9dDvT1fbjUA3ckiMvnJPzZKwhVycKX8pqeoxAXeJOiNFJx3WgTgP0g' );
define( 'NONCE_SALT',       'KOwrUjiKrm5JqoCI0FXHKWT0xZqfIjxSHf0Ow8nT6gd2PbrxsWhULC7ctBdBMQyH' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
