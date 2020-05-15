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
define('DB_NAME', 'cuzi25251');

/** MySQL database username */
define('DB_USER', 'cuzi25251');

/** MySQL database password */
define('DB_PASSWORD', 'THFthf6448249');

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
define('AUTH_KEY',         '>o7JJ^n&35As{vzEevP5-qvJ.} Yl7U$~xf`<a&dv=v4!<Fn &?U!)>KKPLqyGjJ');
define('SECURE_AUTH_KEY',  '5yZ31w SKRJd^%wc0_+lcpwl{$m=V+}5-s`bt/abLUR6)gwAl=qA6O8fNh4ptJ[N');
define('LOGGED_IN_KEY',    '(<s `.CHOP ;u2djO-;.zw$r!ntSoBNRr(r+JZkZsha,PDt](e0=5Nm@eQ631.d/');
define('NONCE_KEY',        'C?y)G>.}<I43A/IrS?2z0OAd^ouF`<o4-%KRaB{99113(pf0MO<1|@9w52ZDkq_[');
define('AUTH_SALT',        '%~/`KXYn+s))?pG_6xa9@RAlf/&muf^[dr*p#x][8} nbYIc Ds~n.Cc9a$m;^@X');
define('SECURE_AUTH_SALT', 'P28+0B?N-s@<LC&w(o.r/6`i~_H!TDxbJ/4F*U*HH{=N;xtJ*!o!ivoqAfqCpJ~0');
define('LOGGED_IN_SALT',   '66<HfaiNMbq$h&paO{^Xb/=+NijL%;#T[vj2q%Nd-&p!+eo=,E=B>dKd0+ruN-kK');
define('NONCE_SALT',       '?)A^bB==0Z{$|y;^`-x[[1#UudsCXDQqm$CJ,vYvkl<<x*U|*n5+jZZMAN(<#vJt');

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
