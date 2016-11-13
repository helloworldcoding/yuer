<?php
namespace core\library;

class router
{
    public static $module     = ''; // 模块名
    public static $controller = 'index'; // 默认控制器
    public static $action     = 'index'; // 默认方法
    public static $params     = []; // 参数
    public static function route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if(empty($uri) || $uri == '/')
        {
            return true;
        }
        else
        {
            // uri格式：/home/index/index/id/1
            $arr = explode('/',trim($uri,'/'));
            // TODO 读取配置文件
            $modules = array('home');
            if(in_array($arr[0],$modules)) // 获取模块名称
            {
                self::$module = $arr[0];
                unset($arr[0]);
            }
            $ctr = array_shift($arr);
            if(empty($ctr))
            {
                return true;
            }
            else
            {
                self::$controller = $ctr;
            }
            $act = array_shift($arr);
            if(empty($act))
            {
                return true;
            }
            else
            {
                self::$action = $act;
            }
            $arr   = array_merge($arr);
            $count = count($arr);
            $i     = 0;
            while($i < $count)
            {
                $arr[$i+1] = isset($arr[$i+1]) ? $arr[$i+1] : '';
                self::$params[$arr[$i]] = $arr[$i+1];
                $i += 2;
            }
            $_GET = self::$params;
            return true;

        }
    }
}
