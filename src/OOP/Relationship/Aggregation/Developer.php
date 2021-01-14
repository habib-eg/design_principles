<?php


namespace App\OOP\Relationship\Aggregation;


class Developer
{
    /**
     * @var string
     */
    private string $name;

    /**
     * Developer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
     * @return Developer
     */
    public function setName(string $name): Developer
    {
        $this->name = $name;
        return $this;
    }

}