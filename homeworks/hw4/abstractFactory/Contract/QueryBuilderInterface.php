<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\DBQueryBuilder;

interface QueryBuilderInterface
{
    public function insert(DBQueryBuilder $queryBuilder);

    public function create(DBQueryBuilder $queryBuilder);

    public function update(DBQueryBuilder $queryBuilder);

    public function delete(DBQueryBuilder $queryBuilder);
}