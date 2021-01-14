<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\Types;

use App\Pattens\Creational\Prototype\Employee\Builder\Computer\CoolingSystem;
use App\Pattens\Creational\Prototype\Employee\Builder\Computer\UPS;

/**
 * Class ComputerCS
 * @package App\Pattens\Creational\Builder\Computer\Types
 */
class ComputerXL extends Computer implements ICoolingSystem,IPower
{
    /**
     * @var CoolingSystem
     */
    private CoolingSystem $cs;
    /**
     * @var UPS
     */
    private UPS $ups;

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
     * @param int $temp
     * @return bool
     */
    public function backupPower(int $temp): bool
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

    /**
     * @return UPS
     */
    public function getUps(): UPS
    {
        return $this->ups;
    }

    /**
     * @param UPS $ups
     * @return ComputerXL
     */
    public function setUps(UPS $ups): ComputerXL
    {
        $this->ups = $ups;
        return $this;
    }
}