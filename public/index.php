<?php
/**
 *   基于YAF框架封装
 *   Author XiaoWei.
 *   网站入口文件
 */



ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
// 常用目录定义
date_default_timezone_set('PRC');
header('Content-type: text/html; charset=utf-8');
define('DS', '/');
define('PUBLIC_PATH', dirname(__FILE__).DS);
define('BASE_PATH', realpath(dirname(__FILE__).DS.'..').DS);
define('APP_PATH', realpath(dirname(__FILE__).DS.'..'.DS.'application').DS);

define('LOG_PATH',BASE_PATH.'runtime'.DS);
// composer
require_once BASE_PATH.'vendor/autoload.php';
// 框架入口
$app  = new Yaf\Application(BASE_PATH.'conf/application.ini');
$app->bootstrap()->run();



?>
