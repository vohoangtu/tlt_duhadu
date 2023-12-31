<?php
session_start();
define('LIBRARIES', '../../libraries/');
define('SOURCES', '../sources/');
define('THUMBS', 'thumbs');

require_once LIBRARIES . "config.php";
require_once LIBRARIES . "vendor/autoload.php";


use NN\Cache;
use NN\Functions;
use NN\PDODb;

$d = new PDODb($config['database']);
$cache = new Cache($d);
$func = new Functions($d, $cache);

if ($func->checkLoginAdmin() == false) {
    die();
}
