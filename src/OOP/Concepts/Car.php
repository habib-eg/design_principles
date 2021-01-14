<?php


namespace App\OOP\Concepts;


/**
 * Class Car
 * @package App
 */
abstract class Car
{

    /**
     * @var int|null
     */
    protected ?int $speed;
    /**
     * @var int|null
     */
    protected ?int $numberOfDoors;
    /**
     * @var string|null
     */
    protected ?string $gearboxSystem;
    /**
     * @var string|null
     */
    protected ?string $color;
    protected ?bool $status=false;

    protected ?CarDashboard $dashboard;


    /**
     * Car constructor.
     * @param int|null $speed
     * @param int|null $numberOfDoors
     * @param string|null $gearboxSystem
     * @param string|null $color
     */
    public function __construct(?int $speed, ?int $numberOfDoors, ?string $gearboxSystem, ?string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearboxSystem = $gearboxSystem;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public abstract function move():int;

    /**
     * @return bool
     */
    public abstract function turnOn():bool;

    /**
     * @return bool
     */
    public abstract function turnOff():bool;

    /**
     * @param int $speed
     * @return bool
     */
    public abstract function accelerate(int $speed):bool;

    /**
     * @return bool
     */
    public abstract function park():bool;

    /**
     * @param CarDashboard $dashboard
     * @return $this
     */
    public function installDashboard(CarDashboard  $dashboard)
    {
        $this->dashboard = $dashboard;

        return $this;
    }
}