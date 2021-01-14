<?php


namespace App\Pattens\Creational\Prototype\Employee\Privileges;

use App\Pattens\Creational\Prototype\Employee\Privileges\Types\PrivilegeTypeInterface;

/**
 * Class Privileges
 * @package App\Pattens\Creational\Prototype\Employee\Privileges
 */
class Privileges
{
    private array $privileges;

    /**
     * Privileges constructor.
     * @param array $privileges
     */
    public function __construct(array $privileges)
    {
        $this->privileges = $privileges;
    }

    /**
     * @return array
     */
    public function getPrivileges(): array
    {
        return $this->privileges;
    }

    /**
     * @param array $privileges
     * @return Privileges
     */
    public function setPrivileges(array $privileges): Privileges
    {
        $this->privileges = $privileges;
        return $this;
    }

    public function addPrivilege(PrivilegeTypeInterface $privilege)
    {
        array_push($this->privileges,$privilege);

    }
}