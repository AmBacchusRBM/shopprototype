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
define('DB_NAME', 'wordpress_am');

/** MySQL database username */
define('DB_USER', 'wizard');

/** MySQL database password */
define('DB_PASSWORD', 'masterleeroy');

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
define('AUTH_KEY',         'S<i!m*3r@ 4Bj},JU5>FF,qj 6XZ]>PA;%+;;Ygo~gh Ku=IxB]8q1oGr%{Sd!8c');
define('SECURE_AUTH_KEY',  'u/THvLejH=tn+H`,dbEZ?!nsvm|F?siXs-_TH?%I<=4u?v{OMRRA9cjOT_N:+A66');
define('LOGGED_IN_KEY',    'u.w2@Y$!@]zGZ7[<6G7hwXw0hE*j}xHC]Blx:N]sA5RPB:`tnC`5J~V[|FVQ^]W>');
define('NONCE_KEY',        '&_=x|po2Vq^h<u3pn9V9xK0mf<JyS&^s:,()u=QB)p:ni/W0q7tGi7^pB+GJczC_');
define('AUTH_SALT',        '.sa6xSA-9mbJX6OqI6n|[z:!;L|:j0t^bOo*$P:M`PB^E2V;AXu?oT*fd:$G_B?h');
define('SECURE_AUTH_SALT', '=R1B`iZ/X6Dt!a&j[p1D+i]L.-pVbg!v`*b%`s>/%RRS_q(EpG7U/QG^b+oH%ip<');
define('LOGGED_IN_SALT',   'DJ|?|@!<C$`i!qXq~k``CC6c[Os;5e ; a2zS<Lx/f#LK%1FV/-B^$Rd;y]L8o1r');
define('NONCE_SALT',       'n/!J:{G`/___omvq.iBFQhR1?9TL=,Gm>q+L_lEiJt@~9k+=~0{2,/cLvZNy@c`:');

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
