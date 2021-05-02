<?php


namespace Mapper;


use Contract\StorageAdapterInterface;
use Model\Entity\Role;
use Model\Entity\User;

class UserMapper
{
    /**
     * @var StorageAdapterInterface
     */
    private $storageAdapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapterInterface $storageAdapter
     */
    public function __construct(StorageAdapterInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    /**
     * получение пользователя по id
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User
    {
        foreach ($this->storageAdapter->getDataFromSource(['id' => $id]) as $user) {
            return $this->createUser($user);
        }

        return null;
    }

    /**
     * Фабрика по созданию сущности пользователя
     * @param array $user
     * @return User
     */
    private function createUser(array $user): User
    {
        $role = $user['role'];

        return new User(
            $user['id'],
            $user['name'],
            $user['login'],
            $user['password'],
            new Role(
                $role['id'],
                $role['title'],
                $role['role']
            )
        );
    }

    /**
     * Получение пользователя по логину
     * @param string $login
     * @return User|null
     */

    public function getByLogin(string $login): ?User
    {
        foreach ($this->storageAdapter->getDataFromSource(['login' => $login]) as $user) {

            if ($user['login'] === $login) {
                return $this->createUser($user);
            }
        }

        return null;
    }
}