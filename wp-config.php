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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kSbHXAZDOijzVIXtZGDMFHfskUf/mH5GR1W/NylK+SsvteNUk8VhTCMgZOhUgojQAMfCMFjUX5m9ndv6DzBR8Q==');
define('SECURE_AUTH_KEY',  '5vY8iBKL3IcJXFC/6DrtZQGCDi8j+MLQ5w3FHQvxTmYS1nHoZdvEigPC+qzuD3+LtxJlVO1V3UoWKyZ6Ah2TGw==');
define('LOGGED_IN_KEY',    'P3HFcj6ScG5eS9oJZwvo187HfjVrm6SAD/R+A+FFxH4imh1d4c49L8a6AilIfreYP9nZz5RBJQGQ9ouWqluZUw==');
define('NONCE_KEY',        'Z5SQvfZ9hUvGJQtoGxznAZYpTZ1CLJlHS8ahnKMP7hq5YW1qf1Kr9CUHFrOpFQ5j7IgVKnRjbhYkf/Hq84r2aA==');
define('AUTH_SALT',        'Lv1dgW1YQPRN+4VWgmJEaEWI25m5dY0Nyr5wBbmrfx+VzHL3ukfH170/u5qkE894Rciz/sA4+fbssdR3x/5ZUw==');
define('SECURE_AUTH_SALT', 'a2DdFGEKXlEyTu2nm3w+J6ZGOdf/DCyAg48RMq/qiA7TG+dIXlwSZRQcMFOWgtpizXXz5wxwRESp4a+ANyzIcQ==');
define('LOGGED_IN_SALT',   '2lFuA+WUr0l5AHS4aqxt8Ew3tf5Ogz4k1aZ5YaqNmr7Y+ZFdCwYrAh4FvcXLZgyPhFgn2u7w6PcdFd9/LCqqcw==');
define('NONCE_SALT',       '+nN6tGsa+NPuEJhz0V9TAyHysElkRQxzKUJvO/ig4ECXndIsBEroTgF5IrZl2BeiV3yltyI1IBEr1pqbKDelqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
