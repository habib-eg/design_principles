<?php


namespace App\Pattens\Creational\Builder\Computer\MotherBoard\Sockets;


class CType
{
    private bool $withVideoTransfer;

    /**
     * CType constructor.
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    /**
     * @return bool
     */
    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }

    /**
     * @param bool $withVideoTransfer
     * @return CType
     */
    public function setWithVideoTransfer(bool $withVideoTransfer): CType
    {
        $this->withVideoTransfer = $withVideoTransfer;
        return $this;
    }

}