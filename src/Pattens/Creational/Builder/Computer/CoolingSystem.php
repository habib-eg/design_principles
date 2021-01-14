<?php
namespace App\Pattens\Creational\Builder\Computer;

/**
 * Class CoolingSystem
 * @package App\Pattens\Creational\Builder\Computer
 */
class CoolingSystem
{
    private int $lowTempLimit;

    /**
     * CoolingSystem constructor.
     * @param int $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * @return int
     */
    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }

    /**
     * @param int $lowTempLimit
     * @return CoolingSystem
     */
    public function setLowTempLimit(int $lowTempLimit): CoolingSystem
    {
        $this->lowTempLimit = $lowTempLimit;
        return $this;
    }
}