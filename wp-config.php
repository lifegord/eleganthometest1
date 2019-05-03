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
define( 'DB_NAME', 'eleganthometest1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3~{yH#};vl4G:1J&Gef}[|Va1GiqUn|[Y@-Sz7Ip:&e,jCU)/m9b+@>rNO2|id)V' );
define( 'SECURE_AUTH_KEY',  '[G=,9,8Tf;~j+Fi$W^}`Y]|vg7=Byi6}yTe:2@ob7e[;^pe3t!,!Y93lG{EI8,+Z' );
define( 'LOGGED_IN_KEY',    '.?oGa=Rie~ZbSFU*zD8%&%dcRi0[ f>B3p_YV_+jk?N4t4M`3La_RZYW3Jq93^T@' );
define( 'NONCE_KEY',        '-xydJ|Zwp)le}[8$vuD3v6_nuI8cYP.gb2VTB#z=GzKkbS}I}Zh?)5;F@ mJ0Squ' );
define( 'AUTH_SALT',        'D3*k?^}oG5@Ogmeqz@ji}=O.(DT88zPSAm eRI/3V?KQ$8?E=`8v7TnYWAmcW`)@' );
define( 'SECURE_AUTH_SALT', '< (S#-m ?1lH?(ndk23KivV+SK|]3DESPd8g&wA.CWv].CoI |ZFg^JNT{R=KyS}' );
define( 'LOGGED_IN_SALT',   '5!?4:NP53&HsvdiN;9*}4T@60ZLRZuaSeP<&^#[*pA849HfMY1 ]w=MUN#l -tij' );
define( 'NONCE_SALT',       '>yz7~+zYL?)fm{2_] RlJ9c.t8D%}K!?;u,v+tTk;(BcZDUe~`Mt(emAirrhI$3T' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
