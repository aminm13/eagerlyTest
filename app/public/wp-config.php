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
define('AUTH_KEY',         'lKfARtLG/xgFILa/7L7oHBCktI+ntovvQ0YMfjVvEwEi0XX1Mroi6ivfQegofHZ51zTgVc3olbu9m+jtaK+XQQ==');
define('SECURE_AUTH_KEY',  'JkAU8XuXRVThTm0e4jGOMOhnarhcMRzFguIOpJt/H6/dhYHAjPUFblhDtK8jkbJ184S3NT3Rd/J7mV1KaypaOg==');
define('LOGGED_IN_KEY',    'FCnlDabWcRkWJqMQdrLgIxRqqg7b2ksk4Km4g1LSHkSYHTO71MEvlo4sc56rOwV9M2/PxpRmUuzi+BjZDOqA5g==');
define('NONCE_KEY',        'ucPrkc4S8IliFxpYdgnfgieIj6ipHoxsaGaPiiFVZrn23xCjhW/WRErbrxQsi0wH0ZdMxuKAw6wWz8/WjTvNLA==');
define('AUTH_SALT',        'RKEtY+XaaL+vhh2Jfb6vm0NDrN4VEnxSXWfwT/F35nwSkKhQUAjkFCDnkaqbZWT0J/IIif03QqJiAn3zuSaFDg==');
define('SECURE_AUTH_SALT', 'B0sJ3IggyvIOZtdHj9pcdvGNfjKuIFjRR+RsB56BO7/2yzlJBZnxm5GJ6NxAV2YRjEWHENkajPIYVpydGpW8CQ==');
define('LOGGED_IN_SALT',   'Yxo6M1Mz0mauCTlb9xX9b8xvu1X2IsAZo+wYWP6q3zSWDpu/7aa+XMGI7VF8EW0DqRVq8v0MPmqFdLewpcGdRQ==');
define('NONCE_SALT',       '54REIvP6FZxEZwtGhJ/iUaY06jbO418GURjI0mVoQKG7gh2ou61iTOFucrsl6UNQfqZ/p3e46JdSxcflgV6o8w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
