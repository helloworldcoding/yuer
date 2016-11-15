<?php
namespace core\library;

/**
 * 数据库连接类
 */
class Db
{

    public function __construct()
    {
        // TODO 读取配置文件
       $dbConfig = array(
        'host'      => 'localhost',
        'user_name' => 'root',
        'pwd'       => '123456',
        'database'  => 'dewen',
        );

        $dsn = 'mysql:host='.$dbConfig['host'].';dbname='.$dbConfig['database'];
        echo $dsn;
        $this->pdo = new \PDO($dsn,$dbConfig['user_name'],$dbConfig['pwd']);
    }
}
