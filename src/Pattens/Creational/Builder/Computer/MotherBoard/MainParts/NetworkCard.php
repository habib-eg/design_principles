<?php


namespace App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts;


class NetworkCard
{
    private int $category;

    /**
     * NetworkCard constructor.
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return NetworkCard
     */
    public function setCategory(int $category): NetworkCard
    {
        $this->category = $category;
        return $this;
    }


}