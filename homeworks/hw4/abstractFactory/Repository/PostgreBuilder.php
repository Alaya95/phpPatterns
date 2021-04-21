<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Entity\DBQueryBuilder;

class PostgreBuilder extends PostgreConnectionRepository implements QueryBuilderInterface
{
    public function insert(DBQueryBuilder $queryBuilder)
    {
        echo "Создаем insert бд Postgre " . PHP_EOL;
    }

    public function create(DBQueryBuilder $queryBuilder)
    {
        echo "создаем create бд Postgre " . PHP_EOL;
    }

    public function update(DBQueryBuilder $queryBuilder)
    {
        echo "создаем update бд Postgre " . PHP_EOL;
    }

    public function delete(DBQueryBuilder $queryBuilder)
    {
        echo "создаем delete бд Postgre " . PHP_EOL;
    }
}