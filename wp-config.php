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
define('DB_NAME', 'framework_master');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'QWN9HVNyV2rUmn4ZV3p9gP6dLhDRB');

/** MySQL hostname */
define('DB_HOST', 'wordpress-team.cuvhhhtumfrn.us-west-2.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** add home and site url*/
define('WP_SITE', 'http://localhost');
define('WP_HOME', 'http://localhost');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JxO2C(~STm>Hq9ml_LR.fSuGdv1bJgnAs~I1+he<*mGts@Dl5HeA2NuGj2<NA[;G');
define('SECURE_AUTH_KEY',  'RM9<r]!PCKk)qG{]8@MQE=VC%zTl)4IU.tje:~O@nN4k5:Bo<QrZGhoWY*$;ert/');
define('LOGGED_IN_KEY',    '4X1n293ai>hFlcs%mOA6W]ya,j`o tjZ1>N;+]5EaaR Bo%Z*:n&V&gW@;pM7M.m');
define('NONCE_KEY',        'x/]iHP@KX&E?S)VT;k|Pe&>mez@#o0gP:]=v2`$lEDRC_H;1xWhD_VRE#V0qz(wS');
define('AUTH_SALT',        'RQbr$w-5m.XR1Dv$={)jowM98I/ QeojQ#Y;n<+}P5l^k* _FtgWZ/g+TOBS6Dqp');
define('SECURE_AUTH_SALT', '5IA=g@m|F9b?tT!n =I%W_Zhy&H8^d-&/gDfTHC1/^G6rF9]`kJ0Gvb*wojrci_L');
define('LOGGED_IN_SALT',   '*bmwi(nUcuImx=:$8^:?WOFQf2q^9vSpU,w[{JZXFS-zzkH,+QrT0JO$U2]Psm<z');
define('NONCE_SALT',       'X3f1O6sjx$/G!iF[?Y}/4Ov)$TdGz5}jBD%%M:Nmy3x%4.5#j ytVI^u_*pqAwgC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

