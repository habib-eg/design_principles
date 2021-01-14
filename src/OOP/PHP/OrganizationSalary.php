<?php


namespace App\OOP\PHP;


/**
 * Class Salary
 * @package App\OOP\PHP
 */
class OrganizationSalary extends Salary
{
    protected float $organizationTax;


    /**
     * OrganizationSalary constructor.
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $absentRate
     * @param int $overTime
     * @param int $overTimeRate
     * @param float $organizationTax
     */
    public function __construct(float $salary, float $tax, int $absent, int $absentRate, int $overTime, int $overTimeRate,float $organizationTax)
    {
        parent::__construct($salary, $tax, $absent, $absentRate, $overTime, $overTimeRate);
        $this->organizationTax = $organizationTax;
    }

    /**
     * @return float
     */
    public function calculateSalary():float
    {
        return  $this->getSalary() - ( $this->getSalary() * $this->getTax())- ( $this->getSalary() * $this->getOrganizationTax());
    }

    /**
     * @return float
     */
    public function getOrganizationTax(): float
    {
        return $this->organizationTax;
    }

    /**
     * @param float $organizationTax
     * @return OrganizationSalary
     */
    public function setOrganizationTax(float $organizationTax): OrganizationSalary
    {
        $this->organizationTax = $organizationTax;
        return $this;
    }
}