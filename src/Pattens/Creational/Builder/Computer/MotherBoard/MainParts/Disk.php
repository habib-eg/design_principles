<?php


namespace App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts;


class Disk
{
    private string $type;

    /**
     * Disk constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Disk
     */
    public function setType(string $type): Disk
    {
        $this->type = $type;
        return $this;
    }

}