<?php
namespace AbstractFactory\Factory;

use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\MySQL;
use AbstractFactory\Repository\MySqlBuilder;
use AbstractFactory\Repository\MySqlRecord;


class MySQLFactory implements RepositoryFactoryInterface
{
    private $mysqlConnection;

    public function __construct(MySQL $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return RecordRepositoryInterface
     */
    public function createRecord(): RecordRepositoryInterface
    {
        return new MySqlRecord($this->mysqlConnection);
    }

    /**
     * @return QueryBuilderInterface
     */
    public function createQuery(): QueryBuilderInterface
    {
       return new MySqlBuilder($this->mysqlConnection);
    }
}