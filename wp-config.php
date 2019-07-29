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
define( 'DB_NAME', 'gulp-test' );

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
define( 'AUTH_KEY',         'M<=2Q?u5$*ha&TZc*+:_3mW.!*3.EF<f6U~.<b[$,ah TV T[I<J*{X3+X}o9t[4' );
define( 'SECURE_AUTH_KEY',  'Lw8VYtZWgLHY%r!=;Zsz8{0r!b,{^g.dhv*Gms.d#B$.X{G<@DW>XD!<LeS`ch(:' );
define( 'LOGGED_IN_KEY',    'HY!LqW4*/cm^-J]J?;^|Eq-Lcig~k++<z@yIe3rFNr;D=OufccXnyxSFf)wx74_u' );
define( 'NONCE_KEY',        ':B@[Qcut-=[tb_?<O:]g,0B9]]TrpH5(t*F+r$3i:8tg%swg+tAiet|g U)|~nM!' );
define( 'AUTH_SALT',        'WA97_>>bP{`1Kh^@`G_<2CqAS>wM6zp@cGw*9!)(B,!>6!5<X}R%E=s!4G?k0#Xt' );
define( 'SECURE_AUTH_SALT', '/@?)e1@(*$F0`&GXp0p<]i82fli)>he5,/Y3<LJgQek/:+/M,eS0)/1BZwg>*qJ1' );
define( 'LOGGED_IN_SALT',   'UHuC&9sBwfdXm$m.Z[**]cMS>):9ybpsd&})>J[m=CD5`@<.&#j+.RqJxW4!euE>' );
define( 'NONCE_SALT',       '80womrbd(2K&chtcSmFk_+#p6Tm!Uj@Z?k(q8Frm/Ci|-ROtWF$[jK[6ogE*8ogX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gt_';

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
