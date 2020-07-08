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
define( 'DB_NAME', 'ArteConfite' );

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
define( 'AUTH_KEY',         'wU Xb%>~4ZJHk9rrqX{_k|=$6e~c_kmwx^gFYl^fQ)b+?wZ,o^R{@I[27hV_;CLa' );
define( 'SECURE_AUTH_KEY',  'FVZicW]){#{36,Zp>`fHLtwx^8Uac>G9*-Wck@K*on)Yx9ZszKuEVTipn.+EncRT' );
define( 'LOGGED_IN_KEY',    'elQZnJS`G;<@XHW(W|!c!?kg>e89cwef|qPtAEk!f!eSX;*Lvi3V_RbNLtgb^ZrE' );
define( 'NONCE_KEY',        'M0/-)<2ME:T*lI{O<8{3}  {W2TB=/NVvCqlSDR;aWfWY*.31;[gM)`I%1IT 5_$' );
define( 'AUTH_SALT',        '~%]iZ$1ihe5_zd._JAij4~]QEwc#ug)!3%=ZK(}T04lXFbeFrgq[M(3oM:r~oZ>B' );
define( 'SECURE_AUTH_SALT', '?M++W$^&BinxhJ;s@{]8ffv: Dg(m.V9s4.3>2-L0wk)z&p=GcPOO6p%_r/RI+|s' );
define( 'LOGGED_IN_SALT',   '9P#iJtHv{+;0{}1<S?I+n%Z  [s*2!a|W{9h*tne-`jA<it=Mct<(b0,?H(Td@Mk' );
define( 'NONCE_SALT',       'a(~rC;Qcp>1nD1NrH0-s-A^oG&x$JE]>K:iB2)-b9vd=*h?:N2zj0f;`3vw@l$s/' );

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
