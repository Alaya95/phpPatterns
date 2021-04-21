<?php


namespace AbstractFactory\Factory;


use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\PostgreSQL;
use AbstractFactory\Repository\PostgreBuilder;
use AbstractFactory\Repository\PostgreRecord;

class PostgreFactory implements RepositoryFactoryInterface
{
    private $postgreConnection;

    public function __construct(PostgreSQL $postgreConnection)
    {
        $this->postgreConnection = $postgreConnection;
    }

    public function createRecord(): RecordRepositoryInterface
    {
        return new PostgreRecord($this->postgreConnection);
    }

    public function createQuery(): QueryBuilderInterface
    {
        return new PostgreBuilder($this->postgreConnection);
    }
}