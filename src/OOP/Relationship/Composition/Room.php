<?php


namespace App\OOP\Relationship\Composition;


class Room
{
    /**
     * @var string
     */
    private string $color;
    /**
     * @var int
     */
    private int $size;

    /**
     * Room constructor.
     * @param string $color
     * @param int $size
     */
    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Room
     */
    public function setColor(string $color): Room
    {
        $this->color = $color;
        return $this;
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
     * @return Room
     */
    public function setSize(int $size): Room
    {
        $this->size = $size;
        return $this;
    }


}