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
define('DB_NAME', 'wp_willow_spring_vineyards');

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
define('WP_SITEURL', 'http://localhost/willow_spring_vineyards');
define('WP_HOME', 'http://localhost/willow_spring_vineyards');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yxnh!ci.#@n*{uBi10Rx&$>dtx=.(:gu$DRPA]zp(2xZC:pq)-X>->y140e_$] {');
define('SECURE_AUTH_KEY',  'ga3CY~9F^WiaE}bqOp 4wx|=0*k:,[MTrXYom[cJ%<za`+SK+~AW:xMFe0PxNo|b');
define('LOGGED_IN_KEY',    'h;n/.5%YR?;TUj<K>dpam[0l@QR-+Q}*!_4xZ$x?xwqYMNd+-Q=-Sb~`X>/)#.-b');
define('NONCE_KEY',        'p!R?Hi){MxfOf$Q$bY*fMS#vBo1`MT[9t^31^yE+NTB$/w{`.JX1-cY+r4,g=a.W');
define('AUTH_SALT',        'RNy5S,z#MRWo!]2#ETsP&k.53G/+f%IEjd>+V{</T0+wQ?N[bL+[CU3=1N[R~im[');
define('SECURE_AUTH_SALT', 'T?P5U7TLjpv|.?(4%!S-k#mwb&0HUEY H]u$11rYMCsq`[]A/sYRV5nk-Tq2H(X[');
define('LOGGED_IN_SALT',   '^Jf>fhvamk+ji-*E=rVVa,%|=eVOc%Vr?|3G}=t@v><vpEb`<Q-QAKZOoY>iWSa]');
define('NONCE_SALT',       '3wpN3g4+HCX> OXm=C<LfY-nB{vcdLQ)S1JVXT5(F2#d9>-;*#J|J%h~UUNrm[kI');

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

