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
define( 'DB_USER', 'devtekken' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tekken' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']5gc(R~;u[UgCEzmsp},g6:Jm|Do~Q7}!^,gn]g#gAcLp8&R5,v0CV+8+-%jsQ4>' );
define( 'SECURE_AUTH_KEY',  'gkAX*,4l^Wt0(}sGgd6--!> &W0i|l?fY<A[:R2,|BQLi><+S86{T[zQTfe8#u,m' );
define( 'LOGGED_IN_KEY',    '1F~POa72!lAljrEDCBojrM^>MZz*Fq9EEf+wVNv4mP(Q||m@ueL+jDsrkoZS(KB2' );
define( 'NONCE_KEY',        '.IxiQy_Vk~:_0AFdOgR64*FSIIsf^^SqL{n?q4cF$u!t%C_#thQ3he#l-SfFO)Yr' );
define( 'AUTH_SALT',        'H&sPBS>6B]-j_agS/t?jj)Bh7q:wau8ew(.8&}C,_G2!)(wG6L0Lt6`s;oy1_i==' );
define( 'SECURE_AUTH_SALT', 'BHqpC/8[Q5YnNeAFp&gCKD%12QY4D^H3c5#cthnZ*OElJ0(&kP$Mw~A?]l}YrR=S' );
define( 'LOGGED_IN_SALT',   '?N hPZ[L5mcnU4-Q3AWTToZ1&3zp[<93ts(n{/W`P-iYb]%y#d(T2U8)~XoAeexz' );
define( 'NONCE_SALT',       'LGr[}Nmu6^,~OVM 8>HQ3H|p;AP:_!*.g{Ww]8Uv38V /VvUP/Nsvf9ZG/v!R&OG' );

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
