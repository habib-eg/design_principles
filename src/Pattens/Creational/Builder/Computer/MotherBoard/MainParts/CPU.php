<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\MotherBoard\MainParts;

/**
 * Class CPU
 * @package App\Pattens\Creational\Builder\Computer\MotherBoard
 */
class CPU
{
    /**
     * @var float
     */
    private float $speed;

    /**
     * CPU constructor.
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @param float $speed
     * @return CPU
     */
    public function setSpeed(float $speed): CPU
    {
        $this->speed = $speed;
        return $this;
    }


}