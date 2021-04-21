<?php

namespace AbstractFactory\Service;

use AbstractFactory\Contract\DBFactoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Entity\DBQueryBuilder;
use AbstractFactory\Entity\DBRecord;
use AbstractFactory\Entity\RecordDb;
use AbstractFactory\Repository\MySqlBuilder;

class Service
{
    private $record;
    private $queryBuilderRepository;

    public function __construct(RepositoryFactoryInterface $DBFactory)
    {
        $this->record = $DBFactory->createRecord();
        $this->queryBuilderRepository = $DBFactory->createQuery();
    }

    public function addRecord(): void
    {
        $record = new RecordDb();
        $this->record->add($record);
    }

    public function addQueryBuilder(): void
    {
        $queryBuilderRepository = new DBQueryBuilder();
        $this->queryBuilderRepository->insert($queryBuilderRepository);
    }
}