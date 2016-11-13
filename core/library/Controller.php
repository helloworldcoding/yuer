<?php
namespace core\library;

use core\library\router;

/**
 * 控制器基类
 *
 * @since   2016-11-13
 * @author    mingazi@163.com
 */
class Controller 
{
    // 变量集合
    public $arr = [];
    public function __construct()
    {
        router::route();
        $this->module     = router::$module;
        $this->controller = router::$controller;
        $this->action     = router::$action;
    }
    /**
     * 传递变量
     *
     * @since   2016-11-13
     * @author    mingazi@163.com 
     * @param     mixed    $name    变量名称
     * @param     mixed    $value   变量值
     */
    public function assign($name = '' ,$value = null)
    {
        // 支持传递当个变量的操作
        if(is_array($name))
        {
            $this->arr = array_merge($this->arr,$name);
        }
        else
        {
            $this->arr[$name] = $value;
        }
    }

    /**
     * 加载模板文件
     *
     * @since   2016-11-13
     * @author    mingazi@163.com
     * @param     string   $file    视图文件名称
     */
    public function display($file = '')
    {
        $file = empty($file) ? $this->action : $file;
        if(empty($this->module))
        {
            $filePath = APP_PATH.'view'.DIRECTORY_SEPARATOR.$this->controller.DIRECTORY_SEPARATOR.$file.'.html';
        }
        else
        {
            $filePath = APP_PATH.$this->module.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.$this->controller.DIRECTORY_SEPARATOR.$file.'.html';
        }
        extract($this->arr);
        include_once($filePath);
    }


}
