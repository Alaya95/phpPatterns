<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySQL;

abstract class MySQLConnectionRepository
{
    private $mysqlConnection;

    public function __construct(MySQL $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    public function getMySQLConnection() : MySQL
    {
        return $this->mysqlConnection;
    }
}