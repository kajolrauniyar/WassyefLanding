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
define('DB_NAME', 'wassyef');

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
define('AUTH_KEY',         'g+vBWp{gK+BC%wUpS t)7LK9f}KKGpu~u3!|aD^`~G$Yvu-h(m[D9w[}H4U>8[S}');
define('SECURE_AUTH_KEY',  'i/!v4jt?xES:F6v$c<aZBN&8fv}}-H+^.bv}*#Q!OFEF8+*pTm?{w@Y_o;nBap0R');
define('LOGGED_IN_KEY',    'wW][|wJ]R^3+sR7 H4]poaYvbP{W+{*R~RfqM4O7gEUmJ9O*Q1qAZ.c9.3DDn}?o');
define('NONCE_KEY',        'LXCueo/5c9!([v-&e$c=ej6ubCSGdP$=eh#i)!cZtj%uR8xr(+#94R7dey(a*830');
define('AUTH_SALT',        ')7jx5JW-7O6Tx4Fyc3V?t)^)G.ba[zbN=uE{ *$Y4KNw_hxO(&x+9[1@s#16Ze`x');
define('SECURE_AUTH_SALT', 'GA0/Cv4;+.KPVxEW7k=T)igIRAZqU*g.X^Nd^tLbVW;ux<hJvV] i3^^G*[rnB?%');
define('LOGGED_IN_SALT',   'hJND#s_Qt2Cneo8E3#2M<Q9q3VNrvZth)TmkWD0sUZ%0!4^WLWWvLR`mS{Co3X=*');
define('NONCE_SALT',       'fqG@u-I>L/yqOvTb9hM2OEbkByr{,P&W>H(]ys8{`dkQL{Rg8SRod>mBIN^.^t[=');

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
