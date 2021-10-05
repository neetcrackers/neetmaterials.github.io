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
define( 'DB_NAME', 'neetDBo2xo');

/** MySQL database username */
define( 'DB_USER', 'neetDBo2xo');

/** MySQL database password */
define( 'DB_PASSWORD', 'JXtQHChbN');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'r,,Q^d#[KoGgs:[wPD2i.;2H9d;5Ar{<Iy3fqj2i;UJo0U,r,F3UIRw14dVo4V!v0');
define( 'SECURE_AUTH_KEY', 'y3{QrBn<MX.Eu3Z@s8Y@4gUzBg0QZlSOshs1R@Ns:Lm6i.a_H6h_Htj>IyEfU*IbI');
define( 'LOGGED_IN_KEY', 'sAb{Tym2Xx6i2W+n}YzFjY,EyQqXx#[Sh[1SR~m<AAi++*_1e^^Qfc{IEQ0G8Nz');
define( 'NONCE_KEY', 'NF@go|}ZgJFN!>zFR4B7krUg}4@,YgcFMz,nvB7F>0gnQY}>QYBIv$zcjB,}C9G');
define( 'AUTH_SALT', 'vY73$,QYFMdlhKS~|s-GOK:WSZ:4@[VGOKw~hs8G[|:goRd[0zw@KR8Gs-wZh4F>');
define( 'SECURE_AUTH_SALT', 'd2+.TPXDLHxt+iem62A<.;iepmPa#_;xt*LHT62D9mxi51D#]aieLHO~+#pltD9H;');
define( 'LOGGED_IN_SALT', '!kwC8JG[40gokRNV|![-$.^mjqA7I{<3fnjQXU,^<uq$PMXTAIEuq$fbmiA6.XT');
define( 'NONCE_SALT', 'FB7jvYUfc>30z,^MYUBJF-w_lhs95G[|1:Zl#t-wOVR84Cs-wdZh1:8!~[|SdZCOK');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
