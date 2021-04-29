<?php

declare(strict_types=1);

namespace Model\Repository;

use EntityManager\EntityManager;
use IdentityMap\IdentityMap;
use Mapper\UserMapper;
use Model\Entity;
use Storage\StorageAdapter;

class User
{
    private const CLASSNAME = 'User';

    /**
     * Получаем пользователя по идентификатору
     *
     * @param int $id
     * @return Entity\User|null
     */
    public function getById(int $id): ?Entity\User
    {
        $entityManager = $this->createEntityManager();
        return $entityManager->findById(self::CLASSNAME, $id);
    }

    /**
     * Получаем пользователя по логину
     *
     * @param string $login
     * @return Entity\User
     */
    public function getByLogin(string $login): ?Entity\User
    {
        $entityManager = $this->createEntityManager();
        return $entityManager->findByLogin(self::CLASSNAME, $login);
    }

    private function createEntityManager(): EntityManager
    {
        return (new EntityManager(new IdentityMap(), new UserMapper(new StorageAdapter())));
    }
}
