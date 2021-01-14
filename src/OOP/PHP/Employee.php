<?php


namespace App\OOP\PHP;


class Employee
{

    private string $name;
    private int $age;
    private Salary $salary;

    /**
     * Employee constructor.
     * @param string $name
     * @param int $age
     * @param Salary $salary
     */
    public function __construct(string $name, int $age, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }

    /**
     * @param Salary $salary
     * @return $this
     */
    public function setSalary(Salary $salary): Employee
    {
        $this->salary = $salary;
        return $this;
    }


}