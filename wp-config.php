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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uzio' );

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
define( 'AUTH_KEY',         '=/(*MZx[Cwv7K$2!YK)|aY,qO~G^U3sWbQS->j<?Qh.qE)A||=)|OjIGwc}T{s@8' );
define( 'SECURE_AUTH_KEY',  '%gZ^giK2eLf#SvQ4_wU?`Qfd{l,c7DZ]>GxQJJY57Kn<fYVE@[LZO<JiJE[~Sls`' );
define( 'LOGGED_IN_KEY',    'WiL}_p?]Z-%:m_?r8Ov:Q3<Bf[#Y$)^`k?t&Zw?Ntn[7}>b{9.pVN9+.^_rRO48}' );
define( 'NONCE_KEY',        'hW|-(:rm-N?iB0rK7`:E+4Jv5s}u5vNl5kWtFG[xQI#wU(.75+elGWpLsr !W?Qg' );
define( 'AUTH_SALT',        'HR9HBqymugs/t)wA?A.*~;4X(^b38(i#:vb`Er`,ayhCE)AFBHf_L#$`9Xp38^#M' );
define( 'SECURE_AUTH_SALT', ' [pv/O*Yup..2~rWO0#i=X^iB<^%ob. J0J{MY9[r;ZEYz&P~nKESxOo_qjE! dN' );
define( 'LOGGED_IN_SALT',   '2Y(E-_D*U}R=/KEFw|w<Io{x!@7CUv&].^()0{CACcN;zHd:._`&D=jzU$U^wjgf' );
define( 'NONCE_SALT',       'KUQEm,~Z=W=O/TiCbM^zY:f@U[8>kG:4}jgW+|_=B*RKG%`=zMl@EDH/c hw!2rH' );

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
