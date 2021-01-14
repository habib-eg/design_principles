<?php


namespace App\OOP\PHP\Relationship\Composition;


class House
{
    /**
     * @var Room[]
     */
    private array $rooms;

    /**
     * House constructor.
     * @param Room[] $rooms
     */
    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return Room[]
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param Room[] $rooms
     * @return House
     */
    public function setRooms(array $rooms): House
    {
        $this->rooms = $rooms;
        return $this;
    }


}