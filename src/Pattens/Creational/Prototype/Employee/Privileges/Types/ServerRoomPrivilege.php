<?php
namespace App\Pattens\Creational\Prototype\Employee\Privileges\Types;

class ServerRoomPrivilege implements PrivilegeTypeInterface
{

    /**
     * @return bool
     */
    public function enable(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function disable(): bool
    {
        return false;
    }
}