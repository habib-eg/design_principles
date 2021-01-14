<?php
namespace App\Pattens\Creational\Builder\Computer\Types;

use App\Pattens\Creational\Builder\Computer\CoolingSystem;

/**
 * Class ComputerCS
 * @package App\Pattens\Creational\Builder\Computer\Types
 */
class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $cs;

    /**
     * @return bool
     */
    public function turnOn(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function turnOff(): bool
    {
        return true;
    }

    /**
     * @param int $temp
     * @return bool
     */
    public function coolDown(int $temp): bool
    {
       return true;
    }

    /**
     * @return CoolingSystem
     */
    public function getCoolingSystem(): CoolingSystem
    {
        return $this->cs;
    }

    /**
     * @param CoolingSystem $cs
     * @return ComputerCS
     */
    public function setCoolingSystem(CoolingSystem $cs): ComputerCS
    {
        $this->cs = $cs;
        return $this;
    }

}