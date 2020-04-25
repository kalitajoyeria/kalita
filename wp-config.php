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
define( 'DB_NAME', 'kalita_db' );

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
define( 'AUTH_KEY',         'gY9(CDj_EpQj`Nh0DU6B4OnJx}0aqSc`/l%[N ra{#+Inj2/#Y.g!B|z/rC~`v`!' );
define( 'SECURE_AUTH_KEY',  'o#XE?Pxty&AdovhFF($o{Ge(x3I&6mm.Dv|?;oJKNBa^Wrj5C!)$g+*/J<qE,Tv.' );
define( 'LOGGED_IN_KEY',    'D A.F-PK;9+9MAWN}pBL={)[f5cRP[a^f)AK;C5+el-}:SxJqxwN~0U{CC+Y~,`G' );
define( 'NONCE_KEY',        '0U.{}|9n#9Yr2nNQ??C5,Q}DUT]uj8+&B4Mu`E9e!pT6c]U%.Q=bY%ar;Po%WYNX' );
define( 'AUTH_SALT',        'qWo${UrToe^WU3M }7RA^E~v`5CGo>mrmhK.+B%yghsPhiYqnr8{|w$<ew`%o72~' );
define( 'SECURE_AUTH_SALT', 't*$b2D%S%9bllJAV25CD&G!#h&`A_hG+^u_#KJN9JKAtb0Mo{L}hk*eILt4v{<TM' );
define( 'LOGGED_IN_SALT',   'WA(iH:k=yJ:c</)nW!_?vDH[4.khHI-WFR!~yIZ:a0=OS<q0af6e=LLJeEZP!Ojj' );
define( 'NONCE_SALT',       '?Of?PB^<8B:`P)$1{?^sMcgmQM_wJM4U=d;+7]EBLFaJ|(<Ycp|2%>ui1A-Q5#NN' );

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
