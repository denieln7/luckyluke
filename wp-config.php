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

if(strstr($_SERVER['SERVER_NAME'], 'luckyluke.local')) {
	define( 'DB_NAME', 'luckyluke' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbnsuvpzyquovr' );
	define( 'DB_USER', 'u3km6etfgcwdf' );
	define( 'DB_PASSWORD', 'luckylukeeshop' );
	define( 'DB_HOST', '127.0.0.1' );
}


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
define( 'AUTH_KEY',         '!G7XLX9ms.4?lk`g=,XA:X3w1pl{!&2_9uH-0Q<&h5rq|nKT>[g+[PYV!O)F1JdV' );
define( 'SECURE_AUTH_KEY',  ':A$}O$^Q#BrPKW(%;83$A*f0UCzvd#0ig_]yzkAwR1Z]bb:T@h)}j#bk#Ti&ID_D' );
define( 'LOGGED_IN_KEY',    'dFPPo=dMuEG67{T.V=0dI}9^cK8KjiBc6CQ>R1YiM;/]BI:hA(nW*v,O~q|=vS%N' );
define( 'NONCE_KEY',        'mhy;x-CRBGW1,93$P;wj0,KH6YY-(] Vhk6Qcg[5/d]sBKCt}TIFpA.dDwQ-:sd(' );
define( 'AUTH_SALT',        '{Vnbp3bb#z1ukA1vE[EVvNe?.2xVl5VuKgUVRfo?XGUK+~`Xe(SuCr.5pCv-]E=l' );
define( 'SECURE_AUTH_SALT', '*@l%MSSUk0o1[Fitrx&I#J/<!x#Oihiw^V{3kzEEP;w>5V2hz1R37%D7@hJy}e,:' );
define( 'LOGGED_IN_SALT',   '8~HKnl!  ;JeGc>z+=yW!;-2}~O#P*ewOy;U/RI^i7bxLdUY#2Qk+k.3$YU2{r:m' );
define( 'NONCE_SALT',       ',MZ$tiUF5crh4A)MOwIZA,aMl+IadZIqj39AsDLd6dlQJSa9Ia+/U6:rgPzR1Ui}' );

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
