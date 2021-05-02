<?php


namespace EntityManager;


use IdentityMap\IdentityMap;
use Mapper\UserMapper;
use Model\Entity\User;

class EntityManager
{

    /**
     * @var IdentityMap
     */
    private $identityMap;

    /**
     * @var UserMapper
     */
    private $userMapper;

    /**
     * EntityManager constructor.
     * @param IdentityMap $identityMap
     * @param UserMapper $userMapper
     */
    public function __construct(
        IdentityMap $identityMap,
        UserMapper $userMapper
    )
    {
        $this->identityMap = $identityMap;
        $this->userMapper = $userMapper;
    }

    public function findById(string $class, int $id): ?User
    {
        $login = $this->userMapper->getById($id)->getLogin();
        $entity = $this->identityMap->find($class, $id, $login);
        if ($entity !== null) {
            return null;
        }

        $entity = $this->userMapper->getById($id);
        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);

        return $entity;
    }

    public function findByLogin(string $class, string $login): ?User
    {
        $id = $this->userMapper->getByLogin($login)->getId();
        $entity = $this->identityMap->find($class, $id, $login);
        if ($entity !== null) {
            return $entity;
        }

        $entity = $this->userMapper->getByLogin($login);
        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);

        return $entity;
    }
}
