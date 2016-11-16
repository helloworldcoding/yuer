<?php
namespace application\model;

use core\library as CORE;

class userModel extends CORE\Model
{
    public $tableName = 'dw_user';
    public function __construct()
    {
        parent::__construct();
        echo __CLASS__;
    }

    public function getUserList()
    {
        return $this->select();
    }
}
