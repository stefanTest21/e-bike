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
define( 'DB_NAME', 'ebike_db' );

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
define( 'AUTH_KEY',         '5r~?0IjV.o8s8-##m#wt9a|XvdqW!QI|T<$6W=4-oL&xez/@@cv(QI=+>v)Fk]=@' );
define( 'SECURE_AUTH_KEY',  'uw1?kaMC/i8v{@Ul2fLEg2hdCt5QnAw%`?*e 6ipeEIQIIy62]6>,H_:$B!JHALF' );
define( 'LOGGED_IN_KEY',    '5Me_b=ufATT@i#>G$RI$2C&1L_B-<mHlmhNP4!r.d[=/MRd))R+6HO_8!.haL{#N' );
define( 'NONCE_KEY',        'N:(}Kj8}*}hs%OEDx>+SwV>h=(OXYzA3@#g<;diboH,*KqZe7Rhl+*5iQA+`5voN' );
define( 'AUTH_SALT',        '@lm#<E2cwW{9v>xXjgmm^Z?,C:RK&RV$Ju9}8n`HS)@v1H(m9o.$2/Wcxn,:5j87' );
define( 'SECURE_AUTH_SALT', 'vYBoZ`G$aTGGMT.;^@^7GR^%YJf`ok{5cWS+cr(~*cbY3jJy9JAfb@W27lqbF0p;' );
define( 'LOGGED_IN_SALT',   'd{gy.xBjt$_shp$KY6|$)n`j&TOyK06=)EH]l(F{ru=(D94=TR5H~[7/H;6;i5%1' );
define( 'NONCE_SALT',       '#)J:)7oqI345QUq5//.Y?TcgD!q5Q(3vZi#UPH4rEUD?[Yj;A62_wW6|noz.F4U]' );

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
