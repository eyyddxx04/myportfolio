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
define( 'DB_NAME', 'git_eydportfolio' );

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
define( 'AUTH_KEY',         'w!#4.`2J?*P5jJe2Ybgk8Zk9+0J4=t$>k_&0O<oFwf+7e)I7lm(FKS@H}^[=r v?' );
define( 'SECURE_AUTH_KEY',  '>,I`gdoIR;5Z lfh~i8A`//RBJoKA}p(x|]S/mMBI@In>;#h1Qqlryt*.Y~amcGq' );
define( 'LOGGED_IN_KEY',    'cx-;U>jb!J4&mDGcg#r^WcATvGlE@W;2f$4k{Oi&8V!90}*7ISO%(vzi= zdE13+' );
define( 'NONCE_KEY',        ':^VGO18fD/!0k(D Fw5zdG7*tmK%.-<`p(odYj=`QrWSI/c8zk~&;j{O+=fwmxY ' );
define( 'AUTH_SALT',        'Pd_M)4Cs!z~V^ @(!3  OkA q?2A,D42Gc.R) SnWUVP_.W@^Cp<Q)_OO=(t7 q{' );
define( 'SECURE_AUTH_SALT', '`Dz@Q3yz/GrF]{Jk@c-,$Kt~W2?WGB1w3)T$wc9]kJ:7@ `gk1M]1zWfK6KU}Dhs' );
define( 'LOGGED_IN_SALT',   'Jy5v!X9b;?P@<)]:bm;.>fl5* TS1e.X=tQ3/qhJ?f|8>2|d+[;E5wV{y}gx1$N5' );
define( 'NONCE_SALT',       'EwFoMrc[n0RtD3FMEgIyWR2)g5u2$!4pZ!a=x+jh11H_cV)+mEb9C+KD G/r47n;' );

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
