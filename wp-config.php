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
define( 'DB_NAME', 'teamdrt' );

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
define( 'AUTH_KEY',         'Kc]APcU#&;6v|[&Im;{r$:L@pgM|+{m]FG3 nWELucrYg!{0q5St`#mx<NuFXUv|' );
define( 'SECURE_AUTH_KEY',  'PrlcRtmsQ.ft~2dw W#sc$NfzxG2F2r3T>:Gew{dU5@6N[,KjsOhYz9r8 GhQLc;' );
define( 'LOGGED_IN_KEY',    '^kluK:[;ebyT4_OLzS;T,=Je->T+2X|)K8skqv)hfd6uV#bWVA=HJtRGR2b15?J2' );
define( 'NONCE_KEY',        '}_u!f4))W%tVO}.SmO55d>}h?4xQU-tvv=U<Y-ZcFuFr51![X|7DwgR~aAp.$8j;' );
define( 'AUTH_SALT',        '.KQYgk4J!P1[*k+K-hWhk^b7+b5:#wD1IyqsM&}B?^e;{H!mz?}c?F;+y_.pzRvy' );
define( 'SECURE_AUTH_SALT', '6Sd ;3W6/=R%R{JcV:wV2PVAvrb4TUbJ@Xdz>YF86M-SP|C3|J*K+|~>zwgIAvz=' );
define( 'LOGGED_IN_SALT',   '9FH`=Zv5w*wMN2CXN+$SrJ;{o>nQ4eKc{wQO/e=&((j8n`UZ-O*nn.k/I6vTd!-8' );
define( 'NONCE_SALT',       'f. ,R,_Uf5VW4g6uXspRPo^+^pZUSAp{,Qqa)Mi/0O5TU0B?`^I&x^Mfr^1[PV<%' );

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
