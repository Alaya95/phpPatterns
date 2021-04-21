<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Entity\RecordDb;

class OracleRecord extends OracleConnection implements RecordRepositoryInterface
{
    /**
     * @param RecordDb $record
     */
    public function add(RecordDb $record)
    {
        echo "запись";
    }

    /**
     * @param RecordDb $record
     */
    public function update(RecordDb $record)
    {
        echo "Обновить";
    }

    /**
     * @param RecordDb $record
     */
    public function delete(RecordDb $record)
    {
        echo "Удалить";
    }
}