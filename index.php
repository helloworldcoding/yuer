<?php
/**
 * 动手写框架，小鱼儿
 * 鱼儿虽小，但是能翔游浅底
 *
 * @since   2016-11-13
 * @author  mingazi@163.com
 * @version 1.0
 * @link    www.hellworldcoding.com
 */

// 定义常量,所有的路径常量名都是已PATH结尾，其值最后有DIRECTORY_SEPARATOR
//define("ROOT_PATH",dirname(__FILE__));
define("ROOT_PATH",realpath('./').DIRECTORY_SEPARATOR);
define("APP_PATH",ROOT_PATH.'application'.DIRECTORY_SEPARATOR);
define("CORE_PATH", ROOT_PATH.'core'.DIRECTORY_SEPARATOR);
define("LIBRARY_PATH",ROOT_PATH.'library'.DIRECTORY_SEPARATOR);
define("COMMON_PATH",ROOT_PATH.'common'.DIRECTORY_SEPARATOR);
define("CLASS_EXT",'.php'); // 类文件的后缀名

define("CSS_PATH",'/public/css/');
define("JS_PATH",'/public/js/');
define("IMG_PATH",'/public/image/');
// 调试模式
define("DEBUG",TRUE);
if(DEBUG)
{
    ini_set('display_errors','On');
    error_reporting(E_ALL);
}
else
{
    ini_set('display_errors','Off');
    error_reporting(0);
}

// 加载公共函数
include_once COMMON_PATH.'function.php';

// 注册自动加载方法
include_once CORE_PATH.'library/loader.php';
spl_autoload_register('core\library\loader::load');

// 加载核心文件,运行框架
include_once CORE_PATH.'yuer.php';
\core\yuer::run();
