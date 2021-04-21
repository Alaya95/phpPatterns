<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Entity\DBQueryBuilder;

class MySqlBuilder  extends MySQLConnectionRepository implements QueryBuilderInterface
{
    public function insert(DBQueryBuilder $queryBuilder)
    {
        echo "Создаем insert бд Mysql " . PHP_EOL;
    }

    public function create(DBQueryBuilder $queryBuilder)
    {
        echo "создаем create бд Mysql " . PHP_EOL;
    }

    public function update(DBQueryBuilder $queryBuilder)
    {
        echo "создаем update бд Mysql " . PHP_EOL;
    }

    public function delete(DBQueryBuilder $queryBuilder)
    {
        echo "создаем delete бд Mysql " . PHP_EOL;
    }
}