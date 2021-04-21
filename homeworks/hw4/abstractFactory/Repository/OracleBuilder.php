<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\QueryBuilderInterface;
use AbstractFactory\Entity\DBQueryBuilder;

class OracleBuilder extends OracleConnection implements QueryBuilderInterface
{
    public function insert(DBQueryBuilder $queryBuilder)
    {
        echo "Создаем insert бд Oracle " . PHP_EOL;
    }

    public function create(DBQueryBuilder $queryBuilder)
    {
        echo "создаем create бд Oracle " . PHP_EOL;
    }

    public function update(DBQueryBuilder $queryBuilder)
    {
        echo "создаем update бд Oracle" . PHP_EOL;
    }

    public function delete(DBQueryBuilder $queryBuilder)
    {
        echo "создаем delete бд Oracle " . PHP_EOL;
    }
}