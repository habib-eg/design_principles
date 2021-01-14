<?php


namespace App\OOP\Concepts;


/**
 * Class Salary
 * @package App
 */
class Salary
{
    /**
     * @var float
     */
    protected float $salary;
    /**
     * @var float
     */
    protected float $tax;
    /**
     * @var int
     */
    protected int $absent;
    /**
     * @var int
     */
    protected int $absentRate;
    /**
     * @var int
     */
    protected int $overTime;
    /**
     * @var int
     */
    protected int $overTimeRate;

    /**
     * Salary constructor.
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $absentRate
     * @param int $overTime
     * @param int $overTimeRate
     */
    public function __construct(float $salary, float $tax, int $absent, int $absentRate, int $overTime, int $overTimeRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->absentRate = $absentRate;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
    }

    /**
     * @return float
     */
    public function calculateSalary():float
    {
        return  $this->getSalary() - ( $this->getSalary() * $this->getTax());
    }
    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     * @return Salary
     */
    public function setSalary(float $salary): Salary
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return Salary
     */
    public function setTax(float $tax): Salary
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return int
     */
    public function getAbsent(): int
    {
        return $this->absent;
    }

    /**
     * @param int $absent
     * @return Salary
     */
    public function setAbsent(int $absent): Salary
    {
        $this->absent = $absent;
        return $this;
    }

    /**
     * @return int
     */
    public function getAbsentRate(): int
    {
        return $this->absentRate;
    }

    /**
     * @param int $absentRate
     * @return Salary
     */
    public function setAbsentRate(int $absentRate): Salary
    {
        $this->absentRate = $absentRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverTime(): int
    {
        return $this->overTime;
    }

    /**
     * @param int $overTime
     * @return Salary
     */
    public function setOverTime(int $overTime): Salary
    {
        $this->overTime = $overTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverTimeRate(): int
    {
        return $this->overTimeRate;
    }

    /**
     * @param int $overTimeRate
     * @return Salary
     */
    public function setOverTimeRate(int $overTimeRate): Salary
    {
        $this->overTimeRate = $overTimeRate;
        return $this;
    }

}