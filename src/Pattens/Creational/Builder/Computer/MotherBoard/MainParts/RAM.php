<?php


namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\MotherBoard\MainParts;

/**
 * Class RAM
 * @package App\Pattens\Creational\Builder\Computer
 */
class RAM
{
    /**
     * @var int
     */
    private int $size;

    /**
     * self constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
    }

}