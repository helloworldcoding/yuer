<?php
namespace core\library;

class loader
{
    // 加载过的类集合
    public static $classMap = [];

    /**
     * 自动加载方法
     *
     * @since   2016-11-13
     * @author    mingazi@163.com 
     * @version    1.0 
     * @link    www.helloworldcoding.com 
     * @param   string   $name    类名,如core\library\model
     */
    public static function load($name)
    {
        if(isset(self::$classMap[$name]))
        {
            return true;
        }
        else
        {
           $file = str_replace('\\',DIRECTORY_SEPARATOR,$name);
           $fileName = ROOT_PATH.$file.CLASS_EXT;
           if(file_exists($fileName))
           {
               include($fileName);
               self::$classMap[$name] = $fileName;
               return true;
           }
           else
           {
               return false;
           }
        }
    }
}
