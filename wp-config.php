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
define( 'DB_NAME', 'javierpardo_db' );

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
define( 'AUTH_KEY',         '^Q~-J&mX{J|X,so&f?=^6%IR$]!r:T=JD,g&TTxcC!V2=`1{hroZ] Cr[xQ(^b}w' );
define( 'SECURE_AUTH_KEY',  'n=kYy/|h1_ESDVtuF[_u7$.BOzk8B!3ct CZ[_*HVKe3[jIprVh1ql%nYG^ccfH5' );
define( 'LOGGED_IN_KEY',    '3/o{c^BIuDWn)~^=`[L%dCa3g&PY$G3N!O0r G(Ha%himYA9S)ZD5_qL(D%TxxFC' );
define( 'NONCE_KEY',        'N+D1FPl~dzJ8l0?,<nwxVb||lbja-aP*s|y_qLn$p)7<dr|)~UC$uL_Y/+o5:,_}' );
define( 'AUTH_SALT',        'AF4N*=oHi(mx?h2n<6ieD%0_/t$,i]-~9ndL?qJ(^=cRF1+(W,*W4c~#,BR2}iUA' );
define( 'SECURE_AUTH_SALT', '?:`o0v,9Y=t|NT0s?s`H1Q<EQhV4#N7e3Q;r3N*=%X^L?aqwBqfN tlv_.XQ4U@B' );
define( 'LOGGED_IN_SALT',   '4LtlJ&8M,9B`Myglv5`D|/*}QUN7mmTfEoaCE#aFb:1w=,7V{$l30<7JpH,fc2S!' );
define( 'NONCE_SALT',       'z{O-o}-2BacwzD~!p$*I#>}3&ef2_`[1M<_2r9E~uyc?%ir6W)M; `&R`x:r|k/#' );

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
