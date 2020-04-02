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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{#cqD!IxLq2cZN<Xv2PSYU:NAFW#d0;*Bd/DVEDYa3zCy&#`1X-@~J.-cwSmv^rp' );
define( 'SECURE_AUTH_KEY',  '1(fJJdggf_e:#a;gRs1,J379eon<)$VKI; .<R7Ew%r#%d+]Ypplb{k~?e;x/`-i' );
define( 'LOGGED_IN_KEY',    'lMN+u RSdF%IzAzjl+~Vm]X7V|}WRg#p=A*3|l9Y*OJt[)w@n`^_.6aPpz1EpXBf' );
define( 'NONCE_KEY',        '[/R6iWd[ux(#|GQw26=?5aPLGyC,#6/SH: j8pHJQ-:N-uiDe.*3a$e[-2(0L8/.' );
define( 'AUTH_SALT',        '!%gQjt3YL~v5quM(5%Xb|$5wBNBnqFRH/<HlUBrt?9(ziwl2#R&<nB_]iQ$vL!<&' );
define( 'SECURE_AUTH_SALT', '=3x-EtiOX{n{%ykdp5;9d-.J^~<}X5FbKZM.?obKEkjMy1gLq8j&WsGK./W2/|h_' );
define( 'LOGGED_IN_SALT',   'P7%bPflw|J(2YnIoc& }i EQ[JyTw<aI^~3</L(mV(/yPZx*{s;C{5EuH6]wIaeL' );
define( 'NONCE_SALT',       'no4v1;k_KY0i.!?Da<hR`y?3RvssHTt`jvndzk~m{uSG{4$=(f uk=Yh0]un9&C^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
