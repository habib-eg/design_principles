<?php
namespace App\Pattens\Creational\Prototype\Employee\Privileges\Types;

/**
 * Interface PrivilegeTypeInterface
 * @package App\Pattens\Creational\Prototype\Employee\Privileges\Types
 */
interface PrivilegeTypeInterface
{
    /**
     * @return bool
     */
    public function enable():bool;

    /**
     * @return bool
     */
    public function disable():bool;
}