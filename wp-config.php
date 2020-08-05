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
define( 'DB_NAME', 'clothes_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

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
define( 'AUTH_KEY',         'B$4?NFm_5uG2N?D7pcW;UlB9 }6bm[ssHJ2}:O&`PjF KrcVs:iD2Oqp/o8SVh+N' );
define( 'SECURE_AUTH_KEY',  '+5SFxjv,<Rh17CLFx%LNGQv.^,dextMO`Uz^1M|$wF?C-S|j!OM}nx~5B4t*KLMM' );
define( 'LOGGED_IN_KEY',    '+F(^Nxn`(rO9O/=L=<[TQQG)~T%^ZKgd]axg7Gv:_u=5&M{o3a%St$;Zvr S6CoE' );
define( 'NONCE_KEY',        'O:TLyX}.0s_Xq@!b{-xkwdDd oH^N}[D;GT]6A%cI@LldMPk1h]WFb}9K})PCvM-' );
define( 'AUTH_SALT',        'ZaAj|VBOKD=~~m1ZKCVeF937]~9d$NeYH72=Mm;& ?/]P,:3IYRz,phl`~(5DqXn' );
define( 'SECURE_AUTH_SALT', 'v+t691>sV0!~w7Y+wz#fH2.69&nIxpPISJ&&BXy)dX4q~RT<k*=OrekL20v.(u#`' );
define( 'LOGGED_IN_SALT',   'GG`pqv3^7ET=-*tGf|#N[U*jr>t9Stf {IO:qa-5X*dDoNQzzdAbC5P{1S TWWC(' );
define( 'NONCE_SALT',       'L5=xpv~:6/k~!o YVRx:u)L< H;e<D]&bhh*vu@Cn#9 k=IIR_= v9O_UwfQHO-d' );

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
