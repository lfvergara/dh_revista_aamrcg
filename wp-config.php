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
define( 'DB_NAME', 'dh.revista.aamrcg' );

/** MySQL database username */
define( 'DB_USER', 'Dandoran' );

/** MySQL database password */
define( 'DB_PASSWORD', 'r3V157444mRc6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Datos para la conexion  al servidor ftp.*/
define('FS_METHOD', 'direct');
define('FTP_USER', 'dharma');
define('FTP_PASS', 'AlfilerL/9');
define('FTP_HOST', '144.217.5.1:372');

//define('FTP_SSL', false);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z9ahd`At%O%6GlvLfcB-lv[7/q-,^W!RG%d9Ws)ECfFX&oDI8Awt4)ij8r3u*jPN' );
define( 'SECURE_AUTH_KEY',  '?gx^GjuNu,@Dkw/{5j78_50=i6?5v8=B$W=bo1E{}3aD6GWx9}t2 aW|LP^~4>9(' );
define( 'LOGGED_IN_KEY',    'u*7u_t&K,O1!tiTK0;|Rt;_I%v~BHz$Vw/|,1p{E;A7%:$^>lWr$C>zid1z7[{1t' );
define( 'NONCE_KEY',        '20f#[+48{N8!924L;5?UqkekF]4+JSHWLM0({9{hk]!GC_Y6U9f9h`Wp8boe@NvV' );
define( 'AUTH_SALT',        'AeC8i!8mvr^hUKOV3;T=!IWAYs1d*l|?Osb18P:xV{+B&eGz[o/}NbPt2+6M^Zzp' );
define( 'SECURE_AUTH_SALT', 'o84<z]{:35qBj6o/T_(_C7_outN1$(T4@*-6h~^<!*>#yzJT~H_JI*Z$2#S)13xu' );
define( 'LOGGED_IN_SALT',   'a)PX:H&i:ozF+;bvR%DQSKp5HA>LkL!BY2;%WfBMsS{>u=4MIKOcUtah^`{S>?6G' );
define( 'NONCE_SALT',       'WrF3GF/r2+}EA;_sRvK$QE7~NEx95u@&u*]^U![ID>ndiUKrB?+ZKOa%X^AD+{z8' );

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
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_TEMP_DIR', '/srv/websites/dh_revista_aamrcg/wp-content/temp/');
