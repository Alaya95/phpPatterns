<?php

namespace Contract;

interface StorageAdapterInterface
{
    public function getDataFromSource(array $search): array;
}