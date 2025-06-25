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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uisolution' );

/** Database username */
define( 'DB_USER', 'uisolution' );

/** Database password */
define( 'DB_PASSWORD', 'iW4x@5#5$8%' );

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
define( 'AUTH_KEY',         '0rP-4[DdSeUe@/$u2 YvfS 5UNE+Zf2,K$@Y,,G@JuL:r3<{?:R&<x[Cs9@kF*Ak' );
define( 'SECURE_AUTH_KEY',  'sM=.JWxm31.$!,I{DtwboElsxqWVL`nz#~}RAVOjg8cTBvRR^TOrY6UgUNSQJ%&3' );
define( 'LOGGED_IN_KEY',    'AbON9i[NMC3`4@QXUDQ!YwRda/@NfqL<ceZYwl,rOz/3b81$0qn?pSYTs7Uu!QkC' );
define( 'NONCE_KEY',        '(w<z_s:mA{;(kbdo=me^jc837h.HZOT>b j da{qRD~s#GZsTz9E`|uS.AK$3))T' );
define( 'AUTH_SALT',        '1/q,_(]oBy6n!R:X31Rd=x7wU8tmLaHo(RizExd-TkDFLd(xAo@3]puUC,5DOp#R' );
define( 'SECURE_AUTH_SALT', 'PAV[FT,mLYG$mq+g-=sa=L#FJ+oxAYMg)bqaG#>$4uSE>R,qjL?E=Pawary&tjrL' );
define( 'LOGGED_IN_SALT',   'T.>SSk&#J1;-V]7?NsWYO.2G}o|4Y VZGD;-t5YS^i1vp[hRp)$*Ho9cVOU/iF*)' );
define( 'NONCE_SALT',       'L$MS_g(`x8Eg)]Hq%K%Y6+pJ75P*a+X$lx5QIXSsBe1[g}wt`A]n3/}ZzcETZ%i>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
