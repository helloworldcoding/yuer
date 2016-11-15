<?php
namespace core\library;

/**
 * Model基类
 */
class Model
{
    public function __construct()
    {
        $db = new Db();
        $this->pdo = $db->pdo;
    }

    public function select()
    {
        $statObj = $this->pdo->query("SELECT * FROM dw_user");
        $list = $statObj->fetch(PDO::FETCH_ASSOC);
        d($list);
    }
}
