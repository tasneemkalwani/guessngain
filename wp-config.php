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
define( 'DB_NAME', 'guessngain' );

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
define( 'AUTH_KEY',         'E~(~R[W2s+15q;o.Df1x7ppgg0F0n&w9>$:Ce51(>(<TfVzu~e7[t&8~M-U=atMw' );
define( 'SECURE_AUTH_KEY',  'XJ#UkdhWx&&.IC@r#kf6Nrty>6|giLV(Ml3Oog5esX;g>GWi.Pj@%RZ,P]`l+C2>' );
define( 'LOGGED_IN_KEY',    '@}UQ.kcTF8DY{EOR~kg?S/2owg~ZPZ:t%Fz,%]U%>#mu+GW~4<%[H(|g&Y*t!r}c' );
define( 'NONCE_KEY',        '-!.|Kt_7hX|,iml?@*GILZ{<lC_-*DS~p8P|~A%Ubt}=.u/m]%%ztT/M~aZ$41^,' );
define( 'AUTH_SALT',        'k}`}fqpqG?)F,:0><pc+GCqcG<|(FcyONLm8PdRP86c/S}&9s[8Hdb2HT?9XVEzc' );
define( 'SECURE_AUTH_SALT', '44kBQ/<JZY0)(tWkER*m,ee KdIAL0HCh3%L8/+i3kH>C5.];H/iUq_{VtMI_ ,<' );
define( 'LOGGED_IN_SALT',   'V,SvC<clTZx3-p]p`<LWW%!N&Q?QmPX},M0U?z #1>;Tl6AK@e} z*[kw+*{{xW[' );
define( 'NONCE_SALT',       'H!E{w-T:M{Q6rPC^>,:GBTD/8AVaG(Z2ja*r[1dkEF~)2g|zrUB)4K :2F0Y:V}A' );

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
