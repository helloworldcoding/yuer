<?php
namespace application\controller;

use core\library as CORE;
class indexController extends CORE\Controller
{
    public function indexAction()
    {
        $data = 'hello world';
        $this->assign('data',$data);
        $this->display();
    }
}
