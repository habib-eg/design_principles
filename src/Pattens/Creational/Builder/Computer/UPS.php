<?php
namespace App\Pattens\Creational\Builder\Computer;

/**
 * Class UPS
 * @package App\Pattens\Creational\Builder\Computer
 */
class UPS
{
    private int $duration;

    /**
     * UPS constructor.
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return UPS
     */
    public function setDuration(int $duration): UPS
    {
        $this->duration = $duration;
        return $this;
    }
}