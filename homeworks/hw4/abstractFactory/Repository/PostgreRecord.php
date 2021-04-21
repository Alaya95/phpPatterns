<?php


namespace AbstractFactory\Repository;

use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Entity\RecordDb;

class PostgreRecord extends PostgreConnectionRepository implements RecordRepositoryInterface
{
    /**
     * @param RecordDb $record
     */
    public function add(RecordDb $record)
    {
        echo "запись Postgre" . PHP_EOL;
    }

    /**
     * @param RecordDb $record
     */
    public function update(RecordDb $record)
    {
        echo "Обновить Postgre" . PHP_EOL;
    }

    /**
     * @param RecordDb $record
     */
    public function delete(RecordDb $record)
    {
        echo "Удалить Postgre" . PHP_EOL;
    }
}