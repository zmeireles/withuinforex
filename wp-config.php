<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'withuinforex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pamplona');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kml;W_EpOA-Cvx.l^c}a:EH+/5]/<8k*$/C7a[E(H0~wR6m|^pMWB4!leMdS;|tN');
define('SECURE_AUTH_KEY',  'n3KQDoQyW)@}q595q70Lc.xijXV,^1NrBa@pt6N@a&dY3CEf/IsTB+B8KIUxT;bf');
define('LOGGED_IN_KEY',    'f{jd}ucEux#1t=1*E.&G2:1uoS.^N<8,FB`kml1H6cBqE0;=DI|52u9Qp=T4Kx-j');
define('NONCE_KEY',        'z$U$7NFuK3KR@q%?Rwk-o80p>5,U)A/qE/?Kw!%R;D9<V5nNU!=,%1vwYf49-Sz;');
define('AUTH_SALT',        'Pw(uFe2Q-1^eRjJ{D(+lhTdAz&Jw!C=[022q`$]FCJ]Qbd$N!fCSp F@y 38TM+D');
define('SECURE_AUTH_SALT', 'W?3UKDV-Ni[/R rID,wwG6H1u787I5E GL{B.&0fORwfz(M-HNGj*E-GZboR;c|,');
define('LOGGED_IN_SALT',   'g<shxGbWTb {qR6$;t$O>)ci:BM #FSEae>BA 7wq0C#-]:Ja +OtG-hv-!k|e$U');
define('NONCE_SALT',       '))F2V160hDex3nY#aA],96RSgOA?OhAr8I$>kb^#F=k[O|rm7[wpyZtmQs| _P`)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
