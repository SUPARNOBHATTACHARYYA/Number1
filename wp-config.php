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
define( 'DB_NAME', 'number1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ':RM/^PcdlQb>+f}t;r;WmQ5zdLehfhZSWq3$gbXTft_UHt+n[d+paG.^/mH4&=|l' );
define( 'SECURE_AUTH_KEY',  '*}2W%!D$$tV)ZVrvD-- l!+ZoTAJ@FtH/,Snn)jFH;^m?kVFUL{AJH42zYS7|+tn' );
define( 'LOGGED_IN_KEY',    'F;T1/Xl$C?6OE:WEm(2ol7c Jr$R4-}uvU8LSs+vM-2vBnW3T9{cy5vOIEZH_^Bf' );
define( 'NONCE_KEY',        'EBo#6LQ>Jn%gp5^]agxY<s:Y@Z*nEa7IS)5!/5Q/&1L_aa#,sR01+Lp][]S|LRGX' );
define( 'AUTH_SALT',        'vX9G=TeSgq@)D[0{Ds-Oyc/O$&jS&U^;;~.0e7FAoa`LK;.5)} nWYpjuFBUSYqK' );
define( 'SECURE_AUTH_SALT', '<NBPyIu 9lUAG&U)1Fl3[f2OvgP9*AS]X%9_DBZq.kW&9[RL{YO1IQPRJH?;ma;v' );
define( 'LOGGED_IN_SALT',   '9=D|.J5}5;}Hp&+m(.:v~T=oKiw4?| qw68=Dl)AV2 K6}NfT+%}O[:}.,FuG_NX' );
define( 'NONCE_SALT',       'KMk_e2`]f-u+Lx<IFdG$3^RB (xu5ILMXsN]a>,.d|I#97BS;/Al`x!y+zJ4kUS0' );

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
