<?php

namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\MotherBoard\MainParts;

/**
 * Class GPU
 * @package App\Pattens\Creational\Builder\Computer\MotherBoard
 */
class GPU
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