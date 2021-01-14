<?php


namespace App\OOP\PHP;


/**
 * Class CarDashboard
 * @package App\OOP\PHP
 */
class CarDashboard
{
    /**
     * @var int
     */
    protected int $oil;

    /**
     * @var int
     */
    protected int $air;

    /**
     * @return int
     */
    public function getOil(): int
    {
        return $this->oil;
    }

    /**
     * @param int $oil
     * @return CarDashboard
     */
    public function setOil(int $oil): CarDashboard
    {
        $this->oil = $oil;
        return $this;
    }

    /**
     * @return int
     */
    public function getAir(): int
    {
        return $this->air;
    }

    /**
     * @param int $air
     * @return CarDashboard
     */
    public function setAir(int $air): CarDashboard
    {
        $this->air = $air;
        return $this;
    }

    public function getDashboard():string
    {
        return "
        oil : {$this->getOil()} \n
        air : {$this->getAir()} \n
        ";
    }
}