<?php


namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer;


class Monitor
{
    private string $resolution;

    /**
     * Monitor constructor.
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }

    /**
     * @param string $resolution
     * @return Monitor
     */
    public function setResolution(string $resolution): Monitor
    {
        $this->resolution = $resolution;
        return $this;
    }

}