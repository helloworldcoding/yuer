<?php
namespace core\library;


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
        $this->view       = new View();
        $this->model      = new Model();
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
        $this->view->assign($name,$value);
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
        $this->view->display($file);
    }
}
