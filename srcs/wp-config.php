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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'sU@^H*E@do2/u8gIZui>IZqF8Ijv=ECt826Wlx^<YniAnz|jww:sk^YyFuwYb|$S' );
define( 'SECURE_AUTH_KEY',  ' +{iujN)%Nt8N!/}I?nKT-Zf_6gM(Bf0rk!.U/z8[365q|2?,)XmN:@LrAI:0yyC' );
define( 'LOGGED_IN_KEY',    '(SmCNd~NAK7bw8ME)y<2K3[1h%{]~rP=3 ds7FnC qnn|C48m?mn0y^Bp_a:5>nM' );
define( 'NONCE_KEY',        '@tz=l !rdDxv1rPE%MoQ}/bB5DDe;@C67q{]bKj0p-,m6.!l|Z&uc:Rq9qOZLljK' );
define( 'AUTH_SALT',        '{ aO(iiYQGBoW9GA&-1a3_o)c^CnL1olM|_XaxZXigSQa4{sY:m a[W&80(tDx5o' );
define( 'SECURE_AUTH_SALT', '|,Dz2;^5f`OA+<2Tr=<C|}$]D2-p`_C:yEhXH 1IE55U|CZAfX*`YO^#^QrqaH?F' );
define( 'LOGGED_IN_SALT',   ';x{r1#j(6n.I$CmSj@Ca8&i|k_VeC4raP`T;?UU_-(FPwd)|bc0s CHUo[W`7|*H' );
define( 'NONCE_SALT',       '@s|F%nj.n-FRm94PHsEEYZpmh0A#oA~N,Bt9 gEF(8mwT`+hd~P!vn>^QkvaRIJd' );

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