<?php
define('_DB_HOST_', 'localhost');
define('_DB_NAME_', 'advo_db');
define('_DB_USER_', 'root');
define('_DB_PASSWORD_', '');
define('_DB_PREFIX_', '');
define('_MYSQL_ENGINE_', 'InnoDB');

function ClassLoader($className)
{
    $className = str_replace('\\', '/', $className);
    if(file_exists(__DIR__ .'/classes/'. $className . '.php')){
        require_once(__DIR__ .'/classes/'. $className . '.php');
    } else {
        echo 'ERROR: '. __DIR__ .'/classes/'. $className . '.php';
    }
}
spl_autoload_register('ClassLoader');

use Database\DB;
use \Data\Navigation;
use \Data\Services;
use \Data\Blog;

$db = new DB('mysql:host='._DB_HOST_.';dbname='._DB_NAME_.';charset=utf8',_DB_USER_,_DB_PASSWORD_);
$nav = new Navigation($db);
$art = new Services($db);
$blog = new Blog($db);

//// install scripts
//$nav->install();<?php
/**
 * Created by PhpStorm.
 * User: 57130
 * Date: 16-08-2017
 * Time: 12:43
 */