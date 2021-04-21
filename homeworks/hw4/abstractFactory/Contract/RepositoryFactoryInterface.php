<?php


namespace AbstractFactory\Contract;


namespace AbstractFactory\Contract;

use AbstractFactory\Entity\RecordDb;

/**
 * Interface RepositoryFactoryInterface Интерфейс абстрактной фабрики
 * @package Contract
 */
interface RepositoryFactoryInterface
{
    /**
     * @return RecordRepositoryInterface
     */
    public function createRecord(): RecordRepositoryInterface;

    /**
     * @return QueryBuilderInterface
     */
    public function createQuery(): QueryBuilderInterface;
}