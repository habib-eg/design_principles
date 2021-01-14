<?php


namespace App\OOP\Concepts;


/**
 * Class BMW
 * @package App
 */
class BMW extends Car
{

    /**
     * @return int
     */
    public function move(): int
    {
        return $this->speed;
    }

    /**
     * @return bool
     */
    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }

    /**
     * @return bool
     */
    public function turnOff(): bool
    {
        $this->status = false;
        return false;
    }

    /**
     * @param int $speed
     * @return bool
     */
    public function accelerate(int $speed): bool
    {
        $this->speed = $speed;
        return true;
    }

    /**
     * @return bool
     */
    public function park(): bool
    {
        return true;
    }
}