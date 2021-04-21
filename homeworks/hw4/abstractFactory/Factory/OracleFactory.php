<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\OracleSQL;
use AbstractFactory\Repository\OracleBuilder;
use AbstractFactory\Repository\OracleRecord;

class OracleFactory implements RepositoryFactoryInterface
{
    private $oracleConnection;

    public function __construct(OracleSQL $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return RecordRepositoryInterface
     */
    public function createRecord(): RecordRepositoryInterface
    {
        return new OracleRecord($this->oracleConnection);
    }

    /**
     * @return QueryBuilderInterface
     */
    public function createQuery(): QueryBuilderInterface
    {
        return new OracleBuilder($this->oracleConnection);
    }
}