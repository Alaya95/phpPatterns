<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\PostgreSQL;

class PostgreConnectionRepository
{
    private $postgreConnection;

    public function __construct(PostgreSQL $mysqlConnection)
    {
        $this->postgreConnection = $mysqlConnection;
    }

    public function getMySQLConnection(): PostgreSQL
    {
        return $this->postgreConnection;
    }
}