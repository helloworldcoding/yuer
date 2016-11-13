<?php
namespace application\controller;

use core\library as CORE;

class indexController extends CORE\Controller
{
    public function indexAction()
    {
        $data = 'hello world';
        $arr  = array(
            'msg' => 'see you torromow',
        );
        $this->assign('data',$data);
        $this->assign($arr);
        $this->display();

    }

    public function testAction()
    {
        $msg = 'good night';
        $this->assign('msg',$msg);
        $this->display();
    }
}
