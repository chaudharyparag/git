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
define('DB_NAME', 'rtcams');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z,~.@4v=Sbt|f9hVBt8T9F1BILCtvr%>01p~>Dt/l,KJ#VPE%WWrtw!4Wtl>HOSI');
define('SECURE_AUTH_KEY',  'r!e%rm5c5FQ3>Y`~EYWPF`v?mtW<{?*mykb7OJeLIV#a@+bSzeURCDobf.lsfy1H');
define('LOGGED_IN_KEY',    'AY#<8J3l^-*k^Eb|,]l}|1H.lGYjCCDkZq-G$#@ZV]46Hv,`kOh8Nn8mc~I3}b.?');
define('NONCE_KEY',        'U3,`R57wk86CGvDZQmR684ix|t{Ual_{2ye^Cn9`D[q3e1M?ogdEVj/`d-3~DI!o');
define('AUTH_SALT',        'lK;:uF.1eIAlSmdve/Ir>2rZ:8[0<*+tlvY>7`vtM8;cI+bp`5mTn_1~]zBsXA=n');
define('SECURE_AUTH_SALT', 'KyEJ$D2~=:U/U|:aFr)-bG)@HH3VO6NdHa W{6s2KGZ_&?mu<9Z1`Y~TQ1~nnk.t');
define('LOGGED_IN_SALT',   'Ac^,v_PfqThR^ovKf5LkJs(xtb8n/(G5<#n)`z@,cR96ufAhoy^Puh2?/dT_!9gr');
define('NONCE_SALT',       'q/saZ/Bd9n:nqih[jD{~{]{uVHlmB_SwWw-ec}ve+T(H~O&7.3^,x@n#z*JDdNd9');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
