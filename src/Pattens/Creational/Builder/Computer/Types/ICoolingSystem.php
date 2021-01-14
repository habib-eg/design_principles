<?php


namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\Types;

/**
 * Interface ICoolingSystem
 * @package App\Pattens\Creational\Builder\Computer\Types
 */
interface ICoolingSystem
{
    /**
     * @param int $temp
     * @return bool
     */
    public function coolDown( int $temp ):bool;
}