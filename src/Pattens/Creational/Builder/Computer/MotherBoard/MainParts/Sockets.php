<?php


namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\MotherBoard\MainParts;


class Sockets
{
    private array $sockets;

    /**
     * Sockets constructor.
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }

    /**
     * @param array $sockets
     * @return Sockets
     */
    public function setSockets(array $sockets): Sockets
    {
        $this->sockets = $sockets;
        return $this;
    }

}