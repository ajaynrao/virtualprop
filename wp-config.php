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
define('REVISR_WORK_TREE', 'C:\Users\ajayn\Virtualprop\app\public/'); // Added by Revisr
define('REVISR_GIT_PATH', ''); // Added by Revisr
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
define('AUTH_KEY',         'yFpd0ZWwcBRpAQyqCtVAkJXWtMRiuNzKmxDl4Pecq69qjxq5gNKyzvIBdyihvnnWBVXiB/slDfxVHXjsLyyHtQ==');
define('SECURE_AUTH_KEY',  'nxPQP+4bF8TqgK4b3k4tqAChUSUn3gX7lqPeemM0qN7PBgmmzQc+Fr5QyfsBMonslDC/qeUlF8DZnCx2ldR2KQ==');
define('LOGGED_IN_KEY',    'ssvhTeHxCI0frfzTcDrUw5EuU/RhmDiZdy5damkkVXoNpjrURkF09IGW+VNe3B3mpqseiVbLw8j7BiqtmNK5Sg==');
define('NONCE_KEY',        '++b6b3H1vu0IifByfbX5G7CiLGEUBzPTadiH/eWuJ+dZ9bQwcrkjDqdIXf5Cf0Uw6aeujR7jL8W7GQtsA10xfA==');
define('AUTH_SALT',        'i5JmuBSazS/iOwItoQCpHCbw9xi5OTJRdexbSLLUomET83Jw5oDslpCcYCv97M0dLMjCIu0E2xZZVMQdmeSUqw==');
define('SECURE_AUTH_SALT', 'VajmXEZEKzChN8Xgx3zJ8aBSS/mSuYAPkLhxvbzvUoRisUNnQLUhBL0rFVGjxKGVnths0+bohrbdJVV3772vCw==');
define('LOGGED_IN_SALT',   'oj+SCvGLPWxnIrP+QvA+SJePQ1aFTLlGZUcyLfnVfjiXkOvdQ49jXe90AvocO3ieBJFLsL9FonMZ4Nj9p1EzCw==');
define('NONCE_SALT',       'WT+AFofqy+G4gDm6YTDTDsKUn+oOdghfCFr9dhxY2FzsxY5CG0AiCo742ddqOG0WJ1HNrVxuLhXYUJRkXJKa8g==');

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
