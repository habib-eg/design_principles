<?php


namespace App\Pattens\Creational\Prototype\Employee;


class Salary
{
    private float $salary;
    private float $tax;
    private float $medicalInsurance;

    /**
     * Salary constructor.
     * @param float $salary
     * @param float $tax
     * @param float $medicalInsurance
     */
    public function __construct(float $salary, float $tax, float $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
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
     * @return float
     */
    public function getMedicalInsurance(): float
    {
        return $this->medicalInsurance;
    }

    /**
     * @param float $medicalInsurance
     * @return Salary
     */
    public function setMedicalInsurance(float $medicalInsurance): Salary
    {
        $this->medicalInsurance = $medicalInsurance;
        return $this;
    }
}