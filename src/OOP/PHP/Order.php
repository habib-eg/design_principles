<?php


namespace App\OOP\PHP;


/**
 * Class Order
 * @package App\OOP\PHP
 */
class Order
{
    /**
     * @var string
     */
    private string $source;
    /**
     * @var string
     */
    private string $destination;
    /**
     * @var int
     */
    private int $weight;

    /**
     * Order constructor.
     * @param string $source
     * @param string $destination
     * @param int $weight
     */
    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return self
     */
    public function setDestination(string $destination): self
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return self
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;
        return $this;
    }


    /**
     * @param Car $car
     * @return string
     */
    public function deliverOrder(Car  $car):string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();
        return "I'm moving from {$this->source} to {$this->destination} to deliver a package of {$this->weight} K.G ";
    }
}