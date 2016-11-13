<?php
namespace  core;

use core\library\router;
/**
 * 小鱼儿核心类
 *
 * @since   2016-11-13
 * @author    mingazi@163.com 
 * @version    1.0 
 * @link    www.helloworldcoding.com 
 */
class yuer
{
    /**
     * 框架启动方法
     * 初始化路由等初始化功能
     *
     * @since   2016-11-13
     * @author    mingazi@163.com
     * @version    1.0
     */
    static function run()
    {
        // 加载路由
        router::route();
        // 获取路由解析
        $module     = router::$module;
        $controller = router::$controller;
        $action     = router::$action;
        $params     = router::$params;
        
        // 加载该模块下控制器，并执行该方法
        
       if(empty($module)) 
       {
           $class = 'application\\controller\\'.$controller."Controller";
       }
       else
       {
           $class = 'application\\'.$module.'\\controller\\'.$controller."Controller";
       }

       $ctrObj = new $class;
       $act   = $action.'Action';
       $ctrObj->$act();
    }
}
