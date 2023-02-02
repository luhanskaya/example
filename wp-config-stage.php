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
define( 'DB_NAME', 'blazingbear' );

/** MySQL database username */
define( 'DB_USER', 'blazingbear' );

/** MySQL database password */
define( 'DB_PASSWORD', 's4)KqmS2LCJer1pJ' );

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
define( 'AUTH_KEY',         'wPRN0A_+ 6#GZ_&F2S}aeD+X77E.^|&zBs?:$A)@G=_-qD6?nbl*3bI(WQXY<{e5' );
define( 'SECURE_AUTH_KEY',  'mk3;?petxgWc0Ej!)LCi(NR.vnGWX+vuOnx*=<W7E |UOc6W<9~t^CaE^{QRPbMH' );
define( 'LOGGED_IN_KEY',    '1[6*f{2o?38qypHe^]s4NOMd]1Fm+>MWW0_Z0fu44TchX]&bu% 3bv7nqJiOKexc' );
define( 'NONCE_KEY',        'SJGn=Cka76)V[&ei2%G1K)p132GZ:U*10IxCst:BR#dn,0@BqWi6>O*#*;U{l*h4' );
define( 'AUTH_SALT',        'q1pTUp^iV9<D!fGRvQu%WJC8&J2xrGRy-?OpS2D:@+geay9oXQJzmVVRt]#MwV`z' );
define( 'SECURE_AUTH_SALT', 'OYXH~Eda|#N<rM0~)6mARABdz$}zYkB}|$e5dBEd|,<xs-:KR-n-+3:uouFG_o9B' );
define( 'LOGGED_IN_SALT',   'X{+1^V%ji$t<yh(,,|h1 hIjHvd} JE#`^rvI>Dw;yhK##FC=gD:Gq_n{^J^%tEP' );
define( 'NONCE_SALT',       'PNCaf-T(z1%D<#6.>MbYyl*V|b>d7<DSVhM;<QS9v:1ThG([/0;n(/skQlgC}BKu' );

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

define( 'ALLOW_UNFILTERED_UPLOADS', true );
