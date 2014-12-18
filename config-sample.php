<?php
/*
 * First authored by Brian Cray
 * License: http://creativecommons.org/licenses/by/3.0/
 * Contact the author at http://briancray.com/
 */

// db options
define('DB_NAME', 'ushort');
define('DB_USER', 'your db usernae');
define('DB_PASSWORD', 'your db password');
define('DB_HOST', 'localhost');
define('DB_TABLE', 'urls');


// let's use UTC timezone
date_default_timezone_set('Europe/London');


// connect to database
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error):
	die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
endif;


// base location of script (include trailing slash)
define('BASE_HREF', 'http://' . $_SERVER['HTTP_HOST'] . '/');

// change to limit short url creation to a single IP
define('LIMIT_TO_IP', $_SERVER['REMOTE_ADDR']);

// change to TRUE to start tracking referrals
define('TRACK', FALSE);

// check if URL exists first
define('CHECK_URL', FALSE);

// change the shortened URL allowed characters
define('ALLOWED_CHARS', '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

// do you want to cache?
define('CACHE', TRUE);

// if so, where will the cache files be stored? (include trailing slash)
define('CACHE_DIR', dirname(__FILE__) . '/cache/');
