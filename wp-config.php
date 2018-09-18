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
define('WP_SITEURL', 'http://localhost/framework_master');
define('WP_HOME', 'http://localhost/framework_master');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A]K#,6-?O#,zgkUZ;;|qX%8utlK?+9D}o2p-eR{x-f+1-7r;JO~.mSdRQn(+N7N|');
define('SECURE_AUTH_KEY',  'aNk%9cFxosqItm#OgvuU#j%1i)- 6X-a}Wy5w+j7pLw[2+d1s.^o6+dCq3`WW|{,');
define('LOGGED_IN_KEY',    '*ePY9p|Q]}j+cE0vqK3}GQ!Oq4+7!fH-`F7OKk&Zkp`j>G5l5)j5d~UR!n6pCNOg');
define('NONCE_KEY',        '!#n.pV.-(69SLMc~WHtuDd,-gZy5/b/k4f4.t`GU6ddsHF%CdC>u4Y*;~~(NiO1`');
define('AUTH_SALT',        'i-Xal,oR 6A9=|91|Lb0u,H0=p`z.r-+hd?f5*Q+(De_C*,y>$+{e<);-J[@@F4g');
define('SECURE_AUTH_SALT', ' 7{{(s;)hF}Kcx_C6nci6w#)4T7nOyjVfcNTPTh}z/t5F]Riqo[ ;5+:e$M+X?ZG');
define('LOGGED_IN_SALT',   'g5q%R#C;/i-e%NZb|B2&luXA|E0:,|IPomRc;a#<^W;Bw<IB]PevZys{FR^|ah8i');
define('NONCE_SALT',       'v171K+3Z?d@D4k$]pQFMB#8$;8uWjcdEq`q_vZI1|8g#,=s-AVn8cW6[hE-DB;[b');

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

