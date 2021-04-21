<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\OracleSQL;

class OracleConnection
{
    private $oracleConnection;

    public function __construct(OracleSQL $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function getMySQLConnection() : OracleSQL
    {
        return $this->oracleConnection;
    }
}