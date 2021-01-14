<?php
namespace App\Pattens\Creational\Prototype\Employee;

class ProfileData
{
    private string $name = "Employee Name";
    private int $age;
    private ?Address $address;
    private string $telephoneNumber;
    private string $mobileNumber;
    private string $slackAccountName;

    /**
     * ProfileData constructor.
     * @param string $name
     * @param int $age
     * @param Address|null $address
     * @param string $telephoneNumber
     * @param string $mobileNumber
     * @param string $slackAccountName
     */
    public function __construct(string $name, int $age, ?Address $address, string $telephoneNumber, string $mobileNumber, string $slackAccountName)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountName = $slackAccountName;
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
     * @return ProfileData
     */
    public function setName(string $name): ProfileData
    {
        $this->name = $name;
        return $this;
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
     * @return ProfileData
     */
    public function setAge(int $age): ProfileData
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     * @return ProfileData
     */
    public function setAddress(?Address $address): ProfileData
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->telephoneNumber;
    }

    /**
     * @param string $telephoneNumber
     * @return ProfileData
     */
    public function setTelephoneNumber(string $telephoneNumber): ProfileData
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return ProfileData
     */
    public function setMobileNumber(string $mobileNumber): ProfileData
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlackAccountName(): string
    {
        return $this->slackAccountName;
    }

    /**
     * @param string $slackAccountName
     * @return ProfileData
     */
    public function setSlackAccountName(string $slackAccountName): ProfileData
    {
        $this->slackAccountName = $slackAccountName;
        return $this;
    }
}