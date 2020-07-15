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
define( 'DB_NAME', 'wp_arissto_my' );

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
define( 'AUTH_KEY',         'mKS1i3c;v3;+kYVVKBT=p[u+#AF4~uKN27^v21.Q#pmluUXjQy(=1d%J2YO(vTnC' );
define( 'SECURE_AUTH_KEY',  '&>F8iXDPPC]Cq1}5Pm1QEgv@?+Q48 WYD(rtkL[[V~?I7lw=xi@~|4,cDpI&|qjS' );
define( 'LOGGED_IN_KEY',    '{zdt?j+^=->@1Yq^ARdy4YJEsgKmQojbBW7 28qbW2q8 w<S,X-n$-^4y-^k5JF{' );
define( 'NONCE_KEY',        '#Scj})BL{hp|&|n^RVibK>5#JrMF.[AzGR*S6e I8eP{ 1Rq3Xtd]hgSE-GF9qPa' );
define( 'AUTH_SALT',        '[*rx|g&7~3jI5TP{bbZ.H)FI6X^?>njz0OuWK`fUm>V7D*xyC|_r=>RiYh]rcJCQ' );
define( 'SECURE_AUTH_SALT', '%Fh1N65LE=k@L~d6<x>@w?a?([RJ SbTte?mpV%VtRy9 iFV1GK}^h1|5E&5C:x`' );
define( 'LOGGED_IN_SALT',   'vE$g5GMIYall%5{[eVR`!hbil}OquDzj_gHiRuB#K$(s!J-r:R*|Sc^w9.P@JdB=' );
define( 'NONCE_SALT',       '1)V4t-=sBC/{OIp>^>r1t8rIw&2@$C r^#1OYOKuYZnb%vd[axbM5g}d+fU]o]]l' );
define( 'JWT_AUTH_SECRET_KEY', 'mGC<yrK}pCm?se1%A2adhZ+S|b|45&CeE$,a!~vNA>4=Z=II9hL_,}%;TLj_+-=}');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uw6np_';

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
