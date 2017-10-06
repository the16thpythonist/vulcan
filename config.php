<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 15:51
 */

define('DIR_BASE',      dirname( dirname( __FILE__ ) ) . '/template' . '/');
define('DIR_SYSTEM',    DIR_BASE . 'system/');

// The variables defining the paths to the system folders
define('DIR_VIEWS',     DIR_SYSTEM . 'views/');
define('DIR_LIB', DIR_SYSTEM . "lib/");
define('DIR_MOD',      DIR_SYSTEM . 'models/');
define('DIR_CON',      DIR_SYSTEM . 'controllers/');
define('DIR_TEMP', DIR_SYSTEM . 'templates/');

// The variables defining the paths to the src folders
define('DIR_SRC', DIR_BASE . 'src/');
define('DIR_FONTS', DIR_SRC . 'fonts/');
define('DIR_IMG', DIR_SRC . 'img/');
define('DIR_STYLES', DIR_SRC . 'stylesheets/');

// obsolete
define('VIEW_HEADER',   DIR_VIEWS . 'header.php');
define('VIEW_NAVIGATION',   DIR_VIEWS . 'navigation.php');
define('VIEW_FOOTER',   DIR_VIEWS . 'footer.php');

// The variables defining the URL basis for the linkings internally
define('URL_BASE', 'http://localhost/feedli/');
define('URL_STYLES', URL_BASE . 'src/stylesheets/');

// Defining the variables for the MySQL database access
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');
define('DB_NAME', 'database name');