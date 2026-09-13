<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'aurorat1_1234' );

/** Database username */
define( 'DB_USER', 'aurorat1_1234' );

/** Database password */
define( 'DB_PASSWORD', '9gqqFDvXCNxHScZfmudL' );

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
define( 'AUTH_KEY',         'p+7&p6R8B<4V&1=X!J,1s,Y[1OcqPJW@<5n*Y+_]mFAIzDRibzZ?t*kyThHZ;?S,' );
define( 'SECURE_AUTH_KEY',  '7}tclt.di}LF0I1!G>Ed/t=1Qm1C/s/$xz= O1Q jOkFcnFual|8=D6jE5`[,L2(' );
define( 'LOGGED_IN_KEY',    '%Wg%W1e~ZpLh ?{Gr7)l Sm2:8C?ZTh  d}xh Tp/jt5/<UB$V;szR+>dH$RFG0I' );
define( 'NONCE_KEY',        'v>f=HKh6i`;}m/,8*`0.]F4|sG,P0)HmTNHr~oys>dKfDx+A]}sV?c}c&eK6F{D@' );
define( 'AUTH_SALT',        ',)Ya$31gEp8k._jv#UUF^ .X8N8W@5w5_|{#2{oRt<;as26n8cFp<=gIH=^26s-/' );
define( 'SECURE_AUTH_SALT', '|YNC{ff{kRQ;pu7%By_wJ4Ot7sR:VRHQK-2.pdAm4QmY8z/2+T]NC:O<ajd4t@K&' );
define( 'LOGGED_IN_SALT',   'GcI,lS(cj)p1T}X(_Gk]#TzsTs7=$Xe`$ rZ,~OV<-,uuWRaq$nRIWcZj~%u>{|D' );
define( 'NONCE_SALT',       'Vpq3G[W^&C/l/^mNlU##w50*w)|pD=%83.teHEkJT|NZQkr=vGh-m22WZTq[4nuL' );

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
