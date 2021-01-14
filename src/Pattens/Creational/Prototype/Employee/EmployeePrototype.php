<?php


namespace App\Pattens\Creational\Prototype\Employee;
use App\Pattens\Creational\Prototype\Employee\Privileges\Privileges;
use App\Pattens\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\Pattens\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;

/**
 * Class EmployeePrototype
 * @package App\Pattens\Creational\Prototype\Employee
 */
class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private Salary $salary;
    private Privileges $privileges;

    /**
     * EmployeePrototype constructor.
     * @param ProfileData $profileData
     * @param Salary $salary
     * @param Privileges $privileges
     */
    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
    }


    /**
     * @return mixed
     */
    public function __clone()
    {
        $this->getPrivileges()->setPrivileges([]);
        $this->getPrivileges()->addPrivilege(
            new WebProjectPrivilege()
        );
        $this->getPrivileges()->addPrivilege(
            new ServerRoomPrivilege()
        );
        $this->getSalary()->setTax(0.1);
        $this->getSalary()->setSalary(1500);
        $this->getSalary()->setMedicalInsurance(200);
        $this->getProfileData()->setName('Employee Name');
        $this->getProfileData()->setAddress(null);
        $this->getProfileData()->setAge(20);
        $this->getProfileData()->setMobileNumber(0);
        $this->getProfileData()->setTelephoneNumber(0);
        $this->getProfileData()->setSlackAccountName('slack.account');
        return $this;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }

    /**
     * @param ProfileData $profileData
     * @return EmployeePrototype
     */
    public function setProfileData(ProfileData $profileData): EmployeePrototype
    {
        $this->profileData = $profileData;
        return $this;
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
     * @return EmployeePrototype
     */
    public function setSalary(Salary $salary): EmployeePrototype
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return Privileges
     */
    public function getPrivileges(): Privileges
    {
        return $this->privileges;
    }

    /**
     * @param Privileges $privileges
     * @return EmployeePrototype
     */
    public function setPrivileges(Privileges $privileges): EmployeePrototype
    {
        $this->privileges = $privileges;
        return $this;
    }
}