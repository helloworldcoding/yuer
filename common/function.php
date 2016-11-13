<?php
/**
 * 公共函数库
 *
 * @date      2016-11-13
 * @author    mingazi@163.com 
 * @version    1.0 
 */

function p($data)
{
    if(is_array($data) || is_object($data))
    {
        echo '<pre>';
        print_r($data);
    }
    else if(is_string($data) || is_numeric($data))
    {
        echo $data;
    }
    else
    {
        var_dump($data);
    }
    
}

