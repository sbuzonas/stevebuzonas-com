<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

$host = $_SERVER['SERVER_NAME'];
$host .= $_SERVER['SERVER_PORT'] != '80' ? ':'.$_SERVER['SERVER_PORT'] : '';

define('WP_SITEURL', 'http://' . $host);
define('WP_HOME', WP_SITEURL);

define('DB_NAME',     'wordpress');
define('DB_USER',     'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST',     '127.0.0.1');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

require_once __DIR__.'/vendor/wordpress-salts.php';

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('APSPATH', __DIR__.'/web/');

if (!defined('WP_CONTENT_DIR'))
    define('WP_CONTENT_DIR', __DIR__.'/content');

if (!defined('WP_PLUGIN_DIR'))
    define('WP_PLUGIN_DIR', __DIR__.'/content/plugins');

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
