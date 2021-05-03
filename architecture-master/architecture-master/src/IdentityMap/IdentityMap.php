<?php


namespace IdentityMap;


use Contract\UserInterface;

class IdentityMap
{
    /**
     * Массив со всеми сохраненными объектами, которые достали из базы данных.
     * @var array
     */
    private $identityMap = [];

    /**
     * @param UserInterface $obj
     */
    public function add(UserInterface $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId(), $obj->getLogin());
        $this->identityMap[$key] = $obj;
    }

    /**
     * @param string $classname
     * @param int $id
     * @param string $login
     * @return mixed|null
     */
    public function find(string $classname, int $id, string $login)
    {
        $key = $this->getGlobalKey($classname, $id, $login);

        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }

        return null;
    }

    /**
     * @param string $classname
     * @param int $id
     * @param string $login
     * @return string
     */
    private function getGlobalKey(string $classname, int $id, string $login): string
    {
        return sprintf('%s.%d.%s', $classname, $id, $login);
    }
}