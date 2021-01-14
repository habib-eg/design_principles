<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\Types;
/**
 * Interface IPower
 * @package App\Pattens\Creational\Builder\Computer\Types
 */
interface IPower
{
    /**
     * @param int $temp
     * @return bool
     */
    public function backupPower(int $temp):bool;
}