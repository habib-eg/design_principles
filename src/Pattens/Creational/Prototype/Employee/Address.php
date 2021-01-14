<?php
namespace App\Pattens\Creational\Prototype\Employee;

/**
 * Class Address
 * @package App\Pattens\Creational\Prototype\Employee
 */
class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private int $buildingNumber;
    private int $zipCode;

    /**
     * Address constructor.
     * @param float $longitude
     * @param float $latitude
     * @param string $streetName
     * @param string $city
     * @param string $country
     * @param int $buildingNumber
     * @param int $zipCode
     */
    public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, int $buildingNumber, int $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode = $zipCode;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Address
     */
    public function setLongitude(float $longitude): Address
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Address
     */
    public function setLatitude(float $latitude): Address
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Address
     */
    public function setStreetName(string $streetName): Address
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuildingNumber(): int
    {
        return $this->buildingNumber;
    }

    /**
     * @param int $buildingNumber
     * @return Address
     */
    public function setBuildingNumber(int $buildingNumber): Address
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getZipCode(): int
    {
        return $this->zipCode;
    }

    /**
     * @param int $zipCode
     * @return Address
     */
    public function setZipCode(int $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }
}