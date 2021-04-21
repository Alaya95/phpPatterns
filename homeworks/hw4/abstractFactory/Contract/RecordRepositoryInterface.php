<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\RecordDb;

interface RecordRepositoryInterface
{
    /**
     * @param RecordDb $record
     * @return void
     */
    public function add(RecordDb $record);

    /**
     * @param RecordDb $record
     * @return void
     */
    public function update(RecordDb $record);

    /**
     * @param RecordDb $record
     * @return void
     */
    public function delete(RecordDb $record);
}