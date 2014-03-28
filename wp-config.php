<?php
/*
 |---------------------------------------------------------------
 | Blog address (URL)
 |---------------------------------------------------------------
 |
 | Overrides the wp_options table value for home but does not change it permanently.
 | IMPORTANT: Set WP_HOME to the full path including the 'http://' and no trailing slash.
 |
 */
define( 'WP_HOME', 'http://example.com' );

define( 'WP_SITEURL',  WP_HOME . '/wordpress' );


/*
 |---------------------------------------------------------------
 | Path to the root of the aplication.
 |---------------------------------------------------------------
 |
 */
define('APP_ROOT', dirname(__FILE__));


/*
 |---------------------------------------------------------------
 | Moving wp-content directory.
 |---------------------------------------------------------------
 */
define( 'WP_CONTENT_DIR', APP_ROOT . '/app/content' );

define( 'WP_CONTENT_URL', WP_HOME . '/app/content' );


/*
 |---------------------------------------------------------------
 | Change default theme
 |---------------------------------------------------------------
 */
if ( ! defined('WP_DEFAULT_THEME') )
	define( 'WP_DEFAULT_THEME', 'base-theme' );


/*
 |---------------------------------------------------------------
 | Absolute path to the WordPress directory.
 |---------------------------------------------------------------
 */
if ( ! defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');


 /*
 |---------------------------------------------------------------
 | Application environment
 |---------------------------------------------------------------
 |
 | You can load different configurations depending on your current environment.
 |
 */
define('ENVIRONMENT', getenv('APP_ENV'));


/*
 |---------------------------------------------------------------
 | Load WordPress configuration file.
 |---------------------------------------------------------------
 */
if ( defined('ENVIRONMENT') )
{
	if ( file_exists(APP_ROOT . '/app/config/'. ENVIRONMENT . '/wordpress.php') )
		require_once APP_ROOT . '/app/config/'. ENVIRONMENT . '/wordpress.php';
	else
		require_once APP_ROOT . '/app/config/wordpress.php';
}
else
{
	require_once APP_ROOT . '/app/config/wordpress.php';
}


/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
*/
require APP_ROOT . '/vendor/autoload.php';
